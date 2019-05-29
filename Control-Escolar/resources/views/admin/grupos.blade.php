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
          <input type="text" name="seccion" id="seccion" value="" required>
          <label for="seccion">Seccion</label>
        </div>
        <div class="input-field col s12 m5">
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
          <select class="" name="periodo" id="periodo">
            <option value="" disabled>Elige una opcion</option>
            <option value="Agosto-Diciembre {{ now()->year }}">Agosto-Diciembre {{ now()->year }}</option>
            <option value="Enero-Junio {{ now()->year }}">Enero-Junio {{ now()->year }}</option>
          </select>
          <label for="periodo">Periodo</label>
        </div>
        <div class="col s12" style="text-align: center;">

          <h4>Horario</h4>
          <ul class="tabs">
            <li class="tab col s2"><a class="active" href="#test1">Lunes</a></li>
            <li class="tab col s2"><a href="#test2">Martes</a></li>
            <li class="tab col s2"><a href="#test3">Miércoles</a></li>
            <li class="tab col s2"><a href="#test4">Jueves</a></li>
            <li class="tab col s2"><a href="#test5">Viernes</a></li>
            <li class="tab col s2"><a href="#test6">Sábado</a></li>
          </ul>
        </div>
        <div id="test1" class="col s12">
          <div class="input-field col s12 m3">
            <input type="text" class="timepicker" name="hora_ini_lunes" id="hora_ini_lunes" value="">
            <label for="hora_ini_lunes">Hora Inicio</label>
          </div>
          <div class="input-field col s12 m3">
            <input type="text" class="timepicker" name="hora_fin_lunes" id="hora_fin_lunes" value="">
            <label for="hora_fin_lunes">Hora Final</label>
          </div>
            <div class="input-field col s12 m6">
              <select class="" name="aula_lunes" id="aula_lunes">
                  <option value="0" default >Seleccione un aula</option>
          @foreach ($aulas as $aula )
                  <option value="{{ $aula->id }}">{{ $aula->aula }}</option>
          @endforeach
              </select>
            </div>
        </div>
        <div id="test2" class="col s12">
          <div class="input-field col s12 m3">
            <input type="text" class="timepicker" name="hora_ini_martes" id="hora_ini_martes" value="">
            <label for="hora_ini_martes">Hora Inicio</label>
          </div>
          <div class="input-field col s12 m3">
            <input type="text" class="timepicker" name="hora_fin_martes" id="hora_fin_martes" value="">
            <label for="hora_fin_martes">Hora Final</label>
          </div>
          <div class="input-field col s12 m6">
            <select class=""  name="aula_martes" id="aula_martes">
              <option value="0" default >Seleccione un aula</option>
      @foreach ($aulas as $aula )
              <option value="{{ $aula->id }}">{{ $aula->aula }}</option>
      @endforeach
            </select>
          </div>
        </div>
        <div id="test3" class="col s12">
          <div class="input-field col s12 m3">
            <input type="text" class="timepicker" name="hora_ini_miercoles" id="hora_ini_miercoles" value="">
            <label for="hora_ini_miercoles">Hora Inicio</label>
          </div>
          <div class="input-field col s12 m3">
            <input type="text" class="timepicker" name="hora_fin_miercoles" id="hora_fin_miercoles" value="">
            <label for="hora_fin_miercoles">Hora Final</label>
          </div>
          <div class="input-field col s12 m6">
            <select class="" name="aula_miercoles" id="aula_miercoles">
              <option value="0" default >Seleccione un aula</option>
      @foreach ($aulas as $aula )
              <option value="{{ $aula->id }}">{{ $aula->aula }}</option>
      @endforeach
            </select>
            <label for="aula_miercoles">Aula</label>
          </div>
        </div>
        <div id="test4" class="col s12">
          <div class="input-field col s12 m3">
            <input type="text" class="timepicker" name="hora_ini_jueves" id="hora_ini_jueves" value="">
            <label for="hora_ini_jueves">Hora Inicio</label>
          </div>
          <div class="input-field col s12 m3">
            <input type="text" class="timepicker" name="hora_fin_jueves" id="hora_fin_jueves" value="">
            <label for="hora_fin_jueves">Hora Final</label>
          </div>
          <div class="input-field col s12 m6">
            <select class=""  name="aula_jueves" id="aula_jueves">
              @foreach ($aulas as $aula )
                      <option value="{{ $aula->id }}">{{ $aula->aula }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div id="test5" class="col s12">
          <div class="input-field col s12 m3">
            <input type="text" class="timepicker" name="hora_ini_viernes" id="hora_ini_viernes" value="">
            <label for="hora_ini_viernes">Hora Inicio</label>
          </div>
          <div class="input-field col s12 m3">
            <input type="text" class="timepicker" name="hora_fin_viernes" id="hora_fin_viernes" value="">
            <label for="hora_fin_viernes">Hora Final</label>
          </div>
          <div class="input-field col s12 m6">
            <select class="" name="aula_viernes" id="aula_viernes">
              @foreach ($aulas as $aula )
                      <option value="{{ $aula->id }}">{{ $aula->aula }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div id="test6" class="col s12">
          <div class="input-field col s12 m3">
            <input type="text" class="timepicker" name="hora_ini_sabado" id="hora_ini_sabado" value="">
            <label for="hora_ini_sabado">Hora Inicio</label>
          </div>
          <div class="input-field col s12 m3">
            <input type="text" class="timepicker" name="hora_fin_sabado" id="hora_fin_sabado" value="">
            <label for="hora_fin_sabado">Hora Final</label>
          </div>
          <div class="input-field col s12 m6">
            <select class="" name="aula_sabado" id="aula_sabado">
              @foreach ($aulas as $aula )
                      <option value="{{ $aula->id }}">{{ $aula->aula }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="row">

        </div>
        <div class="row">
        </div>

        <div class="input-field col m3 s12">
          <button class="btn light-blue darken-4 tooltipped" data-position="right" data-tooltip="Una vez registrado dirijase a Grupos -> Listar grupos" type="submit">Registrar
            <i class="material-icons right">send </i>
          </button>
        </div>
      </div>
    </form>
  </div>
</div>


@endsection

@section('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.tooltipped');

  });
</script>
@endsection
