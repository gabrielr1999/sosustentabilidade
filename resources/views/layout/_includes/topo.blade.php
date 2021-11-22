<!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <meta charset="UTF-8">
        <title>@yield('titulo')</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script async defer src="https://kit.fontawesome.com/7dbebd85f2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="http://localhost/sosustentabilidade/public/css/style.css">


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      @yield('meta-tags')

      <style>
        html {
          font-family: GillSans, Calibri, Trebuchet, sans-serif;
        }
        body {
          display: flex;
          min-height: 100vh;
          flex-direction: column;
        }

        main {
          flex: 1 0 auto;
        }
  
        @yield('style')
      </style>

    </head>
    <body>
        <header>
            <ul id="dropdown1" class="dropdown-content">
              <li><a href="{{route('site.login.sair')}}">Sair</a></li>
            </ul>
            <ul id="dropdown2" class="dropdown-content">
              <div class="row" id="topbarsearch">
                <div class="input-field col s6 s12 red-text">
                  <input type="text" placeholder="search" id="autocomplete-input" class="autocomplete red-text" >
                  </div>
                </div>
              </div>
            </ul>
            <nav>
                <div class="nav-wrapper #4caf50 green">
                    <a href="{{route('site.home')}}" class="brand-logo">SOSustentabilidade</a>
                    
                    <ul class="right hide-on-med-and-down">
                    
                        <li><a href="{{route('site.home')}}">Home</a></li>
                        <li><a href="{{route('site.sobre_nos')}}">Sobre nós</a></li>
                        <li><a href="{{route('site.orientacoes')}}">Dicas</a></li>
                        @if(Auth::guest())
                          <li><a href="{{route('site.login')}}">Login</a></li>
                        @else
                          <li><a href="{{route('admin.denuncias')}}">Denuncias</a></li>
                          <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">{{Auth::user()->name}}<i class="material-icons right">arrow_drop_down</i></a></li>
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
            <nav>
              <div class="nav-wrapper #2e7d32 green darken-3">
              <form action="{{route('site.busca')}}" method="GET">
                        <div class="input-field">
                          <input id="search" type="search" name="search" placeholder="Pesquisar por Estado" required>
                          <label class="label-icon" for="search" ><i class="material-icons">search</i></label>
                          <i class="material-icons">close</i>
                        </div>
                      </form>
              </div>
            </nav>
        </header>