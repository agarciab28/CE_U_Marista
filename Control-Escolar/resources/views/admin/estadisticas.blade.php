@extends('layouts.app_admin')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/estadisticas.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Estadisticas')

@section('content')

  <div class="section container">
    <div class="row">
      <div class="contenedor col s12 m6 push-m3">
        <h5>Carreras</h5>
      </div>
    </div>
    <canvas id="chart1" width="400" height="200"></canvas>
    <div class="row">
      <div class="contenedor col s12 m6 push-m3">
        <h5>Genero</h5>
      </div>
    </div>
    <canvas id="chart2" width="400" height="200"></canvas>
    <div class="row">
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
