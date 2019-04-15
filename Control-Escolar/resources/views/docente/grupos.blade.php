
@extends('layouts.app_docente')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/docente/grupos.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Mis grupos')

@section('content')
<div class="section container">
  <div class="row">
      <div class="col s12 m4">
          <div class="card card-grupo">
              <div class="card-content black-text z-depth-3">
                  <span class="card-title">Grupo:</span>
                  <p>
                    Materia: <br>
                    Horario:
                  </p>
              </div>
              <div class="card-action">
                  <a href="#modal1" class="modal-trigger"><i class="fas fa-cog"></i> Opciones</a>
              </div>
          </div>
      </div>
  </div>
</div>

<!--@foreach($carreras as $carrera)<option value="{{$carrera->id_carrera}}">{{$carrera->nombre_carrera}}</option>@endforeach-->

<!--modal-->
<div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
        <h4>Materia</h4>
        <p>
            <div class="collection">
                <a href="{{ route('alumnosxgrupo') }}" class="collection-item black-text">Consultar</a>
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
