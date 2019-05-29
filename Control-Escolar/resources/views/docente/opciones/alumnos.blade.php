@extends('layouts.app_docente')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css" rel="stylesheet">

@endsection

@section('title', 'Lista de alumnos por grupo')

@section('content')

  <div class="fixed-action-btn">
    <a class="btn-floating btn-large  waves-effect waves-light light-blue darken-4 tooltipped" data-position="left" data-tooltip="Generar PDF" href="{{ route('docente_pdfA',['grupo' => $id_grupo]) }}" id="btn_pdf">
      <i class="far fa-file-pdf"></i>
    </a>
  </div>

<div class="container">
  <table id="example" class="responsive-table striped" style="width:100%">
        <thead>
            <tr>
                <th>Nombre de alumno</th>
                <th>N° control</th>
                <th>Grupo</th>
                <th>Calificación primer parcial</th>
                <th>Calificación segundo parcial</th>
                <th>Examen Final</th>
                <th>Faltas</th>
                <th>Guardar</th>
            </tr>
        </thead>
        <tbody>
          @foreach($alumnos as $alumno)
            <tr>
              <form class="" action="{{route('actualizaCalificacion')}}" method="post">
                @csrf


                <td> {{$alumno->nombres}} {{$alumno->apaterno}} {{$alumno->amaterno}}</td>
                <td><input type="text" name="ncontrol" value="{{$alumno->ncontrol}}" readonly></td>
                <td><input type="text" name="grupo" value="{{$alumno->grupo}}" readonly></td>
                <td> <input  name="cal1"  type="text" pattern="^[0-9]+([.][0-9]+)?$" value="{{$alumno->primero}}" class=""></td>
                <td> <input  name="cal2"  type="text" pattern="^[0-9]+([.][0-9]+)?$" value="{{$alumno->segundo}}" class=""></td>
                <td> <input  name="examen"  type="text" pattern="^[0-9]+([.][0-9]+)?$" value="{{$alumno->examen}}" class=""></td>
                <td> <input  name="faltas"  type="text" pattern="^[0-9]+$" value="{{$alumno->faltas}}" class=""></td>
                <td><button type="submit" class="btn">guardar</button></td>
              </form>
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
