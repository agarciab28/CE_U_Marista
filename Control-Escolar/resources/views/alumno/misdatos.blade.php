@extends('layouts.app_alumno')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/alumno/misdatos.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Mis Datos')


@section('content')
  <div class="row contenedor">
    <div class="col m6 push-m3 s12">
      <h5>Mis Datos</h5>
    </div>
  </div>
  <div class="container">
      <div class="row">
          <div class="col m4 push-m4 s12">
              <h4></h4>
          </div>
      </div>
      <div class="fixed-action-btn">
          <a class="btn-floating btn-large  waves-effect waves-light light-blue darken-4 modal-trigger" href="#modaluser" id="btn_add_aula">
              <i class="large material-icons">edit</i>
          </a>
      </div>
      <!-- profile-page-header -->
      <div id="profile-page-header" class="card">
          <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="{{{ asset('img/a1.jpg')}}}" alt="user background">
          </div>
          <figure class="card-profile-image">
              <img src="{{{ asset('img/user9.png')}}}" alt="profile image" class="circle z-depth-2 responsive-img activator">
          </figure>
          <div class="card-content">
              <div class="row">
                  <div class="col s9 offset-s2">
                      <h4 class="card-title grey-text text-darken-4">Diego Ramirez Rodriguez</h4>
                      <p class="medium-small grey-text">Alumno</p>
                  </div>
                  <div class="col s1 right-align">
                      <a class="btn-floating activator waves-effect waves-light darken-2 right">
                          <i class="material-icons">perm_identity</i>
                      </a>
                  </div>
              </div>
          </div>
          <div class="card-reveal">
              <p>
                  <span class="card-title grey-text text-darken-4">Diego Ramirez Rodriguez <i class="material-icons right icon-blue">close</i></span>
                  <span><i class="material-icons icon-blue">perm_identity</i> Administrador de control escolar</span>

              </p>

              <p>Tiene como objetivos, registrar, controlar y gestionar una serie de actividades enfocadas al bienestar académico-administrativo.</p>

              <p><i class="material-icons icon-blue">verified_user</i> admin</p>
              <p><i class="material-icons icon-blue">perm_phone_msg</i> +1 (612) 222 8989</p>
              <p><i class="material-icons icon-blue">email</i> mail@domain.com</p>
              <p><i class="material-icons icon-blue">cake</i> 18th 1990</p>
          </div>
      </div>
  </div>

  <!-- Modal Trigger
  <a class="waves-effect waves-light btn modal-trigger" href="#modaluser">Modal</a>-->

  <!-- Modal Structure -->
  <div id="modaluser" class="modal modal-fixed-footer">
      <div class="modal-content">
          <h4>Mis datos</h4>
          <div class="row">
              <!--
          <form class="col  s12 m12" id="pb" action="{{route('admin_registrar_envio')}}" method="post" form enctype="multipart/form-data">
  -->
              <div class="input-field col m4 s12 ">
                  <input type="file" id="imagen" name="imagen" class="dropify">
              </div>

              <div class="input-field col s12 m4">
                  <i class="material-icons prefix">
                      account_circle
                  </i>
                  <input type="text" name="user" id="user" class="validate" maxlength="35">
                  <label for="user">Usuario</label>
              </div>

              <div class="input-field col m4 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="password" name="pass" id="pass" class="validate" maxlength="35">
                  <label for="pass">Contraseña</label>
              </div>

              <div class="input-field col m4 s12 ">
                  <i class="material-icons prefix">email</i>
                  <input type="text" id="correo" class="validate" name="email" maxlength="150">
                  <label for="correo">Correo electrónico</label>
              </div>

              <div class="input-field col m4 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="text" name="nombres" id="nombre" class="validate" maxlength="35">
                  <label for="nombre">Nombre</label>
              </div>
              <div class="input-field col m4 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="text" id="apellidop" name="apaterno" class="validate" maxlength="35">
                  <label for="apellidop">Apellido paterno</label>
              </div>

              <div class="input-field col m4 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="text" id="apellidom" name="amaterno" class="validate" maxlength="35">
                  <label for="apellidom">Apellido materno</label>
              </div>

              <div class="input-field col s12 m4">
                  <i class="material-icons prefix">
                      wc
                  </i>
                  <select name="sexo" id="sexo">
                      <option value="" name="sexo" disabled selected>Sexo</option>
                      <option value="M">Masculino</option>
                      <option value="F">Femenino</option>
                  </select>
                  <label>Sexo</label>
              </div>

              <div class="input-field col m4 s12 ">
                  <!--<i class="material-icons prefix">date_range</i>-->
                  <label for="fecha1">Fecha de nacimiento </label>
                  <input type="text" name="fnaci" class="datepicker" id="fecha1">
              </div>

              <div class="input-field col m4 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="text" name="curp" id="curp" class="validate" maxlength="20">
                  <label for="curp">CURP</label>
              </div>

              <div class="input-field col m4 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="tel" name="tel" id="tel" class="tel" maxlength="35">
                  <label for="tel">Teléfono</label>
              </div>
              <div class="input-field col m4 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="tel" name="cel" id="cel" class="cel" maxlength="25">
                  <label for="cel">Celular</label>
              </div>

              <div class="input-field col m4 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="text" name="cedulap" id="cedulap" class="cedula" maxlength="35">
                  <label for="cedulap">Cédula fiscal</label>
              </div>
              <div class="input-field col m4 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="text" name="nssocp" id="nsocp" class="validate" maxlength="25">
                  <label for="nsocp">Número de seguro socal</label>
              </div>

              <div class="input-field col m4 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="text" name="estado" id="estado" class="estado" maxlength="25">
                  <label for="estado">Estado</label>
              </div>

              <div class="input-field col m4 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="text" name="ciudad" id="ciudad" class="ciudad" maxlength="25">
                  <label for="ciudad">Ciudad</label>
              </div>

              <div class="input-field col m4 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="text" name="colonia" id="colonia" class="colonia" maxlength="25">
                  <label for="colonia">Colonia</label>
              </div>

              <div class="input-field col m4 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="number" name="postal" id="postal" class="postal" maxlength="25">
                  <label for="postal">Código postal</label>
              </div>

              <div class="input-field col m2 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="number" name="interior" id="interior" class="interior" maxlength="25">
                  <label for="interior">Número interior</label>
              </div>

              <div class="input-field col m2 s12 ">
                  <!--<i class="material-icons prefix">account_circle</i>-->
                  <input type="number" name="exterior" id="exterior" class="exterior" maxlength="25">
                  <label for="exterior">Número exterior</label>
              </div>
              <!--
              <div class="input-field col m4 s12">
                  <button class="btn light-blue darken-4" type="submit">Guardar
                      <i class="material-icons right">send </i>
                  </button>
              </div>
              </form>-->
          </div>
      </div>
      <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-green btn-flat" onclick="confirmPass()">Aceptar</a>
      </div>
  </div>


@endsection

@section('scripts')


@endsection
