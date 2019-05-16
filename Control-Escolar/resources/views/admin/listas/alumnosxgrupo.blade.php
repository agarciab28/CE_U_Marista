@extends('layouts.app_admin')

@section('stylesheet')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css" rel="stylesheet">

  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/alumnos.css') }}}" rel="stylesheet">

@endsection

@section('title', 'Lista Alumnos por Grupo')


@section('content')
  <div class="row contenedor">
    <div class="col m6 push-m3 s12">
      <h5>Lista de Alumnos del grupo</h5>
    </div>
  </div>
  {{ csrf_field() }}
  <div class="container">
  <table id="example" class="responsive-table striped" style="width:100%">
    <thead>
      <tr>
        <th>Número de control</th>
        <th>Nombre Completo</th>
        <th>eliminar</th>
      </tr>
    </thead>
    <tbody>
    @foreach($listag as $listags)
      <tr>
        <td class="numero">{{$listags->ncontrol}}</td>
        <td>{{$listags->nombres}}</td>
        <td> <a  href=" {{route('admin_eliminaral',[$listags->id_grupo,$listags->ncontrol])}}" class="btn tooltipped" data-tooltip="Elimina al alumno del grupo"><i class="fas fa-user-plus"></i>
        Eliminar</a> </td>
      </tr>
      </div>
      @endforeach
    </tbody>
    
  </table>
  </div>

  


@endsection

@section('scripts')

@endsection
