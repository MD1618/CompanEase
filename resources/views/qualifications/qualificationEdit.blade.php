@extends('layouts.app')

@section('content')
<form action="{{ route('qualifications.update',$qualification->id) }}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('patch')
    <div class="row">
        <div
            class="col-10 col-sm-10 col-md-10 col-lg-6 col-xl-6 offset-1 offset-sm-1 offset-md-1 offset-lg-3 offset-xl-3">

            <div class="row">
                <h2>Edit Qualification</h2>
            </div>

            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label ">{{ __('Title') }}</label>

                <input id="title" name="title" type="text"
                    class="form-control @error('title') is-invalid @enderror" value="{{ $qualification->title }}"
                    required autocomplete="title" autofocus>

                @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="row pt-4 d-flex justify-content-between">
                <button class="btn btn-primary">Update Qualification</button>
                <div style="cursor:pointer;" class="btn btn-danger" onclick="deleteConfirm();">Delete Qualification</div>
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
            <h5>Are you sure you want to remove this Qualification?</h5>
        </div>

        <div class=" pt-4" style="display:inline-block;position:relative;left:50%;transform:translateX(-50%);">

            <div style="cursor:pointer;" class="btn btn-danger" onclick="event.preventDefault();
                    document.getElementById('deleteCompany').submit();">Confirm Delete</div>

        </div>
        <form id="deleteCompany" action="{{ route('qualifications.delete', $qualification->id) }}" method="POST"
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