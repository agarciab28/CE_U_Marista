@extends('layouts.app')

@section('stylesheet')
  <link href="{{{ asset('css/style_admin.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Inicio de Sesion')

@section('content')
<div class="background">

    <div class="barra_superior">
      <div class="row">
        <div class="col s4  push-s4  ">
          <div class="logo">
            <img class="img-logo" src="{{{ asset('img/logo/lm_b_s.png') }}}" alt="">
          </div>
        </div>
      </div>
    </div>


    <div class="section container">
      <div class="row">
        <form class="col  s12 m12">

          <div class="row card-panel">

            <div class="input-field col s12 m3">
              <i class="material-icons prefix">
                supervised_user_circle
              </i>
              <select required>
                <option value="" disabled selected>Seleccione</option>
                <option value="1">Coordinador</option>
                <option value="2">Profesor</option>
                <option value="3">Alumno</option>
              </select>
              <label>Tipo de usuario</label>
            </div>

            <div class="input-field col m3 s12 ">
              <!--<i class="material-icons prefix">account_circle</i>-->
              <input type="text" id="nombre" class="validate" required>
              <label for="nombre">Nombre:</label>
            </div>
            <div class="input-field col m3 s12 ">
              <!--<i class="material-icons prefix">account_circle</i>-->
              <input type="text" id="apellidop" class="validate" required>
              <label for="apellidop">Apellido paterno:</label>
            </div>
            <div class="input-field col m3 s12 ">
              <!--<i class="material-icons prefix">account_circle</i>-->
              <input type="text" id="apellidom" class="validate" required>
              <label for="apellidom">Apellido materno:</label>
            </div>




@endsection
@section('scripts')

@endsection
