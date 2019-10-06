@extends('layouts.app')

@section('content')
<form action="{{ route('qualifications.store') }}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="row">
        <div
            class="col-10 col-sm-10 col-md-10 col-lg-6 col-xl-6 offset-1 offset-sm-1 offset-md-1 offset-lg-3 offset-xl-3">

            <div class="row">
                <h2>Add New Qualification</h2>
            </div>

            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label ">{{ __('Title') }}</label>

                <input id="title" name="title" type="text"
                    class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}"
                    required autocomplete="title" autofocus>

                @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

                    

            <div class="row pt-4">
                <button class="btn btn-primary">Add Qualification</button>
            </div>

        </div>
    </div>


</form>
@endsection