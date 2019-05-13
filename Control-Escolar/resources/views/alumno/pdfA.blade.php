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

  table td:nth-child(1n) {
  	width: 1.8cm;
  }
  table td:nth-child(2) {
  	width: 5cm;
  }
</style>

<title>Acta de calificaciones.pdf</title>
<body>
  <div>
    <div class="headPDF" style="margin:20px 0px 0px 0px; font-size:20px; font-family: 'Verdana, Geneva, sans-serif'">UNIVERSIDAD</div>
    <div class="headPDF" style="font-size:25px; font-family: 'Verdana, Geneva, sans-serif'">MARISTA VALLADOLID</div>
    <div class="head2PDF" style="text-align: center; margin:20px 0px 20px 0px;">BOLETA DE CALIFICACIONES</div>
</div>
  </div>
  <br><br>
  <div class="subHeadPDF">datos del alumno</div>
    <div class="row">
      <div class="column tabPDF" style="text-align:left">ALUMNO</div>
      <div class="column" id="alumno" style="width:50.02%">XXXX</div>
      <div class="column tabPDF" style="text-align:left">no CTRL</div>
      <div class="column" id="noCtrl">XXXX</div>
      <br>
    </div>
    <br>
    <div class="row">
      <div class="column tabPDF" style="text-align:left">CARRERA</div>
      <div class="column" id="carrera">XXXX</div>
      <div class="column tabPDF" style="text-align:left">semestre</div>
      <div class="column" id="semestre">XXXX</div>
      <div class="column tabPDF" style="text-align:left">PERIODO</div>
      <div class="column" id="periodo">XXXX</div>
      <br>
    </div>
  <br><br><br>
  <div class="subHeadPDF">CALIFICACIONES</div>
  <table bgcolor="#cfd8dc" style="border: black 1px solid;">
    <thead style="background: rgba(96, 125, 139);">
      <tr>
          <th class="tabPDF" style="background: rgba(96, 125, 139); color:white;">CLAVE MATERIA</th>
          <th class="tabPDF" style="background: rgba(96, 125, 139); color:white;">MATERIA</th>
          <th class="tabPDF" style="background: rgba(96, 125, 139); color:white;">PRIMER PARCIAL</th>
          <th class="tabPDF" style="background: rgba(96, 125, 139); color:white;">FALTAS</th>
          <th class="tabPDF" style="background: rgba(96, 125, 139); color:white;">SEGUNDO PARCIAL</th>
          <th class="tabPDF" style="background: rgba(96, 125, 139); color:white;">FALTAS</th>
          <th class="tabPDF" style="background: rgba(96, 125, 139); color:white;">TERCER PARCIAL</th>
          <th class="tabPDF" style="background: rgba(96, 125, 139); color:white;">FALTAS</th>
          <th class="tabPDF" style="background: rgba(96, 125, 139); color:white;">FALTAS TOTALES</th>
          <th class="tabPDF" style="background: rgba(96, 125, 139); color:white;">Calificación final</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td class="bodyPDF">ABC123</td>
        <td class="bodyPDF">CÁLCULO INTEGRAL</td>
        <td class="bodyPDF">80</td>
        <td class="bodyPDF">2</td>
        <td class="bodyPDF">75</td>
        <td class="bodyPDF">2</td>
        <td class="bodyPDF">85</td>
        <td class="bodyPDF">1</td>
        <td class="bodyPDF">5</td>
        <td class="bodyPDF">80</td>
      </tr>
      <tr>
        <td class="bodyPDF">ABC123</td>
        <td class="bodyPDF">PROGRAMACIÓN AVANZADA</td>
        <td class="bodyPDF">80</td>
        <td class="bodyPDF">2</td>
        <td class="bodyPDF">75</td>
        <td class="bodyPDF">2</td>
        <td class="bodyPDF">85</td>
        <td class="bodyPDF">1</td>
        <td class="bodyPDF">5</td>
        <td class="bodyPDF">80</td>
      </tr>
      <tr>
        <td class="bodyPDF">ABC123</td>
        <td class="bodyPDF">ÉTICA</td>
        <td class="bodyPDF">80</td>
        <td class="bodyPDF">2</td>
        <td class="bodyPDF">75</td>
        <td class="bodyPDF">2</td>
        <td class="bodyPDF">85</td>
        <td class="bodyPDF">1</td>
        <td class="bodyPDF">5</td>
        <td class="bodyPDF">80</td>
      </tr>
      <tr style="border: black 1px solid;">
        <th class="tabPDF" style="background: rgba(96, 125, 139); color:white;"></th>
        <th class="tabPDF" style="background: rgba(96, 125, 139); color:white;">PROMEDIO</th>
        <td class="tabPDF" style="background: rgba(96, 125, 139); color:white;">70</td>
        <td class="tabPDF" style="background: rgba(96, 125, 139); color:white;">2</td>
        <td class="tabPDF" style="background: rgba(96, 125, 139); color:white;">65</td>
        <td class="tabPDF" style="background: rgba(96, 125, 139); color:white;">2</td>
        <td class="tabPDF" style="background: rgba(96, 125, 139); color:white;">67.5</td>
        <td class="tabPDF" style="background: rgba(96, 125, 139); color:white;">1</td>
        <td class="tabPDF" style="background: rgba(96, 125, 139); color:white;">5</td>
        <td class="tabPDF" style="background: rgba(96, 125, 139); color:white;">77.5</td>
      </tr>
    </tbody>
  </table>
</body>
