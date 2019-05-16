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
                <th>Calificación primer parcial</th>
                <th>Calificación segundo parcial</th>
                <th>Examen Final</th>
                <th>Faltas</th>
                <th>Guardar</th>
            </tr>
        </thead>
        <tbody>

            <tr>
              @foreach($alumnos as $alumno)
                <td> {{$alumno->nombres}} {{$alumno->apaterno}} {{$alumno->amaterno}}</td>
                <td> <input id="cal_1" name="cal_1" type="text" class=""> </td>
                <td> <input id="cal_2" name="cal_2" type="text" class=""> </td>
                <td> <input id="examen" name="examen" type="text" class=""> </td>
                <td> <input id="faltas" name="faltas" type="text" class=""></td>
                <td><a href="#" class="btn">Guardar</a></td>
              @endforeach
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
