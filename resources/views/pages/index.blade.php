
@extends('layouts/app')
@section('content')
  <h1>{{$title}}</h1>
  <p>This is the laravel application form the "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
  <div class="content">
    <div class="jumbotron text-center">
      <h1>Welcome To Laravel</h1>
      <p>This Is the Laravel application</p>
      <p> <a href="/login" class="btn btn-primary btn-lg" role="button">Login</a> <a href="/register" role="button" class="btn btn-success btn-lg">register</a> </p>
    </div>
  </div>
@endsection
