@extends('layouts.app_docente')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/docente/calendario.css') }}}" rel="stylesheet">
  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="{{{ asset('js/plugins/prism/prism.css') }}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{{ asset('js/plugins/chartist-js/chartist.min.css') }}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{{ asset('js/plugins/perfect-scrollbar/perfect-scrollbar.css') }}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{{ asset('js/plugins/fullcalendar/css/fullcalendar.min.css') }}}" type="text/css" rel="stylesheet" media="screen,projection">
@endsection

@section('title', 'Calendario')

@section('content')

<!--start container-->
        <div class="container">
          <div class="section">

            <p class="caption">FullCalendar es un complemento de jQuery que proporciona un calendario de eventos de arrastrar y soltar de tamaño completo como el que se muestra a continuación. Utiliza AJAX para buscar eventos sobre la marcha y se configura fácilmente para usar su propio formato de fuente.</p>
            <div class="divider"></div>
            <div id="full-calendar">
              <div class="row">
                <div class="col s12 m4 l3">
                  <div id='external-events'>
                    <h5 class="header">EVENTOS ARRASTRABLES</h5>
                    <div class='fc-event cyan'>Inicio de clases</div>
                    <div class='fc-event teal'>Bienvenida general</div>
                    <div class='fc-event cyan darken-1'>Examen departamental</div>
                    <div class='fc-event light-blue accent-4'>Inicio curso de inglés</div>
                    <div class='fc-event teal accent-4'>Taller de emprendimiento</div>
                    <p>
                      <input type='checkbox' id='drop-remove' />
                      <label for='drop-remove'>Remover evento despues de colocar</label>
                    </p>
                  </div>
                </div>
                <div class="col s12 m8 l9">
                  <div id='calendar'></div>
                </div>
              </div>
            </div>
            </div>


        </div>
        <!--end container-->


@endsection

@section('scripts')
  <!-- jQuery Library -->
<script type="text/javascript" src="{{{ asset('js/plugins/jquery-1.11.2.min.js') }}}"></script>
<!--prism-->
<script type="text/javascript" src="{{{ asset('js/plugins/prism/prism.js') }}}"></script>
<!--scrollbar-->
<script type="text/javascript" src="{{{ asset('js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}}"></script>

<!-- chartist -->
<script type="text/javascript" src="{{{ asset('js/plugins/chartist-js/chartist.min.js') }}}"></script>

<!-- Calendar Script -->
<script type="text/javascript" src="{{{ asset('js/plugins/fullcalendar/lib/jquery-ui.custom.min.js') }}}"></script>
<script type="text/javascript" src="{{{ asset('js/plugins/fullcalendar/lib/moment.min.js') }}}"></script>
<script type="text/javascript" src="{{{ asset('js/plugins/fullcalendar/js/fullcalendar.min.js') }}}"></script>
<script type="text/javascript" src="{{{ asset('js/plugins/fullcalendar/fullcalendar-script.js') }}}"></script>
<script type="text/javascript" src="{{{ asset('js/plugins/fullcalendar/lang/es.js') }}}"></script>

<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="js/plugins.js') }}}"></script>
@endsection
