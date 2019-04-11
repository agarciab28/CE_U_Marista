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
                  <th>Registrar</th>
                  <th>Modificar</th>
                  <th>Deshabiliar</th>
              </tr>
          </thead>
          <tbody>
            @foreach($grupos as $grupo)
              <tr>
                  <td>{{$grupo->grupo}}</td>
                  <td>{{$grupo->seccion}}</td>
                  <td>{{$grupo->nombre_carrera}}</td>
                  <td>{{$grupo->nombre_materia}}</td>
                  <td>{{$grupo->nombres}} {{$grupo->aparterno}} {{$grupo->amaterno}}</td>
                  <td>{{$grupo->periodo}}</td>
                  <td> <a href="{{ route('admin_asignar') }}" class="btn">Registrar</a> </td>
                  <td> <a href="#" class="btn">Modificar</a> </td>
                  <td> <a href="#" class="btn red">Deshabilitar</a> </td>
              </tr>
              @endforeach
          </tbody>
      </table>
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
