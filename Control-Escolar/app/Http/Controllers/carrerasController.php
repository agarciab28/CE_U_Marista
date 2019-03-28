<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carrera;

class carrerasController extends Controller
{
    public function listaGrupos(){
      $carreras = carrera::get();
      return view("admin.carreras",compact("carreras"));
    }
    public function registro(Request $request){
      dd($request);
      $carrera= new carrera();

    }
}
