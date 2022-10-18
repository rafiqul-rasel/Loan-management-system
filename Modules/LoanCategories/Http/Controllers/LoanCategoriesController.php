<?php

namespace Modules\LoanCategories\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use DataTables;
use Modules\LoanCategories\Entities\LoanCategories;


class LoanCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {if ($request->ajax()) {
        $data = LoanCategories::get();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $actionBtn = ' <a href="'.sprintf(route('loan.categories.show',$row->id)).'" class="delete btn btn-primary btn-sm"><i class="nav-icon fas fa-eye"></i></a> <a href="'.sprintf(route('loan.categories.edit',$row->id)).'" class="edit btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i></a> <a href="'.sprintf(route('loan.categories.delete',$row->id)).'" onclick="return confirm(\'Are you sure you want to delete this item\');" class="delete btn btn-danger btn-sm"><i class="nav-icon fas fa-trash"></i></a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
        return view('loancategories::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('loancategories::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $category=new LoanCategories();
        $category->name=$request->loancategory;
        $category->save();
        toastr()->success("success","Loan Categories Added Successfully");

        return redirect()->route('loan.categories');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $loancategories=LoanCategories::find($id);
        return view('loancategories::show',compact('loancategories'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $loancategories=LoanCategories::find($id);
        return view('loancategories::edit',compact('loancategories'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $category= LoanCategories::find($id);
        $category->name=$request->loancategories;
        $category->save();
        toastr()->success("success","loan Categories Update Successfully");

        return redirect()->route('loan.categories');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $author=LoanCategories::find($id);
        $author->delete();
        toastr()->success("success","loan Categories Delete Successfully");

        return redirect()->route('loan.categories');
    }
}
