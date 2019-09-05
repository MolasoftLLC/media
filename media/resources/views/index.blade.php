<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google" content="notranslate" />
  <title>{{ config('app.name') }}</title>

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p&display=swap" rel="stylesheet">


  <!-- Styles -->
  <link href="css/reset.css" rel="stylesheet">
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <style>
   html p,ul,h1,h2,h3{font-family: 'M PLUS 1p', sans-serif;}
  
  </style>
  
</head>
<body>
  <div id="app"></div>
</body>
</html>