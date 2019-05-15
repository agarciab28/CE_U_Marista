@extends('layouts.app_admin')

@section('stylesheet')

<link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css" rel="stylesheet">

<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/admin/usuarios.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/admin/alumnos.css') }}}" rel="stylesheet">

@endsection

@section('title', 'Lista de Alumno')

@section('content')

  <div class="row contenedor">
    <div class="col m6 push-m3 s12">
      <h5>Lista de Alumnos</h5>
    </div>
  </div>

<div class="container">
  <table id="example" class="responsive-table striped" style="width:100%">
    <thead>
      <tr>
        <th>Número de control</th>
        <th>Nombre Completo</th>
        <th>Fecha de Nacimiento</th>
        <th>Correo Electrónico</th>
        <th>Modificar</th>
        <th>Deshabilitar</th>
      </tr>
    </thead>
    <tbody>
      @foreach($personas as $persona)
      <tr>
        <td class="numero">{{$persona->ncontrol}}</td>
        <td>{{$persona->nombres}} {{$persona->apaterno}} {{$persona->amaterno}}</td>
        <td>{{$persona->fnaci}}</td>
        <td>{{$persona->email}}</td>
        <td> <a href="{{route('modificar_alumno',[$persona->id_persona])}}"  class="btn">Modificar</a> </td>
        <td> <a href="{{route('eliminaAlumno',['ncontrol'=>$persona->ncontrol])}}" class="btn habilitar {{($persona->activo>0)?' green':'red'}} ">
          {{($persona->activo>0)?' Habilitado':'Deshabilitado'}}</a> </td>

      </tr>
      @endforeach

      </div>
    </tbody>
  </table>
</div>


@endsection
@section('scripts')

  <script src="{{{ asset('js/validaciones.js') }}}"></script>
  <script src="{{{ asset('js/plugins/dropify/js/dropify.min.js') }}}"></script>

  <script>
      $(document).ready(function() {
          // Basic
          $('.dropify').dropify();
          $('.fixed-action-btn').floatingActionButton();
          $('.tooltipped').tooltip();
      });

      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.fixed-action-btn');
        var instances = M.FloatingActionButton.init(elems, {direction: 'left'});
      });
  </script>
<!--sweetalert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{{ asset('js/datatables.js')}}}"></script>
@if($cambio==1)
<script type="text/javascript">
swal("¡El usuario a cambiado de estado de manera correcta!", {
    icon: "success",
});
</script>
@endif
@if($modif)
<script type="text/javascript">
swal("¡El usuario se ha modificado correctamente!", {
    icon: "success",
});
</script>
@endif
  <script src="{{{asset('js/asigna.js')}}}"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>

@endsection
