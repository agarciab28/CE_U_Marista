<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="theme-color" content="#003865" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  @yield('stylesheet')
  <title>CE - @yield('title')</title>

  <link rel="shortcut icon" href="{{ asset('/Logo Marista.ico') }}" />
</head>

<body>
  <!-- NAVBAR -->
  <header>

    <nav>
      <div class="nav-wrapper">
        <div class="row">
          <div class="col s12">
            <a href="#" data-target="sidenav-1" class="left sidenav-trigger hide-on-medium-and-up"><i class="material-icons">menu</i></a>
            <!--<a class="left black-text show-on-small-and-up">Bienvenido {{session('nombre')}}</a>-->

            <div class="section">
              <ul class="left hide-on-med-and-down">
                @if (session('username'))

                <li class="chip">
                  <img src="{{{ session('url')}}}" alt="Contact Person">
                  Bienvenido {{session('nombre')}}
                </li>
                @endif
              </ul>
              <ul class="right hide-on-med-and-down">
                <li>
                  <a href="/cerrar_sesion" class="waves-effect waves-light btn right show-on-medium-and-up hide-on-small-only">Cerrar Sesion</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <!-- LEFT SIDEBAR	 -->
  <ul id="sidenav-1" class="sidenav sidenav-fixed">
    <li>
      <div class="row section">
        <img class="responsive-img col s10 push-s1" src="{{{ asset('img/logos/logo_1_b.png') }}}">
      </div>
    </li>


    <li id="home"><a class="white-text" href="{{ route('admin_home') }}"><i class="fas fa-home white-text menu-icon"></i>Inicio</a></li>

    <ul id="usuarios" class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header white-text" accordion="false" style="margin-left:1.3em;"> <i class="fas fa-user white-text" style="font-size:1.5em;"></i> Usuarios <i class="material-icons right white-text" style="margin-right:0;">arrow_drop_down</i></a>
        <div class="collapsible-body">
          <ul class="dropdown_menu">
            <li><a href="{{ route('admin_registrar') }}" class="white-text">Registrar Usuario</a></li>
            <li><a href="{{ route('admin_lalumnos') }}" class="white-text">Alumnos</a></li>
            <li><a href="{{ route('admin_lprofes') }}" class="white-text">Profesores</a></li>
            <li><a href="{{ route('admin_lcoordinadores') }}" class="white-text">Coordinadores</a></li>
          </ul>
        </div>
      </li>
    </ul>

    <li id="carreras"><a class="white-text" href="{{ route('admin_carreras') }}"><i class="fas fa-book white-text menu-icon"></i>Carreras</a></li>

    <li id="materias"><a class="white-text" href="{{ route('admin_materias') }}"><i class="fas fa-book-open white-text menu-icon"></i>Materias</a></li>

    <li id="planes"><a class="white-text" href="{{ route('admin_planes') }}"><i class="far fa-clock white-text menu-icon"></i>Planes de estudio</a></li>

    <li id="aulas"><a class="white-text" href="{{ route('admin_aulas') }}"><i class="fas fa-school white-text menu-icon"></i>Aulas</a></li>

    <ul id="grupos" class="collapsible collapsible-accordion in">
      <li>
        <a class="collapsible-header white-text" style="margin-left:1.3em;"> <i class="fas fa-users white-text" style="font-size:1.5em;"></i> Grupos<i class="material-icons right white-text" style="margin-right:0;">arrow_drop_down</i></a>
        <div class="collapsible-body">
          <ul class="dropdown_menu">
            <li><a href="{{ route('admin_registrarG') }}" class="white-text">Crear Grupo</a></li>
            <li><a href="{{ route('admin_lgrupos') }}" class="white-text">Listar grupos</a></li>
          </ul>
        </div>
      </li>
    </ul>

    <li id="calendario"><a class="white-text" href="{{ route('admin_calendario') }}"><i class="far fa-calendar-alt white-text menu-icon"></i>Calendario</a></li>

    <li id="estadisticas"><a class="white-text" href="{{ route('admin_estadisticas') }}"><i class="fas fa-chart-pie white-text menu-icon"></i>Estadisticas</a></li>

    <li id="bitacora"><a class="white-text" href="{{ route('admin_bitacora') }}"><i class="fas fa-file-signature white-text menu-icon"></i></i>Bitácora</a></li>

    <li id="misdatos"><a class="white-text" href="{{ route('mis_datos') }}"><i class="fas fa-user-cog white-text menu-icon"></i>Mis datos</a></li>

    <li id=" cerrar_sesion"><a class="show-on-small hide-on-med-and-up white-text" href="/">Cerrar Sesion</a></li>

    <div class="contenedor">
      <div class="white-text footer">
        Copyright ©
        <script type="text/javascript">
          document.write(new Date().getFullYear());
        </script>
        <a class="grey-text text-lighten-4" href="https://umvalla.edu.mx/" target="_blank">Instituto Valladolid - Morelia</a> ® Todos los derechos reservados. Diseñado y desarrollado por <a class="grey-text text-lighten-4" href="http://www.itmorelia.edu.mx/">Instituto Tecnológico de Morelia</a>
      </div>
    </div>

  </ul>

  <main>
    @yield('content')
    <!-- START FOOTER -->
    {{-- <footer class="page-footer">
          <div class="footer-copyright">
              <div class="container">
                  Copyright ©
                  <script type="text/javascript">
                    document.write(new Date().getFullYear());
                  </script>
                  <a class="grey-text text-lighten-4" href="https://umvalla.edu.mx/" target="_blank">Instituto Valladolid - Morelia</a> ® Todos los derechos reservados. Diseñado y desarrollado por <a class="grey-text text-lighten-4"  href="http://www.itmorelia.edu.mx/">Instituto Tecnológico de Morelia</a>
              </div>
          </div>
      </footer> --}}
    <!-- END FOOTER -->

  </main>

</body>


<!-- Scripts-->
<script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="{{{ asset('js/init.js') }}}"></script>

@yield('scripts')

</html>