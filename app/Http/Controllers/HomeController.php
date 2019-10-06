<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Employee;
use App\Qualification;
use Illuminate\Support\Facades\DB;

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

        $companiesC = Company::all();
        $employeeCount = [];
        foreach ($companiesC as $company) {
           
            array_push($employeeCount, (object) ['count'=> $company->employees->count() ]);
           
        }

        //dd($employeeCount);
        $companies = DB::table('companies')->select('name')->get()->toArray();
        //dd($companies);

        $employeesC = Employee::all();
        $qualificationCount = [];
        foreach ($employeesC as $employee) {
           
            array_push($qualificationCount, (object) ['count'=> $employee->qualified->count() ]);
           
        }
       //dd($qualificationCount);

        $employees = DB::table('employees')->select('first_name', 'last_name')->get();


        $qualificationsC = Qualification::all();
        $employeeQualificationCount = [];
        foreach ($qualificationsC as $qualification) {
           
            array_push($employeeQualificationCount, (object) ['count'=> $qualification->student->count() ]);
           
        }
        //dd($employeeCount);
        $qualifications =  DB::table('qualifications')->select('title')->get();

        return view('home',compact('companies','employeeCount','employees','qualificationCount','qualifications','employeeQualificationCount'));
    }
}
