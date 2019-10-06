@extends('layouts.app')

@section('content')
<form action="{{ route('companies.update',$company->id) }}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('patch')
    <div class="row">
        <div
            class="col-10 col-sm-10 col-md-10 col-lg-6 col-xl-6 offset-1 offset-sm-1 offset-md-1 offset-lg-3 offset-xl-3">

            {{-- <div class="row"> --}}
            <h3>Edit Details For</h3>
            <h2>{{ $company->name }}</h2>
            {{-- </div> --}}

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label ">{{ __('Name') }}</label>

                <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                    value="{{ $company->name }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label ">{{ __('Email') }}</label>

                <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    value="{{ $company->email }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="website" class="col-md-4 col-form-label ">{{ __('Website') }}</label>

                <input id="website" name="website" type="text"
                    class="form-control @error('website') is-invalid @enderror" value="{{ $company->website }}" required
                    autocomplete="website" autofocus>

                @error('website')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <label for="image" class="">{{ __('Company Logo') }}</label>
            <div class="">
                <img src="{{ asset('storage') .'/'. $company->logoImage() }}" alt="" style="width:200px;">
                <input type="file" class="form-control-file pt-2" id="image" name="image">
                <p>Leave empty to keep current logo.</p>

                @error('image')
                <strong>{{ $message }}</strong>
                @enderror
            </div>

            <div class="row pt-4 d-flex justify-content-between">
                <button class="btn btn-primary">Update Company</button>
                @if($company->id != 1)
                <div style="cursor:pointer;" class="btn btn-danger" onclick="deleteConfirm();">Delete Company</div>
                @endif
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
            <h5>Are you sure you want to remove this company?</h5>
        </div>

        <div class=" pt-4" style="display:inline-block;position:relative;left:50%;transform:translateX(-50%);">

            <div style="cursor:pointer;" class="btn btn-danger" onclick="event.preventDefault();
                    document.getElementById('deleteCompany').submit();">Confirm Delete</div>

        </div>
        <form id="deleteCompany" action="{{ route('companies.delete', $company->id) }}" method="POST"
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