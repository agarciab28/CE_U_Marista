<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\materia;
use App\Models\plan_de_estudios;

class materiasController extends Controller
{
    public function showMaterias(){
      $materias=materia::select('nombre_materia','p.nombre_plan as plan','horas_materia')
      ->join('plan_de_estudios as p','p.id_plan','=','materia.id_plan')
      ->get();
      $planes=plan_de_estudios::select('id_plan','nombre_plan')->get();
      return view('admin.materias',compact(['materias','planes']));
    }

    public function registrar(Request $request){
      $materia=new materia();
      $materia->id_materia=$request->id_materia;
      $materia->nombre_materia=$request->nombrec;
      $materia->id_plan=$request->plan;
      $materia->horas_materia=$request->materiasm;
      $materia->save();

      $materias=materia::select('nombre_materia','p.nombre_plan as plan','horas_materia')
      ->join('plan_de_estudios as p','p.id_plan','=','materia.id_plan')
      ->get();
      $planes=plan_de_estudios::select('id_plan','nombre_plan')->get();
      return view('admin.materias',compact(['materias','planes']));
    }
}
