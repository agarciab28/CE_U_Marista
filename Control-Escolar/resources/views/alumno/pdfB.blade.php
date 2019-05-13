<style>
td {
  padding-top: 7px;
  padding-bottom: 7px;
}
  .column {
    float: left;
    width: 16.66%;
  }

  body{
    font-family: "Verdana, Geneva, sans-serif";
    font-style: normal;
    font-size: 10px;
    color: black;
    text-transform: uppercase;
  }

  .bodyPDF{
    font-family: "Verdana, Geneva, sans-serif";
    font-size: 10px;
    color: black;
    text-align: center;
    text-transform: uppercase;
  }

  .headPDF{
    text-align: center;
    color: rgb(8,58,99);
    font-family: "Calibri";
    font-weight: bold;
    font-size: 15px;
  }

  .head2PDF{
    font-family: "Verdana, Geneva, sans-serif";
    font-weight: bold;
    font-size: 12px;
    color: black;
    text-transform: uppercase;
  }

  .subHeadPDF {
    text-align: center;
    font-family: "Verdana, Geneva, sans-serif";
    font-weight: bold;
    font-size: 12px;
    color: white;
    background: rgb(8,58,99);
    margin: 0 0 15px;
    overflow: hidden;
    padding: 5px;
    border-radius: 15px 15px 15px 15px;
    -moz-border-radius: 15px 15px 15px 15px;
    -webkit-border-radius: 15px 15px 15px 15px;
    border: 2px solid #5878ca;
  }

  .tabPDF{
    color: rgb(8,58,99);
    font-family: "Verdana, Geneva, sans-serif";
    font-weight: bold;
    text-align: center;
    font-size: 10px;
  }

  table td:nth-child(1) {
  	width: 2cm;
  }
  table td:nth-child(2) {
  	width: 8.5cm;
  }
  table td:nth-child(3) {
  	width: 5cm;
  }
  table td:nth-child(4) {
  	width: 3cm;
  }
</style>

<title>Kárdex de calificaciones.pdf</title>
<body>
  <div>
    <div class="headPDF" style="margin:20px 0px 0px 0px; font-size:20px; font-family: 'Verdana, Geneva, sans-serif'">UNIVERSIDAD</div>
    <div class="headPDF" style="font-size:25px; font-family: 'Verdana, Geneva, sans-serif'">MARISTA VALLADOLID</div>
    <div class="head2PDF" style="text-align: center; margin:20px 0px 20px 0px;">KÁRDEX DE CALIFICACIONES</div>
</div>
  </div>
  <br><br>
  <div class="subHeadPDF">datos del alumno</div>
    <div class="row">
      <div class="column tabPDF" style="text-align:left; width:10%">ALUMNO</div>
      <div class="column" id="alumno" style="width:40%">XXXX</div>
      <div class="column tabPDF" style="text-align:left; width:10%">no CTRL</div>
      <div class="column" id="noCtrl" style="width:15%">XXXX</div>
      <div class="column tabPDF" style="text-align:left; width:10%">CARRERA</div>
      <div class="column" id="carrera" style="width:15%">XXXX</div>
      <br>
    </div>
  <br><br><br>
  <div class="subHeadPDF">CALIFICACIONES</div>
  <table bgcolor="#cfd8dc" style="border: black 1px solid;">
    <thead style="background: rgba(96, 125, 139);">
      <tr>
          <th class="tabPDF" style="color:white;" colspan="4" scope="rowgroup">AGO-DIC 2019</th>
      </tr>
      <tr>
          <th class="tabPDF" style="color:white;">CLAVE MATERIA</th>
          <th class="tabPDF" style="color:white;">MATERIA</th>
          <th class="tabPDF" style="color:white;">TIPO DE EVALUACIÓN</th>
          <th class="tabPDF" style="color:white;">Calificación final</th>
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
        <th class="tabPDF" style="background: rgba(96, 125, 139); color:white;"></th>
        <th class="tabPDF" style="background: rgba(96, 125, 139); color:white;"></th>
        <th class="tabPDF" style="background: rgba(96, 125, 139); color:white;">PROMEDIO</th>
        <td class="tabPDF" style="background: rgba(96, 125, 139); color:white;">77.5</td>
      </tr>
    </tbody>
  </table>
  <br>
  <table bgcolor="#cfd8dc" style="border: black 1px solid;">
    <tbody style="background: rgba(96, 125, 139);">
      <tr style="border: black 1px solid;">
        <th class="tabPDF" style="color:white; width:15.85cm">PROMEDIO FINAL</th>
        <td class="tabPDF" style="color:white; width:3cm">77.5</td>
      </tr>
    </tbody>
  </table>
</body>
