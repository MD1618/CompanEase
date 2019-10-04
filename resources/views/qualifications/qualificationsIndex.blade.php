@extends('layouts.app')

@section('content')
<div class="col-12 col-sm-10 col-md-10 col-lg-6 col-xl-6 offset-0 offset-sm-1 offset-md-1 offset-lg-3 offset-xl-3 p-0">


    @foreach ($qualifications as $qualification)
    <a href="{{route('qualifications.show', $qualification->id)}}" style="color:#444;">

        <div class="d-flex flex-wrap p-3 pl-4 mb-3 listItem">

            <div>
                <h3><i class="fa fa-graduation-cap"></i><strong> {{ $qualification->title}} </strong></h3>
            </div>
            <div class="ml-auto">
                @if($qualification->id == 1)
                <h5>Non-Graduates {{$qualification->student->count()}}</h5>
                @else
                <h5>Graduates {{$qualification->student->count()}}</h5>
                @endif
            </div>


        </div>
    </a>
    @endforeach
</div>
<div class="row">
    <div class="col-12 d-flex justify-content-center">
        {{ $qualifications->links() }}
    </div>
</div>

@endsection