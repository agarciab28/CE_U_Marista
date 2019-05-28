@extends('layouts.app_alumno')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/alumno/kardex.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Kardex')


@section('content')
<div class="row contenedor">
  <div class="col m6 push-m3 s12">
    <h5>Kardex</h5>
  </div>
</div>

<div>
  <div class="headPDF" style="margin:20px 0px 0px 0px; font-size:20px; font-family: 'Verdana, Geneva, sans-serif'">UNIVERSIDAD</div>
  <div class="headPDF" style="font-size:25px; font-family: 'Verdana, Geneva, sans-serif'">MARISTA VALLADOLID</div>
  <div class="head2PDF" style="text-align: center; margin:20px 0px 20px 0px;">KÁRDEX DE CALIFICACIONES</div>
</div>
</div>
<br><br>
<div class="subHeadPDF">datos del alumno</div>
  <div class="row">
    <div class="column tabPDF" style="text-align:left;">ALUMNO</div>
    <div class="column" id="alumno" style="width:40%">{{$datos->apaterno}} {{$datos->amaterno}} {{$datos->nombres}}</div>
    <div class="column tabPDF" style="text-align:left; width:10%">no CTRL</div>
    <div class="column" id="noCtrl" style="width:10%">{{$ncontrol}}</div>
    <div class="column tabPDF" style="text-align:left; width:10%">CARRERA</div>
    <div class="column" id="carrera" style="width:20%">{{$datos->carrera}}</div>
    <br>
  </div>
<br><br><br>
<div class="subHeadPDF">CALIFICACIONES</div>
<table bgcolor="#cfd8dc" style="border: black 1px solid;">
  <thead style="background: rgba(96, 125, 139);">
    <tr>
        <th class="tabPDF" style="color:white;" colspan="4" scope="rowgroup">{{$configuracion->periodo_actual}}</th>
    </tr>
    <tr>
        <th class="tabPDF" style="color:white;">CLAVE MATERIA</th>
        <th class="tabPDF" style="color:white;">MATERIA</th>
        <th class="tabPDF" style="color:white;">TIPO DE EVALUACIÓN</th>
        <th class="tabPDF" style="color:white;">Calificación final</th>
    </tr>
  </thead>

  <tbody>
    @foreach($calificaciones as $calificacion)
    <tr>
      <td class="bodyPDF center">{{$calificacion->id_materia}}</td>
      <td class="bodyPDF center">{{$calificacion->nombre_materia}}</td>
      <td class="bodyPDF center">{{$calificacion->opcion_calificacion}}</td>
      <td class="bodyPDF center">80</td>
    </tr>
    @endforeach
    <tr style="border: black 1px solid;">
      <th class="tabPDF" style="background: rgba(96, 125, 139); color:white;"></th>
      <th class="tabPDF" style="background: rgba(96, 125, 139); color:white;"></th>
      <th class="tabPDF" style="background: rgba(96, 125, 139); color:white;">PROMEDIO</th>
      <td class="tabPDF" style="background: rgba(96, 125, 139); color:white;">0</td>
    </tr>
  </tbody>
</table>
<br>
<table bgcolor="#cfd8dc" style="border: black 1px solid;">
  <tbody style="background: rgba(96, 125, 139);">
    <tr style="border: black 1px solid;">
      <th class="tabPDF" style="color:white; width:15.85cm">PROMEDIO FINAL</th>
      <td class="tabPDF" style="color:white; width:3cm">0</td>
    </tr>
  </tbody>
</table>

@endsection

@section('scripts')


@endsection
