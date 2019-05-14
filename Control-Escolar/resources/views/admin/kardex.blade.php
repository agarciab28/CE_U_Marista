@extends('layouts.app_admin')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/admin/alumnos.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Kardex Alumno')


@section('content')

<div class="contenedor row">
  <div class="col m6 push-m3 s12">
    <h5>Kardex Alumno</h5>
  </div>
</div>



@endsection

@section('scripts')

@endsection
