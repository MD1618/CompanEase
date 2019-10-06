<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Employee;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use App\Mail\NewCompanyWelcomeMail;
use Illuminate\Support\Facades\Mail;

class CompaniesController extends Controller
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
        $companies = Company::where('name', '!=','Unemployed')->paginate(10);
        return view('companies.companiesList', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        
        return view('companies.createCompany');
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
        //$this->authorize('update', $request->company);
        //dd(request());
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'logo' => 'image',
            'website' => 'url'
        ]);


        if (request('image')) {
            $imagePath = request('image')->store('companyLogos', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(100, 100);
            $image->save();
            $imageArray = ['logo' => $imagePath];
        }


        $data = array_merge(
            $data,
            $imageArray ?? []
        );

        DB::table('companies')->insert($data);

        $company = Company::where('name',$data['name'])->first();
        
        Mail::to($company->email)->send(new NewCompanyWelcomeMail());

        return redirect("/companies");
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
        $company = Company::findOrFail($id);
        return view('companies.companyShow', compact('company'));
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
        $company = Company::findOrFail($id);
        return view('companies.companyEdit',compact('company'));
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
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'logo' => 'image',
            'website' => 'url'
        ]);
        //dd($request);
        $company = Company::findOrFail($id);
        $company->update($data);
        return view('companies.companyShow',compact('company'));
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
        $company = Company::findOrFail($id);
        $company->delete();


        //set the companies employees to unemployed to stop things breaking
        $employees = Employee::where('company_id',$id)->update(['company_id' => 1]);
        
        //dd($employees);
        $companies = Company::where('name', '!=','Unemployed')->paginate(10);
        return view('companies.companiesList', compact('companies'));
    }
}
