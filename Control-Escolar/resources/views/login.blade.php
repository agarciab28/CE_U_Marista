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
      <div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Acceso</span>
              <p>inicio</p>
            </div>
            <div class="card-action">
              <div class="row">
                <form method="post" action="{{ route('login') }}" class="col s12">
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="{{ $errors->has('name') ? 'input-field col s6 red lighten-1' : 'input-field col s6' }}">
                      <input id="name" type="text" name="name" values="{{ old('name') }}" class="validate">
                      <label for="name">Usuario</label>
                      {!! $errors ->first('name','<span class="help">:message</span> ') !!}
                    </div>
                    <div class=" {{ $errors->has('password') ? 'input-field col s6 red lighten-1' : 'input-field col s6' }}">
                      <input id="password" type="password" name="password" class="validate">
                      <label for="password">Contraseña</label>
                      {!! $errors ->first('password','<span class="help">:message</span> ') !!}
                    </div>
                  </div>
                  <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
                </form>
              </div>



            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
