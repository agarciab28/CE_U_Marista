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
          {{ csrf_field() }}
              <div class="row card-panel">
                <div class="row">
                  <div class="col m6 push-m3 s12" style="text-align: center;">
                    <h4>Crear Grupo</h4>
                  </div>
                </div>
                <div class="input-field col s12 m3">
                  <input type="text" name="seccion" id="seccion" value="">
                  <label for="seccion">Seccion</label>
                </div>
                <div class="input-field col s12 m4">
                  <select class="" name="carrera" id="carrera">
                    <option value="" disabled>Elige una opcion</option>
                    @foreach($carreras as $carrera)
                        <option value="{{$carrera->id_carrera}}">{{$carrera->nombre_carrera}}</option>
                    @endforeach
                    </select>
                    <label for="carrera">Carrera</label>
                  </div>
                  <div class="input-field col s12 m4">
                    <select class="" name="materia" id="materia">
                      <option value="" disabled>Elige una opcion</option>
                        @foreach($materias as $materia)
                            <option value="{{$materia->id_materia}}">{{$materia->nombre_materia}}</option>
                        @endforeach
                    </select>
                    <label for="materia">Materia</label>
                  </div>
                  <div class="input-field col s12 m6">
                    <select class="" name="profesor" id="profesor">
                      <option value="" disabled>Elige una opcion</option>
                        @foreach($profesores as $profesor)
                            <option value="{{$profesor->id_prof}}">{{$profesor->nombres}} {{$profesor->apaterno}} {{$profesor->amaterno}}</option>
                        @endforeach
                    </select>
                    <label for="profesor">Profesor</label>
                  </div>
                  <div class="input-field col s12 m6">
                    <input type="text" name="aula" id="aula" value="">
                    <label for="aula">Aula</label>
                  </div>
                  <div class="input-field col s12 m3">
                    <input type="text" class="timepicker" name="hora_ini" id="hora_ini" value="">
                    <label for="hora_ini">Hora Inicio</label>
                  </div>
                  <div class="input-field col s12 m3">
                    <input type="text" class="timepicker" name="hora_fin" id="hora_fin" value="">
                    <label for="hora_fin">Hora Final</label>
                  </div>
                  <div class="input-field col s12 m6">
                    <input type="text" name="periodo" id="periodo" value="">

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
