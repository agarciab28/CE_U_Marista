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
  	width: 1.5cm;
  }
  table td:nth-child(2) {
  	width: 3cm;
  }
  table td:nth-child(3) {
  	width: 11cm;
  }
  table td:nth-child(4) {
  	width: 3cm;
  }
</style>

<title>Acta de calificaciones.pdf</title>
<body>
  <div>
    <div class="headPDF" style="margin:20px 0px 0px 0px; font-size:20px; font-family: 'Verdana, Geneva, sans-serif'">UNIVERSIDAD</div>
    <div class="headPDF" style="font-size:25px; font-family: 'Verdana, Geneva, sans-serif'">MARISTA VALLADOLID</div>
    <div class="head2PDF" style="text-align: center; margin:20px 0px 20px 0px;">BOLETA DE CALIFICACIONES: XXXXXXX EVALUACIÓN EXTRAORDINARIA</div>
  </div>
  <br><br>
  <div class="subHeadPDF">datos del grupo</div>
    <div class="row">
      <div class="column tabPDF" style="text-align:left">CLAVE DE GRUPO</div>
      <div class="column" id="clave">XXXX</div>
      <div class="column tabPDF" style="text-align:left">SECCIÓN</div>
      <div class="column" id="seccion">XXXX</div>
      <div class="column tabPDF" style="text-align:left">PERIODO</div>
      <div class="column" id="periodo">XXXX</div>
      <br>
    </div>
    <br>
    <div class="row">
      <div class="column tabPDF" style="width:20%; text-align:left">CARRERA</div>
      <div class="column" id="carrera" style="width:30%">XXXX</div>
      <div class="column tabPDF" style="width:20%; text-align:left">MATERIA</div>
      <div class="column" id="materia" style="width:30%">XXXX</div>
      <br>
    </div>
    <br>
    <div class="row">
      <div class="column tabPDF"style="text-align:left">PROFESOR</div>
      <div class="column" id="profesor" style="width:80%">SAMUEL ALEJANDRO LÓPEZ BECERRA</div>
      <br>
    </div>
  <br><br><br>
  <div class="subHeadPDF">CALIFICACIONES</div>
      <table>
          <tr>
              <th class="tabPDF">No</th>
              <th class="tabPDF">No CTRL</th>
              <th class="tabPDF">Nombre del alumno</th>
              <th class="tabPDF">Calificación final</th>
          </tr>
          <tr>
            <td class="bodyPDF">1</td>
            <td class="bodyPDF">15121183</td>
            <td class="bodyPDF" style="text-align:left;">Samuel Alejandro López Becerra</td>
            <td class="bodyPDF">80</td>
          </tr>
          <tr>
            <td class="bodyPDF">2</td>
            <td class="bodyPDF">15121189</td>
            <td class="bodyPDF" style="text-align:left;">Diego Ulises Martínez Aguilar</td>
            <td class="bodyPDF">80</td>
          </tr>
          <tr>
            <td colspan="3" class="tabPDF">Promedio grupal</td>
            <td class="bodyPDF">80</td>
          </tr>
      </table>
</body>
