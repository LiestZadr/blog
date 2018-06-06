@extends('main')

@section('title','| Edit Post')

@section('content')
<h1>Edit Post</h1>
<div class="row border border-dark p-3">
    <div class="col-md-8">
        {!! Form::model($post,['route' => ['posts.update',$post->id],'method' => 'PUT']) !!}
        {{ Form::label('title', 'Title :') }}
        {{ Form::text('title',null,array('class'=>'form-control')) }}
        {{ Form::label('body', 'Post Body :') }}
        {{ Form::textarea('body',null,array('class'=>'form-control')) }}
    </div>
    <div class="col-md-4">
        <div class="card pt-3 pb-3 pr-3 pl-3 mt-5">
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
                    {!! Html::linkRoute('posts.show','cancel',array($post->id),array('class'=>'btn btn-block btn-danger'))!!}
                </div>
                <div class="col-sm-6">
                    {{ Form::submit('Save Changes',array('class'=>'btn btn-success btn-block')) }}
                </div>      
            </div>
        </div>
        {!! Form::close() !!}  
    </div>
</div>


@stop