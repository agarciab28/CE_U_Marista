@extends('layouts.app_admin')

@section('stylesheet')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css" rel="stylesheet">

  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/usuarios.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/alumnos.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Lista de Profesores')

@section('content')
  <div class="container">
    <table id="example" class="responsive-table striped" style="width:100%">
          <thead>
              <tr>
                  <th>Nombre de Usuario</th>
                  <th>Nombre Completo</th>
                  <th>Fecha de Nacimiento</th>
                  <th>Correo Electronico</th>
                  <th>Modificar</th>
                  <th>Deshabilitar</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>456</td>
                  <td>safd</td>
                  <td>sadf</td>
                  <td>sdfa</td>
                  <td> <a href="#" class="btn">Modificar</a> </td>
                  <td> <a href="#" class="btn red">Deshabilitar</a> </td>
              </tr>
          </tbody>
      </table>
  </div>
@endsection

@section('scripts')
  <script src="{{{ asset('js/datatables.js') }}}"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>
  <script src="https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"></script>
@endsection
