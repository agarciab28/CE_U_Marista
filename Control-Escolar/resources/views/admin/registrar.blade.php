@extends('layouts.app_admin')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/registrar.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Registrar Usuario')

@section('content')

      <div class="section container">

        <div class="row">
          <form class="col  s12 m12" id="pb" action="{{route('registro_persona')}}" method="post">
            {{ csrf_field() }}

            <div class="row card-panel">

              <div class="input-field col s12 m3">
                <i class="material-icons prefix">
                  supervised_user_circle
                </i>
                <select class="validate" name="rol" >
                  <option value=""  disabled selected>Seleccione</option>
                  <option  value="Coordinador" >Coordinador</option>
                  <option  value="Profesor">Profesor</option>
                  <option  value="Alummno">Alumno</option>
                </select>
                <label>Tipo de usuario</label>
              </div>

              <div class="input-field col m3 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="text" name="nombres" id="nombre" class="validate" d>
                <label for="nombre">Nombre:</label>
              </div>
              <div class="input-field col m3 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="text" id="apellidop" name="apaterno" class="validate" >
                <label for="apellidop">Apellido paterno:</label>
              </div>
              <div class="input-field col m3 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="text" id="apellidom" name="amaterno" class="validate" >
                <label for="apellidom">Apellido materno:</label>
              </div>



              <div class="input-field col m4 s12 ">
                <i class="material-icons prefix">email</i>
                <input type="text" id="correo" class="validate" name="email" >
                <label for="correo">Correo electrónico:</label>
              </div>


          <!--  <div class="col m6 s12">-->



                <div class="input-field col s12 m4">
                  <i class="material-icons prefix">
                    wc
                  </i>
                  <select name="sexo" >
                    <option value="" name="sexo" disabled selected>Sexo</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>


                  </select>
                  <label>Sexo</label>
                </div>


            <div class="input-field col m4 s12 ">
              <!--<i class="material-icons prefix">date_range</i>-->
              <label for="fecha">Fecha de nacimiento: </label>
                <input type="text" name="fnaci" class="datepicker"  id="fecha1" >
            </div>

            <div class="row">
            </div>



            <div class="input-field col m3 s12 ">
              <input type="text" id="calle" name="calle" class="validate" >
              <label for="calle">Calle:</label>
            </div>
            <div class="input-field col m3 s12 ">
              <input type="number" id="num_ext" name="num_ext" class="validate" >
              <label for="num_ext">Número exterior:</label>
            </div>
            <div class="input-field col m3 s12 ">
              <input type="number" id="num_int" name="num_int" class="validate" >
              <label for="num_int">Número interior:</label>
            </div>
            <div class="input-field col m3 s12 ">
              <input type="text" id="colonia" class="validate" name="colonia" >
              <label for="colonia">Colonia:</label>
            </div>


            <div class="input-field col m4 s12 ">
              <input type="number" id="cp" class="validate" name="codigo_postal" >
              <label for="cp">Código postal:</label>
            </div>
            <div class="input-field col m4 s12 ">
              <input type="text" id="ciudad" name="ciudad" class="validate" >
              <label for="ciudad">Ciudad:</label>
            </div>
            <div class="input-field col m4 s12 ">
              <input type="text" id="estado" name="estado" class="validate" >
              <label for="estado">Estado:</label>
            </div>

            <div class="input-field col m6 s12 ">
              <input type="tel" id="telefono" name="num_tel" class="validate" >
              <label for="telefono">Número de teléfono:</label>
            </div>
            <div class="input-field col m6 s12 ">
              <input type="tel" id="celular" name="num_cel" class="validate" >
              <label for="celular">Número de celular:</label>
            </div>


          <div class="input-field col m3 s12">
            <button class="btn light-blue darken-4" type="submit">Registrar
              <i class="material-icons right">send </i>
            </button>
          </div>
        </div>
          </form>
        </div>
      </div>


@endsection
@section('scripts')
<!--sweetalert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{{ asset('js/validaciones.js') }}}"></script>


@endsection
