@extends('layouts.app_admin')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/admin/usuarios.css') }}}" rel="stylesheet">
<link href="{{{ asset('https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Registrar Usuario')

@section('content')

<div class="section container">

    <div class="row">
        <form class="col  s12 m12" id="pb" action="{{route('admin_registrar_envio')}}" method="post" form enctype="multipart/form-data" onsubmit="return validarFormulario()">
            {{ csrf_field() }}

            <div class="row card-panel">

                <div class="contenedor row">
                    <div class="col m6 push-m3 s12">
                        <h5>Registro de Usuarios</h5>
                    </div>
                </div>
                <div class="input-field col m4 s12 ">
                    <input type="file" id="imagen" name="imagen" class="dropify" required>
                    <!--<i class="material-icons prefix">account_circle</i>-->

                </div>

                <div class="input-field col s12 m4">
                    <i class="material-icons prefix">
                        supervised_user_circle
                    </i>
                    <select class="validate" name="rol" id="rol">
                        <option value="" disabled selected>Seleccione</option>
                        <option value="coord">Coordinador</option>
                        <option value="prof">Profesor</option>
                        <option value="alumno">Alumno</option>
                    </select>
                    <label>Tipo de usuario</label>
                </div>

                <div class="input-field col m4 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" name="nombres" id="nombre" class="validate" maxlength="35">
                    <label for="nombre">Nombre</label>
                </div>
                <div class="input-field col m4 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" id="apellidop" name="apaterno" class="validate" maxlength="35">
                    <label for="apellidop">Apellido paterno</label>
                </div>
                <div class="input-field col m4 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" id="apellidom" name="amaterno" class="validate" maxlength="35">
                    <label for="apellidom">Apellido materno</label>
                </div>



                <div class="input-field col m4 s12 ">
                    <i class="material-icons prefix">email</i>
                    <input type="text" id="correo" class="validate" name="email" maxlength="150">
                    <label for="correo">Correo electrónico</label>
                </div>


                <!--  <div class="col m6 s12">-->



                <div class="input-field col s12 m4">
                    <i class="material-icons prefix">
                        wc
                    </i>
                    <select name="sexo" id="sexo">
                        <option value="" name="sexo" disabled selected>Sexo</option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>


                    </select>
                    <label>Sexo</label>
                </div>

                <div class="input-field col m4 s12 ">
                    <!--<i class="material-icons prefix">date_range</i>-->
                    <label for="fecha1">Fecha de nacimiento </label>
                    <input type="text" name="fnaci" class="datepicker" id="fecha1">
                </div>


                <div class="input-field col m4 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" name="curp" id="curp" class="validate" maxlength="20">
                    <label for="curp">CURP</label>
                </div>


                <!--Registrar contraseña-->
                <div class="input-field col m4 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" name="pass" id="pass" class="validate" maxlength="20">
                    <label for="pass">Contraseña</label>
                </div>



                <div id="alumno_ext">


                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="ncontrol" id="ncontrol" class="validate" maxlength="12">
                        <label for="ncontrol">Número de control</label>
                    </div>
                    <!--fila-->

                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <!--<input type="text" name="carrera" id="carrera" class="validate">
                        <label for="carrera">Carrera</label>-->
                        <select name="id_carrera" id="carrera_alumno">
                            <option value="" name="id_carrera" disabled selected>Carrera</option>
                            @foreach($carreras as $carrera)
                            <option value="{{$carrera->id_carrera}}">{{$carrera->nombre_carrera}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <!--<input type="text" name="semestre" id="semestre" class="validate">
                        <label for="semestre">Semestre</label>-->
                        <select name="semestre" id="semestre">
                            <option value="" name="" disabled selected>Elija semestre</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    <div class="input-field col m4 s12 ">
                        <select name="plan_de_estudios" id="plan_est">
                            @foreach($planes as $plan)
                            <option value="{{$plan->id_plan}}">{{$plan->nombre_plan}}</option>
                            @endforeach
                        </select>
                        <label for="plan_est">Plan de estudios</label>
                    </div>
                </div>

                <div id="profe_ext">
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="usernamep" id="clavep" class="validate" maxlength="30">
                        <label for="clavep">Clave de profesor</label>
                    </div>
                    <!--fila-->
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="especialidad_profe" id="especialidad_profe" class="validate" maxlength="35">
                        <label for="especialidad_profe">Especialidad</label>
                    </div>
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="cedulap" id="cedulap" class="cedula" maxlength="35">
                        <label for="cedulap">Cédula fiscal</label>
                    </div>
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="nssocp" id="nsocp" class="validate" maxlength="25">
                        <label for="nsocp">Número de seguro social</label>
                    </div>
                </div>

                <div id="coor_ext">
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="usernamec" id="clavec" class="validate" maxlength="25">
                        <label for="clavec">Clave de coordinador</label>
                    </div>
                    <!--fila-->
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <!--<input type="text" name="especialidad_coo" id="especialidad_coo" class="validate">
                        <label for="especialidad_coo">Carrera</label>-->
                        <select name="id_carrera_coordinador" id="carrera_coordinador">
                            <option value="" name="id_carrera_coordinador" disabled selected>Carrera</option>
                            @foreach($carreras as $carrera)
                            <option value="{{$carrera->id_carrera}}">{{$carrera->nombre_carrera}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="ced_fiscal" id="cedulac" class="cedula" maxlength="35">
                        <label for="cedulac">Cédula fiscal</label>
                    </div>
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="nssoc" id="nsocc" class="validate" maxlength="25">
                        <label for="nsocc">Número de seguro social</label>
                    </div>
                </div>

                <div class="row">
                </div>


                <div class="input-field col m3 s12">
                    <button class="btn light-blue darken-4" type="submit">Registrar
                        <i class="material-icons right">send </i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!--BOTÓN REGISTROS-->
{{-- <div class="fixed-action-btn">
  <a class="btn-floating btn-large amber pulse tooltipped" data-position="top" data-tooltip="Registrar lista" href="{{route('regAlumnoCSV')}}">
<i class="large material-icons">file_upload</i>
</a>
<ul>
    <li>
        <a class="btn-floating light-blue darken-4 tooltipped" data-position="top" data-tooltip="Descargar plantilla alumnos" href="{{{ asset('csv/Alumno.csv') }}}" download="">
            <i class="material-icons">file_download</i></a>
    </li>
</ul>
</div> --}}
<div class="row">
  <form class="col s12" action="{{route('subirCSV')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class = "row">
      <div class="col s6 push-s3">
        <div class = "file-field input-field">
           <div class = "btn">
              <span class="white-text">Buscar</span>
              <input type = "file" name="file"/>
           </div>

           <div class = "file-path-wrapper">
              <input class = "file-path validate" type = "text" placeholder = "Buscar Archvio" name="alumnos" />
           </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s3 push-s5">
        <a href="{{route('descargaCSV')}}" class="btn"><i class="fas fa-download"></i></a>
      </div>
      <div class="col s3 push-s3">
        <button type="submit" class="btn"><i class="fas fa-upload"></i></button>
      </div>
    </div>
  </form>
</div>


@endsection
@section('scripts')
<!--sweetalert -->
{{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> --}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{{ asset('js/plugins/dropify/js/dropify.min.js') }}}"></script>
<script>
    function validarFormulario() {
        var nombre = document.getElementById("nombre").value;
        var apellidop = document.getElementById("apellidop").value;
        var apellidom = document.getElementById("apellidom").value;
        var correo = document.getElementById("correo").value;
        var rol = document.getElementById('rol').selectedIndex;
        var curp = document.getElementById('curp').value;
        var sexo = document.getElementById('sexo').selectedIndex;
        var pass = document.getElementById('pass').value;

        var exp_correo = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
        var exp_curp = /^(([A-Z]{4})([0-9]{2})((04|06|09|11)(0[1-9]|1[0-9]|2[0-9]|30)|(01|03|05|07|08|10|12)(0[1-9]|1[0-9]|2[0-9]|3[0-1])|(02)(0[1-9]|1[0-9]|2[0-9]))(H|M)(AS|BC|BS|CC|CS|CH|DF|CL|CM|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QO|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)((B|C|D|F|G|H|J|K|L|M|N|P|Q|R|S|T|V|W|X|Y|Z){3})([\d]{2}))$/
        var exp_nom = /^[A-Za-zñÑ-áéíóúÁÉÍÓÚ\s\t-]+$/

        //Test comboBox
        if (rol == null || rol == 0) {
            M.toast({
                html: 'Debe seleccionar un rol',
                classes: 'rounded red'
            });
            return false;
        }
        //Test nombre completo
        if (nombre == "" || apellidop == "" || apellidom == "") {
            M.toast({
                html: 'Existen campos vacios',
                classes: 'rounded red'
            });
            return false;
        } else if (!exp_nom.test(nombre)) {
            M.toast({
                html: 'Formato de nombre incorrecto',
                classes: 'rounded red'
            });
            return false;
        } else if (!exp_nom.test(apellidop)) {
            M.toast({
                html: 'Formato de apellido paterno incorrecto',
                classes: 'rounded red'
            });
            return false;
        } else if (!exp_nom.test(apellidom)) {
            M.toast({
                html: 'Formato de apellido materno incorrecto',
                classes: 'rounded red'
            });
            return false;
        }
        //Test correo
        if (!(exp_correo.test(correo))) {
            M.toast({
                html: 'Debe escribir un correo válido',
                classes: 'rounded red'
            });
            return false;
        }
        //Test curp
        if (!(exp_curp.test(curp))) {
            M.toast({
                html: 'Debe escribir una curp válida',
                classes: 'rounded red'
            });
            return false;
        }
        //Test sexo
        if (sexo == null || sexo == 0) {
            M.toast({
                html: 'Debe seleccionar un sexo',
                classes: 'rounded red'
            });
            return false;
        }

        if (pass == "") {
            M.toast({
                html: 'Debe escribir una contraseña válida',
                classes: 'rounded red'
            });
            return false;
        }
        return true;
    }
</script>
<script src="{{{ asset('js/validaciones.js') }}}"></script>

@if($registro)
<script type="text/javascript">
    swal('Registro Exitoso!', 'Presione OK!', 'success');
</script>
@endif


@endsection