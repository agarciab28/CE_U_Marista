@extends('layouts.app_pdf')
@section('stylesheet')
<link href="{{{ asset('css/style_pdf2.css') }}}" rel="stylesheet">
<body>
  <div class="container" style="width: 24.1cm">
    <div class="row">
      <div class="col s12 m4 l2"><img src="{{{ asset('img/logos/logo_3_a.png') }}}" alt="" width="70%" style="margin:20px"></div>
      <div class="col s12 m4 l8"><div class="headPDF center" style="margin:20px 0px 0px 0px; font-size:20px">UNIVERSIDAD</div></div>
      <div class="col s12 m4 l8"><div class="headPDF">MARISTA VALLADOLID</div></div>
      <div class="col s12"><div class="head2PDF center">BOLETA DE CALIFICACIONES</div></div>
    </div>
    <br>
    <div class="subHeadPDF">DATOS DEL GRUPO</div>
    <div class="row">
      <div class="col s12 m6 l2 tabPDF">ALUMNO</div>
      <div class="col s12 m6 l6" id="alumno">XXXX</div>
      <div class="col s12 m6 l2 tabPDF">NO CTRL</div>
      <div class="col s12 m6 l2" id="noctrl">XXXX</div>
    </div>
    <div class="row">
      <div class="col s12 m4 l2 tabPDF">CARRERA</div>
      <div class="col s12 m4 l2" id="carrera">XXXX</div>
      <div class="col s12 m4 l2 tabPDF">SEMESTRE</div>
      <div class="col s12 m4 l2" id="semestre">XXXX</div>
      <div class="col s12 m4 l2 tabPDF">PERIODO</div>
      <div class="col s12 m4 l2" id="periodo">XXXX</div>
    </div>


    <div class="row">
      <div class="subHeadPDF">CALIFICACIONES</div>
      <table class="striped" bgcolor="#cfd8dc" style="border: black 1px solid;">
        <thead>
          <tr>
              <th class="tabPDF center blue-grey" style="color:white;">CLAVE MATERIA</th>
              <th class="tabPDF center blue-grey" style="color:white;">MATERIA</th>
              <th class="tabPDF center blue-grey" style="color:white;">PRIMER PARCIAL</th>
              <th class="tabPDF center blue-grey" style="color:white;">FALTAS</th>
              <th class="tabPDF center blue-grey" style="color:white;">SEGUNDO PARCIAL</th>
              <th class="tabPDF center blue-grey" style="color:white;">FALTAS</th>
              <th class="tabPDF center blue-grey" style="color:white;">TERCER PARCIAL</th>
              <th class="tabPDF center blue-grey" style="color:white;">FALTAS</th>
              <th class="tabPDF center blue-grey" style="color:white;">FALTAS TOTALES</th>
              <th class="tabPDF center blue-grey" style="color:white;">Calificación final</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td class="bodyPDF center">ABC123</td>
            <td class="bodyPDF center">CÁLCULO INTEGRAL</td>
            <td class="bodyPDF center">80</td>
            <td class="bodyPDF center">2</td>
            <td class="bodyPDF center">75</td>
            <td class="bodyPDF center">2</td>
            <td class="bodyPDF center">85</td>
            <td class="bodyPDF center">1</td>
            <td class="bodyPDF center">5</td>
            <td class="bodyPDF center">80</td>
          </tr>
          <tr>
            <td class="bodyPDF center">ABC123</td>
            <td class="bodyPDF center">ÉTICAPROGRAMACIÓN AVANZADA</td>
            <td class="bodyPDF center">80</td>
            <td class="bodyPDF center">2</td>
            <td class="bodyPDF center">75</td>
            <td class="bodyPDF center">2</td>
            <td class="bodyPDF center">85</td>
            <td class="bodyPDF center">1</td>
            <td class="bodyPDF center">5</td>
            <td class="bodyPDF center">80</td>
          </tr>
          <tr>
            <td class="bodyPDF center">ABC123</td>
            <td class="bodyPDF center">ÉTICA</td>
            <td class="bodyPDF center">80</td>
            <td class="bodyPDF center">2</td>
            <td class="bodyPDF center">75</td>
            <td class="bodyPDF center">2</td>
            <td class="bodyPDF center">85</td>
            <td class="bodyPDF center">1</td>
            <td class="bodyPDF center">5</td>
            <td class="bodyPDF center">80</td>
          </tr>
          <tr style="border: black 1px solid;">
            <th class="tabPDF center blue-grey" style="color:white;"></th>
            <th class="tabPDF center blue-grey" style="color:white;">PROMEDIO</th>
            <td class="tabPDF center blue-grey" style="color:white;">70</td>
            <td class="tabPDF center blue-grey" style="color:white;">2</td>
            <td class="tabPDF center blue-grey" style="color:white;">65</td>
            <td class="tabPDF center blue-grey" style="color:white;">2</td>
            <td class="tabPDF center blue-grey" style="color:white;">67.5</td>
            <td class="tabPDF center blue-grey" style="color:white;">1</td>
            <td class="tabPDF center blue-grey" style="color:white;">5</td>
            <td class="tabPDF center blue-grey" style="color:white;">77.5</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
