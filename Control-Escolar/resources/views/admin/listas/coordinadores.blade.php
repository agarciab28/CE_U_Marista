@extends('layouts.app_admin')

@section('stylesheet')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css" rel="stylesheet">

  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/usuarios.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/alumnos.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Lista de Coordinadores')

@section('content')
  <div class="contenedor row">
    <div class="col m6 push-m3 s12">
      <h5>Lista de Coordinadores</h5>
    </div>
  </div>
  <div class="container">
    <table id="example" class="responsive-table striped" style="width:100%">
          <thead>
              <tr>
                  <th>Nombre de Usuario</th>
                  <th>Nombre Completo</th>
                  <th>Fecha de Nacimiento</th>
                  <th>Correo Electronico</th>
                  <th>Modificar</th>
                  <th>Deshabilitar</th>
              </tr>
          </thead>
          <tbody>
            @foreach($personas as $persona)
            <tr>
              <td> {{$persona->usuario}} </td>
              <td>{{$persona->nombres}} {{$persona->apaterno}} {{$persona->amaterno}}</td>
              <td>{{$persona->fnaci}}</td>
              <td>{{$persona->email}}</td>
              <td> <a href="{{route('modificar_coor_lst',[$persona->persona])}}" class="btn">Modificar</a> </td>
              <td> <a href="{{ route('eliminaCoordinador',['usuario'=>$persona->usuario]) }}" class="btn {{($persona->activo>0)?' green':'red'}}">{{($persona->activo>0)?' Habilitado':'Deshabilitado'}}</a> </td>

          </tr>
          @endforeach
          </tbody>
      </table>
  </div>
@endsection

@section('scripts')
  <script src="{{{ asset('js/datatables.js') }}}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>
  <script src="https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"></script>
@endsection
