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
                <div class="card-content black-text z-depth-3">
                    <span class="card-title">Grupo:</span>
                    <p>{{$grupo->nombre_materia}}</p>
                    <p>{{$grupo->nombres}} {{$grupo->aparterno}} {{$grupo->amaterno}}</p>
                </div>
                <div class="card-action">
                    <a href="#" class="modal-trigger"><i class="fas fa-cog"></i> Opciones</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
  </div>





@endsection

@section('scripts')

@endsection
