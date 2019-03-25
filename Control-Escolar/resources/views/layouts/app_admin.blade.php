<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="theme-color" content="#003865" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">

    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    @yield('stylesheet')
    <title>CE - @yield('title')</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <header>

    	<nav>
    		<div class="nav-wrapper">
    			<div class="row">
    				<div class="col s12">
    					<a href="#" data-target="sidenav-1" class="left sidenav-trigger hide-on-medium-and-up"><i class="material-icons">menu</i></a>
              <a class="left black-text show-on-small-and-up">Bienvenido @yield('usuario') </a>
              <div class="section ">
                <ul class="right hide-on-med-and-down">
                  <li>
                    <a href="javascript:toggleFullScreen();" class="waves-effect waves-light btn right show-on-medium-and-up hide-on-small-only">
                      <i class="material-icons">settings_overscan</i>
                    </a>
                  </li>
                  <li>
                    <a href="/" class="waves-effect waves-light btn right show-on-medium-and-up hide-on-small-only">Cerrar Sesion</a>
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


    	<li id="home"><a class="white-text" href="/admin" ><i class="fas fa-home white-text" style="margin-right:0;"></i>Inicio</a></li>

      <ul id="registrar" class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header white-text" style="margin-left:2em;"> Usuarios <i class="material-icons right white-text" style="margin-right:0;">arrow_drop_down</i></a>
              <div class="collapsible-body">
                <ul class="dropdown_menu">
                  <li><a href="/admin/registrar" class="white-text">Registrar Usuario</a></li>
                  <li><a href="/admin/listas/alumnos" class="white-text">Alumnos</a></li>
                  <li><a href="/admin/listas/profes" class="white-text">Profesores</a></li>
                  <li><a href="/admin/listas/coordinadores" class="white-text">Coordinadores</a></li>
                </ul>
              </div>
            </li>
          </ul>

          <ul id="grupos" class="collapsible collapsible-accordion">
                <li>
                  <a class="collapsible-header white-text" style="margin-left:2em;"> Grupos<i class="material-icons right white-text" style="margin-right:0;">arrow_drop_down</i></a>
                  <div class="collapsible-body">
                    <ul class="dropdown_menu">
                      <li><a href="/admin/grupos" class="white-text">Crear Grupo</a></li>
                      <li><a href="/admin/listas/grupos" class="white-text">Listar grupos</a></li>
                    </ul>
                  </div>
                </li>
              </ul>



      <li id="carreras"><a class="white-text" href="/admin/carreras"><i class="fas fa-book white-text" style="margin-right:0;"></i>Carreras</a></li>
      <li id="materias"><a class="white-text" href="/admin/materias"><i class="fas fa-book-open white-text" style="margin-right:0;"></i>Materias</a></li>
      <li id="calendario"><a class="white-text" href="/admin/calendario"><i class="far fa-calendar-alt white-text" style="margin-right:0;"></i>Calendario</a></li>
      <li id="planes"><a class="white-text" href="/admin/planes"><i class="far fa-clock white-text" style="margin-right:0;"></i>Planes de estudio</a></li>
      <li id="estadisticas"><a class="white-text" href="/admin/estadisticas"><i class="fas fa-chart-pie white-text" style="margin-right:0px;"></i>Estadisticas</a></li>
        <li id="cerrar_sesion"><a class="show-on-small hide-on-med-and-up white-text" href="/">Cerrar Sesion</a></li>

        <div class="contenedor">
          <div class="white-text footer">
              Copyright ©
              <script type="text/javascript">
                document.write(new Date().getFullYear());
              </script>
              <a class="grey-text text-lighten-4" href="https://umvalla.edu.mx/" target="_blank">Instituto Valladolid - Morelia</a> ® Todos los derechos reservados. Diseñado y desarrollado por <a class="grey-text text-lighten-4"  href="http://www.itmorelia.edu.mx/">Instituto Tecnológico de Morelia</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{{ asset('js/init.js') }}}"></script>
    <script src="{{{ asset('js/fullscreen.js') }}}"></script>

    @yield('scripts')
</html>
