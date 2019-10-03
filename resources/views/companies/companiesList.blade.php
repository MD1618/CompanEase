@extends('layouts.app')

@section('content')
<div class="col-12 col-sm-10 col-md-10 col-lg-6 col-xl-6 offset-0 offset-sm-1 offset-md-1 offset-lg-3 offset-xl-3 p-0">

    @foreach ($companies as $company)

    <div class="d-flex flex-wrap p-3 mb-3 shadow listItem" style="background:#fff;border-radius:7px;">
        <div
            style=";margin-right:20px;width:100px;height:100px;">
            <img src="{{ asset('storage') .'/'. $company->logoImage() }}" alt="" style="width:100px;">
        </div>
        <div>
            <h3>{{ $company->name}}</h3>
            <h5>{{ $company->email}}</h5>
            <h5>{{ $company->website}}</h5>
            <h5>Employees {{ $company->employees->count()}}</h5>
        </div>
       
      
    </div>
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $companies->links() }}
        </div>
    </div>
</div>


@endsection