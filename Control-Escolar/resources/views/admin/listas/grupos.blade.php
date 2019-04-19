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
    <table id="example" class="responsive-table striped" style="width:100%">
          <thead>
              <tr>
                  <th>ID Grupo</th>
                  <th>Seccion</th>
                  <th>Carrera</th>
                  <th>Materia</th>
                  <th>Profesor</th>
                  <th>Periodo</th>
                  <th>Asignar</th>
                  <th>Modificar</th>
                  <th>Deshabiliar</th>
              </tr>
          </thead>
          <tbody>
            @foreach($grupos as $grupo)

              <tr>
                  <td>{{$grupo->grupo}}</td>
                  <td>{{$grupo->carrera}}</td>
                  <td>{{$grupo->nombre_carrera}}</td>
                  <td>{{$grupo->nombre_materia}}</td>
                  <td>{{$grupo->nombres}} {{$grupo->aparterno}} {{$grupo->amaterno}}</td>
                  <td>{{$grupo->periodo}}</td>
                  <td> <a href="{{ route('admin_asignar',[$grupo->grupo,$grupo->id_carrera]) }}" class="btn">Asignar</a></td>
                  <td> <a href="#modal_modificar" class="btn modal-trigger">Modificar</a> </td>
                  <td> <a href="#" class="btn red">Deshabilitar</a> </td>
              </tr>

              @endforeach
          </tbody>
      </table>
  </div>

  <!--modal modificar grupos-->
  <div id="modal_modificar" class="modal bottom-sheet">
      <div class="modal-content">
        <div class="row">
          <form class="col  s12 m12" id="form_mod_grupos" action="{{route('admin_registrar_Grupos')}}" method="post">
          {{ csrf_field() }}
                <div class="row">
                  <div class="col m6 push-m3 s12" style="text-align: center;">
                    <h4>Modificar Grupo</h4>
                  </div>
                </div>
                <div class="input-field col s12 m3">
                  <input type="text" name="idgrupo" id="idgrupo" value="" disabled>
                  <label for="idgrupo">Identificador</label>
                </div>
                  <div class="input-field col s12 m3">
                    <input type="text" name="seccion" id="seccion" value="">
                    <label for="seccion">Seccion</label>
                  </div>
                  <div class="input-field col s12 m3">
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
  <script src="{{{ asset('js/validaciones.js') }}}"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>
  <script src="https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"></script>
@endsection
