@extends('layouts.app_alumno')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/alumno/kardex.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Kardex')


@section('content')
<div class="row contenedor">
  <div class="col m6 push-m3 s12">
    <h5>Kardex</h5>
  </div>
</div>


@endsection

@section('scripts')


@endsection
