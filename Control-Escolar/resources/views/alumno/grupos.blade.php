@extends('layouts.app_alumno')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/alumno/grupos.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Grupos Alumno')


@section('content')
  <div class="row contenedor">
    <div class="col m6 push-m3 s12">
      <h5>Mis Grupos</h5>
    </div>
  </div>
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

  <div class="row contenedor">
    <div class="col m6 push-m3 s12">
      <h5>Horario</h5>
    </div>
  </div>

<div class="contenedor content-horario show-on-large hide-on-med-and-down">
  <div class="row">
    <div class="col m2">
      <div class="card card-dia">
        <div class="card-content">
          <span class="white-text">Lunes</span>
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
    <div class="col m2 ">
      <div class="card card-dia">
        <div class="card-content">
          <span class="white-text">Martes</span>
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
    <div class="col m2 ">
      <div class="card card-dia">
        <div class="card-content">
          <span class="white-text">Miércoles</span>
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
    <div class="col m2 ">
      <div class="card card-dia">
        <div class="card-content">
          <span class="white-text">Jueves</span>
        </div>
      </div>
    </div>
    <div class="col m2 ">
      <div class="card card-dia">
        <div class="card-content">
          <span class="white-text">Viernes</span>
        </div>
      </div>
    </div>
    <div class="col m2 ">
      <div class="card card-dia">
        <div class="card-content">
          <span class="white-text">Sábado</span>
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
    <a onclick="mostrarJueves()" class="col s4 btn ">Jueves</a>
    <a onclick="mostrarViernes()" class="col s4 btn">Viernes</a>
    <a onclick="mostrarSabado()" class="col s4 btn ">Sábado</a>
  </div>

  <div class="row" id="horario_lunes">
    <div class="col s12">
      <div class="contenedor">
        <h6>Lunes</h6>
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
        <h6>Martes</h6>
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
        <h6>Miércoles</h6>
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
        <h6>Jueves</h6>
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
        <h6>Viernes</h6>
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

  <div class="row" id="horario_sabado">
    <div class="col s12">
      <div class="contenedor">
        <h6>Sábado</h6>
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
