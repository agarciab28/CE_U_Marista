@extends('layouts.app_error')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/alumno/home.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Página no esncontrada')


@section('content')
<div class="center-elements">
    <div class="row container section">

    </div>
    <div class="row section container">
        <div class="col s12">
            Página no encontrada
        </div>
    </div>
</div>


@endsection

@section('scripts')


@endsection
