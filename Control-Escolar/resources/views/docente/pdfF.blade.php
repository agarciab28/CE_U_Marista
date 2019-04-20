@extends('layouts.app_pdf')
@section('stylesheet')
<link href="{{{ asset('css/style_pdf.css') }}}" rel="stylesheet">
<body>
  <div class="container">
    <div class="row">
      <div class="col s12 m4 l2"><img src="{{{ asset('img/logos/logo_1_a.png') }}}" alt="" width="150%" style="margin:20px"></div>
      <div class="col s12 m4 l8"><div class="tabPDF center" style="margin:20px">UNIVERSIDAD MARISTA VALLADOLID</div></div>
      <div class="col s12 m4 l8"><div class="headPDF">BOLETA DE CALIFICACIONES</div></div>
      <div class="col s12"><div class="tabPDF center">EVALUACIÓN FINAL</div></div>
    </div>
    <br>
    <div class="subHeadPDF">DATOS DEL GRUPO</div>
    <div class="row">
      <div class="col s12 m4 l2 tabPDF">CLAVE DE GRUPO</div>
      <div class="col s12 m4 l2" id="clave">XXXX</div>
      <div class="col s12 m4 l2 tabPDF">SECCIÓN</div>
      <div class="col s12 m4 l2" id="seccion">XXXX</div>
      <div class="col s12 m4 l2 tabPDF">PERIODO</div>
      <div class="col s12 m4 l2" id="seccion">XXXX</div>
    </div>
    <div class="row">
      <div class="col s12 m6 l3 tabPDF">CARRERA</div>
      <div class="col s12 m6 l3" id="carrera">XXXX</div>
      <div class="col s12 m6 l3 tabPDF">MATERIA</div>
      <div class="col s12 m6 l3" id="materia">XXXX</div>
    </div>
    <div class="row">
      <div class="col s12 m4 l2 tabPDF">PROFESOR</div>
      <div class="col s12 m4 l10" id="profesor">XXXX</div>
    </div>

    <div class="row">
      <div class="subHeadPDF">CALIFICACIONES</div>
      <table class="centered">
        <thead>
          <tr>
              <th class="tabPDF">No</th>
              <th class="tabPDF">No CTRL</th>
              <th class="tabPDF">Nombre del alumno</th>
              <th class="tabPDF">Tipo de evaluación</th>
              <th class="tabPDF">Calificación</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>1</td>
            <td>15121183</td>
            <td>Samuel Alejandro López Becerra</td>
            <td>2DO EXTRAORDINARIO</td>
            <td>80</td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td class="tabPDF">Promedio grupal</td>
            <td class="tabPDF">80</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
