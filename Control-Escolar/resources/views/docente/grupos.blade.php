@extends('layouts.app_docente')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/docente/grupos.css') }}}" rel="stylesheet">
  <!-- CORE CSS-->
  <link href="{{{ asset('css/style.css') }}}" type="text/css" rel="stylesheet" media="screen,projection">
@endsection

@section('title', 'Mis grupos')

@section('content')
  <div class="section container">
      <div class="row">
        <div class="col s6">

  <ul class="collection">
    <li class="collection-item avatar">
      <a href="#modal1" class= "modal-trigger">
        <i class="material-icons yellow-text text-darken-3 circle blue darken-4"> book </i>
      </a>
      <span class="title">Materia</span>
      <p>Clave grupo<br>
         Horario:
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons blue-grey-text text-darken-4">picture_as_pdf</i></a>

  </ul>


        </div>
      </div>
  </div>

        <!--@foreach($carreras as $carrera)<option value="{{$carrera->id_carrera}}">{{$carrera->nombre_carrera}}</option>@endforeach-->
    </div>
  </div>
<!--modal-->
  <div id="modal1" class="modal bottom-sheet">
      <div class="modal-content">
        <h4>Materia</h4>
        <p>
          <div class="collection">
            <a href="#!" class="collection-item black-text">Consultar</a>
            <a href="#!" class="collection-item black-text">Calificaciones</a>
            <a href="#!" class="collection-item black-text">Faltas</a>
            <a href="#!" class="collection-item black-text">Método de evaluación</a>
            <a href="#!" class="collection-item black-text">Obtener acta de calificaciones</a>
            <a href="#!" class="collection-item black-text">Generar PDF</a>
          </div>
        </p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">
        <i class="material-icons blue-text text-darken-4"> fullscreen_exit </i>
        <b> Salir </b></a>

      </div>
    </div>

@endsection

@section('scripts')

@endsection
