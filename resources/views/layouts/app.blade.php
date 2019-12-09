<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="{{route('siswa.index')}}">
              <img src="logomp.ppg" alt="merahputih.com" style="width:40px;">
            </a>
            
            <!-- Links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{route('siswa.create')}}">Tambah Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://livesql.oracle.com/apex/livesql/s/jbdufxaelme89p8xidcydchtb">Soal Kedua (SQL)</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="{{route('siswa.byAb')}}">Soal Kedua (Nama Ab)</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('siswa.by20')}}">Soal Kedua (Umur 20 Tahun)</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('siswa.byKecamatan')}}">Soal Kedua (Kecamatan)</a> --}}
                </li>
            </ul>
          </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
