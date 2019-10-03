@extends('layouts.app')

@section('content')
<div class="col-4 offset-4">

    @foreach ($companies as $company)

    <div class="d-flex p-3 mb-3 shadow listItem" style="background:#fff;border-radius:7px;">
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