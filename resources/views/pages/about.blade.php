@extends('main')

@section('title','| About')

@section('content')

<div class="row">
    <div class="col-md-10">
    <div class="title m-b-md">
        ABOUT {{$fullname}}
    </div>
        <p>Email Address At:<br />{{$email}}</p>
    </div>
    
</div>
@endsection
        
