@extends('layouts.app_coordinador')

@section('stylesheet')

<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/coordinador/misdatos.css') }}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="{{{ asset('https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css') }}}" rel="stylesheet">

@endsection

@section('title', 'Mis datos')

@section('content')
<div class="row contenedor">
    <div class="col m6 push-m3 s12">
      <h5>Mis datos</h5>
    </div>
  </div>
<div class="container">
    <div class="row">
        <div class="col m4 push-m4 s12">
            <h4></h4>
        </div>
    </div>

    <!-- profile-page-header -->
    <div id="profile-page-header" class="card">
        <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{{{ asset('img/a1.jpg')}}}" alt="user background">
        </div>
        <div class="row">
          <figure class="card-profile-image col s12">
              <img src="{{{ session('url')}}}" alt="profile image" class="circle z-depth-2 responsive-img activator">
          </figure>
        </div>

        <div class="card-content">
            <div class="row">
                <div class="col m9 offset-m2 s12">
                    <h4 class="card-title grey-text text-darken-4">{{$datos->nombres}} {{$datos->apaterno}} {{$datos->amaterno}}</h4>
                    <p class="medium-small grey-text">
                      @if($datos->rol=='Admin')
                      Administrador de control escolar
                      @elseif($datos->rol=='Coord')
                      Coordinador de carrera
                      @elseif($datos->rol=='Prof')
                      Profesor de la institución
                      @endif
                    </p>
                </div>
                <div class=" right-align">
                    <a class="btn-floating activator waves-effect waves-light darken-2 right tooltipped" data-position="left" data-tooltip="Mostrar datos de contacto">
                        <i class="material-icons">perm_identity</i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-reveal">
            <p>
                <span class="card-title grey-text text-darken-4">{{$datos->nombres}} {{$datos->apaterno}} {{$datos->amaterno}} <i class="material-icons right icon-blue">close</i></span>
                <span><i class="material-icons icon-blue">perm_identity</i>
                  @if($datos->rol=='Admin')
                  Administrador de control escolar
                  @elseif($datos->rol=='Coord')
                  Coordinador de carrera
                  @elseif($datos->rol=='Prof')
                  Profesor de la institución
                  @endif
                </span>

            </p>

            <p>Tiene como objetivos, registrar cosas.</p>

            <p><i class="material-icons icon-blue">verified_user</i> {{$datos->rol}}</p>
            <p><i class="material-icons icon-blue">perm_phone_msg</i>{{$datos->num_cel}}</p>
            <p><i class="material-icons icon-blue">email</i>{{$datos->email}}</p>
            <p><i class="material-icons icon-blue">cake</i>{{$datos->fnaci}}</p>
        </div>
    </div>
