<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\evento;

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
}
