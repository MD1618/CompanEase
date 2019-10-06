@extends('layouts.app')

@section('content')
<div class="col-12 col-sm-10 col-md-10 col-lg-6 col-xl-6 offset-0 offset-sm-1 offset-md-1 offset-lg-3 offset-xl-3 p-0">

    @foreach ($employees as $employee)
    <a href="{{ route('employees.show',$employee->id)}}">
        <div class="d-flex flex-wrap p-3 mb-3 listItem" style="">
            <div style="overflow:hidden;margin:auto 20px;width:100px;height:100px;border:2px solid #555;border-radius:8px;">
                <img src="{{ asset('storage') . '/'.$employee->profileImage()  }}" alt="" class="" style="width:100px;">
            </div>
            <div class="p-3"> 
               
                <h3 style="color:#444;"><strong>{{ $employee->first_name}} {{ $employee->last_name}}</strong></h3>
                @if($employee->company)
                <h5><i class="fa fa-building"></i>
                    <a href="{{ route('companies.show',$employee->company->id)}}"> {{ $employee->company->name}}</a>
                </h5>
                @endif
            </div>
        </div>
    </a>
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $employees->links() }}
        </div>
    </div>
</div>


@endsection