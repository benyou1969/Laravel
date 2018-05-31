@extends('layouts.app')
@section('content')
  {{-- <div class="card card-larg border-warning mb-3" style="max-width: 18rem;">
    <div class="card-header text-center">{{$post->title}}</div>
    <div class="card-body text-warning">
     <small>Written on: {{$post->created_at}}</small> <br>
    {!!$post->body!!}
  <a href="/posts" class="btn btn-primary btn-sm">Go Back</a>
  <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
  {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
  {!!Form::close()!!}
</div>
</div> --}}

<div class="card text-center">
  <div class="card-header">
    {{$post->title}}
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{!!$post->body!!}</p>
    <a href="/posts" class="btn btn-outline-primary">Go Back</a>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-info">Edit</a>
    {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'form-check-inline'])!!}
      {{Form::hidden('_method','DELETE')}}
      {{Form::submit('Delete',['class'=>'btn btn-outline-danger'])}}
    {!!Form::close()!!}
  </div>
  <div class="card-footer text-muted">
    {{$post->created_at}}
  </div>
</div>
@endsection
