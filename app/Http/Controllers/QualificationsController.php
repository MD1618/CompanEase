<?php

namespace App\Http\Controllers;

use App\Qualification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QualificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $qualifications = Qualification::Paginate(10);
        return view('qualifications.qualificationsIndex', compact('qualifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('qualifications.qualificationCreate');
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
            'title' => ['required', 'string', 'max:255']
        ]);

        DB::table('qualifications')->insert($data);

        return redirect()->action('QualificationsController@index');


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
        $qualification = Qualification::findOrfail($id);
        return view('qualifications.qualificationShow' , compact('qualification'));
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
        $qualification = Qualification::findOrfail($id);
        return view('qualifications.qualificationEdit', compact('qualification'));
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
            'title' => ['required', 'string', 'max:255']
        ]);

        DB::table('qualifications')->where('id',$id)->update($data);

        return redirect()->action('QualificationsController@index');
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
        DB::table('qualifications')->where('id',$id)->delete();

        return redirect()->action('QualificationsController@index');
    }
}
