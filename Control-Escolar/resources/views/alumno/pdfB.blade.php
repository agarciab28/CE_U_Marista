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
      <div class="col s12 m6 l1 tabPDF">ALUMNO</div>
      <div class="col s12 m6 l5" id="alumno">XXXX</div>
      <div class="col s12 m6 l1 tabPDF">NO CTRL</div>
      <div class="col s12 m6 l2" id="noctrl">XXXX</div>
      <div class="col s12 m4 l1 tabPDF">CARRERA</div>
      <div class="col s12 m4 l2" id="carrera">XXXX</div>
    </div>

    <div class="row">
      <div class="subHeadPDF">CALIFICACIONES</div>
      <table class="striped" bgcolor="#cfd8dc" style="border: black 1px solid;">
        <thead>
          <tr>
              <th class="tabPDF center blue-grey" style="color:white;" colspan="4" scope="rowgroup">AGO-DIC 2019</th>
          </tr>
          <tr>
              <th class="tabPDF center blue-grey" style="color:white;">CLAVE MATERIA</th>
              <th class="tabPDF center blue-grey" style="color:white;">MATERIA</th>
              <th class="tabPDF center blue-grey" style="color:white;">TIPO DE EVALUACIÓN</th>
              <th class="tabPDF center blue-grey" style="color:white;">Calificación final</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td class="bodyPDF center">ABC123</td>
            <td class="bodyPDF center">CÁLCULO INTEGRAL</td>
            <td class="bodyPDF center">ORDINARIA</td>
            <td class="bodyPDF center">80</td>
          </tr>
          <tr>
            <td class="bodyPDF center">ABC123</td>
            <td class="bodyPDF center">ÉTICAPROGRAMACIÓN AVANZADA</td>
            <td class="bodyPDF center">1RA EXTRAORDINARIA</td>
            <td class="bodyPDF center">75</td>
          </tr>
          <tr>
            <td class="bodyPDF center">ABC123</td>
            <td class="bodyPDF center">ÉTICA</td>
            <td class="bodyPDF center">2DA EXTRAORDINARIA</td>
            <td class="bodyPDF center">75</td>
          </tr>
          <tr style="border: black 1px solid;">
            <th class="tabPDF center blue-grey" style="color:white;" colspan="3

            " scope="rowgroup">PROMEDIO</th>
            <td class="tabPDF center blue-grey" style="color:white;">77.5</td>
          </tr>
        </tbody>
      </table>
      <br>
      <table class="striped" bgcolor="#cfd8dc" style="border: black 1px solid;">
        <tbody>
          <tr style="border: black 1px solid;">
            <th class="tabPDF center blue-grey" style="color:white;" colspan="3" scope="rowgroup">PROMEDIO FINAL</th>
            <td class="tabPDF center blue-grey" style="color:white;">77.5</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
