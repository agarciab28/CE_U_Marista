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
              @if (session('id_prof'))
              <a class="left black-text show-on-small-and-up">Bienvenido {{session('nombre')}}</a>
              @endif
              <div class="section ">
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


    	<li id="home"><a class="white-text" href="{{ route('docente_home') }}" ><i class="fas fa-home white-text menu-icon"></i>Inicio</a></li>

      <ul id="grupos" class="collapsible collapsible-accordion">
        <li>
          <a class="collapsible-header white-text" accordion="false" style="margin-left:1.3em;"> <i class="material-icons white-text" style="font-size:1.5em;">library_books</i>  Mis grupos <i class="material-icons right white-text" style="margin-right:0;">arrow_drop_down</i></a>
          <div class="collapsible-body">
            <ul class="dropdown_menu">
              <li><a href="{{ route('docente_grupos') }}" class="white-text">Listado completo</a></li>
              <li><a href="" class="white-text">Grupos en extraordinario</a></li>
            </ul>
          </div>
        </li>
      </ul>

      <ul id="alumnos" class="collapsible collapsible-accordion">
        <li>
          <a class="collapsible-header white-text" accordion="false" style="margin-left:1.3em;"> <i class="material-icons white-text" style="font-size:1.5em;">group</i>  Alumnos <i class="material-icons right white-text" style="margin-right:0;">arrow_drop_down</i></a>
          <div class="collapsible-body">
            <ul class="dropdown_menu">
              <li><a href="" class="white-text">Registrar Usuario</a></li>
              <li><a href="" class="white-text">Alumnos</a></li>
              <li><a href="" class="white-text">Profesores</a></li>
              <li><a href="" class="white-text">Coordinadores</a></li>
            </ul>
          </div>
        </li>
      </ul>


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

    @yield('scripts')
</html>
