
@extends('layouts.app_docente')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/docente/grupos.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Mis grupos')

@section('content')
  <div class="row contenedor">
    <div class="col m6 push-m3 s12">
      <h5>Mis Grupos</h5>
    </div>
  </div>
@php
$grupo_seleccionado=0;
@endphp
<div class="section container">
  <div class="row">
    @foreach($grupos_de_profesor as $grupo)
      <div class="col s12 m4">
          <div class="card card-grupo">
              <div class="card-content black-text z-depth-1">
                  <span class="card-title activator">Grupo: {{$grupo->id_grupo}}</span>
                  <span class="titulo">Seccion:</span> 01 <br>
                  <span class="titulo">Materia: </span> {{$grupo->nombre_materia}} <br>
                  <span class="titulo">Nombre del Profesor: </span> Nancy asdf <br>
                  <span class="titulo">Carrera: </span> Sistemas Computacionales <br>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Acciones<i class="material-icons right">close</i></span>
                <div class="contenedor">
                  <br>
                  <div class="collection">
                    <form class="" action="{{ route('docente_consulta') }}" method="post">
                      @csrf
                      <input type="text" name="id_grupo" value="" hidden>
                      <button type="submit" class="collection-item black-text botonModal">Calificaciones Parciales</button>
                    </form>
                    <form class="" action="{{ route('docente_calif') }}" method="post">
                      @csrf
                      <input type="text" name="id_grupo" value="" hidden>
                      <button type="submit" class="collection-item black-text botonModal">Calificaciones Finales</button>
                    </form>
                    <form class="" action="{{ route('docente_pdfC') }}" method="get">
                      @csrf
                      <input type="text" name="id_grupo" value="" hidden>
                      <button type="submit" class="collection-item black-text botonModal">Relación de Alumnos no Aprobados</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="card-action" style="background-color:#FFB500">
                <div class="contenedor activator contenedor-card">
                  <a class="white-text activator" ><i class="fas fa-cog "></i> Acciones</a> <br>
                </div>
              </div>
          </div>
      </div>
      @endforeach
  </div>
</div>


@endsection

@section('scripts')
<script src="{{{asset('js/asigna.js')}}}"></script>

@endsection
