@extends('layouts.app_docente')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css" rel="stylesheet">


@endsection

@section('title', 'Lista de alumnos por grupo')

@section('content')

<div class="container">
  <table id="example" class="responsive-table striped" style="width:100%">
        <thead>
            <tr>
                <th>Nombre de alumno</th>
                <th>Calificación Sugerida</th>
                <th>Calificacion Final</th>
                <th>Guardar</th>
            </tr>
        </thead>
        <tbody>
        <!-- @foreach($alumnos as $alumno)
        <tr>
                <td>{{$alumno->nombres}}</td>
                <td>{{$alumno->calif}}</td>
                <td> <input id="calif" name="calif" type="text" class=""></td>
                <td><a href="#" class="btn">guardar</a></td>
            </tr>
      @endforeach-->
            <tr>
                <td> José Carlos Arrollo Ayala</td>
                <td>100</td>
                <td> <input id="calif" name="calif" type="text" class=""></td>
                <td><a href="#" class="btn">guardar</a></td>
            </tr>

            <tr>
                <td> Manuel Felipe Acuña Anastacio </td>
                <td>100</td>
                <td> <input id="calif" name="calif" type="text" class=""></td>
                <td><a href="#" class="btn">guardar</a></td>
            </tr>

            <tr>
                <td> Jesus Aquiles Adenayor Amador</td>
                <td>100</td>
                <td> <input id="calif" name="calif" type="text" class=""></td>
                <td><a href="#" class="btn">guardar</a></td>
            </tr>

        </tbody>
    </table>
</div>

@endsection

@section('scripts')
<script src="{{{ asset('js/datatables.js') }}}"></script>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"></script>
@endsection
