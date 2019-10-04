@extends('layouts.app')

@section('content')
<div class="col-12 col-sm-10 col-md-10 col-lg-6 col-xl-6 offset-0 offset-sm-1 offset-md-1 offset-lg-3 offset-xl-3 p-0">


    <div class="d-flex flex-wrap p-3 mb-3 listItem ">
        <div style="margin:auto 20px;width:130px;height:130px;border:2px solid #555;border-radius:8px;overflow:hidden;">
            <img src="{{ asset('storage') .'/'. $employee->profileImage() }}" alt="" style="width:130px;">
        </div>
        <div class="p-3">
            <h3><strong>{{ $employee->first_name}} {{ $employee->last_name}} </strong></h3>
            <h5><i class="fa fa-envelope"></i><a href="mailto:{{ $employee->email}}"> {{ $employee->email}}</a></h5>
            <h5><i class="fa fa-phone"></i> {{ $employee->phone}}</h5>

        </div>
        <div style="position:absolute;top:10px;right:20px;font-size:20px;"><a href="" style="color:#666;"><i
                    class="fa fa-edit"></i></a></div>

    </div>



    <a href="{{ route('companies.show', $employee->company->id)}}" style="text-decoration: none;color:#333;">
        <div class="d-flex flex-wrap  mb-3 listItem "
            style="background:rgba(250,250,250,0.1);margin:0 10px;box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);">
            <div style="margin:15px 20px;width:100px;height:100px;">
                <img src="{{ asset('storage') .'/'. $employee->company->logoImage() }}" alt="" style="width:100px;">
            </div>
            <div class="p-3">
                <h3><strong>{{  $employee->company->name}}</strong></h3>
                <h5><i class="fa fa-envelope"></i><a href="mailto:{{ $employee->company->email}}">
                        {{ $employee->company->email}}</a></h5>
                <h5><a href="http://{{ $employee->company->website}}">{{ $employee->company->website}}</a></h5>

            </div>


        </div>

    </a>


    <div class="d-flex flex-wrap p-3 ">
        <h3 class="pr-3">Qualifications</h3>

        <div style="height:30px;display:inline-block;cursor:pointer;padding:5px;background:#eee;border-radius:5px;" onclick="showQualificationsModal()">Add</div>
    </div>

    @foreach ($employee->qualified as $qualification)
    <div class="d-flex flex-wrap" style="position: relative;">
        <div style="padding:10px;">
            <h4>{{ $qualification->title }}</h4>
        </div>
        <div style="padding:10px;">
            <h4>{{ $qualification->pivot->aquired }}</h4>
        </div>
        <div style="padding:10px;">
            <h4>{{ $qualification->pivot->grade }}</h4>
        </div>

        <span style="font-size:20px;cursor:pointer;position:absolute; top:7px;right:20px;"
            onclick="deleteQualification()">
            <i class="fa fa-close" style="margin-bottom:15px;"></i>
        </span>

    </div>
    @endforeach




</div>

<div id="qualificationModal" class="hideModal">
    <div id="innerModal">
        <div style="position:absolute; top:10px;right:20px; font-size:20px;" onclick="showQualificationsModal()">
            <i class="fa fa-close"></i>
        </div>

        <form action="{{ route('employees.qualify') }}" enctype="multipart/form-data" method="POST">
            @csrf
            
            <input id="user_id" name="user_id" type="text"
            class="form-control" value="{{ $employee->id}}" hidden>

            <div class="form-group pt-5" style="width:90%;margin-left:5%;">
                <label for="qualification_id" class="col-md-4 col-form-label ">{{ __('Qualification') }}</label>

                <select class="form-control" id="qualification_id" name="qualification_id" required>
                    <option value="" selected disabled>Select Qualification</option>
                    @foreach ($qualifications as $qualification)
                    <option value="{{$qualification->id}}"> {{ $qualification->title}}</option>
                    @endforeach

                </select>
            </div>

            <div class="form-group " style="width:90%;margin-left:5%;">
                <label for="aquired" class="col-md-4 col-form-label ">{{ __('Date Aquired') }}</label>

                <input id="aquired" name="aquired" type="date"
                    class="form-control @error('aquired') is-invalid @enderror" value="{{ old('aquired') }}" required
                    autocomplete="aquired" autofocus>

                @error('aquired')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group " style="width:90%;margin-left:5%;">
                <label for="grade" class="col-md-4 col-form-label ">{{ __('Grade') }}</label>

                <input id="grade" name="grade" type="text" class="form-control @error('grade') is-invalid @enderror"
                    value="{{ old('grade') }}" required autocomplete="grade" autofocus>

                @error('grade')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class=" pt-4" style="display:inline-block;position:relative;left:50%;transform:translateX(-50%);">
                <button class="btn btn-primary">Add Qualification</button>
            </div>
        </form>

    </div>
</div>

<div id="deleteModal" class="hideModal">
    <div id="innerDeletemodal">
        <div style="position:absolute; top:10px;right:20px; font-size:20px;" onclick="deleteQualification()">
            <i class="fa fa-close"></i>
        </div>
        <div class="p-5">
            <h5>Are you sure you want to remove this qualification?</h5>
        </div>

        <div class=" pt-4" style="display:inline-block;position:relative;left:50%;transform:translateX(-50%);">
            <button class="btn btn-primary">Confirm Delete</button>
        </div>

    </div>
</div>


@endsection