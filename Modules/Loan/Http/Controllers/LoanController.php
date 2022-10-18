<?php

namespace Modules\Loan\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Loan\Entities\Loan;
use Modules\Loan\Entities\Member;
use Modules\LoanCategories\Entities\LoanCategories;
use Modules\LoanStatus\Entities\Status;
use Yajra\DataTables\DataTables;


class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable|\Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {if ($request->ajax()) {
        if(Auth::user()->hasRole('admin'))
        $data = Loan::get();
        else
            $data = Loan::where('user_id',Auth::user()->id)->get();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
              //  $actionBtn = ' <a href="'.sprintf(route('details.loan',$row->id)).'" class="delete btn btn-primary btn-sm"><i class="nav-icon fas fa-eye"></i></a> <a href="'.sprintf(route('loan.categories.edit',$row->id)).'" class="edit btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i></a> <a href="'.sprintf(route('loan.categories.delete',$row->id)).'" onclick="return confirm(\'Are you sure you want to delete this item\');" class="delete btn btn-danger btn-sm"><i class="nav-icon fas fa-trash"></i></a>';
                if(Auth::user()->hasRole('admin'))
                 $actionBtn = ' <a href="'.sprintf(route('details.loan',$row->id)).'" class="edit btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i></a>';
                else
                    $actionBtn='';

                 return $actionBtn;
            })
            ->addColumn('loan-type', function($row){
                $type = LoanCategories::find($row->loancategory_id)->name;
                return $type;
            })
            ->addColumn('loan-status', function($row){
                if($row->status==1)
                $type = sprintf('<p class="text-primary">'.Status::find($row->status)->name.'</p>');
                if($row->status==3)
                $type = sprintf('<p class="text-success">'.Status::find($row->status)->name.'</p>');
                if($row->status==4)
                $type = sprintf('<p class="text-danger">'.Status::find($row->status)->name.'</p>');

                return $type;
            })
            ->addColumn('loan-holder', function($row){
                $holder = User::find($row->user_id)->name;
                return $holder;
            })

            ->rawColumns(['loan-holder'])
            ->rawColumns(['loan-type'])
            ->rawColumns(['loan-status'])
            ->rawColumns(['action'])
            ->escapeColumns(['loan-status'])
            ->escapeColumns([])
            ->make(true);
    }
        return view('loan::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $category=LoanCategories::all();
        return view('loan::apply-loan',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $user_id=User::where('secret',$request->user_secret)->first()->id;
            $loan=new Loan();
            $loan->loancategory_id=$request->loan_type;
            $loan->name=$request->loan_title;
            $loan->national_id=$request->national_id;
            $loan->fathers_name=$request->fathers_name;
            $loan->address=$request->address;
            $loan->amount=$request->amount;
            $loan->user_id=$user_id;
            $loan->status=1;
        if($request->hasfile('document')) {
            $pdfFile = 'loanfile/'.time() . '.' . $request->document->extension();

            $request->document->move(public_path('loanfile'), $pdfFile);
            $loan->document=$pdfFile;
        }
        if($request->hasfile('photo')) {
            $photo = 'photo/'.time() . '.' . $request->photo->extension();

            $request->photo->move(public_path('photo'), $photo);
            $loan->photo=$photo;
        }
        if($request->hasfile('granter1_photo')) {
            $granter1_photo = 'granter1_photo/'.time() . '.' . $request->granter1_photo->extension();

            $request->granter1_photo->move(public_path('granter1_photo'), $granter1_photo);
            $loan->granter1_photo=$granter1_photo;
        }
        if($request->hasfile('granter2_photo')) {
            $granter2_photo = 'granter2_photo/'.time() . '.' . $request->granter2_photo->extension();

            $request->granter2_photo->move(public_path('granter2_photo'), $granter2_photo);
            $loan->granter2_photo=$granter2_photo;
        }
        if($request->hasfile('electricity_photo')) {
            $electricity_photo = 'electricity_photo/'.time() . '.' . $request->electricity_photo->extension();

            $request->electricity_photo->move(public_path('electricity_photo'), $pdfFile);
            $loan->electricity_photo=$electricity_photo;
        }
        if($request->hasfile('office_id_photo')) {
            $office_id_photo = 'office_id_photo/'.time() . '.' . $request->office_id_photo->extension();

            $request->office_id_photo->move(public_path('office_id_photo'), $office_id_photo);
            $loan->office_id_photo=$office_id_photo;
        }
        if($request->hasfile('bank_statement')) {
            $bank_statement = 'bank_statement/'.time() . '.' . $request->bank_statement->extension();

            $request->bank_statement->move(public_path('bank_statement'), $bank_statement);
            $loan->bank_statement=$bank_statement;
        }
        if($request->hasfile('tax_statement')) {
            $tax_statement = 'tax_statement/'.time() . '.' . $request->tax_statement->extension();

            $request->tax_statement->move(public_path('tax_statement'), $tax_statement);
            $loan->tax_statement=$tax_statement;
        }
            $loan->save();
        toastr()->success("success","loan Apply Successfully");


        if( $request->has($request->secrets)){
            foreach ($request->secrets as $secret){
                $user_id=User::where('secret',$secret)->first()->id;
                $member=new Member();
                $member->user_id=$user_id;
                $member->loan_id=$loan->id;
                $member->save();
            }
        }
        return redirect()->back();
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('loan::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('loan::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

}
