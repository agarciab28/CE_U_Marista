@extends('layouts.app_admin')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Modificar Usuario')

@section('content')
  <div class="container">
    @foreach ($personas as $persona)
    <form class="col  s12 m12" id="pb" action="{{route('admin_modificar_coordinador',[$persona->persona])}}" method="post" form enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">

          <div class="row">
            <div class="col m6 push-m3 s12" style="text-align: center;">
              <h4>Modificar Coordinador</h4>
            </div>
          </div>

          <div class="input-field col m4 s12 ">
            <!--{{ $persona->imgeng }}  esta wea traè de la base de datos de persona el campo de la imagen-->

                  <input type="file" id="imagen" name="imagen" value="" class="dropify"  >
                  <!--<i class="material-icons prefix">account_circle</i>-->

              </div>

            <div class="input-field col s12 m4">
                <i class="material-icons prefix">
                    supervised_user_circle
                </i>
                <select class="validate" name="rol" id="rol">
                <option value="Coordinador">Coordinador</option>
                </select>
                <label>Tipo de usuario</label>
            </div>

            <div class="input-field col m4 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input value="{{ $persona->nombres }}" type="text" name="nombres" id="nombre" class="validate" maxlength="35">
                <span>Nobre</span>
            </div>
            <div class="input-field col m4 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="text" value="{{ $persona->apaterno }}" id="apellidop" name="apaterno" class="validate" maxlength="35">
                <span>Apellido paterno</span>
            </div>
            <div class="input-field col m4 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="text" value="{{ $persona->amaterno }}" id="apellidom" name="amaterno" class="validate" maxlength="35">
                <span>Apellido materno</span>
            </div>



            <div class="input-field col m4 s12 ">
                <i class="material-icons prefix">email</i>
                <input value="{{ $persona->email }}" type="text" id="correo" class="validate" name="email" maxlength="150">
                <span>email</span>
            </div>


            <!--  <div class="col m6 s12">-->



            <div class="input-field col s12 m4">
                <i class="material-icons prefix">
                    wc
                </i>
                <select name="sexo" id="sexo">
@if ($persona->sexo=="F")
  <option value="F" selected>Femenino</option>
  <option value="M">Masculino</option>
@else
  <option value="M" selected>Masculino</option>
  <option value="F">Femenino</option>
@endif
                </select>
                <span>Sexo</span>
            </div>

            <div class="input-field col m4 s12 ">
                <!--<i class="material-icons prefix">date_range</i>-->
                <input type="date" name="fnaci" value="{{ $persona->fnaci }}" class="" id="fecha1">
                <span>Fecha de nacimiento</span>
            </div>


            <div class="input-field col m4 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="text" name="curp" value="{{ $persona->curp }}" id="curp" class="validate" maxlength="20">
                <span>curp</span>
            </div>


<!--Registrar contraseña-->
            <div class="input-field col m4 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="password" name="pass" id="pass" class="validate" maxlength="20" required>
                <span>Nueva contraseña</span>
            </div>

            <div id="coor_ext">
                <div class="input-field col m4 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" name="username" id="clavec" value="{{ $persona->usuario }}" class="validate" maxlength="25">
                    <span for="clavec">Clave de coordinador</span>
                </div>
                <!--fila-->
                <div class="input-field col m4 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <!--<input type="text" name="especialidad_coo" id="especialidad_coo" class="validate">
                    <label for="especialidad_coo">Carrera</label>-->
                    <select name="id_carrera_coordinador" id="carrera_coordinador">
                        <option value="{{ $persona->id_carrera }}" default selected>{{ $persona->nombre_carrera  }}</option>
                        @foreach($carreras as $carrera)
                        <option value="{{$carrera->id_carrera}}">{{$carrera->nombre_carrera}}</option>
                        @endforeach

                    </select>

                    <span>Carrera</span>
                </div>
                <div class="input-field col m4 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" value="{{ $persona->ced_fiscal}}" name="ced_fiscal" id="cedulac" class="cedula" maxlength="35">
                    <span for="cedulac">Cédula fiscal</span>
                </div>
                <div class="input-field col m4 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" name="nssoc" id="nsocc" value="{{ $persona->nssoc}}" class="validate" maxlength="25">
                    <span for="nsocc">Número de seguro social</span>
                </div>
            </div>



            <div class="row">
            </div>


            <div class="input-field col m3 s12">
                <button class="btn light-blue darken-4" type="submit">Modificar
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>
    </form>
        @endforeach
  </div>
@endsection

@section('scripts')

<!--sweetalert -->
<script src="{{{ asset('js/plugins/dropify/js/dropify.min.js') }}}"></script>

<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();
        $('.fixed-action-btn').floatingActionButton();
        $('.tooltipped').tooltip();
    });

    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.fixed-action-btn');
      var instances = M.FloatingActionButton.init(elems, {direction: 'left'});
    });
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{{ asset('js/datatables.js')}}}"></script>

  <script src="{{{asset('js/asigna.js')}}}"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>
@endsection
