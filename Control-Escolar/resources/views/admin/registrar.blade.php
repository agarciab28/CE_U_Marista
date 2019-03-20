@extends('layouts.app_admin')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/registrar.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Registrar Usuario')

@section('content')
  <div class="section container">
    <form class="" action="" method="">
      <div class="row">
        <div class="col s12">
          <div class="row">
            <div class="input-field col s12 m4">
              <select>
                <option value="" disabled selected>Eslige una opción</option>
                <option value="rectoria">Rectoría</option>
                <option value="coordinador">Coordinador</option>
                <option value="medico">Medico</option>
                <option value="pasante">Pasante</option>
                <option value="fisioterapeuta">Fisioterapeuta</option>
              </select>
              <label>Tipo de Usuario</label>
            </div>
            <div class="input-field col s12 m4">
              <input id="nombre" type="text" class="validate">
              <label for="nombre">Nombre</label>
            </div>
            <div class="input-field col s12 m4">
              <input id="apellido" type="text" class="validate">
              <label for="apellido">Apellido</label>
            </div>
            <div class="input-field col s12 m4">
              <input id="email" type="email" class="validate">
              <label for="email">Correo Electronico</label>
            </div>
            <div class="input-field col s12 m4">
              <input id="usuario" type="text" class="validate">
              <label for="usuario">Usuario</label>
            </div>
            <div class="input-field col s12 m4">
              <input id="password" type="password" class="validate">
              <label for="password">Contraseña</label>
            </div>
            <div class="input-field col s12 m4">
              <input id="curp" type="text">
              <label for="curp">CURP</label>
            </div>
            <div class="input-field col s12 m4">
              <select>
                <option value="" disabled selected>Elige una opcion</option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
              </select>
              <label>Genero</label>
            </div>
            <div class="input-field col s12 m4">
              <input id="telefono" type="tel">
              <label for="telefono">Numero de Telefono</label>
            </div>
            <button class="col s4 push-s4 pull-s4 btn waves-effect waves-light" type="submit" name="action">Registrar</button>
          </div>
        </div>
      </div>
    </form>
  </div>

@endsection
