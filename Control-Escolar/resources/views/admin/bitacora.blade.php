@extends('layouts.app_admin')

@section('stylesheet')

<link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css" rel="stylesheet">

<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/admin/bitacora.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/admin/alumnos.css') }}}" rel="stylesheet">

@endsection

@section('title', 'Bitacora')

@section('content')
<div class="container">
    <div class="row contenedor">
        <div class="col m6 push-m3 s12">
            <h5>Bitácora de movimientos</h5>
        </div>
    </div>
    <table id="example" class="responsive-table striped" style="width:100%">
        <thead>
            <tr>
                <th>ID Movimiento</th>
                <th>Usuario</th>
                <th>Rol</th>
                <th>Fecha y hora</th>
                <th>Tipo de moviento</th>
                <th>Tabla afectada</th>
                <th>Campo alterado</th>
                <th>Valor anterior</th>
                <th>Valor Nuevo</th>
            
            </tr>
        </thead>
        <tbody>
            @foreach ($bitacora as $bitacora)   
            <tr>
                <th>{{$bitacora->id_mov}}</th>
                <th>{{$bitacora->usuario}}</th>
                <td>{{$bitacora->tipoderol}}</th>
                <th>{{$bitacora->fecha}}</th>
                <th>{{$bitacora->tipodemov}}</th>
                <th>{{$bitacora->tablaafectada}}</th>
                <th>{{$bitacora->campoalter}}</th>
                <th>{{$bitacora->valorant}}</th>
                <th>{{$bitacora->valornuevo}}</th>

               
                </tr>
                    @endforeach

                    <div id="modal5" class="modal bottom-sheet">
                        <div class="modal-content">
                            <h4>Bitácora de movimientos</h4>
                            <ul class="collection">
                                <li class="collection-item avatar">
                                    <i class="mdi-file-folder circle"></i>
                                    <span class="title">Detalle</span>
                                    <table id="example" class="responsive-table striped" style="width:100%">
                                        <thead>

                                            <tr>
                                                <th>ID movimiento</th>
                                                <th>Usuario</th>
                                                <th>Rol</th>
                                                <th>Fecha y hora</th>
                                                <th>Tipo de moviento</th>
                                                <th>Tabla afectada</th>
                                                <th>Campo alterado</th>
                                                <th>Valor anterior</th>
                                                <th>Valor nuevo</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                    <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </td>

            </tr>
        </tbody>
    </table>
</div>
@endsection
@section('scripts')
<script src="{{{ asset('js/datatables.js') }}}"></script>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.tooltipped');

    });
</script>
@endsection
