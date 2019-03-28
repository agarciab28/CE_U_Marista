@extends('layouts.app_admin')

@section('stylesheet')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css" rel="stylesheet">

  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/usuarios.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/alumnos.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Lista de Grupos')

@section('content')
  <div class="container">
    <form class="" action="index.html" method="post">
      <table id="example" class="responsive-table striped" style="width:100%">
            <thead>
                <tr>
                    <th>Seleccionar</th>
                    <th>Nombre de Usuario</th>
                    <th>Nombre Completo</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Correo Electronico</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <label>
                          <input type="checkbox" class="filled-in" name="" value="">
                          <span>Seleccionar</span>
                        </label>
                    </td>
                    <td>fdghdf</td>
                    <td>fdghd</td>
                    <td>dfhg</td>
                    <td>fdghd</td>
                </tr>
            </tbody>
        </table>
        <div class="input-field">
          <button type="button" class="btn" name="button">Registrar</button>
        </div>
    </form>

  </div>
@endsection

@section('scripts')
  <script src="{{{ asset('js/datatables.js') }}}"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>
  <script src="https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"></script>
@endsection
