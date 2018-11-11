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
<!-- NavBar -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header" style="font-family: 'Poiret One', cursive;">
        <a class="navbar-brand" href="{{ route('home') }}">Cassidy</a>
      </div>
      <ul class="nav navbar-nav" style="font-family: 'Poiret One', cursive;">
        <li class="active"><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
        <li><a href="{{ route('social') }}">Social</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
      </ul>
    </div>
  </nav>
<!-- Content -->
  <div id="portfolio-sketch"></div>

  <div class="container">
    <div class="card">
      <h2><a href="#">Jeux</a></h2>
      <img class="article-img" src="/images/Jeux.png"/>
      <p>The orphan Sheeta inherited a mysterious crystal that links her to the
        mythical sky-kingdom of Laputa. With the help of resourceful Pazu and a
        rollicking band of sky pirates, she makes her way to the ruins of the
        once-great civilization. Sheeta and Pazu must outwit the evil Muska,
        who plans to use L...</p>
    </div>
    <div class="card">
      <h2><a href="#">Dreamers</a></h2>
      <img class="article-img" src="/images/Dreamers.png"/>
      <p>The orphan Sheeta inherited a mysterious crystal that links her to the
        mythical sky-kingdom of Laputa. With the help of resourceful Pazu and a
        rollicking band of sky pirates, she makes her way to the ruins of the
        once-great civilization. Sheeta and Pazu must outwit the evil Muska,
        who plans to use L...</p>
    </div>
    <div class="card">
      <h2><a href="#">Tago</a></h2>
      <img class="article-img" src="/images/Tago.png"/>
      <p>The orphan Sheeta inherited a mysterious crystal that links her to the
        mythical sky-kingdom of Laputa. With the help of resourceful Pazu and a
        rollicking band of sky pirates, she makes her way to the ruins of the
        once-great civilization. Sheeta and Pazu must outwit the evil Muska,
        who plans to use L...</p>
    </div>
    <div class="card">
      <h2><a href="#">WindowDisplay</a></h2>
      <img class="article-img" src="/images/WindowDisplay.png"/>
      <p>The orphan Sheeta inherited a mysterious crystal that links her to the
        mythical sky-kingdom of Laputa. With the help of resourceful Pazu and a
        rollicking band of sky pirates, she makes her way to the ruins of the
        once-great civilization. Sheeta and Pazu must outwit the evil Muska,
        who plans to use L...</p>
    </div>
    <div class="card">
      <h2><a href="#">Shoemane Society</a></h2>
      <img class="article-img" src="/images/Tago.png"/>
      <p>The orphan Sheeta inherited a mysterious crystal that links her to the
        mythical sky-kingdom of Laputa. With the help of resourceful Pazu and a
        rollicking band of sky pirates, she makes her way to the ruins of the
        once-great civilization. Sheeta and Pazu must outwit the evil Muska,
        who plans to use L...</p>
    </div>
  </div>

<!-- Scripts -->
  <script src="{{ asset('js/p5.js') }}" charset="utf-8"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/p5.js/0.4.10/p5.js"></script>
  <script type="text/javascript" src="{{ asset('js/portfolio-sketch.js') }}" charset="utf-8"></script>
  </body>
  </html>
