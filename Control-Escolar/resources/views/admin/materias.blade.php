@extends('layouts.app_admin')

@section('stylesheet')
<link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css" rel="stylesheet">

<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/admin/materias.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/admin/alumnos.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Materias')

@section('content')

<div class="section container">

    <div class="row">
        <form class="col  s12 m12" id="form_materia" action="" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col m4 push-m4 s12">
                    <h4>Control de Materias</h4>
                </div>
            </div>
            <div class="fixed-action-btn">
                <a class="btn-floating btn-large waves-effect waves-light red" id="close_registro_materia">
                    <i class="large material-icons">close</i>
                </a>
            </div>
            <div class="fixed-action-btn">
                <a class="btn-floating btn-large  waves-effect waves-light light-blue darken-4" id="btn_add_materia">
                    <i class="large material-icons">add</i>
                </a>
            </div>



            <div class="row" id="data_materia">

              <div class="input-field col m2 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="text" id="materia_id" name="id_materia" class="validate" required maxlength="35">
                  <label for="materia_id">clave de materia</label>
              </div>

                <div class="input-field col m3 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" name="nombrec" id="nombrec" class="validate" required maxlength="35">
                    <label for="nombrec">Nombre de materia</label>
                </div>

                <div class="input-field col m2 s12 ">
                    <select class="" name="plan" id="plan">
                      @foreach($planes as $plan)
                        <option value="{{$plan->id_plan}}">{{$plan->nombre_plan}}</option>
                      @endforeach
                    </select>
                    <label for="plan">Plan de estudios</label>
                </div>



                <div class="input-field col m3 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="number" id="materiasm" name="materiasm" class="validate" required maxlength="35">
                    <label for="materiasm">Horas de materia</label>
                </div>

                <div class="input-field col m2 s12">
                    <button class="btn light-blue darken-4" type="submit" id="registrar_materia">Registrar materia
                        <i class="material-icons right">send </i>
                    </button>
                </div>
            </div>

            <div class="row">
                <!-- dataTable -->
                <div class="container">
                    <table id="example" class="responsive-table striped" style="width:100%">
                        <thead>
                            <tr>
                              <th>Nombre de materia</th>
                              <th>Plan de estudios</th>
                              <th>Horas de materia</th>
                              <th>Modificar</th>
                              <th>Deshabilitar</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($materias as $materia)
                          <tr>
                            <th>{{$materia->nombre_materia}}</th>
                            <th>{{$materia->plan}}</th>
                            <th>{{$materia->horas_materia}}</th>
                            <td> <a href="#" class="btn">Modificar</a> </td>
                            <td> <a href="#" class="btn red">Deshabilitar</a> </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection


@section('scripts')
<script src="{{{ asset('js/datatables.js') }}}"></script>
<script src="{{{ asset('js/validaciones.js') }}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"></script>

@endsection
