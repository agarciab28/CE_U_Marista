<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\evento;
use App\Models\configuracion;
use DB;

class calendarioController extends Controller
{
    public function eventos(){
      $eventos = evento::select("id_evento","titulo as title","fecha_inicio as start","fecha_final as end","color")
      ->get()->toArray();
      return response()->json($eventos);
    }
    public function registra_evento(Request $request){
      $evento= new evento();
      $evento->titulo=$request->nombre;
      $evento->fecha_inicio=$request->inicio;
      $evento->fecha_final=$request->fin;
      $evento->color=$request->color;
      $evento->save();

      return view("admin.calendario");
    }

    public function showCalendario(){
      $configuracion = configuracion::get()->first();
      return view('admin.calendario',compact('configuracion'));
    }
    public function modificaConfiguracion(Request $request){
      $seleccion=configuracion::get()->first();
      DB::table('configuracion')->update(['periodo_actual'=>$request->periodo_actual,
        'director'=>$request->director,
        'fecha_inicio'=>$request->finicio,
        'fecha_terminacion'=>$request->fterm,
        'Jefe_control_escolar'=>$request->jefe_control
        ]);



        return redirect()->route('admin_calendario');
    }
}
