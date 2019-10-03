<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Company;
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
        $employees = Employee::paginate(4);
        
        return view('employees.employeeslist',compact('employees'));
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
        return view('employees.createEmployee',compact('companies'));
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
        //dd($request);
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
        return view('employees.employeeShow', compact('employee'));
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
}
