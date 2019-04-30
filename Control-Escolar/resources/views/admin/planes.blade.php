@extends('layouts.app_admin')

@section('stylesheet')
<link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css" rel="stylesheet">

<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/admin/planes.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/admin/alumnos.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Planes de Estudio')

@section('content')

  <div class="section container">
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large  waves-effect waves-light light-blue darken-4 modal-trigger" href="#modal_nueva" id="btn_add_plan">
            <i class="large material-icons">add</i>
        </a>
    </div>

    <div class="row">
        <div class="col m6 push-m3 s12" style="text-align: center;">
            <h4>Control de Planes de Estudio</h4>
        </div>
    </div>

    <div class="row">
        <table id="example" class="responsive-table striped" style="width:100%">
            <thead>
                <tr>
                    <th>Nombre de plan de estudios</th>
                    <th>Carrera</th>
                    <th>Fecha</th>
                    <th>Modificar</th>
                    <th>Deshabilitar</th>
                </tr>
            </thead>
            <tbody>
              @foreach($planes as $plan)
              <tr>
                <th>{{$plan->nombre_plan}}</th>
                <th>{{$plan->carrera}}</th>
                <th>{{$plan->fecha}}</th>
                <th> <a href="#modal_modificar" class="btn modal-trigger">Modificar</a> </th>
                <th> <a href="#" class="btn red">Deshabilitar</a> </th>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>

<!--modal nuevo plan-->
<div id="modal_nueva" class="modal bottom-sheet">
    <div class="modal-content">
      <form class="col  s12 m12" id="form_plan" action="" method="post">
          {{ csrf_field() }}

          <div class="row">
              <div class="col m6 push-m3 s12" style="text-align: center;">
                  <h4>Registrar Plan de Estudio</h4>
              </div>
          </div>


          <div class="row" id="data_plan">

            <div class="input-field col m2 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="text" id="plan_id" name="id_plan" class="validate" required maxlength="35">
                <label for="plan_id">clave de plan</label>
            </div>

              <div class="input-field col m3 s12 ">
                  <input type="text" name="nombrec" id="nombrec" class="validate" required maxlength="100">
                  <label for="nombrec">Nombre de plan de estudios</label>
              </div>

              <div class="input-field col m4 s12 ">
                  <select class="" name="carrera" id="carrera">
                    @foreach($carreras as $carrera)
                      <option value="{{$carrera->id_carrera}}">{{$carrera->nombre_carrera}}</option>
                    @endforeach
                  </select>
                  <label for="carrera">Carrera</label>
              </div>

              <div class="input-field col m3 s12 ">
                  <input type="text" name="fecha" class="datepicker" id="fecha">
                  <label for="fecha">Fecha</label>
              </div>

              <div class="input-field col m4 s12">
                  <button class="btn light-blue darken-4" type="submit" id="registrar_plan">Registrar plan de estudios
                      <i class="material-icons right">send </i>
                  </button>
              </div>
          </div>
      </form>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">
            <i class="material-icons blue-text text-darken-4"> fullscreen_exit </i>
            <b> Salir </b></a>

    </div>
</div>

<!--modal modificar plan-->
<div id="modal_modificar" class="modal bottom-sheet">
    <div class="modal-content">
      <form class="col  s12 m12" id="form_mod_plan" action="" method="post">
          {{ csrf_field() }}

          <div class="row">
              <div class="col m6 push-m3 s12" style="text-align: center;">
                  <h4>Modificar Plan de Estudio</h4>
              </div>
          </div>


          <div class="row" id="data_plan">

            <div class="input-field col m2 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="text" id="mod_plan_id" name="id_plan" class="validate" disabled required maxlength="35">
                <label for="mod_plan_id">Clave de plan</label>
            </div>

              <div class="input-field col m3 s12 ">
                  <input type="text" name="nombrec" id="mod_nombrec" class="validate" required maxlength="100">
                  <label for="mod_nombrec">Nombre de plan de estudios</label>
              </div>

              <div class="input-field col m4 s12 ">
                  <select class="" name="carrera" id="mod_carrera">
                    @foreach($carreras as $carrera)
                      <option value="{{$carrera->id_carrera}}">{{$carrera->nombre_carrera}}</option>
                    @endforeach
                  </select>
                  <label for="mod_carrera">Carrera</label>
              </div>

              <div class="input-field col m3 s12 ">
                  <input type="text" name="fecha" class="datepicker" id="mod_fecha">
                  <label for="mod_fecha">Fecha</label>
              </div>

              <div class="input-field col m4 s12">
                  <button class="btn light-blue darken-4" type="submit" id="mod_registrar_plan">Modificar plan de estudios
                      <i class="material-icons right">send </i>
                  </button>
              </div>
          </div>
      </form>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"></script>

@endsection
