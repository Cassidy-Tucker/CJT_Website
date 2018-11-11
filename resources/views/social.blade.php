<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Cassidy Tucker</title>
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/featherlight.css') }}">
  <script src="{{ asset('js/bootstrap.js') }}" charset="utf-8"></script>
  <script src="{{ asset('js/featherlight.js') }}" charset="utf-8"></script>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ route('home') }}">Cassidy</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
        <li><a href="{{ route('social') }}">Social</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
      </ul>
    </div>
  </nav>

  <div id="social-sketch"></div>

  <div class="content">
    <div class="title m-b-md">
      {{$heading}}
    </div>
    <a href="https://www.instagram.com/cassidytucker/" style="color:white">Instagram</a>
    <a href="https://www.instagram.com/theshoemanesociety/" style="color:white">Shoemane Society</a>
    <a href="https://www.facebook.com/cassidy.tucker" style="color:white">Facebook</a>
    <a href="https://www.linkedin.com/in/cassidy-tucker-71b104121/" style="color:white">Linked In</a>
    <a href="https://github.com/Cassidy-Tucker" style="color:white">GitHub</a>
  </div>
  <script src="{{ asset('js/p5.js') }}" charset="utf-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.4.22/p5.min.js"></script>
  <script type="text/javascript" src="{{ asset('js/social-sketch.js') }}" charset="utf-8"></script>
</body>
</html>
