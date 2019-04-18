@extends('layouts.app_admin')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/admin/calendario.css') }}}" rel="stylesheet">
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
  <div class="fixed-action-btn">
    <a class="btn-floating btn-large  waves-effect waves-light light-blue darken-4 modal-trigger" href="#task-modal" id="btn_add_evento">
      <i class="large material-icons">add</i>
    </a>
  </div>
  <div class="section">
    <div class="row">
      <div class="col m6 push-m3 s12" style="text-align: center;">
        <h5>Control de Calendario Escolar</h5>
      </div>
    </div>
    <div class="divider"></div>
    <div id="full-calendar">
      <div class="row">
        <div class="col s12 m4 l3">
          <div id="task-modal" class="modal bottom-sheet">
            <div class="modal-content">
              <div class="row">
                <div class="col m6 push-m3 s12" style="text-align: center;">
                  <h4>Registrar evento</h4>
                </div>
              </div>
              <div class="row">

                <form class="col s12" id="form_evento" action="{{route('evento_nuevo')}}" method="post">
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="input-field col m4 s12">
                      <input id="event" type="text" name="nombre" class="validate">
                      <label for="event">Nombre del evento</label>
                    </div>
                    <div class="input-field col m3 s12">
                      <label for="fecha1">Fecha de inicio </label>
                      <input type="text" name="inicio" class="datepicker" id="fstart">
                    </div>
                    <div class="input-field col m3 s12">
                      <label for="fecha2">Fecha de cierre </label>
                      <input type="text" name="fin" class="datepicker" id="fend">
                    </div>
                    <div id="color" class="input-field col m2 s12">
                      <select name="color">
                        <option value="green" disabled selected>Elija una opción</option>
                        <option value="#f44336">Color rojo</option>
                        <option value="#e91e63">Color rosa</option>
                        <option value="#9c27b0">Color purpura</option>
                        <option value="#673ab7">Color purpura obscuro</option>
                        <option value="#3f51b5">Color indigo</option>
                        <option value="#2196f3">Color azul</option>
                        <option value="#03a9f4">Color azul claro</option>
                        <option value="#00bcd4">Color cian</option>
                        <option value="#009688">Color turquesa</option>
                        <option value="#4caf50">Color verde</option>
                        <option value="#8bc34a">Color verde claro</option>
                        <option value="#ffeb3b">Color lima</option>
                        <option value="#ffeb3b">Color amarillo</option>
                        <option value="#ffc107">Color ambar</option>
                        <option value="#ff9800">Color naranja</option>
                        <option value="#ff5722">Color naranja obscuro</option>
                        <option value="#795548">Color cafe</option>
                        <option value="#9e9e9e">Color gris</option>
                        <option value="#607d8b">Color verde-azul</option>
                        <option value="#ffffff">Color negro</option>
                        <option value="#000000">Color blanco</option>
                      </select>
                    </div>
                  </div>


                  <div class="modal-footer">
                    <button class="btn light-blue darken-4 left" type="submit" id="registrar_evento">Registrar Evento
                      <i class="material-icons right">send </i>
                    </button>
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">
                      <i class="material-icons blue-text text-darken-4"> fullscreen_exit </i>
                      <b> Salir </b></a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col m10 push-m1 s10">
          <div id='calendar'></div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col m8 push-m2 s12" style="text-align: center;">
      <h5>Configuración del periodo escolar actual</h5>
    </div>
    <table id="example" class="responsive-table striped" style="width:100%">
      <thead>
        <tr>
          <th>Periodo actual</th>
          <th>Fecha inicio</th>
          <th>Fecha terminación</th>
          <th>Director</th>
          <th>Jefe de control escolar</th>
          <th>Fecha y hora de registro</th>
          <th>Fecha y hora de actualización</th>
          <th></th>
        </tr>
      </thead>
      <tbody>

        <tr>
          <td>periodo_actual</td>
          <td>fecha_inicio</td>
          <td>fecha_terminacion</td>
          <td>director</td>
          <td>jefe_control_escolar</td>
          <td>registro</td>
          <td>actualización</td>
          <td> <a href="#modal5" class="waves-effect waves-light btn modal-trigger">Modificar</a></td>

          <div id="modal5" class="modal bottom-sheet">
            <div class="modal-content">
              <h4>Bitácora de movimientos</h4>
              <ul class="collection">
                <li class="collection-item avatar">
                  <i class="mdi-file-folder circle"></i>
                  <span class="title">Detalle</span>
                  <table id="example" class="responsive-table striped" style="width:100%">
                    <thead>
                      <tr>
                        <th>ID movimiento</th>
                        <th>Usuario</th>
                        <th>Rol</th>
                        <th>Fecha y hora</th>
                        <th>Tipo de moviento</th>
                        <th>Tabla afectada</th>
                        <th>Campo alterado</th>
                        <th>Valor anterior</th>
                        <th>Valor nuevo</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>U1</td>
                        <td>adminprueba</td>
                        <td>administrador</td>
                        <td>YYYY-MM-DD HH:MI:SS</td>
                        <td>Update</td>
                        <td>Materias</td>
                        <td>Nombre de materia</td>
                        <td>Introducción a ingeniería</td>
                        <td>ingeniería aplicada I</td>
                      </tr>
                    </tbody>
                  </table>
                  <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!--end container-->


@endsection

@section('scripts')
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

<script type="text/javascript" src="{{{ asset('js/picker.js') }}}"></script>
@endsection