@extends('layouts.app_admin')

@section('stylesheet')
<link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css" rel="stylesheet">

<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/admin/alumnos.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/admin/materias.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Materias')

@section('content')

<div class="section container">
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large  waves-effect waves-light light-blue darken-4 modal-trigger tooltipped" data-position="left" data-tooltip="Registrar nueva materia" href="#modal_nueva" id="btn_add_materia">
            <i class="large material-icons">add</i>
        </a>
    </div>

    <div class="row contenedor">
        <div class="col m6 push-m3 s12">
            <h5>Control de Materias</h5>
        </div>
    </div>


    <div class="row">
        <table id="example" class="responsive-table striped" style="width:100%">
            <thead>
                <tr>
                    <th>Nombre de materia</th>
                    <th>Plan de estudios</th>
                    <th>Horas de materia</th>
                    <th>Modificar</th>
                    <th>Deshabilitar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($materias as $materia)
                <tr>
                    <td>{{$materia->nombre_materia}}</td>
                    <td>{{$materia->plan}}</td>
                    <td>{{$materia->horas_materia}}</td>
                    <td> <a onclick="modificar_materia('{{$materia->id_materia}}')" href="#modal_modificar" class="btn modal-trigger tooltipped" data-position="bottom" data-tooltip="Nombre de la materia, clave, plan de estudios al que corresponde o número de horas de la materia al semestre">Modificar</a> </td>
                    <td> <a href="{{route('eliminaMateria',['materia'=>$materia->id_materia])}}" class="btn {{($materia->activo>0)?' green':'red'}} tooltipped" data-position="bottom" data-tooltip="Cambiar el estado activo de la materia">{{($materia->activo>0)?' Habilitado':'Deshabilitado'}}</a> </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!--modal nueva materia-->
<div id="modal_nueva" class="modal bottom-sheet">
    <div class="modal-content">
        <form class="col  s12 m12" id="form_materia" action="{{route('registrar_materia')}}" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col m4 push-m4 s12">
                    <h4>Registrar Materia</h4>
                </div>
            </div>

            <div class="row" id="data_materia">

                <div class="input-field col m2 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" id="materia_id" name="id_materia" class="validate" required maxlength="35">
                    <label for="materia_id">clave de materia</label>
                </div>

                <div class="input-field col m3 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" name="nombrec" id="nombrec" class="validate" required maxlength="35">
                    <label for="nombrec">Nombre de materia</label>
                </div>

                <div class="input-field col m2 s12 ">
                    <select class="" name="plan" id="plan">
                        @foreach($planes as $plan)
                        <option value="{{$plan->id_plan}}">{{$plan->nombre_plan}}</option>
                        @endforeach
                    </select>
                    <label for="plan">Plan de estudios</label>
                </div>



                <div class="input-field col m3 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="number" id="materiasm" name="materiasm" class="validate" required maxlength="35">
                    <label for="materiasm">Horas de materia</label>
                </div>

                <div class="input-field col m2 s12">
                    <button class="btn light-blue darken-4" type="submit" id="registrar_materia">Registrar Materia
                        <i class="material-icons right">send </i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">
            <i class="material-icons blue-text text-darken-4"> fullscreen_exit </i>
            <b> Salir </b></a>

    </div>
</div>

<!--modal modificar materia-->
<div id="modal_modificar" class="modal bottom-sheet">
    <div class="modal-content">
        <form class="col  s12 m12" id="form_mod_materia" action="{{route('edita_materia')}}" method="post">
            {{ csrf_field() }}

            <div class="row">
                <div class="col m4 push-m4 s12">
                    <h4>Modificar Materia</h4>
                </div>
            </div>

            <div class="row" id="data_materia">

                <div class="input-field col m2 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" id="materia_mod_id" name="mod_id_materia"  placeholder="" readonly required maxlength="35">
                    <label for="mod_id_materia">Clave de materia</label>
                </div>

                <div class="input-field col m3 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" name="nombrec" id="mod_nombrec" class="validate" required maxlength="35">
                    <label for="mod_nombrec">Nombre de materia</label>
                </div>

                <div class="input-field col m2 s12 ">
                    <select class="" name="plan" id="mod_plan">
                        @foreach($planes as $plan)
                        <option value="{{$plan->id_plan}}">{{$plan->nombre_plan}}</option>
                        @endforeach
                    </select>
                    <label for="mod_plan">Plan de estudios</label>
                </div>



                <div class="input-field col m3 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="number" id="mod_materiasm" name="materiasm" class="validate" required maxlength="35">
                    <label for="mod_materiasm">Horas de materia</label>
                </div>

                <div class="input-field col m2 s12">
                    <button class="btn light-blue darken-4" type="submit" id="mod_registrar_materia">Modificar Materia
                        <i class="material-icons right">send </i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">
            <i class="material-icons blue-text text-darken-4"> fullscreen_exit </i>
            <b> Salir </b></a>

    </div>
</div>

@endsection


@section('scripts')
<script src="{{{ asset('js/datatables.js') }}}"></script>
<script src="{{{asset('js/asigna.js')}}}"></script>
<script src="{{{ asset('js/validaciones.js') }}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.tooltipped');

    });
</script>
@endsection
