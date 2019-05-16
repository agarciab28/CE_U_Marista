@extends('layouts.app_admin')

@section('stylesheet')
<link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css" rel="stylesheet">

<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/admin/grupos.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/admin/alumnos.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Lista de Grupos')

@section('content')
<div class="container">
  <div class="row contenedor">
    <div class="col m6 push-m3 s12">
      <h5>Control de Grupos</h5>
    </div>
  </div>
  <table id="example" class="responsive-table striped" style="width:100%">
    <thead>
      <tr>
        <th>ID Grupo</th>
        {{-- <th>Seccion</th> --}}
        <th>Carrera</th>
        <th>Materia</th>
        <th>Profesor</th>
        <th>Periodo</th>
        <th>Asignar</th>
        <th>Modificar</th>
        <th>Alumnos</th>
        <th>Horario</th>
        <th>Deshabiliar</th>
      </tr>
    </thead>
    <tbody>

      @foreach($grupos as $grupo)

      <tr>
        <td>{{$grupo->grupo}}</td>
        {{-- <td>{{$grupo->carrera}}</td> --}}
        <td>{{$grupo->nombre_carrera}}</td>
        <td>{{$grupo->nombre_materia}}</td>
        <td>{{$grupo->nombres}} {{$grupo->apaterno}} {{$grupo->amaterno}}</td>
        <td>{{$grupo->periodo}}</td>
        <td> <a href="{{ route('admin_asignar',[$grupo->grupo,$grupo->id_carrera]) }}" class="btn tooltipped" data-position="bottom" data-tooltip="Selecciona los alumnos que conforman el grupo a registrar"><i class="fas fa-user-plus"></i></a></td>
        <td> <a onclick="modificar_grupo('{{$grupo->grupo}};{{$grupo->seccion}};{{$grupo->nombre_carrera}};{{$grupo->id_carrera}};{{$grupo->nombre_materia}};{{$grupo->id_materia}};{{$grupo->nombres}} {{$grupo->apaterno}} {{$grupo->amaterno}};{{$grupo->id_prof}};{{$grupo->periodo}}')" href="#modal_modificar" class="btn modal-trigger tooltipped" data-position="bottom" data-tooltip="Reasignación de profesor, cambio de carrera o materia"><i class="fas fa-pencil-ruler"></i></a> </td>
        <td> <a href="{{ route('admin_show_lista',[$grupo->grupo])}}" class="btn tooltipped" data-position="bottom" data-tooltip="Ver los alumnos registrados en este grupo"><i class="fas fa-users"> </td>
        <td> <a href="{{ route('admin_show_horarios',[$grupo->grupo])}}" class="btn tooltipped" data-position="bottom" data-tooltip="Ver los horarios de este grupo"><i class="fas fa-clock"></td>
        <td> <a href="{{route('elimina_grupo',['grupo'=>$grupo->grupo])}}" class="btn {{($grupo->activo>0)?' green':'red'}} tooltipped" data-position="bottom" data-tooltip="Cambiar el estado del grupo en el periodo escolar actual">{{($grupo->activo>0)?' Habilitado':'Deshabilitado'}}</a> </td>

      </tr>

      @endforeach
    </tbody>
  </table>
</div>
<!--modal modificar grupos-->
<div id="modal_modificar" class="modal modal-fixed-footer">
  <div class="modal-content">
    <div class="row">
      <form class="col  s12 m12" id="form_mod_grupos" action="{{route('edita_grupo')}}" method="post">
        {{ csrf_field() }}
        <div class="row">
          <div class="col m6 push-m3 s12" style="text-align: center;">
            <h4>Modificar Grupo</h4>
          </div>
        </div>
        <div class="input-field col s12 m3">
          <input type="text" name="idgrupo" id="idgrupo"  placeholder="" readonly required maxlength="35">
          <span for="idgrupo">Identificador</span>
        </div>
        <div class="input-field col s12 m3">
          <input type="text" name="seccion" id="seccion" value="">
          <span for="seccion">Seccion</span>
        </div>
        <div class="input-field col s12 m3">
          <select class="" name="carrera" id="carrera">
          @foreach($carrerasl as $carrera)
            <option value="{{$carrera->id_carrera}}">{{$carrera->nombre_carrera}}</option disabled>Elige una opcion</option>
            @endforeach
          </select>
          <span for="carrera">Carrera actual: <div class="" id="carr_spn"></div></span>
        </div>
        <div class="input-field col s12 m3">
          <select class="" name="materia" id="materia">
          @foreach($materiasl as $materia)
            <option value="{{$materia->id_materia}}">{{$materia->nombre_materia}}</option disabled>Elige una opcion</option>
            @endforeach
          </select>
          <span for="materia">Materia actual: <div class="" id="mat_spn"></div></span>
        </div>
        <div class="input-field col s12 m6">
          <select class="" name="profesor" id="profesor">
          @foreach($profesoresl as $profesor)
            <option value="{{$profesor->id_prof}}">{{$profesor->nombres}} {{$profesor->apaterno}} {{$profesor->amaterno}}</option>
            @endforeach
          </select>
          <span for="profesor">Profesor actual: <div class="" id="prf_spn"></div></span>
        </div>
        <div class="input-field col s12 m6">
          <input type="text" name="periodo" id="periodo" value="">

          </select>
          <span for="periodo">Periodo</span>
        </div>

        <div class="row">
        </div>

        <div class="input-field col m3 s12">
          <button class="btn light-blue darken-4" type="submit">Modificar
            <i class="material-icons right">send </i>
          </button>
        </div>
      </form>
    </div>

  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">
      <i class="material-icons blue-text text-darken-4"> fullscreen_exit </i>
      <b> Salir </b></a>

  </div>
</div>
@endsection

@section('scripts')
<script src="{{{ asset('js/datatables.js') }}}"></script>
<script src="{{{asset('js/asigna.js')}}}"></script>
<script src="{{{ asset('js/validaciones.js') }}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.tooltipped');

  });
</script>


@endsection
