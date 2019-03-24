@extends('layouts.app_admin')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/planes.css') }}}" rel="stylesheet">
  <!-- CORE CSS-->
  <link href="{{{ asset('css/style.css') }}}" type="text/css" rel="stylesheet" media="screen,projection">
@endsection

@section('title', 'Planes de Estudio')

@section('content')
<!--breadcrumbs start-->
<div id="breadcrumbs-wrapper">
    <!-- Search for small screen -->
    <div class="header-search-wrapper grey hide-on-large-only">
        <i class="mdi-action-search active"></i>
        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
    </div>
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h5 class="breadcrumbs-title">Planes de estudio</h5>
        <ol class="breadcrumbs">
            <li><a href="/admin">Inicio</a></li>
            <li><a href="#">Planes</a></li>
            <li class="active">...</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--breadcrumbs end-->

@endsection
