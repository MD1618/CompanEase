@extends('layouts.app')

@section('content')
<div class="col-12 col-sm-10 col-md-10 col-lg-6 col-xl-6 offset-0 offset-sm-1 offset-md-1 offset-lg-3 offset-xl-3 p-0">


    <div class="d-flex flex-wrap p-3 mb-3 listItem">

        <div>
            <h3><i class="fa fa-graduation-cap"></i><strong>    {{ $qualification->title}}</strong></h3>
        </div>
        @if($qualification->id != 1)
        <div style="position:absolute;top:10px;right:20px;font-size:20px;"><a href="{{ route('qualifications.edit', $qualification->id) }}" style="color:#666;"><i class="fa fa-edit" ></i></a></div>
        @endif
    </div>
    @foreach ($qualification->student as $student)
    <a href="{{ route('employees.show',$student->id)}}">
        <div class="d-flex flex-wrap p-3 mb-3 listItem" style="margin:0 30px;">
            <div
                style="overflow:hidden;margin-right:20px;width:100px;height:100px;border:2px solid #555;border-radius:8px;">
                <img src="{{ asset('storage') . '/'.$student->profileImage()  }}" alt="" class="" style="width:100px;">
            </div>
            <div>

                <h3 style="color:#444;"><strong>{{ $student->first_name}} {{ $student->last_name}}</strong></h3>
                <h5><i style="color:#444;" class="fa fa-building"></i>
                    <a href="{{ route('companies.show',$student->company->id)}}"> {{ $student->company->name}}</a>
                </h5>

            </div>
        </div>
    </a>
    @endforeach

    @endsection