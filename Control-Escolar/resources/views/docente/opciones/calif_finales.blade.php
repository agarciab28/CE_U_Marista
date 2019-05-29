@extends('layouts.app_docente')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css" rel="stylesheet">


@endsection

@section('title', 'Lista de alumnos por grupo')

@section('content')

  <div class="fixed-action-btn">
    <a class="btn-floating btn-large  waves-effect waves-light light-blue darken-4 tooltipped" data-position="left" data-tooltip="Generar PDF" href="{{ route('docente_pdfF') }}" id="btn_pdf">
      <i class="far fa-file-pdf"></i>
    </a>
  </div>

<div class="container">
  <table id="example" class="responsive-table striped" style="width:100%">
        <thead>
            <tr>
                <th>Nombre de alumno</th>
                <th>N° Control</th>
                <th>Grupo</th>
                <th>Calificación Sugerida</th>
                <th>Calificacion Final</th>
                <th>Guardar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sugerencias as $sugerencia)

            <tr>
              <form class="" action="{{route('actualizaFinal')}}" method="post">
                @csrf

                <td>{{$sugerencia['alumno']}}</td>
                <td> <input type="text" name="ncontrol" value="{{$sugerencia['ncontrol']}}" readonly></td>
                <td> <input type="text" name="grupo" value="{{$sugerencia['grupo']}}" readonly></td>
                <td>{{$sugerencia['sug']}}</td>
                <td> <input id="calif" value="{{$sugerencia['final']}}" name="calif" type="number" class=""></td>
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
