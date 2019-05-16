<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\materia;
use App\Models\plan_de_estudios;

class materiasController extends Controller
{
    public function showMaterias(){
      $materias=materia::select('materia.id_materia as id_materia','nombre_materia','p.nombre_plan as plan','horas_materia' ,'materia.activo as activo')
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

      $materias=materia::select('materia.id_materia as id_materia','nombre_materia','p.nombre_plan as plan','horas_materia','materia.activo as activo')
      ->join('plan_de_estudios as p','p.id_plan','=','materia.id_plan')
      ->get();
      $planes=plan_de_estudios::select('id_plan','nombre_plan')->get();
      return view('admin.materias',compact(['materias','planes']));
    }


    public function elimina($materia){
      $seleccion=materia::select('activo')->where('id_materia',$materia)->first();

      if($seleccion->activo>0){
        materia::where('id_materia',$materia)->update(['activo'=>0]);

      }else{
        materia::where('id_materia',$materia)->update(['activo'=>1]);
      }
      $materias=materia::select('materia.id_materia as id_materia','nombre_materia','p.nombre_plan as plan','horas_materia','materia.activo as activo')
      ->join('plan_de_estudios as p','p.id_plan','=','materia.id_plan')
      ->get();
      $planes=plan_de_estudios::select('id_plan','nombre_plan')->get();
      return view('admin.materias',compact(['materias','planes']));
    }

    public function modifica(Request $request){
      materia::where('id_materia',$request->mod_id_materia)->update([
        'nombre_materia'=>$request->nombrec,
        'id_plan'=>$request->plan,
        'horas_materia'=>$request->materiasm
      ]);
      $materias=materia::select('materia.id_materia as id_materia','nombre_materia','p.nombre_plan as plan','horas_materia','materia.activo as activo')
      ->join('plan_de_estudios as p','p.id_plan','=','materia.id_plan')
      ->get();
      $planes=plan_de_estudios::select('id_plan','nombre_plan')->get();

      return view('admin.materias',compact(['materias','planes']));
    }
}
