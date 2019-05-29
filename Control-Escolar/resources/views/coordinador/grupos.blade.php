@extends('layouts.app_coordinador')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/coordinador/grupos.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Grupos')


@section('content')
  <div class="row contenedor">
    <div class="col m6 push-m3 s12">
      <h5>Grupos de Carrera</h5>
    </div>
  </div>
  {{ csrf_field() }}
  <div class="section container">
    <div class="row">
    @foreach($grupos as $grupo)
        <div class="col s12 m4">
            <div class="card card-grupo">
                <div class="card-content black-text z-depth-1">
                    <span class="card-title">Grupo: {{$grupo->id_grupo}}</span>
                    <span class="titulo">Materia:</span> {{$grupo->nombre_materia}} <br>
                    <span class="titulo">Seccion:</span> {{$grupo->seccion}} <br>
                    <span class="titulo">Profesor: </span> {{$grupo->nombres}} {{$grupo->amaterno}} {{$grupo->apaterno}} <br>
                    {{-- <span class="titulo">Carrera: </span> {{$grupo->carrera}} <br> --}}
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Acciones<i class="material-icons right">close</i></span>
                  <div class="contenedor">
                    <br>
                    <div class="collection">
                      <form class="" action="{{ route('coordinador_pdfA') }}" method="get">
                        @csrf
                        <input type="text" name="id_grupo" value="" hidden>
                        <button type="submit" class="collection-item black-text botonModal">Calificaciones Evaluación Ordinaria</button>
                      </form>
                      <form class="" action="{{ route('coordinador_pdfF') }}" method="get">
                        @csrf
                        <input type="text" name="id_grupo" value="" hidden>
                        <button type="submit" class="collection-item black-text botonModal">Calificaciones Finales</button>
                      </form>
                      <form class="" action="{{ route('coordinador_pdfAM') }}" method="get">
                        @csrf
                        <input type="text" name="id_grupo" value="" hidden>
                        <button type="submit" class="collection-item black-text botonModal">Calificaciones Evaluacion Ordianaria</button>
                      </form>
                      <form class="" action="{{ route('coordinador_pdfFM') }}" method="get">
                        @csrf
                        <input type="text" name="id_grupo" value="" hidden>
                        <button type="submit" class="collection-item black-text botonModal">Calificaciones Finales</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="card-action" style="background-color:#FFB500">
                  <div class="contenedor activator contenedor-card">
                    <a class="white-text activator" ><i class="fas fa-cog "></i> Acciones</a> <br>
                  </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
  </div>



  <!--modal-->
  <div id="modal1" class="modal bottom-sheet">
      <div class="modal-content">
          <h4>Grupo</h4>
          <p>
              <div class="collection">
                <form class="" action="{{ route('coordinador_pdfA') }}" method="post">
                  @csrf
                  <input type="text" name="id_grupo" value="" hidden>
                  <button type="submit" class="collection-item black-text botonModal">Calificaciones Evaluación Ordinaria</button>
                </form>
                <form class="" action="{{ route('coordinador_pdfF') }}" method="post">
                  @csrf
                  <input type="text" name="id_grupo" value="" hidden>
                  <button type="submit" class="collection-item black-text botonModal">Calificaciones Finales</button>
                </form>
              </div>
          </p>
      </div>
      <div class="modal-footer">
          <a href="#" class="modal-close waves-effect waves-green btn-flat">
              <i class="material-icons blue-text text-darken-4"> fullscreen_exit </i>
              <b> Salir </b>
            </a>
      </div>
  </div>

@endsection

@section('scripts')
  <script src="{{{asset('js/asigna.js')}}}"></script>

@endsection
