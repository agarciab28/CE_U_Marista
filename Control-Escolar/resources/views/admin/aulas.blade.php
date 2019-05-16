@extends('layouts.app_admin')

@section('stylesheet')
<link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css" rel="stylesheet">

<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/admin/aulas.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/admin/alumnos.css') }}}" rel="stylesheet">

@endsection

@section('title', 'Aulas')

@section('content')

<div class="section container">

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large  waves-effect waves-light light-blue darken-4 modal-trigger tooltipped" data-position="left" data-tooltip="Registrar nueva aula" href="#modal_nueva" id="btn_add_aula">
            <i class="large material-icons">add</i>
        </a>
    </div>

    <div class="row contenedor">
        <div class="col m6 push-m3 s12">
            <h5>Control de Aulas</h5>
        </div>
    </div>

    <div class="row">
        <table id="example" class="responsive-table striped" style="width:100%">
            <thead>
                <tr>
                    <th>Aula</th>
                    <th>Edificio</th>
                    <th>Tipo</th>
                    <th>Modificar</th>
                    <th>Deshabilitar</th>
                </tr>
            </thead>
            <tbody>
              @foreach($aulas as $aula)
                <tr>
                    <td>{{$aula->aula}}</td>
                    <td>{{$aula->edificio}}</td>
                    <td>{{$aula->tipo}}</td>
                    <td> <a onclick="modificar_aula('{{$aula->aula}};{{$aula->edificio}};{{$aula->tipo}}')" href="#modal_modificar" class="btn modal-trigger tooltipped" data-position="bottom" data-tooltip="Nombre de aula, edificio o tipo de aula (laboratorio, salon, etc.)">Modificar</a> </td>
                    <td> <a href="{{route('eliminaAula',['aula'=>$aula->aula])}}" class="btn {{($aula->activo>0)?' green':'red'}} tooltipped" data-position="bottom" data-tooltip="Cambiar el estado disponible del aula en el periodo escolar actual">{{($aula->activo>0)?' Habilitado':'Deshabilitado'}}</a> </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!--modal nueva aula-->
<div id="modal_nueva" class="modal modal-fixed-footer">
    <div class="modal-content">
        <form class="col  s12 m12" id="form_aula" action="{{route('nueva_aula')}}" method="post">
          @csrf
            <div class="row">
                <div class="col m4 push-m4 s12">
                    <h4>Registrar Aula</h4>
                </div>
            </div>
            <div class="row" id="data_aula">
                <div class="input-field col m4 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" name="aula" id="aula" class="validate" required maxlength="35">
                    <label for="aula">Aula</label>
                </div>
                <div class="input-field col m4 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" name="edificio" id="edificio" class="validate" required maxlength="100">
                    <label for="edificio">Edificio</label>
                </div>
                <div class="input-field col m4 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" name="tipo" id="tipo" class="validate" required maxlength="35">
                    <label for="tipo">Tipo</label>
                </div>
                <div class="row">
                </div>
                <div class="input-field col m4 s12">
                    <button class="btn light-blue darken-4" type="submit" id="registrar_aula">Registrar aula
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

<div id="modal_modificar" class="modal modal-fixed-footer">
    <div class="modal-content">
        <form class="col  s12 m12" id="form_mod_aula" action="{{route('edita_aula')}}" method="post">
          @csrf
            <div class="row">
                <div class="col m4 push-m4 s12">
                    <h4>Modificar Aula</h4>
                </div>
            </div>
            <div class="row" id="data_aula">
                <div class="input-field col m4 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" name="aula" id="mod_aula" placeholder="" readonly required maxlength='10'>
                    <span for="mod_aula">Aula</span>
                </div>
                <div class="input-field col m4 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" name="edificio" id="mod_edificio" class="validate" required maxlength="100">
                    <span for="mod_edificio">Edificio</span>
                </div>
                <div class="input-field col m4 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" name="tipo" id="mod_tipo" class="validate" required maxlength="35">
                    <span for="mod_tipo">Tipo</span>
                </div>
                <div class="row">
                </div>
                <div class="input-field col m4 s12">
                    <button class="btn light-blue darken-4" type="submit" id="mod_registrar_aula">Modificar aula
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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{{ asset('js/datatables.js') }}}"></script>
<script src="{{{asset('js/asigna.js')}}}"></script>
<script src="{{{ asset('js/validaciones.js') }}}"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.tooltipped');

    });
</script>
@if($modif)
<script type="text/javascript">
swal("¡El aula se ha modificado correctamente!", {
    icon: "success",
});
</script>
@endif
@endsection