</div>
  <!-- Modal Trigger
  <a class="waves-effect waves-light btn modal-trigger" href="#modaluser">Modal</a>-->

  <!-- Modal Structure -->
  <div id="modaluser" class="modal modal-fixed-footer">
  <form id="pb" action="{{route('coord_modifica_datos')}}" method="post">
    @csrf
    <div class="modal-content">
        <h4>Mis datos</h4>
        <div class="row">


            <div class="input-field col m4 s12 ">
                <img src="{{session('url')}}" id="imagen" alt="Contact Person" class="input-field col s12" >
            </div>

            <div class="input-field col s12 m4">
                <i class="material-icons prefix">
                    account_circle
                </i>
                <input type="text" name="user" id="user" class="validate" value="{{$datos->username}}"  maxlength="35">
                <label for="user">Usuario</label>
            </div>

            <div class="input-field col m4 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <!--<input type="password" name="pass" id="pass" class="validate" maxlength="35">
                <label for="pass">Contraseña</label>-->
            </div>

            <div class="input-field col m4 s12 ">
                <i class="material-icons prefix">email</i>
                <input type="text" id="correo" class="validate" value="{{$datos->email}}" name="email" maxlength="150">
                <label for="correo">Correo electrónico</label>
            </div>

            <div class="input-field col m4 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="text" id="nombre" value="{{$datos->nombres}}" maxlength="35" readonly>
                <label for="nombre">Nombre</label>
            </div>
            <div class="input-field col m4 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="text" id="apellidop"  value="{{$datos->apaterno}}" maxlength="35" readonly>
                <label for="apellidop">Apellido paterno</label>
            </div>

            <div class="input-field col m4 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="text" id="apellidom"  value="{{$datos->amaterno}}" maxlength="35" readonly>
                <label for="apellidom">Apellido materno</label>
            </div>

            <div class="input-field col s12 m4">
                <i class="material-icons prefix">
                    wc
                </i>
                <select name="sexo" id="sexo">
                  @if ($datos->sexo=="F")
                  <option value="F" selected>Femenino</option>
                  <option value="M">Masculino</option>
                  @else
                  <option value="M" selected>Masculino</option>
                  <option value="F">Femenino</option>
                  @endif
                </select>
                <label>Sexo</label>
            </div>

            <div class="input-field col m4 s12 ">
                <!--<i class="material-icons prefix">date_range</i>-->
                <label for="fecha1">Fecha de nacimiento </label>
                <input type="text" name="fnaci" value="{{$datos->fnaci}}" class="datepicker" id="fecha1">
            </div>

            <div class="input-field col m4 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="text" id="curp" name="curp" value="{{$datos->curp}}" class="validate" maxlength="20">
                <label for="curp">CURP</label>
            </div>

            <div class="input-field col m4 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="tel" name="tel" id="tel" value="{{$datos->num_tel}}" class="tel" maxlength="35">
                <label for="tel">Teléfono</label>
            </div>
            <div class="input-field col m4 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="tel" name="cel" id="cel" class="cel" value="{{$datos->num_cel}}" maxlength="25">
                <label for="cel">Celular</label>
            </div>

            <div class="input-field col m4 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="text" name="cedulap" id="cedulap" value="{{$datos->ced_fiscal}}" class="cedula" maxlength="35">
                <label for="cedulap">Cédula fiscal</label>
            </div>
            <div class="input-field col m4 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="text" name="nssocp" id="nsocp" value="{{$datos->nssoc}}" class="validate" maxlength="25">
                <label for="nsocp">Número de seguro socal</label>
            </div>

            <div class="input-field col m4 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="text" name="estado" value="{{$datos->estado}}" id="estado" class="estado" maxlength="25">
                <label for="estado">Estado</label>
            </div>

            <div class="input-field col m4 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="text" name="ciudad" id="ciudad" value="{{$datos->ciudad}}" class="ciudad" maxlength="25">
                <label for="ciudad">Ciudad</label>
            </div>

            <div class="input-field col m4 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="text" name="colonia" id="colonia" value="{{$datos->colonia}}" class="colonia" maxlength="25">
                <label for="colonia">Colonia</label>
            </div>

            <div class="input-field col m4 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="number" name="postal" id="postal" value="{{$datos->codigo_postal}}" class="postal" maxlength="25">
                <label for="postal">Código postal</label>
            </div>

            <div class="input-field col m2 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="number" name="interior" id="interior" value="{{$datos->num_int}}" class="interior" maxlength="25">
                <label for="interior">Número interior</label>
            </div>

            <div class="input-field col m2 s12 ">
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="number" name="exterior" id="exterior" value="{{$datos->num_ext}}" class="exterior" maxlength="25">
                <label for="exterior">Número exterior</label>
            </div>
            <!--
            <div class="input-field col m4 s12">
                <button class="btn light-blue darken-4" type="submit">Guardar
                    <i class="material-icons right">send </i>
                </button>
            </div>-->

        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="modal-close waves-effect waves-green btn-flat tooltipped" data-position="left" data-tooltip="Necesitará ingresar su contraseña para guardar los cambios">Aceptar</button>
    </div>
  </form>
</div>

@endsection
@section('scripts')
<script src="{{{ asset('js/cards.js') }}}"></script>
<script src="{{{ asset('js/validaciones.js') }}}"></script>
<script src="{{{ asset('js/plugins/dropify/js/dropify.min.js') }}}"></script>
<!--sweetalert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2"></script>

<script>
    function confirmPass() {
        (async function getPassword() {
            const {
                value: password
            } = await Swal.fire({
                title: 'Ingrese su contraseña',
                input: 'password',
                inputPlaceholder: 'Ingrese su contraseña',
                inputAttributes: {
                    maxlength: 10,
                    autocapitalize: 'off',
                    autocorrect: 'off'
                }
            })

            if (password) {
                Swal.fire(
                    'Contraseña correcta!',
                    'Se han guardado los cambios!',
                    'success'
                )
                //swal('Se han guardado los cambios!', 'Presione OK!', 'success');
                //Swal.fire('Entered password: ' + password)
            } else {
                Swal.fire(
                    'Contraseña incorrecta!',
                    'No se han guardado los cambios!',
                    'error'
                )
            }
        })()
    }
</script>
<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();
        $('.fixed-action-btn').floatingActionButton();
        $('.tooltipped').tooltip();
    });

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.fixed-action-btn');
        var instances = M.FloatingActionButton.init(elems, {
            direction: 'left'
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.tooltipped');

    });

    window.onload = function() {
        //alert("evento load detectado!");
        setTimeout(function() {
            M.toast({html: 'Puedes actualizar la información de tu cuenta aquí.'});
        }, 1500);
        setTimeout(function() {
            M.toast({html: 'Recuerda cambiar tu contraseña de manera periódica.'});
        }, 5000);
    };
</script>
@endsection
