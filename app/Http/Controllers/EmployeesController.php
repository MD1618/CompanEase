<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Company;
use App\Qualification;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class EmployeesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = Employee::paginate(10);

        return view('employees.employeeslist', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $companies = Company::all();
        $qualifications = Qualification::all();
        return view('employees.createEmployee', compact(['companies', 'qualifications']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = request()->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'company_id' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => 'string',
            'image' => 'image',
        ]);




        if (request('image')) {
            $imagePath = request('image')->store('employeePhotos', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(100, 100);
            $image->save();
            $imageArray = ['image' => $imagePath];
        }




        $data = array_merge(
            $data,
            $imageArray ?? []
        );

        DB::table('employees')->insert($data);


        return redirect("/employees");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $employee = Employee::findOrFail($id);
        $qualifications = Qualification::all();
        return view('employees.employeeShow', compact(['employee', 'qualifications']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * 
     * 
     */

    public function qualify(Request $request)
    {

        $data = request()->validate([
            'user_id' => ['required', 'numeric'],
            'qualification_id' => ['required', 'numeric'],
            'aquired' => ['required', 'date'],
            'grade' => ['required', 'string', 'max:255']
        ]);

        $pivotData = [
            
            'aquired' => $data['aquired'],
            'grade' => $data['grade']
        ];

        $employee = Employee::findOrFail($data['user_id']);
        $qualification = Qualification::findOrFail($data['qualification_id']);

        //get matching pivot table for both employee_id and qualification_id
        $pivot = DB::table('employee_qualification')->where([['employee_id', $data['user_id']], ['qualification_id', $data['qualification_id']]])->get();

        // if not already qualified
        if ($pivot->isEmpty()) {

            $employee->qualified()->attach($qualification);
            
            DB::table('employee_qualification')->where([['employee_id', $data['user_id']], ['qualification_id', $data['qualification_id']]])->update($pivotData);

            $qualifications = Qualification::all();
            return view('employees.employeeShow', compact(['employee', 'qualifications']));
        } else {


            return "Already Qualified";
        }
       
    }
}
