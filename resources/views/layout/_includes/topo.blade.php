<!DOCTYPE html>
  <html>
    <head>
        <title>@yield('titulo')</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <style>
        html {
          font-family: GillSans, Calibri, Trebuchet, sans-serif;
        }
  
        @yield('style')
      </style>

    </head>
    <body>
        <header>
            <nav>
                <div class="nav-wrapper #4caf50 green">
                    <a href="#!" class="brand-logo">SOSustentabilidade</a>
                    <a href="#!" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="http://localhost/sosustentabilidade/public/">Home</a></li>
                        <li><a href="{{route('site.sobre_nos')}}">Sobre nós</a></li>
                        @if(Auth::guest())
                          <li><a href="{{route('site.login')}}">Login</a></li>
                        @else
                          <li><a href="{{route('admin.denuncias')}}">Denuncias</a></li>
                          <li><a href="#">{{Auth::user()->name}}</a></li>
                          <li><a href="{{route('site.login.sair')}}">Sair</a></li>
                        @endif
                    </ul>
                    <ul class="sidenav" id="mobile">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{route('site.sobre_nos')}}">Sobre nós</a></li>
                        @if(Auth::guest())
                          <li><a href="{{route('site.login')}}">Login</a></li>
                        @else
                          <li><a href="{{route('admin.denuncias')}}">Denuncias</a></li>
                          <li><a href="#">{{Auth::user()->name}}</a></li>
                          <li><a href="{{route('site.login.sair')}}">Sair</a></li>
                        @endif
                    </ul>
                </div>
            </nav>
        </header>