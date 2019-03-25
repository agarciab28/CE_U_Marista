@extends('layouts.app_admin')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/grupos.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Grupos')

@section('content')
<!--breadcrumbs start-->
<div id="breadcrumbs-wrapper">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h5 class="breadcrumbs-title">Listar grupos</h5>
        <ol class="breadcrumbs">
            <li><a href="/admin">Inicio</a></li>
            <li><a href="#">Grupos</a></li>
            <li class="active">Listar grupo</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--breadcrumbs end-->

@endsection
