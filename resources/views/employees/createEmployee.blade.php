@extends('layouts.app')

@section('content')
<form action="{{ route('employees.store') }}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="row">
        <div class="col-10 col-sm-10 col-md-10 col-lg-6 col-xl-6 offset-1 offset-sm-1 offset-md-1 offset-lg-3 offset-xl-3">

            <div class="row">
                <h2>Add New Employee</h2>
            </div>

            <div class="form-group row">
                <label for="first_name" class="col-md-4 col-form-label ">{{ __('First Name') }}</label>

                <input id="first_name" name="first_name" type="text"
                    class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}"
                    required autocomplete="first_name" autofocus>

                @error('first_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="last_name" class="col-md-4 col-form-label ">{{ __('Surname') }}</label>

                <input id="last_name" name="last_name" type="text"
                    class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}"
                    required autocomplete="last_name" autofocus>

                @error('last_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="company" class="col-md-4 col-form-label ">{{ __('Company') }}</label>

                <select class="form-control" id="company" name="company" required>
                    <option value="" selected disabled>Select Company</option>
                    @foreach ($companies as $company)
                    <option value="{{$company->id}}"> {{ $company->name}}</option>
                    @endforeach

                </select>
            </div>


            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label ">{{ __('Email') }}</label>

                <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="phone" class="col-md-4 col-form-label ">{{ __('Phone') }}</label>

                <input id="phone" name="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                    value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="row">

                <label for="image" class="col-md-4 col-form-label ">{{ __('Photo') }}</label>
                <input type="file" class="form-control-file" id="image" name="image">

                @error('image')
                <strong>{{ $message }}</strong>
                @enderror
            </div>

            <div class="row pt-4">
                <button class="btn btn-primary">Add Post</button>
            </div>

        </div>
    </div>


</form>
@endsection