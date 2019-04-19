@extends('layouts.app_pdf')
@section('stylesheet')
<link href="{{{ asset('css/style_pdf.css') }}}" rel="stylesheet">
<body>
  <div class="container">
    <div class="row">
      <div class="col s12 m4 l2"><img class="responsive-img" src="{{{ asset('img/logos/logo_1_a.png') }}}" alt="" width="600"></div>
      <div class="col s12 m4 l8"><div class="headPDF">BOLETA DE CALIFICACIONES</div></div>
    </div>
    <br><br>
    <div class="row">
      <div class="subHeadPDF">DATOS DEL GRUPO</div>
      <div class="col s6">Clave</div>
      <div class="col s6">Sección</div>

            <th>Clave de grupo</th>
            <th>Sección</th>
            <th>Carrera</th>
            <th>Materia</th>
            <th>Profesor</th>
            <th>Periodo</th>

    </div>

    <div class="row">
      <div class="subHeadPDF">CALIFICACIONES</div>
      <table class="centered">
        <thead>
          <tr>
              <th>Nombre completo</th>
              <th>Primer parcial</th>
              <th>Segundo parcial</th>
              <th>Tercer parcial</th>
              <th>Calificación final</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
