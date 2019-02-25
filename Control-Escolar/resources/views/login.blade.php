@extends('layouts.app')

@section('stylesheet')
  <link href="{{{ asset('css/style_login.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Inicio de Sesion')

@section('content')
  <div class="background">
    <div class="row">
      <div class="col s4 push-s4 m6 push-m3">
        <div class="logo">
          <img class="img-logo" src="{{{ asset('img/logo/lm_b.png') }}}" alt="">
        </div>
      </div>
    </div>
  </div>
@endsection
