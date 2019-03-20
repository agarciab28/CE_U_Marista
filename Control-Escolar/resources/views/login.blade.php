@extends('layouts.app_login')

@section('stylesheet')
  <link href="{{{ asset('css/style_login.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Inicio de Sesion')

@section('content')
  <div class="background">
    <div class="color-bg">
      <div class="row">
        <div class="col s8 push-s2">
          <p class="bienvenida">Bienvenido al Sistema de Control Escolar de la Universidad Marista</p>
        </div>
      </div>
      <div class="row">
        <div class="col s4 push-s4 pull-s4 l4">
          <div class="logo">
            <img class="img-logo" src="{{{ asset('img/logos/firma.png') }}}" alt="">
          </div>
        </div>
        <div class="col s12 m12 l7 container section">
          <div class="card-panel">
            <div class="row">
              <div class="col s12">
                <ul class="tabs">
                  <li class="tab col s6"><a class="active" href="#alumno">Alumno</a></li>
                  <li class="tab col s6"><a href="#personal">Personal</a></li>
                </ul>
              </div>
              <div id="alumno" class="col s12">
                <form class="" action="{{ route('login')}}" method="post">
                   {{ csrf_field() }}
                  <div class="row">
                    <div class="input-field col s12 l8 push-l2 pull-l2   ">
                      <input id="alumno_user" name="ncontrol" type="text" class="{{ $errors->has('ncontrol') ? 'input-field col s12  red lighten-1' : 'input-field col s12' }}">
                      <label for="alumno_user"><i class="fas fa-user" style="margin-right:0.5em;"></i>Numero de Control</label>
                    </div>
                    <div class="input-field col s12 l8 push-l2 pull-l2   ">
                      <input id="alumno_pass" type="password" name="password" class="{{ $errors->has('ncontrol') ? 'input-field col s12 red lighten-1' : 'input-field col s12' }}">
                      <label for="alumno_pass"><i class="fas fa-key" style="margin-right:0.5em;"></i>Contraseña</label>
                    </div>
                      <button class="btn col s2 push-s5 pull-s5 l8 push-l2 pull-l2 waves-effect waves-light login" type="submit" name="action">Acceder</button>
                  </div>
                </form>
              </div>
              <div id="personal" class="col s12">
                <form class="" action="{{ route('loginAdmin')}}" method="post">
                   {{ csrf_field() }}
                  <div class="row">
                    <div class="input-field col s12 l8 push-l2 pull-l2   ">
                      <input id="personal_user" type="text" name ="id_admin" class="validate">
                      <label for="personal_user"><i class="fas fa-user" style="margin-right:0.5em;"></i>Nombre de Usuario</label>
                    </div>
                    <div class="input-field col s12 l8 push-l2 pull-l2   ">
                      <input id="personal_pass" type="password" name="password" class="validate">
                      <label for="personal_pass"><i class="fas fa-key" style="margin-right:0.5em;"></i>Contraseña</label>
                    </div>
                      <button class="btn col s2 push-s5 pull-s5 l8 push-l2 pull-l2 waves-effect waves-light login" type="submit" name="action">Acceder</button>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="contenedor">
        <p class="footer">Todos los derechos reservados © 2019.</p>
      </div>
    </div>
  </div>
@endsection
