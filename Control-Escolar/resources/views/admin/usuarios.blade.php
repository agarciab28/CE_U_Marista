@extends('layouts.app_admin')

@section('stylesheet')
  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/usuarios.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Usuarios')

@section('content')
  <div class="section container">
    <div class="row">
      <div class="input-field col s12 m6 push-m3">
        <select>
          <option value="all" selected>Todos</option>
          <option value="coordinador">Coordinador</option>
          <option value="coordinador">Rectoría</option>
          <option value="coordinador">Medicos</option>
          <option value="coordinador">Pasantes</option>
          <option value="coordinador">Fisioterapeutas</option>
          <option value="coordinador">Practicantes</option>
        </select>
        <label>Tipo de Usuario</label>
      </div>
    </div>
  </div>

  <div class="section container">
    <table class="striped responsive-table z-depth-5">
   <thead>
     <tr>
         <th>Tipo de Usuario</th>
         <th>Nombre</th>
         <th>Apellido</th>
         <th>CURP</th>
         <th>Acciones</th>
     </tr>
   </thead>
   <tbody>
     <tr>
       <td>Coordinador</td>
       <td>Alejandro</td>
       <td>García</td>
       <td>GABAasedfr12345678</td>
       <td> <a href="" class="waves-effect waves-light btn">Modificar</a> <a href="" class="waves-effect waves-light btn">Eliminar</a></td>
     </tr>
     <tr>
       <td>Coordinador</td>
       <td>Alejandro</td>
       <td>García</td>
       <td>GABAasedfr12345678</td>
       <td> <a href="" class="waves-effect waves-light btn">Modificar</a> <a href="" class="waves-effect waves-light btn">Eliminar</a></td>
     </tr>
     <tr>
       <td>Coordinador</td>
       <td>Alejandro</td>
       <td>García</td>
       <td>GABAasedfr12345678</td>
       <td> <a href="" class="waves-effect waves-light btn">Modificar</a> <a href="" class="waves-effect waves-light btn">Eliminar</a></td>
     </tr>
     <tr>
       <td>Coordinador</td>
       <td>Alejandro</td>
       <td>García</td>
       <td>GABAasedfr12345678</td>
       <td> <a href="" class="waves-effect waves-light btn">Modificar</a> <a href="" class="waves-effect waves-light btn">Eliminar</a></td>
     </tr>
     <tr>
       <td>Coordinador</td>
       <td>Alejandro</td>
       <td>García</td>
       <td>GABAasedfr12345678</td>
       <td> <a href="" class="waves-effect waves-light btn">Modificar</a> <a href="" class="waves-effect waves-light btn">Eliminar</a></td>
     </tr>
     <tr>
       <td>Coordinador</td>
       <td>Alejandro</td>
       <td>García</td>
       <td>GABAasedfr12345678</td>
       <td> <a href="" class="waves-effect waves-light btn">Modificar</a> <a href="" class="waves-effect waves-light btn">Eliminar</a></td>
     </tr>
     <tr>
       <td>Coordinador</td>
       <td>Alejandro</td>
       <td>García</td>
       <td>GABAasedfr12345678</td>
       <td> <a href="" class="waves-effect waves-light btn">Modificar</a> <a href="" class="waves-effect waves-light btn">Eliminar</a></td>
     </tr>
     <tr>
       <td>Coordinador</td>
       <td>Alejandro</td>
       <td>García</td>
       <td>GABAasedfr12345678</td>
       <td> <a href="" class="waves-effect waves-light btn">Modificar</a> <a href="" class="waves-effect waves-light btn">Eliminar</a></td>
     </tr>
     <tr>
       <td>Coordinador</td>
       <td>Alejandro</td>
       <td>García</td>
       <td>GABAasedfr12345678</td>
       <td> <a href="" class="waves-effect waves-light btn">Modificar</a> <a href="" class="waves-effect waves-light btn">Eliminar</a></td>
     </tr>
     <tr>
       <td>Coordinador</td>
       <td>Alejandro</td>
       <td>García</td>
       <td>GABAasedfr12345678</td>
       <td> <a href="" class="waves-effect waves-light btn">Modificar</a> <a href="" class="waves-effect waves-light btn">Eliminar</a></td>
     </tr>
     <tr>
       <td>Coordinador</td>
       <td>Alejandro</td>
       <td>García</td>
       <td>GABAasedfr12345678</td>
       <td> <a href="" class="waves-effect waves-light btn">Modificar</a> <a href="" class="waves-effect waves-light btn">Eliminar</a></td>
     </tr>
     <tr>
       <td>Coordinador</td>
       <td>Alejandro</td>
       <td>García</td>
       <td>GABAasedfr12345678</td>
       <td> <a href="" class="waves-effect waves-light btn">Modificar</a> <a href="" class="waves-effect waves-light btn">Eliminar</a></td>
     </tr>
     <tr>
       <td>Coordinador</td>
       <td>Alejandro</td>
       <td>García</td>
       <td>GABAasedfr12345678</td>
       <td> <a href="" class="waves-effect waves-light btn">Modificar</a> <a href="" class="waves-effect waves-light btn">Eliminar</a></td>
     </tr>
     <tr>
       <td>Coordinador</td>
       <td>Alejandro</td>
       <td>García</td>
       <td>GABAasedfr12345678</td>
       <td> <a href="" class="waves-effect waves-light btn">Modificar</a> <a href="" class="waves-effect waves-light btn">Eliminar</a></td>
     </tr>
   </tbody>
 </table>
  </div>

@endsection
