<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
  <head>
    <meta charset="utf-8">
    <title>{{config('app.name','BenYou')}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    @include('inc.navbar')
    <div class="container">


    @yield('content')
    </div>
    <script src="{{asset('js/app.js')}}">

    </script>
  </body>
</html>
