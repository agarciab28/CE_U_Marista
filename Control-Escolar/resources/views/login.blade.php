@extends('layouts.app')

@section('stylesheet')
  <link href="{{{ asset('css/style_login.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Inicio de Sesion')

@section('content')
  <div class="background">
    <div class="color-bg">
      <div class="row">
        <div class="col s12 m12 l6 push-l3">
          <p class="bienvenida">Bienvenido al Sistema de Control Escolar de la Universidad Marista</p>
        </div>
      </div>
      <div class="row">
        <div class="col s4 push-s4 m6 push-m3 l4">
          <div class="logo">
            <img class="img-logo" src="{{{ asset('img/logo/lm_b.png') }}}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
