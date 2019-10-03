@extends('layouts.app')

@section('content')
<div class="col-12 col-sm-10 col-md-10 col-lg-6 col-xl-6 offset-0 offset-sm-1 offset-md-1 offset-lg-3 offset-xl-3 p-0">

   
        <div class="d-flex flex-wrap p-3 mb-3 shadow listItem" >
            <div style="margin-right:20px;width:100px;height:100px;">
                <img src="{{ asset('storage') .'/'. $company->logoImage() }}" alt="" style="width:100px;">
            </div>
            <div>
                <h3><strong>{{ $company->name}}</strong></h3>
                <h5><i class="fa fa-envelope"></i> {{ $company->email}}</h5>
                <h5>{{ $company->website}}</h5>
                <h5>Employees {{ $company->employees->count()}}</h5>
            </div>
            <div style="position:absolute;top:10px;right:20px;font-size:20px;"><a href="" style="color:#666;"><i class="fa fa-trash" ></i></a></div>
            
        </div>
    @foreach ($company->employees as $employee)
    <div class="d-flex flex-wrap p-3 mb-3 shadow listItem" style="margin: 0 30px;">
            <div
                style="overflow:hidden;margin-right:20px;width:100px;height:100px;border:2px solid #555;border-radius:8px;">
                <img src="{{ asset('storage') . '/'.$employee->profileImage()  }}" alt="" class="" style="width:100px;">
            </div>
            <div>
                <h3><strong>{{ $employee->first_name}} {{ $employee->last_name}}</strong></h3>
                <h5><i class="fa fa-building"></i>  {{ $employee->company->name}}</h5>
                <h5><i class="fa fa-envelope"></i>  {{ $employee->email}}</h5>
                <h5><i class="fa fa-phone"></i>  {{ $employee->phone}}</h5>
            </div>
        </div>
    @endforeach
    

   
</div>


@endsection