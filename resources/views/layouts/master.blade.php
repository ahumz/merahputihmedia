<html>
    <head>
        <title>Laravel - @yield('title')</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="beranda">Beranda</a><span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="profile">Profile</a>
      <a class="nav-item nav-link" href="about">About</a>
      <a class="nav-item nav-link" href="merek">Merek</a>
    </div>
  </div>
</nav>
        <h2>@yield('judul')</h2>
        <div class="navbar">
            ini nav
        </div>
        <hr>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>