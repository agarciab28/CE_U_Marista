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
        <form class="col  s12 m12" id="pb" action="{{route('registro_persona')}}" method="post">
            {{ csrf_field() }}

            <div class="row card-panel">
                <div class="input-field col s12 m3">
                    <i class="material-icons prefix">
                        supervised_user_circle
                    </i>
                    <select class="validate" name="rol" id="rol">
                        <option value="" disabled selected>Seleccione</option>
                        <option value="Coordinador">Coordinador</option>
                        <option value="Profesor">Profesor</option>
                        <option value="Alumno">Alumno</option>
                    </select>
                    <label>Tipo de usuario</label>
                </div>

                <div class="input-field col m3 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" name="nombres" id="nombre" class="validate">
                    <label for="nombre">Nombre</label>
                </div>
                <div class="input-field col m3 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" id="apellidop" name="apaterno" class="validate">
                    <label for="apellidop">Apellido paterno</label>
                </div>
                <div class="input-field col m3 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" id="apellidom" name="amaterno" class="validate">
                    <label for="apellidom">Apellido materno</label>
                </div>



                <div class="input-field col m4 s12 ">
                    <i class="material-icons prefix">email</i>
                    <input type="text" id="correo" class="validate" name="email">
                    <label for="correo">Correo electrónico</label>
                </div>


                <!--  <div class="col m6 s12">-->



                <div class="input-field col s12 m4">
                    <i class="material-icons prefix">
                        wc
                    </i>
                    <select name="sexo">
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

                <!--fila-->
                <div class="input-field col m4 s12 ">
                    <input type="file" id="input-file-now" name="imagen" class="dropify" />
                    <!--<i class="material-icons prefix">account_circle</i>-->

                    <label for="imagen">Foto</label>
                </div>
                <div class="input-field col m4 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" name="curp" id="curp" class="validate">
                    <label for="curp">CURP</label>
                </div>


                <div id="alumno_ext">


                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="ncontrol" id="ncontrol" class="validate">
                        <label for="ncontrol">Número de control</label>
                    </div>
                    <!--fila-->

                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="carrera" id="carrera" class="validate">
                        <label for="carrera">Carrera</label>
                    </div>

                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="semestre" id="semestre" class="validate">
                        <label for="semestre">Semestre</label>
                    </div>
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="plan_est" id="plan_est" class="validate">
                        <label for="plan_est">Plan de estudios</label>
                    </div>
                </div>

                <div id="profe_ext">

                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="clavep" id="clavep" class="validate">
                        <label for="clavep">Clave de profesor</label>
                    </div>
                    <!--fila-->
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="especialidad_profe" id="especialidad_profe" class="validate">
                        <label for="especialidad_profe">Especialidad</label>
                    </div>
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="cedulap" id="cedulap" class="cedula">
                        <label for="cedulap">Cédula fiscal</label>
                    </div>
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="nsocp" id="nsocp" class="validate">
                        <label for="nsocp">Número de seguro socal</label>
                    </div>
                </div>

                <div id="coor_ext">
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="clavec" id="clavec" class="validate">
                        <label for="clavec">Clave de coordinador</label>
                    </div>
                    <!--fila-->
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="especialidad_coo" id="especialidad_coo" class="validate">
                        <label for="especialidad_coo">Carrera</label>
                    </div>
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="cedulac" id="cedulac" class="cedula">
                        <label for="cedulac">Cédula fiscal</label>
                    </div>
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="nsocc" id="nsocc" class="validate">
                        <label for="nsocc">Número de seguro socal</label>
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




@endsection
@section('scripts')
<!--sweetalert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{{ asset('js/validaciones.js') }}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();
    });
</script>

@if($registro)
<script type="text/javascript">
    swal('Registro Exitoso!', 'Presione OK!', 'success');
</script>
@endif


@endsection
