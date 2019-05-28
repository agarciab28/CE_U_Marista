@extends('layouts.app_login')

@section('stylesheet')
  <link href="{{{ asset('css/style_login.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Inicio de Sesion')

@section('content')
  <div class="background">
    <div class="color-bg">
      <div class="row">
        <div class="col s8 push-s2">
          <p class="bienvenida">Bienvenido al Sistema de Control Escolar de la Universidad Marista</p>
        </div>
      </div>
      <div class="row">
        <div class="col s4 push-s4 pull-s4 l4">
          <div class="logo">
            <img class="img-logo" src="{{{ asset('img/logos/firma.png') }}}" alt="">
          </div>
        </div>
        <div class="col s12 m12 l7 container section">
          <div class="card-panel">
            <div class="row">
              <div class="col s12">
                <ul class="tabs">
                  <li class="tab col s6"><a class="active" href="#alumno">Alumno</a></li>
                  <li class="tab col s6"><a href="#personal">Personal</a></li>
                </ul>
              </div>
              <div id="alumno" class="col s12">
                <form class="" action="{{ route('login')}}" method="post">
                   {{ csrf_field() }}
                  <div class="row">
                    <div class="input-field col s12 l8 push-l2 pull-l2   ">
                      <input id="alumno_user" name="ncontrol" type="text" class="{{ $errors->has('ncontrol') ? 'input-field col s12  red lighten-1' : 'input-field col s12' }}">
                      <label for="alumno_user"><i class="fas fa-user" style="margin-right:0.5em;"></i>Nombre de Usuario</label>
                    </div>
                    <div class="input-field col s12 l8 push-l2 pull-l2   ">
                      <input id="alumno_pass" type="password" name="password" class="{{ $errors->has('ncontrol') ? 'input-field col s12 red lighten-1' : 'input-field col s12' }}">
                      <label for="alumno_pass"><i class="fas fa-key" style="margin-right:0.5em;"></i>Contraseña</label>
                    </div>
                      <button class="btn col s4 push-s4 pull-s4 l8 push-l2 pull-l2 waves-effect waves-light login" type="submit" name="action">Acceder</button>
                  </div>
                </form>
              </div>
              <div id="personal" class="col s12">
                <form class="" action="{{ route('loginAdmin')}}" method="post">
                   {{ csrf_field() }}
                  <div class="row">
                    <div class="input-field col s12 l8 push-l2 pull-l2   ">
                      <input id="personal_user" type="text" name ="username" class="validate">
                      <label for="personal_user"><i class="fas fa-user" style="margin-right:0.5em;"></i>Nombre de Usuario</label>
                    </div>
                    <div class="input-field col s12 l8 push-l2 pull-l2   ">
                      <input id="personal_pass" type="password" name="password" class="validate">
                      <label for="personal_pass"><i class="fas fa-key" style="margin-right:0.5em;"></i>Contraseña</label>
                    </div>
                      <button class="btn col s4 push-s4 pull-s4 l8 push-l2 pull-l2 waves-effect waves-light login" type="submit">Acceder</button>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="contenedor">
        <a href="#modalCreditos" class="creditos footer modal-trigger tooltipped" data-position="top" data-tooltip="Créditos"><i class="fas fa-chevron-up"></i></a>
        <p class="footer">Todos los derechos reservados © 2019.</p>
      </div>
    </div>
  </div>

  <!-- Modal Structure -->
  <div id="modalCreditos" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Desarrollado Por:</h4>
      <hr>
      <p>
        <h5>Alejandro García Barajas</h5>
        <span><i class="fas fa-envelope"></i> agarciab28@gmail.com</span> <br>
        <span><i class="fas fa-globe"></i> <a href="https://www.alejandrogb.com" target="_blank">www.alejandrogb.com</a> </span> <br>
        <span><i class="fab fa-linkedin"></i> <a href="https://www.linkedin.com/in/alejandro-garcia/" target="_blank">LinkedIn</a> </span> <br>
        <hr>
        <h5>Gerardo Takeshi Nakamura Ramírez</h5>
        <span><i class="fas fa-envelope"></i> g.t.n.ramirez@gmail.com</span> <br>
        <span><i class="fab fa-linkedin"></i> <a href="https://www.linkedin.com/in/g-takeshi-nakamura/" target="_blank">LinkedIn</a> </span> <br>
        <hr>
        <h5>Diego Ulises Martínez Aguilar</h5>
        <span><i class="fas fa-envelope"></i> diegoulisesmartinezaguilar@gmail.com</span> <br>
        <span><i class="fas fa-envelope"></i> 15121185@tecmor.mx</span> <br>
        <span><i class="fab fa-linkedin"></i> <a href="https://www.linkedin.com/in/diego-ulises-martínez-aguilar" target="_blank">LinkedIn</a> </span> <br>
        <span><i class="fab fa-twitter"></i> <a href="https://twitter.com/DiegoUlisesMtzA" target="_blank">Twitter</a> </span> <br>
        <span><i class="fab fa-instagram"></i> <a href="https://www.instagram.com/diego.ulises.mtz.a/" target="_blank">Instagram</a> </span> <br>
        <hr>
        <h5>Alex Herrera Ramírez</h5>
        <span><i class="fas fa-envelope"></i> alex.herrera361@gmail.com</span> <br>
        <span><i class="fab fa-linkedin"></i> <a href="https://www.linkedin.com/in/alextremo-08" target="_blank">LinkedIn</a> </span> <br>
        <hr>
        <h5>Luis Antonio Bautista Rendon</h5>
        <span><i class="fas fa-envelope"></i> luisantoniobr97@gmail.com</span> <br>
        <span><i class="fab fa-linkedin"></i> <a href="http://www.linkedin.com/in/LuisAntonioBautistaRendon" target="_blank">LinkedIn</a> </span> <br>
        <hr>
        <h5>Raúl Eduardo Ibarra Luz</h5>
        <span><i class="fas fa-envelope"></i> ibarraluzraul@gmail.com</span> <br>
        <span><i class="fab fa-twitter"></i> <a href="https://twitter.com/Linskky" target="_blank">Twitter</a> </span> <br>
        <span><i class="fab fa-instagram"></i> <a href="https://www.instagram.com/linskky" target="_blank">Instagram</a> </span> <br>
        <hr>
        <h5>Samuel Alejandro López Becerra</h5>

        <hr>
      </p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
    </div>
  </div>
@endsection

@section('scripts')

@endsection
