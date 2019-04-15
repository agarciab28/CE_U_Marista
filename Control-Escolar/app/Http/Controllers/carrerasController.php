<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carrera;

class carrerasController extends Controller
{
    public function listaGrupos(){
      $carreras = carrera::get();
      $registro=false;
      return view("admin.carreras",compact(["carreras","registro"]));
    }
    public function inserta(Request $request){
      try {
        $carreras = carrera::get();
        $carrera= new carrera();
        $carrera->id_carrera=$request->id_carrera;
        $carrera->nombre_carrera=$request->nombrec;
        $carrera->rvoe=$request->cvervoe;
        $carrera->total_creditos=$request->creditos;
        $carrera->fecha=$request->fechar;
        $carrera->save();
      } catch (\Exception $e) {
        dd($e);
        $registro=false;
      }
      $registro=true;
      return view("admin.carreras",compact(["carreras","registro"]));
    }
}
