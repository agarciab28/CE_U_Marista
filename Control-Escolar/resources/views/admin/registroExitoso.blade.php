@extends('layouts.app')

@section('stylesheet')
  <link href="{{{ asset('css/style_login.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Home')

@section('content')
<div class="background">
  <div class="color-bg">
    <div class="row">
      <div class="col s8 push-s2">
        <p class="bienvenida">Registro Exitoso</p>
      </div>
    </div>
  </div>
</div>

@endsection

@section('scripts')

@endsection
