@extends('layouts.app')

@section('content')
<div class="col-12 col-sm-10 col-md-10 col-lg-6 col-xl-6 offset-0 offset-sm-1 offset-md-1 offset-lg-3 offset-xl-3 p-0">

    @foreach ($companies as $company)

    <a href="{{ route('companies.show', $company->id)}}" style="text-decoration: none;color:#333;">
        <div class="d-flex flex-wrap p-3 mb-3 listItem" style="">
            <div style=";margin-right:20px;width:130px;height:130px;">
                <img src="{{ asset('storage') .'/'. $company->logoImage() }}" alt="" style="width:130px;">
            </div>
            <div>
                <h3><strong>{{ $company->name}}</strong></h3>
                <h5><i class="fa fa-envelope"></i><a href="mailto:{{ $company->email}}"> {{ $company->email}}</a></h5>
                <h5><a href="http://{{ $company->website}}">{{ $company->website}}</a></h5>
                <h5>Employees {{ $company->employees->count()}}</h5>
            </div>
           
        </div>
    </a>
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $companies->links() }}
        </div>
    </div>
</div>


@endsection