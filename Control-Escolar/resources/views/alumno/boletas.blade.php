@extends('layouts.app_alumno')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/alumno/boletas.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/style_pdf2.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Boletas')


@section('content')
  <div class="contenedor row">
    <div class="col m6 push-m3 s12">
      <h5>Mis Boletas</h5>
    </div>
  </div>

  <div class="contenedor row">
    <div class="input-field col m6 push-m3 s12">
      <select id="sel_materia">
        <option value="" disabled selected>Elige una opción</option>
        <option value="1">Primer Semestre</option>
      </select>
      <label>Boleta</label>
    </div>
  </div>

  <div class="fixed-action-btn">
    <a class="btn-floating btn-large  waves-effect waves-light light-blue darken-4 tooltipped" data-position="left" data-tooltip="Generar PDF" href="" id="btn_pdf">
      <i class="far fa-file-pdf"></i>
    </a>
  </div>


  <div id="boleta" class="boleta">
    <div class="container" style="width: 24.1cm">
      <div class="row">
        <div class="col s12 m4 l2"><img src="{{{ asset('img/logos/logo_3_a.png') }}}" alt="" width="70%" style="margin:20px"></div>
        <div class="col s12 m4 l8"><div class="headPDF center" style="margin:20px 0px 0px 0px; font-size:20px">UNIVERSIDAD</div></div>
        <div class="col s12 m4 l8"><div class="headPDF">MARISTA VALLADOLID</div></div>
        <div class="col s12"><div class="head2PDF center">BOLETA DE CALIFICACIONES</div></div>
      </div>
      <br>
      <div class="subHeadPDF">DATOS DEL GRUPO</div>
      <div class="row">
        <div class="col s12 m6 l2 tabPDF">ALUMNO</div>
        <div class="col s12 m6 l6" id="alumno">{{$datos->apaterno}} {{$datos->amaterno}} {{$datos->nombres}}</div>
        <div class="col s12 m6 l2 tabPDF">NO CTRL</div>
        <div class="col s12 m6 l2" id="noctrl">{{$ncontrol}}</div>
      </div>
      <div class="row">
        <div class="col s12 m4 l2 tabPDF">CARRERA</div>
        <div class="col s12 m4 l2" id="carrera">{{$datos->carrera}}</div>
        <div class="col s12 m4 l2 tabPDF">SEMESTRE</div>
        <div class="col s12 m4 l2" id="semestre">{{$datos->semestre}}</div>
        <div class="col s12 m4 l2 tabPDF">PERIODO</div>
        <div class="col s12 m4 l2" id="periodo">{{$configuracion->periodo_actual}}</div>
      </div>


      <div class="row">
        <div class="subHeadPDF">CALIFICACIONES</div>
        <table class="striped" bgcolor="#cfd8dc" style="border: black 1px solid;">
          <thead>
            <tr>

                <th class="tabPDF center blue-grey" style="color:white;">CLAVE MATERIA</th>
                <th class="tabPDF center blue-grey" style="color:white;">MATERIA</th>
                <th class="tabPDF center blue-grey" style="color:white;">PRIMER PARCIAL</th>
                <th class="tabPDF center blue-grey" style="color:white;">SEGUNDO PARCIAL</th>
                <th class="tabPDF center blue-grey" style="color:white;">eXAMEN FINAL</th>
                <th class="tabPDF center blue-grey" style="color:white;">FALTAS</th>
                <th class="tabPDF center blue-grey" style="color:white;">Calificación final</th>
            </tr>
          </thead>

          <tbody>
            @foreach($calificaciones as $calificacion)
            <tr>

              <td class="bodyPDF center">{{$calificacion->id_materia}}</td>
              <td class="bodyPDF center">{{$calificacion->nombre_materia}}</td>
              <td class="bodyPDF center">{{$calificacion->primer_parcial}}</td>
              <td class="bodyPDF center">{{$calificacion->segundo_parcial}}</td>
              <td class="bodyPDF center">{{$calificacion->examen_final}}</td>
              <td class="bodyPDF center">{{$calificacion->total_faltas}}</td>
              <td class="bodyPDF center">{{$calificacion->promedio_calificacion}}</td>

            </tr>
            @endforeach
            <tr style="border: black 1px solid;">
              <th class="tabPDF center blue-grey" style="color:white;"></th>
              <th class="tabPDF center blue-grey" style="color:white;">PROMEDIO</th>
              <td class="tabPDF center blue-grey" style="color:white;">70</td>
              <td class="tabPDF center blue-grey" style="color:white;">65</td>
              <td class="tabPDF center blue-grey" style="color:white;">67.5</td>
              <td class="tabPDF center blue-grey" style="color:white;">-</td>
              <td class="tabPDF center blue-grey" style="color:white;">77.5</td>
            </tr>
          </tbody>
        </table>
        <br>
      </div>
    </div>
  </div>



@endsection


@section('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{{ asset('js/boletas.js') }}}"></script>

@endsection
