@extends('layouts.app')

@section('content')
<div class="col-4 offset-4">

    @foreach ($employees as $employee)
    <div class="d-flex p-3 mb-3  shadow listItem" style="background:#fff;border-radius:7px;">
        <div
            style="overflow:hidden;margin-right:20px;width:100px;height:100px;border:2px solid #555;border-radius:8px;">
            <img src="{{ asset('storage') . '/'.$employee->profileImage()  }}" alt="" class="" style="width:100px;">
        </div>
        <div>
            <h3>{{ $employee->first_name}} {{ $employee->last_name}}</h3>
            <h5>{{ $employee->email}}</h5>
            <h5>{{ $employee->phone}}</h5>
            <h5>Works At {{ $employee->company->name}}</h5>
        </div>
    </div>
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $employees->links() }}
        </div>
    </div>
</div>


@endsection