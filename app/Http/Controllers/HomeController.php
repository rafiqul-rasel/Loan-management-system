<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Loan\Entities\Loan;
use Modules\LoanCategories\Entities\LoanCategories;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->hasRole('user')){
            return redirect()->route('loans');
        }
        $users=User::all()->count();
        $loans=Loan::all()->count();
        $approved=Loan::where('status',3)->count();
        $loanCat=LoanCategories::all()->count();
        return view('home',compact('users','loans','approved','loanCat'));
    }

}
