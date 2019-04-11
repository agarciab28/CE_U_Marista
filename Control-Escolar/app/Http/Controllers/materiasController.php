<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\materia;

class materiasController extends Controller
{
    public function showMaterias(){
      $materias=materia::select('nombre_materia','p.nombre_plan','horas_materia')
      ->join('plan_de_estudios as p','p.id_plan','=','materia.id_plan')
      ->get();
      dd($materias);
      return view('admin.materias',compact(['materias']));
    }
}
