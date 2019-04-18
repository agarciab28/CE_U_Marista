@extends('layouts.app_admin')

@section('stylesheet')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css" rel="stylesheet">

  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/usuarios.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/alumnos.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Asignar Alumnos')

@section('content')

  <!--Se recibe por URL id de grupo e id_carrera, se necesita un filtrado de alumnos de la carrera del id_carrera y mostrarlos en
  la tabla. Posteriormente, con el con los check box, seleccionar a los alumnos que formaran parte  del grupo

-->
  <div class="container">
    <form class="" action="" method="post">

      <div class="filtros">
          <div class="row">
                    <div class="col m6 push-m3 s12" style="text-align: center;">
                      <h4>Asignación de alumnos a grupo</h4>
                    </div>
          </div>
        <div class="row">


          <div class="input-field col m6 s12 ">

            <label for="fcarrera">Carrera:  aqui iria la consulta de carrera</label>
          </div>

          <div class="input-field col m6 s12 ">
            <input type="number" name="fperiodo" id="fperiodo" value="1" max="12" min="1" class="validate" required maxlength="35">
            <label for="fperiodo">Semestre</label>
          </div>
        </div>
      </div>


      <table id="example" class="responsive-table striped" style="width:100%">
            <thead>
                <tr>
                    <th>Seleccionar</th>
                    <th>Número de control</th>
                    <th>Nombre Completo</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Correo Electronico</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>
                        <label>
                          <input type="checkbox" class="filled-in" name="alumnos[]" value="">
                          <span>Seleccionar</span>
                        </label>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

            </tbody>
        </table>
        <div class="input-field">
          <button type="button" id="asignar_agp" class="btn" name="button">Registrar</button>
        </div>
        <div id="wea">

        </div>
    </form>

  </div>
@endsection

@section('scripts')
  <script src="{{{ asset('js/asignar.js') }}}"></script>
  <script src="{{{ asset('js/validaciones.js') }}}"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>
  <script src="https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"></script>
@endsection
