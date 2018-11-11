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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="{{ asset('js/bootstrap.js') }}" charset="utf-8"></script>
  <script src="{{ asset('js/featherlight.js') }}" charset="utf-8"></script>
</head>
<body>
  <!-- NavBar -->
  <nav class="navbar navbar-inverse" id="myNav">
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
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </ul>
    </div>
  </nav>
  <!-- Content -->
  <div id="about-sketch"></div>

  <div class="hero-image">
    <h1 style="color: orange">ABOUT CASSIDY</h1>
    <div class="col-sm-4">
      <h4 class="text-center" style="color:orange">BACKGROUND</h5>
      <p class="text-left" style="color:white">
        <br>My name is Cassidy and I'm a web developer.
        I'm a creative person that likes to make beautiful and interactive web
        pages so people can enjoy both art and technology on the internet.</br>
        <br>I recently graduated from the Montana Code School as a full-stack
        developer. I've spent the last nineteen years of life based in my
        hometown of Missoula, Montana</br>
        <br>I began my adult life at the University of Montana studying
        international politics and learning Arabic. I've lived in Morocco and
        have volunteered for many organizations both at home and abroad. </br>
        <br>I've taught English overseas in several rural Chilean schools in
        and around the Andes.</br>
        <br>More recently, I've spent my time working full time at the Missoula
         Art Museum as the Membership and Finance Coordinator</br>
        <br>My goals in life are to see as much as this amazing blue and green
        globe as possible while making valuable and lasting relationships</br>
        <br>I enjoy photography, socializing with humans and animals alike,
        cooking delicious meals and sharing them, binge-watching most shows,
        and thrifting.
      </div>
      <div class="col-sm-4">
        <h4 class="text-center" style="color:orange">SKILLS & PROCESS</h5>
        <p class"text-left" style="color:white">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in
          sapien eu eros euismod volutpat. Phasellus vel lectus imperdiet,
          sodales felis pellentesque, efficitur ligula. Duis nunc nisl, auctor
          vel leo nec, mattis pretium turpis. Nam est enim, mattis quis
          mattis ut, elementum convallis nisi. Nunc pulvinar at tellus quis
          porta. Nullam suscipit malesuada nibh, non interdum purus finibus
          in. Duis tempor non est vel condimentum. Vivamus vehicula et diam
          non condimentum.

          Pellentesque habitant morbi tristique senectus et netus et malesuada
          fames ac turpis egestas. Praesent dignissim, sem non volutpat
          sodales, mauris arcu auctor leo, vitae iaculis urna ex ac nisl.
          In faucibus mollis leo id tincidunt. Aliquam volutpat id dui vel
          varius. Etiam ut placerat ligula. Integer nisl urna, rhoncus et
          enim quis, mattis feugiat magna. Phasellus eget ullamcorper sapien,
          a varius mauris.

          Proin consequat metus sit amet metus placerat scelerisque at at dui.
          Aenean a rhoncus velit. Etiam suscipit libero magna, a fermentum
          nisl accumsan eu. Ut venenatis est vitae dolor dapibus, sed luctus
          lorem accumsan. Nulla sed luctus neque. Donec quis lorem dui.
          Aliquam cursus leo non volutpat fermentum. Integer faucibus ipsum
          ac mi aliquet tristique. Nullam sit amet sapien at metus iaculis
          aliquet. Aenean elementum rutrum viverra. Donec mattis auctor arcu.
          Phasellus ornare purus eros, vitae lacinia augue accumsan id.
          In condimentum mattis magna, vitae laoreet felis sagittis nec.

          Suspendisse tincidunt metus ut porttitor mollis. Nam a porttito

          <a href="{{ route('contact') }}" style="color:red">Let's Talk</a>
        </p>
        </div>
        <img class="figureSlides" src="/images/Me.jpg"></img>
      </div>
    <!-- <div class="socialLinks">
    <a href="https://www.instagram.com/cassidytucker/" style="color:white">Instagram</a>
    <a href="https://www.instagram.com/theshoemanesociety/" style="color:white">Shoemane Society</a>
    <a href="https://www.facebook.com/cassidy.tucker" style="color:white">Facebook</a>
    <a href="https://www.linkedin.com/in/cassidy-tucker-71b104121/" style="color:white">Linked In</a>
    <a href="https://github.com/Cassidy-Tucker" style="color:white">GitHub</a>
    </div> -->
  <!-- Scripts -->
  <script>
  function myFunction() {
    var x = document.getElementById("myNav");
    if (x.className === "navbar-inverse") {
      x.className += " responsive";
    } else {
      x.className = "navbar-inverse";
    }
  }
  </script>
  <script src="{{ asset('js/p5.js') }}" charset="utf-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.4.22/p5.min.js"></script>
  <script type="text/javascript" src="{{ asset('js/about-sketch.js') }}" charset="utf-8"></script>
</body>
</html>
