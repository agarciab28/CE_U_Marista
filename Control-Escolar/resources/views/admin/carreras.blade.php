@extends('layouts.app_admin')

@section('stylesheet')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css" rel="stylesheet">

<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/admin/carreras.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/admin/alumnos.css') }}}" rel="stylesheet">

@endsection

@section('title', 'Carreras')

@section('content')

  <div class="section container">

  <div class="fixed-action-btn">
    <a class="btn-floating btn-large  waves-effect waves-light light-blue darken-4 modal-trigger" href="#modal_nueva" id="btn_add_carrera">
      <i class="large material-icons">add</i>
    </a>
  </div>

  <div class="row">
    <div class="col m4 push-m4 s12">
      <h4>Control de Carreras</h4>
    </div>
  </div>

      <div class="row">
          <table id="example" class="responsive-table striped" style="width:100%">
            <thead>
              <tr>
                <th>Nombre de carrera</th>
                <th>Clave RVOE</th>
                <th>Fecha de registro</th>
                <th>Modificar</th>
                <th>Deshabilitar</th>
              </tr>
            </thead>
            <tbody>
              @foreach($carreras as $carrera)
              <tr>
                <th>{{$carrera->nombre_carrera}}</th>
                <th>{{$carrera->rvoe}}</th>
                <th>{{$carrera->fecha}}</th>
                <th> <a href="#modal_modificar" class="btn modal-trigger">Modificar</a> </th>
                <th> <a href="#" class="btn red">Deshabilitar</a> </th>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      <!--modal nueva carrera-->
      <div id="modal_nueva" class="modal bottom-sheet">
          <div class="modal-content">
            <form class="col  s12 m12" id="form_carrera" action="{{route('admin_carreras_registro')}}" method="post">
              {{ csrf_field() }}
              <div class="row">
                <div class="col m4 push-m4 s12">
                  <h4>Registrar Carrera</h4>
                </div>
              </div>
              <div class="row" id="data_carrera">
                <div class="input-field col m4 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="text" name="id_carrera" id="idcarrera" class="validate" required maxlength="35">
                  <label for="idcarrera">ID Carrera</label>
                </div>
                <div class="input-field col m4 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="text" name="nombrec" id="nombrec" class="validate" required maxlength="100">
                  <label for="nombrec">Nombre de carrera</label>
                </div>
                <div class="input-field col m4 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="text" name="creditos" id="creditos" class="validate" required maxlength="35">
                  <label for="creditos">Creditos</label>
                </div>
                <div class="input-field col m4 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="text" name="cvervoe" id="cvervoe" class="validate" required maxlength="35">
                  <label for="cvervoe">Clave RVOE</label>
                </div>
                <div class="input-field col m4 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="text" id="fechar" name="fechar" class="validate" required maxlength="35">
                  <label for="fechar">Fecha de registro</label>
                </div>
                <div class="row">
                </div>
                <div class="input-field col m4 s12">
                  <button class="btn light-blue darken-4" type="submit" id="registrar_carrera">Registrar carrera
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

      {{-- modal modificar carrera --}}
      <div id="modal_modificar" class="modal bottom-sheet">
          <div class="modal-content">
            <form class="col  s12 m12" id="form_mod_carrera" action="{{route('admin_carreras_registro')}}" method="post">
              {{ csrf_field() }}
              <div class="row">
                <div class="col m4 push-m4 s12">
                  <h4>Modificar Carrera</h4>
                </div>
              </div>
              <div class="row" id="data_carrera">
                <div class="input-field col m4 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="text" name="id_carrera" id="mod_idcarrera" class="validate" disabled required maxlength="35">
                  <label for="mod_idcarrera">ID Carrera</label>
                </div>
                <div class="input-field col m4 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="text" name="nombrec" id="mod_nombrec" class="validate" required maxlength="100">
                  <label for="mod_nombrec">Nombre de carrera</label>
                </div>
                <div class="input-field col m4 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="text" name="creditos" id="mod_creditos" class="validate" required maxlength="35">
                  <label for="mod_creditos">Creditos</label>
                </div>
                <div class="input-field col m4 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="text" name="cvervoe" id="mod_cvervoe" class="validate" required maxlength="35">
                  <label for="mod_cvervoe">Clave RVOE</label>
                </div>
                <div class="input-field col m4 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="text" id="mod_fechar" name="fechar" class="validate" required maxlength="35">
                  <label for="mod_fechar">Fecha de registro</label>
                </div>
                <div class="row">
                </div>
                <div class="input-field col m4 s12">
                  <button class="btn light-blue darken-4" type="submit" id="mod_registrar_carrera">Modificar carrera
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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{{ asset('js/datatables.js') }}}"></script>
<script src="{{{ asset('js/validaciones.js') }}}"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"></script>
@if($registro)
<script type="text/javascript">
    swal('Registro Exitoso!', 'Presione OK!', 'success');
</script>
@endif
@endsection
