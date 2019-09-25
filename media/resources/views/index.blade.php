<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google" content="notranslate" />
  <meta http-equiv="Content-Language" content="ja">
  <title>{{ config('app.name') }}</title>

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p&display=swap" rel="stylesheet">


  <!-- Styles -->
  <link href="/css/animate.css" rel="stylesheet">
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <style>
   html p,ul,h1,h2,h3{font-family: 'M PLUS 1p', sans-serif;}
  
  </style>
  
</head>
<body>
  <div id="app"></div>
</body>
</html>


  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script>
$('.animated').css("opacity","0");
$(window).on('load scroll', function(){
　
  var elem = $('.animated');
　　
  elem.each(function () {

    var isAnimate = $(this).data('animate');
    var elemOffset = $(this).offset().top;
    var scrollPos = $(window).scrollTop();
    var wh = $(window).height();

    if(scrollPos > elemOffset - wh + (wh / 4)){	
      $(this).addClass(isAnimate);
	
    }
  });

});


</script>

<script src="https://cdn.jsdelivr.net/npm/bubbly-bg@1.0.0/dist/bubbly-bg.js"></script>
<script>bubbly();</script>