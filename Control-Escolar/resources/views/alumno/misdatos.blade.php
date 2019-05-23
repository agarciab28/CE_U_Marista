@extends('layouts.app_alumno')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/alumno/misdatos.css') }}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="{{{ asset('https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Mis Datos')


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
                </span>

            </p>

            <p>Tiene como objetivos, estudiar</p>

            <p><i class="material-icons icon-blue">verified_user</i> {{$datos->rol}}</p>
            <p><i class="material-icons icon-blue">perm_phone_msg</i>{{$datos->num_cel}}</p>
            <p><i class="material-icons icon-blue">email</i>{{$datos->email}}</p>
            <p><i class="material-icons icon-blue">cake</i>{{$datos->fnaci}}</p>
        </div>
    </div>
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
    /*
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
    }*/
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
            M.toast({
                html: 'Puedes actualizar la información de tu cuenta aquí.'
            });
        }, 1500);
        setTimeout(function() {
            M.toast({
                html: 'Recuerda cambiar tu contraseña de manera periódica.'
            });
        }, 5000);
    };
</script>

@endsection
