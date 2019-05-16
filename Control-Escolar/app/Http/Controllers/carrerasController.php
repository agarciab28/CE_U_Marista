<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carrera;

class carrerasController extends Controller
{
    public function listaCarreras(){
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
        $registro=true;
      } catch (\Exception $e) {
        dd($e);
        $registro=false;
      }

      return view("admin.carreras",compact(["carreras","registro"]));
    }
    public function registro(Request $request){
      dd($request);
      $carrera= new carrera();

    }

    public function elimina($carrera){
      $seleccion=carrera::select('activo')->where('id_carrera',$carrera)->first();

      if($seleccion->activo>0){
        carrera::where('id_carrera',$carrera)->update(['activo'=>0]);

      }else{
        carrera::where('id_carrera',$carrera)->update(['activo'=>1]);
      }
      $carreras = carrera::get();
      //dd($personas);
      $registro=true;
      return view('admin.carreras',compact(['carreras','registro']));
    }
    public function editar(Request $request){
      carrera::where('id_carrera',$request->id_carrera)->update([
        'nombre_carrera'=>$request->nombrec,
        'rvoe'=>$request->cvervoe,
        'total_creditos'=>$request->creditos,
        'fecha'=>$request->fechar
      ]);
      $carreras = carrera::get();
      //dd($personas);
      $registro=true;
      return view('admin.carreras',compact(['carreras','registro']));
    }
}
