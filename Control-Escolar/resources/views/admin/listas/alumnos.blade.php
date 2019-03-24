@extends('layouts.app_admin')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/registrar.css') }}}" rel="stylesheet">
  <!-- CORE CSS-->
  <link href="{{{ asset('css/style.css') }}}" type="text/css" rel="stylesheet" media="screen,projection">
@endsection

@section('title', 'lista_alumnos')

@section('content')
<!--breadcrumbs start-->
<div id="breadcrumbs-wrapper">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h5 class="breadcrumbs-title">Alumnos</h5>
        <ol class="breadcrumbs">
            <li><a href="/admin">Inicio</a></li>
            <li><a href="#">Usuarios</a></li>
            <li class="active">Alumnos</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--breadcrumbs end-->

@endsection
