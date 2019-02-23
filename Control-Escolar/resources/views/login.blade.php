@extends('layouts.app')

@section('stylesheet')
  <link href="{{{ asset('css/style_login.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Inicio de Sesion')

@section('content')
  <div class="background">
    <div class="container">
      <div class="flex">
        <img class="logo" src="{{{ asset('img/logo/lm_b.png') }}}" alt="">
      </div>
    </div>
  </div>
@endsection
