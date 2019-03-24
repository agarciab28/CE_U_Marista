@extends('layouts.app_admin')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/estadisticas.css') }}}" rel="stylesheet">
  <!-- CORE CSS-->
  <link href="{{{ asset('css/style.css') }}}" type="text/css" rel="stylesheet" media="screen,projection">
@endsection

@section('title', 'Estadisticas')

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
        <h5 class="breadcrumbs-title">Estadísticas</h5>
        <ol class="breadcrumbs">
            <li><a href="/admin">Inicio</a></li>
            <li><a href="#"Estadísticas</a></li>
            <li class="active">...</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--breadcrumbs end-->
  <div class="section container">
    <div class="row section container">
      <div class="contenedor col s12 m6 push-m3">
        <h5>Carreras</h5>
      </div>
    </div>
    <canvas id="chart1" width="400" height="200"></canvas>
    <div class="row section container">
      <div class="contenedor col s12 m6 push-m3">
        <h5>Genero</h5>
      </div>
    </div>
    <canvas id="chart2" width="400" height="200"></canvas>
    <div class="row section container">
      <div class="contenedor col s12 m6 push-m3">
        <h5>Grupos</h5>
      </div>
    </div>
    <canvas id="chart3" width="400" height="200"></canvas>
  </div>

@endsection

@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
  <script type="text/javascript" src="{{{ asset('js/estadisticas/test.js') }}}"></script>
@endsection
