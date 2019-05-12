<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\plan_de_estudios;
use App\Models\carrera;

class planController extends Controller
{
  public function showPlan(){
    $planes=plan_de_estudios::select('c.nombre_carrera as carrera','nombre_plan','plan_de_estudios.fecha as fecha')
    ->join('carrera as c','plan_de_estudios.id_carrera','=','c.id_carrera')
    ->get();
    $carreras=carrera::select('id_carrera','nombre_carrera')->get();
    return view('admin.planes',compact(['planes','carreras']));
  }
  public function registrar(Request $request){
    $plan= new plan_de_estudios();
    $plan->id_plan=$request->id_plan;
    $plan->id_carrera=$request->carrera;
    $plan->nombre_plan=$request->nombrec;
    $plan->fecha=$request->fecha;
    $plan->save();

    $planes=plan_de_estudios::select('c.nombre_carrera as carrera','nombre_plan','plan_de_estudios.fecha as fecha')
    ->join('carrera as c','plan_de_estudios.id_carrera','=','c.id_carrera')
    ->get();
    $carreras=carrera::select('id_carrera','nombre_carrera')->get();
    return view('admin.planes',compact(['planes','carreras']));
  }


  public function elimina($plan){
    $seleccion=plan_de_estudios::select('activo')->where('id_plan',$plan)->first();

    if($seleccion->activo>0){
      plan_de_estudios::where('id_plan',$plan)->update(['activo'=>0]);

    }else{
      plan_de_estudios::where('id_plan',$plan)->update(['activo'=>1]);
    }
    $planes=plan_de_estudios::select('c.nombre_carrera as carrera','nombre_plan','plan_de_estudios.fecha as fecha')
    ->join('carrera as c','plan_de_estudios.id_carrera','=','c.id_carrera')
    ->get();
    $carreras=carrera::select('id_carrera','nombre_carrera')->get();
    return view('admin.planes',compact(['planes','carreras']));
  }


  public function editar(Request $request){
    dd($request);
    /*plan_de_estudios::where('id_plan',$request->id_carrera)->update([
      'nombre_carrera'=>$request->nombrec,
      'rvoe'=>$request->cvervoe,
      'total_creditos'=>$request->creditos,
      'fecha'=>$request->fechar
    ]);
    $carreras = carrera::get();
    //dd($personas);
    $registro=true;
    return view('admin.carreras',compact(['carreras','registro']));*/
  }
}
