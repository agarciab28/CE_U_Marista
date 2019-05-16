@extends('layouts.app_admin')

@section('stylesheet')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css" rel="stylesheet">

  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/usuarios.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/alumnos.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Asignar Alumnos')

@section('content')

  <!--Se recibe por URL id de grupo e id_carrera, se necesita un filtrado de alumnos de la carrera del id_carrera y mostrarlos en
  la tabla. Posteriormente, con el con los check box, seleccionar a los alumnos que formaran parte  del grupo

-->
  <div class="container">



    @if(isset($success))
        <div class="alert alert-success"> {{$success}} </div>
    @endif

<!-- FILTRO DE ALUMNOS POR CARRERA Y SEMESTRE-->

      <div class="filtros">
            <div class="row contenedor">
                  <div class="col m6 push-m3 s12">
                    <h5>Asignación de alumnos a grupo</h5>
                  </div>
            </div>
            <div class="row">
                  {!! Form::open(['route'=> array('admin_asignar', $idg,$idc), 'method'=>'GET', 'files' => true, 'role' => 'form']) !!}
                  <div class="input-field col m4 s12 ">

                    <label for="fcarrera">Carrera:</label>
                  </div>
                  <div class="input-field col m4 s12 ">
                    {!! Form::number('semestre',null,['class'=>'form-control', 'placeholder'=>'1', 'max' => '12', 'min' => '1']) !!}

                  </div>
                  <div class="input-field col m4 s12 ">
                    <button type="submit" class="btn" name="button">Filtrar</button>
                  </div>
                  {!! Form::close() !!}
            </div>
      </div>


<!-- FIN DEL FILTRO-->



<form class="" action="{{route('admin_asignar_grupo')}}" method="post">
{{ csrf_field() }}
      <table id="example" class="responsive-table striped" style="width:100%">
            <thead>
                <tr>
                    <th>Seleccionar</th>
                    <th>Número de control</th>
                    <th>Nombre Completo</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Correo Electronico</th>
                </tr>
            </thead>
            <tbody class="body_forich">
              @foreach($personas as $persona)
    <tr>
        <td>
            <label>
              <input type="checkbox" class="filled-in" name="alumnos[]" value="{{$persona->ncontrol}},{{$persona->nombres}},{{$idg}}">
              <span>Seleccionar</span>
            </label>
        </td>
        <td>{{$persona->ncontrol}}</td>
        <td>{{$persona->nombres}}</td>
        <td>{{$persona->fnaci}}</td>
        <td>{{$persona->email}}</td>
    </tr>
                  @endforeach
            </tbody>
        </table>
        <div class="input-field">
          <button type="submit" class="btn" name="button">Registrar</button>
        </div>

    </form>
    <div class="" id="cont_t">

    </div>
  </div>
@endsection

@section('scripts')
  <script src="{{{ asset('js/datatables.js') }}}"></script>
  <script src="{{{ asset('js/asignar.js') }}}"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>
  <script src="https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"></script>
@endsection
