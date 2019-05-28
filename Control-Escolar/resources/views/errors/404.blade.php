@extends('layouts.app_error')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/alumno/home.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/errorpage.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Página no encontrada')


@section('content')
<div id="error-page">
    <div class="row">
        <div class="col s12">
            <div class="browser-window">
                <div class="content">
                    <div class="row">
                        <div id="site-layout-example-top" class="col s12">
                            <p class="flat-text-logo center white-text caption-uppercase">Lo sentimos pero no pudimos encontrar esta página</p>
                        </div>
                        <div id="site-layout-example-right" class="col s12 m12 l12">
                            <div class="row center">
                                <h1 class="text-long-shadow col s12">Página no encontrada</h1>
                            </div>
                            <div class="row center">
                                <p class="center col s12">Parece que esta página no existe.</p>
                                <p class="center s12"><button onclick="goBack()" class="btn waves-effect waves-light">Atras</button> <a href="" class="btn waves-effect waves-light">Página de inicio</a>
                                    <p>
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')


@endsection