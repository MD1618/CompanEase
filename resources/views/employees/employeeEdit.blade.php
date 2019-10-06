@extends('layouts.app')

@section('content')
<form action="{{ route('employees.update',$employee->id) }}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('patch')
    <div class="row">
        <div
            class="col-10 col-sm-10 col-md-10 col-lg-6 col-xl-6 offset-1 offset-sm-1 offset-md-1 offset-lg-3 offset-xl-3">

            <div class="row">
                <h2>Edit Employee</h2>
            </div>

            <div class="form-group row">
                <label for="first_name" class="col-md-4 col-form-label ">{{ __('First Name') }}</label>

                <input id="first_name" name="first_name" type="text"
                    class="form-control @error('first_name') is-invalid @enderror" value="{{ $employee->first_name }}"
                    required autocomplete="first_name" autofocus>

                @error('first_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="last_name" class="col-md-4 col-form-label ">{{ __('Last Name') }}</label>

                <input id="last_name" name="last_name" type="text"
                    class="form-control @error('last_name') is-invalid @enderror" value="{{ $employee->last_name }}"
                    required autocomplete="last_name" autofocus>

                @error('last_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="company_id" class="col-md-4 col-form-label ">{{ __('Company') }}</label>

                <select class="form-control" id="company_id" name="company_id" required>
                    <option value="" selected disabled>Select Company</option>
                    @foreach ($companies as $company)
                    <option value="{{$company->id}}"> {{ $company->name}}</option>
                    @endforeach

                </select>
            </div>

          

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label ">{{ __('Email') }}</label>

                <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    value="{{ $employee->email }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="phone" class="col-md-4 col-form-label ">{{ __('Phone') }}</label>

                <input id="phone" name="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                    value="{{ $employee->phone }}" required autocomplete="phone" autofocus>

                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <label for="image" class="">{{ __('Profile Photo') }}</label>
            <div class="">
                <img src="{{ asset('storage') .'/'. $employee->profileImage() }}" alt="" style="width:200px;">
                <input type="file" class="form-control-file pt-2" id="image" name="image">
                <p>Leave empty to keep current photo.</p>

                @error('image')
                <strong>{{ $message }}</strong>
                @enderror
            </div>

            <div class="row pt-4 d-flex justify-content-between">
                <button class="btn btn-primary">Confirm Edits</button>
                <div style="cursor:pointer;" class="btn btn-danger" onclick="deleteConfirm();">Delete Employee</div>
            </div>

        </div>
    </div>


</form>

<div id="deleteModal" class="hideModal">
    <div id="innerDeletemodal">
        <div style="position:absolute; top:10px;right:20px; font-size:20px;" onclick="deleteConfirm()">
            <i class="fa fa-close"></i>
        </div>
        <div class="p-5">
            <h5>Are you sure you want to remove this employee?</h5>
        </div>

        <div class=" pt-4" style="display:inline-block;position:relative;left:50%;transform:translateX(-50%);">

            <div style="cursor:pointer;" class="btn btn-danger" onclick="event.preventDefault();
                    document.getElementById('deleteCompany').submit();">Confirm Delete</div>

        </div>
        <form id="deleteCompany" action="{{ route('employees.delete', $employee->id) }}" method="POST"
            style="display: none;">
            @csrf
        </form>
    </div>
</div>
@endsection


@section('pagespecificscripts')

<script>
    function deleteConfirm(){
    var deleteModal = document.getElementById('deleteModal');
    if (deleteModal.classList.contains('hideModal')) {
        deleteModal.classList.remove('hideModal');
    } else {
        deleteModal.classList.add('hideModal');
    }
}

</script>

@endsection