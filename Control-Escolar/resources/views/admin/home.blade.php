@extends('layouts.app_admin')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/home.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Administrador')
@section('usuario')
{{auth('admins')->user()->id_admin}}
@endsection

@section('content')
  <div class="center-elements">
    <div class="row container
    section">
      <div class="col s12">
        Bienvenido al Sistema de Control Escolar de la Universidad Marista
      </div>
    </div>
    <div class="row section container">
      <div class="col s12">
        <img class="responsive-img" src="{{{ asset('img/logos/logo_1_a.png') }}}" alt="">
      </div>
    </div>
  </div>



@endsection
