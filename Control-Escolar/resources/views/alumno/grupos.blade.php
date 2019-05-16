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
  {{ csrf_field() }}

  <div class="contenedor content-horario show-on-large hide-on-med-and-down">
  <div class="row">
    <div class="col m2">
      <div class="card card-dia">
        <div class="card-content">
          <span class="white-text">Lunes</span>
        </div>
      </div>
      @foreach($horariolu as $horarioslu)
      <div class="card card-materia">
        <div class="card-content">
          <p class="p_horario"><i class="fas fa-clock"></i> {{$horarioslu->hora_i_lu}}-{{$horarioslu->hora_f_lu}} </p>
          <p>{{$horarioslu->aula_lu}}</p>
          <p>{{$horarioslu->nombres}}{{$horarioslu->aparterno}} {{$horarioslu->amaterno}}</p>
          <span>{{$horarioslu->nombre_materia}}</span>
        </div>
      </div> 
      @endforeach 
    </div>
     

    <div class="col m2 ">
      <div class="card card-dia">
        <div class="card-content">
          <span class="white-text">Martes</span>
        </div>
      </div>
     @foreach($horarioma as $horariosma)
      <div class="card card-materia">
        <div class="card-content">
          <p class="p_horario"><i class="fas fa-clock"></i> {{$horariosma->hora_i_ma}}-{{$horariosma->hora_f_ma}} </p>
          <p>{{$horariosma->aula_ma}}</p>
          <p>{{$horariosma->nombres}}{{$horariosma->aparterno}} {{$horariosma->amaterno}}</p>
          <span>{{$horariosma->nombre_materia}}</span>
        </div>
      </div> 
      @endforeach 
    </div>

    <div class="col m2 ">
      <div class="card card-dia">
        <div class="card-content">
          <span class="white-text">Miércoles</span>
        </div>
      </div>
       @foreach($horariomi as $horariosmi)
      <div class="card card-materia">
        <div class="card-content">
          <p class="p_horario"><i class="fas fa-clock"></i> {{$horariosmi->hora_i_mi}}-{{$horariosmi->hora_f_mi}} </p>
          <p>{{$horariosmi->aula_mi}}</p>
          <p>{{$horariosmi->nombres}}{{$horariosmi->aparterno}} {{$horariosmi->amaterno}}</p>
          <span>{{$horariosmi->nombre_materia}}</span>
        </div>
      </div> 
      @endforeach 
    </div>

    <div class="col m2 ">
      <div class="card card-dia">
        <div class="card-content">
          <span class="white-text">Jueves</span>
        </div>
      </div>
          @foreach($horarioju as $horariosju)
      <div class="card card-materia">
        <div class="card-content">
          <p class="p_horario"><i class="fas fa-clock"></i> {{$horariosju->hora_i_ju}}-{{$horariosju->hora_f_ju}} </p>
          <p>{{$horariosju->aula_ju}}</p>
          <p>{{$horariosju->nombres}}{{$horariosju->aparterno}} {{$horariosju->amaterno}}</p>
          <span>{{$horariosju->nombre_materia}}</span>
        </div>
      </div> 
      @endforeach 
    </div>

      <div class="col m2 ">
      <div class="card card-dia">
        <div class="card-content">
          <span class="white-text">Viernes</span>
        </div>
      </div>
      @foreach($horariovi as $horariosvi)
      <div class="card card-materia">
        <div class="card-content">
          <p class="p_horario"><i class="fas fa-clock"></i> {{$horariosvi->hora_i_vi}}-{{$horariosvi->hora_f_vi}} </p>
          <p>{{$horariosvi->aula_vi}}</p>
          <p>{{$horariosvi->nombres}}{{$horariosvi->aparterno}} {{$horariosvi->amaterno}}</p>
          <span>{{$horariosvi->nombre_materia}}</span>
        </div>
      </div> 
      @endforeach 
    </div>

      <div class="col m2 ">
      <div class="card card-dia">
        <div class="card-content">
          <span class="white-text">Sabado</span>
        </div>
      </div>

       @foreach($horariosa as $horariossa)
      <div class="card card-materia">
        <div class="card-content">
          <p class="p_horario"><i class="fas fa-clock"></i> {{$horariossa->hora_i_sa}}-{{$horarioslu->hora_f_sa}} </p>
          <p>{{$horariossa->aula_sa}}</p>
          <p>{{$horariossa->nombres}}{{$horariossa->aparterno}} {{$horariossa->amaterno}}</p>
          <span>{{$horariossa->nombre_materia}}</span>
        </div>
      </div> 
      @endforeach 
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
    @foreach($horariolu as $horarioslu)
    <div class="col s12">
      <div class="card card-materia">
        <div class="card-content">
          <div class="contenedor">
            <p class="p_horario"><i class="fas fa-clock"></i> {{$horarioslu->hora_i_lu}}-{{$horarioslu->hora_f_lu}}</p>
            <p>{{$horarioslu->aula_lu}}</p>
            <p>{{$horarioslu->nombres}}{{$horarioslu->aparterno}} {{$horarioslu->amaterno}}</p>
            <span>{{$horarioslu->nombre_materia}}</span>
          </div>
        </div>
      </div>
    </div>
    @endforeach 
  </div>

  <div class="row" id="horario_martes">
    <div class="col s12">
      <div class="contenedor">
        <h6>Martes</h6>
      </div>
    </div>
    @foreach($horarioma as $horariosma)
    <div class="col s12">
      <div class="card card-materia">
        <div class="card-content">
          <div class="contenedor">
            <p class="p_horario"><i class="fas fa-clock"></i> {{$horariosma->hora_i_ma}}-{{$horariosma->hora_f_ma}}</p>
            <p>{{$horariosma->aula_ma}}</p>
          <p>{{$horariosma->nombres}}{{$horariosma->aparterno}} {{$horariosma->amaterno}}</p>
          <span>{{$horariosma->nombre_materia}}</span>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  <div class="row" id="horario_miercoles">
    <div class="col s12">
      <div class="contenedor">
        <h6>Miércoles</h6>
      </div>
    </div>
    @foreach($horariomi as $horariosmi)
    <div class="col s12">
      <div class="card card-materia">
        <div class="card-content">
          <div class="contenedor">
          <p class="p_horario"><i class="fas fa-clock"></i> {{$horariosmi->hora_i_mi}}-{{$horariosmi->hora_f_mi}} </p>
          <p>{{$horariosmi->aula_mi}}</p>
          <p>{{$horariosmi->nombres}}{{$horariosmi->aparterno}} {{$horariosmi->amaterno}}</p>
          <span>{{$horariosmi->nombre_materia}}</span>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  <div class="row" id="horario_jueves">
    <div class="col s12">
      <div class="contenedor">
        <h6>Jueves</h6>
      </div>
    </div>
    @foreach($horarioju as $horariosju)
    <div class="col s12">
      <div class="card card-materia">
        <div class="card-content">
          <div class="contenedor">
          <p class="p_horario"><i class="fas fa-clock"></i> {{$horariosju->hora_i_ju}}-{{$horariosju->hora_f_ju}} </p>
          <p>{{$horariosju->aula_ju}}</p>
          <p>{{$horariosju->nombres}}{{$horariosju->aparterno}} {{$horariosju->amaterno}}</p>
          <span>{{$horariosju->nombre_materia}}</span>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  <div class="row" id="horario_viernes">
    <div class="col s12">
      <div class="contenedor">
        <h6>Viernes</h6>
      </div>
    </div>
    @foreach($horariovi as $horariosvi)
    <div class="col s12">
      <div class="card card-materia">
        <div class="card-content">
          <div class="contenedor">
          <p class="p_horario"><i class="fas fa-clock"></i> {{$horariosvi->hora_i_vi}}-{{$horariosvi->hora_f_vi}} </p>
          <p>{{$horariosvi->aula_vi}}</p>
          <p>{{$horariosvi->nombres}}{{$horariosvi->aparterno}} {{$horariosvi->amaterno}}</p>
          <span>{{$horariosvi->nombre_materia}}</span>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  <div class="row" id="horario_sabado">
    <div class="col s12">
      <div class="contenedor">
        <h6>Sábado</h6>
      </div>
    </div>
    @foreach($horariosa as $horariossa)
    <div class="col s12">
      <div class="card card-materia">
        <div class="card-content">
          <div class="contenedor">
          <p class="p_horario"><i class="fas fa-clock"></i> {{$horariossa->hora_i_sa}}-{{$horarioslu->hora_f_sa}} </p>
          <p>{{$horariossa->aula_sa}}</p>
          <p>{{$horariossa->nombres}}{{$horariossa->aparterno}} {{$horariossa->amaterno}}</p>
          <span>{{$horariossa->nombre_materia}}</span>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  </div>





@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{{ asset('js/horario.js') }}}"></script>

@endsection
