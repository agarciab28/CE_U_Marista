<style>
table{
  border-collapse: collapse;
}
td, th {
  padding-top: 7px;
  padding-bottom: 7px;
  border: 1px solid black;
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

  .tabPDF2{
    color: rgb(255,255,255);
    font-family: "Verdana, Geneva, sans-serif";
    font-weight: bold;
    text-align: center;
    font-size: 10px;
  }

  table td:nth-child(1n) {
    width: 2cm;
  }
  table td:nth-child(1) {
  	width: 2cm;
  }
  table td:nth-child(2) {
  	width: 9.5cm;
  }


</style>

<title>Acta de calificaciones.pdf</title>
<body>
  <div>
    <div class="headPDF" style="margin:20px 0px 0px 0px; font-size:20px; font-family: 'Verdana, Geneva, sans-serif'">UNIVERSIDAD</div>
    <div class="headPDF" style="font-size:25px; font-family: 'Verdana, Geneva, sans-serif'">MARISTA VALLADOLID</div>
    <div class="head2PDF" style="text-align: center; margin:20px 0px 20px 0px;">RELACIÓN DE ALUMNOS NO APROBADOS</div>
</div>
  </div>
  <br><br>
  <div class="subHeadPDF">datos del grupo</div>
    <div class="row">
      <div class="column tabPDF" style="text-align:left">CLAVE DE GRUPO</div>
      <div class="column" id="clave">{{$datos->id_grupo}}</div>
      <div class="column tabPDF" style="text-align:left">SECCIÓN</div>
      <div class="column" id="seccion">{{$datos->seccion}}</div>
      <div class="column tabPDF" style="width:10%; text-align:left">PERIODO</div>
      <div class="column" id="periodo" style="width:23%">{{$datos->periodo}}</div>
      <br>
    </div>
    <br>
    <div class="row">
      <div class="column tabPDF" style="width:10%; text-align:left">CARRERA</div>
      <div class="column" id="carrera" style="width:56.66%">{{$datos->nombre_carrera}}</div>
      <div class="column tabPDF" style="width:10%; text-align:left">MATERIA</div>
      <div class="column" id="materia" style="width:23%">{{$datos->nombre_materia}}</div>
      <br>
    </div>
    <br>
    <div class="row">
      <div class="column tabPDF"style="text-align:left">PROFESOR</div>
      <div class="column" id="profesor" style="width:80%">{{$datos->apaterno}} {{$datos->amaterno}} {{$datos->nombres}}</div>
      <br>
    </div>
  <br><br><br>
  <div class="subHeadPDF">lista de alumnos</div>
      <table>
          <tr>
              <th class="tabPDF">No CTRL</th>
              <th class="tabPDF">Nombre del alumno</th>
              <th class="tabPDF2"> X </th>
              <th class="tabPDF2"> X </th>
              <th class="tabPDF2"> X </th>
              <th class="tabPDF2"> X </th>
              <th class="tabPDF2"> X </th>
              <th class="tabPDF2"> X </th>
              <th class="tabPDF2"> X </th>
              <th class="tabPDF2"> X </th>
              <th class="tabPDF2"> X </th>
              <th class="tabPDF2"> X </th>
              <th class="tabPDF2"> X </th>
              <th class="tabPDF2"> X </th>
              <th class="tabPDF2"> X </th>
              <th class="tabPDF2"> X </th>
              <th class="tabPDF2"> X </th>
              <th class="tabPDF2"> X </th>
              <th class="tabPDF2"> XXXXX </th>
          </tr>
          @foreach($calificaciones as $calificacion)
          <tr>
            <td class="bodyPDF">{{$calificacion->ncontrol}}</td>
            <td class="bodyPDF" style="text-align:left;">{{$calificacion->apaterno}} {{$calificacion->amaterno}} {{$calificacion->nombres}}</td>
            <th class="tabPDF"></th>
            <th class="tabPDF"></th>
            <th class="tabPDF"></th>
            <th class="tabPDF"></th>
            <th class="tabPDF"></th>
            <th class="tabPDF"></th>
            <th class="tabPDF"></th>
            <th class="tabPDF"></th>
            <th class="tabPDF"></th>
            <th class="tabPDF"></th>
            <th class="tabPDF"></th>
            <th class="tabPDF"></th>
            <th class="tabPDF"></th>
            <th class="tabPDF"></th>
            <th class="tabPDF"></th>
            <th class="tabPDF"></th>
            <th class="tabPDF"></th>

          </tr>
          @endforeach

      </table>
</body>
