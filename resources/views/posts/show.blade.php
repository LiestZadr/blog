@extends('main')

@section('title','| View Post')

@section('content')

<div class="row">
    <div class="col-md-10">
        <h1 class="text-black">Your Post</h1>
    </div>
    <div class="col-md-2">
        
    </div>
</div>

<div class="row border border-dark p-3">
    <div class="col-md-8 card">
        <h1>{{ $post->title}} </h1>
        <p class="lead"> {{ $post->body}} </p>
    </div>
    <div class="col-md-4">
        <div class="card w-75 pr-3 pl-3 pt-3 pb-3">
            <dl class="dl-horizontal">
                <dt>Created at :</dt>
                <dd>{{ date('j M Y H:ia',strtotime($post->created_at))}}</dd>
            </dl>  
            <dl class="dl-horizontal">
                <dt>Last Updated :</dt>
                <dd>{{ date('j M Y H:ia',strtotime($post->updated_at))}}</dd>
            </dl>  
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    {!! Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=>'btn btn-block btn-info'))!!}
                </div>
                <div class="col-sm-6">
                    {!! Form::open(['route'=>['posts.destroy',$post->id],'method'=>'DELETE']) !!}
                    
                    {!! Form::submit('Delete',['class'=>'btn btn-danger btn-block']) !!}
                    
                    {!! Form::close() !!}
                </div>      
            </div>
            <div class="row pt-3">
                <div class="col-sm-12">
                    {!! Html::linkRoute('posts.index','<< See All Post',array(),array('class'=>'btn btn-block btn-secondary'))!!}
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection
