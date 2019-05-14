@extends('layouts.app_admin')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Modificar Usuario')

@section('content')
  <div class="container">
    <form class="col  s12 m12" id="pb" action="{{route('admin_registrar_envio')}}" method="post" form enctype="multipart/form-data">
        {{ csrf_field() }}
@foreach ($personas as $persona)


        <div class="row">

          <div class="row">
            <div class="col m6 push-m3 s12" style="text-align: center;">
              <h4>Modificar Alumno</h4>
            </div>
          </div>

          <div class="input-field col m4 s12 ">
                  <input type="file" id="imagen" name="imagen" value="{{ $persona->imagen }}" class="dropify"  >
                  <!--<i class="material-icons prefix">account_circle</i>-->

              </div>

            <div class="input-field col s12 m4">
                <i class="material-icons prefix">
                    supervised_user_circle
                </i>
                <select class="validate" name="rol" id="rol">
                    <option value="Alumno">Alumno</option>
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


            <div id="alumno_ext">
                <div class="input-field col m4 s12 ">
                    <input type="text" name="ncontrol" id="ncontrol" value="{{ $persona->ncontrol }}" class="validate" maxlength="12">
                    <span>Número de control</span>
                </div>

                <div class="input-field col m4 s12 ">
                    <select name="id_carrera" id="carrera_alumno">
                      <option value="{{ $persona->id_carrera }}" default selected>{{ $persona->nombre_carrera  }}</option>
                        @foreach($carreras as $carrera)
                        <option value="{{$carrera->id_carrera}}">{{$carrera->nombre_carrera}}</option>
                        @endforeach
                    </select>
                    <span>Carrera</span>
                </div>

                <div class="col m4 s12 ">
                    <select name="semestre" id="semestre">
                        <option selected value="{{ $persona->semestre }}">{{ $persona->semestre }}</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <span>Semestre</span>
                </div>
                <div class="input-field col m4 s12 ">


                  <select name="plan_de_estudios" id="plan_est">
                    <option selected value="{{ $persona->id_plan }}">{{ $persona->nombre_plan }}</option>
                    @foreach($planes as $plan)
                      <option value="{{$plan->id_plan}}">{{$plan->nombre_plan}}</option>
                    @endforeach
                  </select>
                    <span>Plan de estudios</span>
                </div>
            </div>




            <div class="row">
            </div>


            <div class="input-field col m3 s12">
                <button class="btn light-blue darken-4" type="submit">Registrar
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>
        @endforeach
    </form>
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
