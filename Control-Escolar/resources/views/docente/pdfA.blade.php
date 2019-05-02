@extends('layouts.app_pdf')
@section('stylesheet')
<link href="{{{ asset('css/style_pdf.css') }}}" rel="stylesheet">
<body>
  <div class="container">
    <div class="row">
      <div class="col s12 m4 l2"><img src="{{{ asset('img/logos/logo_3_a.png') }}}" alt="" width="50%" style="margin:20px"></div>
      <div class="col s12 m4 l8"><div class="headPDF center" style="margin:20px 0px 0px 0px; font-size:20px">UNIVERSIDAD</div></div>
      <div class="col s12 m4 l8"><div class="headPDF">MARISTA VALLADOLID</div></div>
      <div class="col s12"><div class="head2PDF center">BOLETA DE CALIFICACIONES: EVALUACIÓN ORDINARIA</div></div>
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
      <table class="">
        <thead>
          <tr>
              <th class="tabPDF center">No</th>
              <th class="tabPDF center">No CTRL</th>
              <th class="tabPDF center">Nombre del alumno</th>
              <th class="tabPDF center">Primer parcial</th>
              <th class="tabPDF center">Segundo parcial</th>
              <th class="tabPDF center">Tercer parcial</th>
              <th class="tabPDF center">Calificación final</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td class="bodyPDF center">1</td>
            <td class="bodyPDF center">15121183</td>
            <td class="bodyPDF">Samuel Alejandro López Becerra</td>
            <td class="bodyPDF center">75</td>
            <td class="bodyPDF center">80</td>
            <td class="bodyPDF center">85</td>
            <td class="bodyPDF center">80</td>
          </tr>
          <tr>
            <td class="bodyPDF center">2</td>
            <td class="bodyPDF center">15121189</td>
            <td class="bodyPDF">Diego Ulises Martínez Aguilar</td>
            <td class="bodyPDF center">75</td>
            <td class="bodyPDF center">80</td>
            <td class="bodyPDF center">85</td>
            <td class="bodyPDF center">80</td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td class="tabPDF center">Promedio grupal</td>
            <td class="tabPDF center">80</td>
            <td class="tabPDF center">76</td>
            <td class="tabPDF center">84</td>
            <td class="tabPDF center">80</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
