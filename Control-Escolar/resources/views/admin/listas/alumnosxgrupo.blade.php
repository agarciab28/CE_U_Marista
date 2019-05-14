@extends('layouts.app_admin')

@section('stylesheet')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css" rel="stylesheet">

  <link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
  <link href="{{{ asset('css/admin/alumnos.css') }}}" rel="stylesheet">

@endsection

@section('title', 'Lista Alumnos por Grupo')


@section('content')
  <div class="row contenedor">
    <div class="col m6 push-m3 s12">
      <h5>Lista de Alumnos Grupo X</h5>
    </div>
  </div>

  <div class="container">
  <table id="example" class="responsive-table striped" style="width:100%">
    <thead>
      <tr>
        <th>Número de control</th>
        <th>Nombre Completo</th>
        <th>Fecha de Nacimiento</th>
        <th>Correo Electrónico</th>
        <th>Modificar</th>
        <th>Deshabilitar</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <td class="numero">5224</td>
        <td>asdfas sadfasa asdva</td>
        <td>2662</td>
        <td>asdfad@asdfa.com</td>
        <td> <a href="#modificar_alumno_modal" class="btn modal-trigger">Modificar</a> </td>
        {{-- <!--<td> <a href="{{route('modificar_alumno',[$persona->id_persona])}}" onclick="modificar_alumno('{{$persona->id_persona}}','{{$persona->rol}};{{$persona->nombres}};{{$persona->apaterno}};{{$persona->amaterno}};{{$persona->email}};{{$persona->sexo}};{{$persona->fnaci}};{{$persona->curp}};{{$persona->ncontrol}};{{$persona->id_carrera}};{{$persona->semestre}};{{$persona->id_plan}}')" class="btn modal-trigger">Modificar</a> </td>--> --}}
        <td> <a href="" class="btn habilitar">
        Habilitado</a> </td>

      </tr>


      </div>
    </tbody>
  </table>
  </div>

  <!--Modal modificar alumno-->
      {{-- <div id="modificar_alumno_modal" class="modal modal-fixed-footer">
          <div class="modal-content">
            <form class="col  s12 m12" id="pb" action="{{route('admin_registrar_envio')}}" method="post" form enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="row">

                  <div class="row">
                    <div class="col m6 push-m3 s12" style="text-align: center;">
                      <h4>Modificr alumnos</h4>
                    </div>
                  </div>

                <div class="input-field col m4 s12 ">
                        <input type="file" id="imagen" name="imagen" class="dropify"  >
                        <!--<i class="material-icons prefix">account_circle</i>-->

                    </div>

                    <div class="input-field col s12 m4">
                        <i class="material-icons prefix">
                            supervised_user_circle
                        </i>
                        <select class="validate" name="rol" id="rol">
                            <option value="Alumno">Alumno</option>
                        </select>
                        <label>Tipo de usuario</label>
                    </div>

                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="nombres" id="nombre" class="validate" maxlength="35">
                        <span>Nobre</span>
                    </div>
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" id="apellidop" name="apaterno" class="validate" maxlength="35">
                        <span>Apellido paterno</span>
                    </div>
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" id="apellidom" name="amaterno" class="validate" maxlength="35">
                        <span>Apellido materno</span>
                    </div>



                    <div class="input-field col m4 s12 ">
                        <i class="material-icons prefix">email</i>
                        <input type="text" id="correo" class="validate" name="email" maxlength="150">
                        <span>email</span>
                    </div>


                    <!--  <div class="col m6 s12">-->



                    <div class="input-field col s12 m4">
                        <i class="material-icons prefix">
                            wc
                        </i>
                        <select name="sexo" id="sexo">
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>


                        </select>
                        <span>Sexo</span>
                    </div>

                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">date_range</i>-->
                        <input type="date" name="fnaci" class="" id="fecha1">
                        <span>Fecha de nacimiento</span>
                    </div>


                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="curp" id="curp" class="validate" maxlength="20">
                        <span>curp</span>
                    </div>


    <!--Registrar contraseña-->
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="password" name="pass" id="pass" class="validate" maxlength="20">
                        <span>Nueva contraseña</span>
                    </div>



                    <div id="alumno_ext">


                        <div class="input-field col m4 s12 ">
                            <!--<i class="material-icons prefix">account_circle</i>-->
                            <input type="text" name="ncontrol" id="ncontrol" class="validate" maxlength="12">
                            <span>Número de control</span>
                        </div>
                        <!--fila-->

                        <div class="input-field col m4 s12 ">
                            <!--<i class="material-icons prefix">account_circle</i>-->
                            <!--<input type="text" name="carrera" id="carrera" class="validate">
                            <label for="carrera">Carrera</label>-->
                            <select name="id_carrera" id="carrera_alumno">

                                @foreach($carreras as $carrera)
                                <option value="{{$carrera->id_carrera}}">{{$carrera->nombre_carrera}}</option>
                                @endforeach

                            </select>
                            <span>Carrera</span>
                        </div>

                        <div class="col m4 s12 ">
                            <!--<i class="material-icons prefix">account_circle</i>-->
                            <!--<input type="text" name="semestre" id="semestre" class="validate">
                            <label for="semestre">Semestre</label>-->
                            <select name="semestre" id="semestre">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <span>Semestre</span>
                        </div>
                        <div class="input-field col m4 s12 ">
                            <!--<i class="material-icons prefix">account_circle</i>
    Listar Planes de estudio !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                          -->
                          <select name="plan_de_estudios" id="plan_est">
                            @foreach($planes as $plan)
                              <option value="{{$plan->id_plan}}">{{$plan->nombre_plan}}</option>
                            @endforeach
                          </select>
                            <span>Plan de estudios</span>
                        </div>
                    </div>




                    <div class="row">
                    </div>


                    <div class="input-field col m3 s12">
                        <button class="btn light-blue darken-4" type="submit">Registrar
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

          </div> --}}



@endsection

@section('scripts')

@endsection
