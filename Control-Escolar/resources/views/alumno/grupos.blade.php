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

<div class="contenedor">
  <div class="row">
    <div class="col s6 push-s3">
      <h3>Horario</h3>
    </div>
  </div>
</div>

<div class="contenedor content-horario show-on-large hide-on-med-and-down">
  <div class="row">
    <div class="col m2 push-m1">
      <div class="card card-dia">
        <div class="card-content">
          <span>Lunes</span>
        </div>
      </div>
      <div class="card card-materia">
        <div class="card-content">
          <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
          <p>Aula</p>
          <p>Docente</p>
          <span>Materia</span>
        </div>
      </div>
      <div class="card card-materia">
        <div class="card-content">
          <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
          <p>Aula</p>
          <p>Docente</p>
          <span>Materia</span>
        </div>
      </div>
      <div class="card card-materia">
        <div class="card-content">
          <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
          <p>Aula</p>
          <p>Docente</p>
          <span>Materia</span>
        </div>
      </div>
      <div class="card card-materia">
        <div class="card-content">
          <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
          <p>Aula</p>
          <p>Docente</p>
          <span>Materia</span>
        </div>
      </div>
      <div class="card card-materia">
        <div class="card-content">
          <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
          <p>Aula</p>
          <p>Docente</p>
          <span>Materia</span>
        </div>
      </div>
    </div>
    <div class="col m2 push-m1">
      <div class="card card-dia">
        <div class="card-content">
          <span>Martes</span>
        </div>
      </div>
      <div class="card card-materia">
        <div class="card-content">
          <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
          <p>Aula</p>
          <p>Docente</p>
          <span>Materia</span>
        </div>
      </div>
      <div class="card card-materia">
        <div class="card-content">
          <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
          <p>Aula</p>
          <p>Docente</p>
          <span>Materia</span>
        </div>
      </div>
    </div>
    <div class="col m2 push-m1">
      <div class="card card-dia">
        <div class="card-content">
          <span>Miércoles</span>
        </div>
      </div>
      <div class="card card-materia">
        <div class="card-content">
          <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
          <p>Aula</p>
          <p>Docente</p>
          <span>Materia</span>
        </div>
      </div>
      <div class="card card-materia">
        <div class="card-content">
          <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
          <p>Aula</p>
          <p>Docente</p>
          <span>Materia</span>
        </div>
      </div>
      <div class="card card-materia">
        <div class="card-content">
          <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
          <p>Aula</p>
          <p>Docente</p>
          <span>Materia</span>
        </div>
      </div>
    </div>
    <div class="col m2 push-m1">
      <div class="card card-dia">
        <div class="card-content">
          <span>Jueves</span>
        </div>
      </div>
    </div>
    <div class="col m2 push-m1">
      <div class="card card-dia">
        <div class="card-content">
          <span>Viernes</span>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Horario Moviles --}}

<div class="content-horario show-on-medium-and-down hide-on-large-only">
  <div class="row">
    <a onclick="mostrarLunes()" class="col s4 btn">Lunes</a>
    <a onclick="mostarMartes()" class="col s4 btn">Martes</a>
    <a onclick="mostrarMiercoles()" class="col s4 btn ">Miércoles</a>
  </div>

  <div class="row">
    <a onclick="mostrarJueves()" class="col s4 btn push-s2">Jueves</a>
    <a onclick="mostrarViernes()" class="col s4 btn push-s2">Viernes</a>
  </div>

  <div class="row" id="horario_lunes">
    <div class="col s12">
      <div class="contenedor">
        <h5>Lunes</h5>
      </div>
    </div>
    <div class="col s12">
      <div class="card card-materia">
        <div class="card-content">
          <div class="contenedor">
            <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
            <p>Aula</p>
            <p>Docente</p>
            <span>Materia</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12">
      <div class="card card-materia">
        <div class="card-content">
          <div class="contenedor">
            <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
            <p>Aula</p>
            <p>Docente</p>
            <span>Materia</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12">
      <div class="card card-materia">
        <div class="card-content">
          <div class="contenedor">
            <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
            <p>Aula</p>
            <p>Docente</p>
            <span>Materia</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12">
      <div class="card card-materia">
        <div class="card-content">
          <div class="contenedor">
            <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
            <p>Aula</p>
            <p>Docente</p>
            <span>Materia</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12">
      <div class="card card-materia">
        <div class="card-content">
          <div class="contenedor">
            <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
            <p>Aula</p>
            <p>Docente</p>
            <span>Materia</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row" id="horario_martes">
    <div class="col s12">
      <div class="contenedor">
        <h5>Martes</h5>
      </div>
    </div>
    <div class="col s12">
      <div class="card card-materia">
        <div class="card-content">
          <div class="contenedor">
            <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
            <p>Aula</p>
            <p>Docente</p>
            <span>Materia</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12">
      <div class="card card-materia">
        <div class="card-content">
          <div class="contenedor">
            <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
            <p>Aula</p>
            <p>Docente</p>
            <span>Materia</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12">
      <div class="card card-materia">
        <div class="card-content">
          <div class="contenedor">
            <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
            <p>Aula</p>
            <p>Docente</p>
            <span>Materia</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12">
      <div class="card card-materia">
        <div class="card-content">
          <div class="contenedor">
            <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
            <p>Aula</p>
            <p>Docente</p>
            <span>Materia</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row" id="horario_miercoles">
    <div class="col s12">
      <div class="contenedor">
        <h5>Miércoles</h5>
      </div>
    </div>
    <div class="col s12">
      <div class="card card-materia">
        <div class="card-content">
          <div class="contenedor">
            <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
            <p>Aula</p>
            <p>Docente</p>
            <span>Materia</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12">
      <div class="card card-materia">
        <div class="card-content">
          <div class="contenedor">
            <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
            <p>Aula</p>
            <p>Docente</p>
            <span>Materia</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12">
      <div class="card card-materia">
        <div class="card-content">
          <div class="contenedor">
            <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
            <p>Aula</p>
            <p>Docente</p>
            <span>Materia</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row" id="horario_jueves">
    <div class="col s12">
      <div class="contenedor">
        <h5>Jueves</h5>
      </div>
    </div>
    <div class="col s12">
      <div class="card card-materia">
        <div class="card-content">
          <div class="contenedor">
            <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
            <p>Aula</p>
            <p>Docente</p>
            <span>Materia</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12">
      <div class="card card-materia">
        <div class="card-content">
          <div class="contenedor">
            <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
            <p>Aula</p>
            <p>Docente</p>
            <span>Materia</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row" id="horario_viernes">
    <div class="col s12">
      <div class="contenedor">
        <h5>Viernes</h5>
      </div>
    </div>
    <div class="col s12">
      <div class="card card-materia">
        <div class="card-content">
          <div class="contenedor">
            <p class="p_horario"><i class="fas fa-clock"></i> 9:00-10:00</p>
            <p>Aula</p>
            <p>Docente</p>
            <span>Materia</span>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>



@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{{ asset('js/horario.js') }}}"></script>

@endsection
