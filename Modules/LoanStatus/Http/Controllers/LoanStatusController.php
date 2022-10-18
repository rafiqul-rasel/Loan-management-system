<?php

namespace Modules\LoanStatus\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\LoanCategories\Entities\LoanCategories;
use Modules\LoanStatus\Entities\Status;
use Yajra\DataTables\DataTables;

class LoanStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {if ($request->ajax()) {
        $data = Status::get();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $actionBtn = ' <a href="'.sprintf(route('loanstatus.show',$row->id)).'" class="delete btn btn-primary btn-sm"><i class="nav-icon fas fa-eye"></i></a> <a href="'.sprintf(route('loanstatus.edit',$row->id)).'" class="edit btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i></a> <a href="'.sprintf(route('loanstatus.delete',$row->id)).'" onclick="return confirm(\'Are you sure you want to delete this item\');" class="delete btn btn-danger btn-sm"><i class="nav-icon fas fa-trash"></i></a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
        return view('loanstatus::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('loanstatus::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $category=new Status();
        $category->name=$request->status;
        $category->save();
        toastr()->success("success","Loan Status Categories Added Successfully");

        return redirect()->route('loanstatus');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $status=Status::find($id);
        return view('loanstatus::show',compact('status'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $status=Status::find($id);
        return view('loanstatus::edit',compact('status'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $status= Status::find($id);
        $status->name=$request->status;
        $status->save();
        toastr()->success("success","loan Status Update Successfully");

        return redirect()->route('loanstatus');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $status=Status::find($id);
        $status->delete();
        toastr()->success("success","loan Status Delete Successfully");

        return redirect()->route('loanstatus');
    }
}
