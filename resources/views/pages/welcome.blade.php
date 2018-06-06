
@extends('main')

@section('title','| Home')

@section('stylesheets')
<style type="text/css">
  body { background: #fff !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
</style>
@stop

@section('content')
<div class="row">
  <div class="col">
    <div class="jumbotron">
      <h1>Welcome To LaraBlog, Folks!!</h1>
      <p class="lead">This is a blog that is still under construction using laravel framework + bootstrap4.</p>
      <hr class="my-4">
      <p>Its for fun and to enchance skill for laravel</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-8">

    @foreach($posts as $post)
    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading" style="color:#000;">{{ $post->title }}</h4>
      <p>{{ substr($post->body,0,50) }}{{ strlen($post->body) > 50 ? " ..." : ""}}</p>
      <a href="#" class="btn btn-outline-info">Read More</a>
    </div>
    @endforeach
  </div>
</div>
@endsection