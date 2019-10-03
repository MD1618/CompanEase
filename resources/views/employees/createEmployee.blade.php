@extends('layouts.app')

@section('content')
<form action="{{ route('employees.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h2>Add New Company</h2>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label ">{{ __('Name') }}</label>

                    <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                         value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
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
                    <label for="website" class="col-md-4 col-form-label ">{{ __('Website') }}</label>

                    <input id="website" name="website" type="text" class="form-control @error('website') is-invalid @enderror"
                         value="{{ old('website') }}" required autocomplete="website" autofocus>

                    @error('website')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row">

                    <label for="image" class="col-md-4 col-form-label ">{{ __('Company Logo') }}</label>
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