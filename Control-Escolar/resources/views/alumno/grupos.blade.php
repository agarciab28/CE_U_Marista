@extends('layouts.app_alumno')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/alumno/grupos.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Grupos Alumno')


@section('content')
  <div class="section container">
    <div class="row">
        <div class="col s12 m4">
            <div class="card card-grupo">
                <div class="card-content black-text z-depth-3">
                    <span class="card-title">Grupo: </span>
                    <p>
                      Materia: <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
  </div>


<div class="contenedor content-horario">
  <div class="row">
    <div class="col s2 push-s1">
      <div class="card card-dia">
        <div class="card-content">
          <span>Lunes</span>
        </div>
      </div>
      <div class="card card-materia">
        <div class="card-content">
          <p><i class="fas fa-clock"></i>9:00-10:00</p>
          <span>Materia</span>
        </div>
      </div>
      <div class="card card-materia">
        <div class="card-content">
          <p><i class="fas fa-clock"></i>9:00-10:00</p>
          <span>Materia</span>
        </div>
      </div>
      <div class="card card-materia">
        <div class="card-content">
          <p><i class="fas fa-clock"></i>9:00-10:00</p>
          <span>Materia</span>
        </div>
      </div>
      <div class="card card-materia">
        <div class="card-content">
          <p><i class="fas fa-clock"></i>9:00-10:00</p>
          <span>Materia</span>
        </div>
      </div>
      <div class="card card-materia">
        <div class="card-content">
          <p><i class="fas fa-clock"></i>9:00-10:00</p>
          <span>Materia</span>
        </div>
      </div>
    </div>
    <div class="col s2 push-s1">
      <div class="card card-dia">
        <div class="card-content">
          <span>Martes</span>
        </div>
      </div>
      <div class="card card-materia">
        <div class="card-content">
          <p><i class="fas fa-clock"></i>9:00-10:00</p>
          <span>Materia</span>
        </div>
      </div>
      <div class="card card-materia">
        <div class="card-content">
          <p><i class="fas fa-clock"></i>9:00-10:00</p>
          <span>Materia</span>
        </div>
      </div>
    </div>
    <div class="col s2 push-s1">
      <div class="card card-dia">
        <div class="card-content">
          <span>Miércoles</span>
        </div>
      </div>
      <div class="card card-materia">
        <div class="card-content">
          <p><i class="fas fa-clock"></i>9:00-10:00</p>
          <span>Materia</span>
        </div>
      </div>
      <div class="card card-materia">
        <div class="card-content">
          <p><i class="fas fa-clock"></i>9:00-10:00</p>
          <span>Materia</span>
        </div>
      </div>
      <div class="card card-materia">
        <div class="card-content">
          <p><i class="fas fa-clock"></i>9:00-10:00</p>
          <span>Materia</span>
        </div>
      </div>
    </div>
    <div class="col s2 push-s1">
      <div class="card card-dia">
        <div class="card-content">
          <span>Jueves</span>
        </div>
      </div>
    </div>
    <div class="col s2 push-s1">
      <div class="card card-dia">
        <div class="card-content">
          <span>Viernes</span>
        </div>
      </div>
    </div>
  </div>
</div>





@endsection

@section('scripts')


@endsection
