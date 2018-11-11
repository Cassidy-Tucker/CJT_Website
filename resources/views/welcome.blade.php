<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Cassidy Tucker</title>

  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  <script src="{{ asset('js/bootstrap.js') }}" charset="utf-8"></script>

  <link rel="stylesheet" href="{{ asset('css/featherlight.css') }}">
  <script src="{{ asset('js/featherlight.js') }}" charset="utf-8"></script>
  <script src="{{ asset('js/p5.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/background-sketch.js') }}"></script>
  <!-- Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css?family=Comfortaa|Quicksand|Poiret+One" rel="stylesheet">

</head>
<body>
  <div class="flex-center position-ref full-height">
    <div id="sketch-holder"></div>

    <div class="content">
      <div class="title m-b-md">
        CASSIDY TUCKER
      </div>

      <div class="links">
        <a href="{{ route('about') }}" class="button"><span>About</span></a>
        <a href="{{ route('portfolio') }}" class="button"><span>Portfolio</span></a>
        <a href="{{ route('social') }}" class="button"><span>Social</span></a>
        <a href="{{ route('contact') }}" class="button"><span>Contact</span></a>
      </div>
    </div>
  </div>
</body>
</html>
