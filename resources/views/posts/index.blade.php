
@extends('layouts.app')
@section('content')
 @if(count($posts)>0)
   {{-- <ul> --}}
  @foreach ($posts as $post)
    <div class="card">
      <div class="card-header">
      <a href="/posts/{{$post->id}}"><h3 class="text-center">{{$post->title}}</h3></a>
      </div>
      <div class="card-body">
        <p class="card-text">{!!$post->body!!}</p>
        <p> <a href="/posts/{{$post->id}}"><small>{{$post->created_at}}</small></a> </p>

        <a href="/posts/{{$post->id}}" class="btn btn-primary">Go To Post</a>
        <a href="/posts/edit" class="btn btn-primary float-right">Edit Post</a>
      </div>
    </div>
    <div>
      <hr>
    </div>
  @endforeach
   {{$posts->links()}}
   @else
     <p>No Posts Found</p>
@endif

@endsection
