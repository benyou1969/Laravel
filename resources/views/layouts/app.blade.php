<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
  <head>
    <meta charset="utf-8">
    <title>{{config('app.name','BenYou')}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style media="screen">
    .morecontent span {
    display: none;
    }
    </style>
  </head>
  <body>
    @include('inc.navbar')
    <div class="container">
    @include('inc.messages')
    @yield('content')
    </div>

  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'article-ckeditor' );
  </script>
    <script src="{{asset('js/app.js')}}">

    </script>
    <script>
$(document).ready(function() {
$('.card .card-body p').addClass('comment more');
var showChar = 100;
var ellipsestext = "...";
var moretext = "more";
var lesstext = "less";
$('.more').each(function() {
  var content = $(this).html();

  if(content.length > showChar) {

    var c = content.substr(0, showChar);
    var h = content.substr(showChar-1, content.length - showChar);

    var html = c + '<span class="moreelipses">'+ellipsestext+'</span>&nbsp;<span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">'+moretext+'</a></span>';

    $(this).html(html);
  }

});

$(".morelink").click(function(){
  if($(this).hasClass("less")) {
    $(this).removeClass("less");
    $(this).html(moretext);
  } else {
    $(this).addClass("less");
    $(this).html(lesstext);
  }
  $(this).parent().prev().toggle();
  $(this).prev().toggle();
  return false;
});
});
    </script>
  </body>
</html>
