@extends('layouts.app_admin')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/grupos.css') }}}" rel="stylesheet">
  <!-- CORE CSS-->
  <link href="{{{ asset('css/style.css') }}}" type="text/css" rel="stylesheet" media="screen,projection">
@endsection

@section('title', 'Crear Grupo')

@section('content')
  <div class="section container">
      <div class="row">
          <form class="col  s12 m12" id="" action="" method="post">

              <div class="row card-panel">
                  <div class="input-field col s12 m3">
                    <input type="text" name="seccion" id="seccion" value="">
                    <label for="seccion">Seccion</label>
                  </div>
                  <div class="input-field col s12 m6">
                    <select class="" name="carrera" id="carrera">
                      <option value="" disabled>Elige una opcion</option>
                    </select>
                    <label for="carrera">Carrera</label>
                  </div>
                  <div class="input-field col s12 m3">
                    <select class="" name="materia" id="materia">
                      <option value="" disabled>Elige una opcion</option>
                    </select>
                    <label for="materia">Materia</label>
                  </div>
                  <div class="input-field col s12 m6">
                    <select class="" name="profesor" id="profesor">
                      <option value="" disabled>Elige una opcion</option>
                    </select>
                    <label for="profesor">Profesor</label>
                  </div>
                  <div class="input-field col s12 m6">
                    <select class="" name="periodo" id="periodo">
                      <option value="" disabled>Elige una opcio</option>
                    </select>
                    <label for="periodo">Periodo</label>
                  </div>

                  <div class="row">
                  </div>

                  <div class="input-field col m3 s12">
                      <button class="btn light-blue darken-4" type="submit">Registrar
                          <i class="material-icons right">send </i>
                      </button>
                  </div>
              </div>
          </form>
      </div>
  </div>
@endsection

@section('scripts')

@endsection
