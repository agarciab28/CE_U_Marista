@extends('layouts.app_admin')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/ver.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Identificacion')

@section('content')
  <div class="section container">
    <div class="row">
      <div class="contenedor col s12 m6 push-m3">
        <h4>Ficha de Identificación</h4>
      </div>
    </div>
    <form class="form_1" action="" method="">
      <div class="row">
        <div class="input-field col s12 m4">
          <input id="nombre" type="text" class="validate" disabled value="Alejandro">
          <label for="nombre">Nombre</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="apellido" type="text" class="validate" disabled value="García">
          <label for="apellido">Apellido</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="edad" type="number" class="validate" disabled value="21">
          <label for="edad">Edad</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="genero" type="text" class="validate" disabled value="Masculino">
          <label for="genero">Genero</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="nacionalidad" type="text" class="validate" disabled value="Mexicano">
          <label for="nacionalidad">Nacionalidad</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="estado" type="text" class="validate" disabled value="Soltero">
          <label for="estado">Estado Civil</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="ocupacion" type="text" class="validate" disabled value="Estudiante">
          <label for="ocupacion">Ocupación</label>
        </div>
        <div class="input-field col s12 m8">
          <input id="calle" type="text" class="validate" disabled value="Avenida Morelos Norte">
          <label for="calle">Calle</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="numero" type="text" class="validate" disabled value="335">
          <label for="numero">Numero</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="colonia" type="text" class="validate" disabled value="Santiaguito">
          <label for="colonia">Colonia</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="tel1" type="tel" class="validate" disabled value="4433154825">
          <label for="tel1">Telefono</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="celular" type="tel" class="validate" disabled value="4432547512">
          <label for="celular">Celular</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="religion" type="text" class="validate" disabled value="Catolica">
          <label for="religion">Religion</label>
        </div>
        <div class="input-field col s12 m8">
          <input id="nombre2" type="text" class="validate" disabled value="Fernando García">
          <label for="nombre2">Persona en caso de emergencia</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="tel2" type="tel" class="validate" disabled value="4431485692">
          <label for="tel2">Telefono/Celular</label>
        </div>
      </div>
    </form>
  </div>

  <div class="row section container">
    <div class="contenedor col s12 m6 push-m3">
      <h4>Historial de Consultas</h4>
    </div>
  </div>

  <table class="striped responsive-table ">
    <thead>
   <tr>
       <th>Fecha</th>
       <th>Nombre</th>
       <th>Apellido</th>
       <th>CURP</th>
       <th>Acciones</th>
   </tr>
 </thead>
 <tbody>
   <tr>
     <td>10/03/2019</td>
     <td>Alejandro</td>
     <td>García</td>
     <td>GABAasedfr12345678</td>
     <td> <a href="" class="waves-effect waves-light btn">Ver Detalles</a></td>
   </tr>
   <tr>
     <td>11/03/2019</td>
     <td>Alejandro</td>
     <td>García</td>
     <td>GABAasedfr12345678</td>
     <td> <a href="" class="waves-effect waves-light btn">Ver Detalles</a></td>
   </tr>
   <tr>
     <td>12/03/2019</td>
     <td>Alejandro</td>
     <td>García</td>
     <td>GABAasedfr12345678</td>
     <td> <a href="" class="waves-effect waves-light btn">Ver Detalles</a></td>
   </tr>
   <tr>
     <td>13/03/2019</td>
     <td>Alejandro</td>
     <td>García</td>
     <td>GABAasedfr12345678</td>
     <td> <a href="" class="waves-effect waves-light btn">Ver Detalles</a></td>
   </tr>
 </tbody>
</table>

@endsection
