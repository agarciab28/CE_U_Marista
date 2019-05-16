<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\plan_de_estudios;
use App\Models\carrera;

class planController extends Controller
{
  public function showPlan(){
    $planes=plan_de_estudios::select('plan_de_estudios.id_plan as id_plan','c.id_carrera as id_carrera','c.nombre_carrera as carrera','nombre_plan','plan_de_estudios.fecha as fecha','plan_de_estudios.activo as activo')
    ->join('carrera as c','plan_de_estudios.id_carrera','=','c.id_carrera')
    ->get();
    $carreras=carrera::select('id_carrera','nombre_carrera')->get();
    $modif=false;
    return view('admin.planes',compact(['planes','carreras','modif']));
  }
  public function registrar(Request $request){
    $plan= new plan_de_estudios();
    $plan->id_plan=$request->id_plan;
    $plan->id_carrera=$request->carrera;
    $plan->nombre_plan=$request->nombrec;
    $plan->fecha=$request->fecha;
    $plan->activo='1';
    $plan->save();
    $modif=false;
    $planes=plan_de_estudios::select('plan_de_estudios.id_plan as id_plan','c.id_carrera as id_carrera','c.nombre_carrera as carrera','nombre_plan','plan_de_estudios.fecha as fecha','plan_de_estudios.activo as activo')
    ->join('carrera as c','plan_de_estudios.id_carrera','=','c.id_carrera')
    ->get();
    $carreras=carrera::select('id_carrera','nombre_carrera')->get();
    return view('admin.planes',compact(['planes','carreras','modif']));
  }


  public function elimina($plan){
    $seleccion=plan_de_estudios::select('activo')->where('id_plan',$plan)->first();

    if($seleccion->activo>0){
      plan_de_estudios::where('id_plan',$plan)->update(['activo'=>0]);

    }else{
      plan_de_estudios::where('id_plan',$plan)->update(['activo'=>1]);
    }
    $planes=plan_de_estudios::select('plan_de_estudios.id_plan as id_plan','c.id_carrera as id_carrera','c.nombre_carrera as carrera','nombre_plan','plan_de_estudios.fecha as fecha','plan_de_estudios.activo as activo')
    ->join('carrera as c','plan_de_estudios.id_carrera','=','c.id_carrera')
    ->get();
    $modif=false;
    $carreras=carrera::select('id_carrera','nombre_carrera')->get();
    return view('admin.planes',compact(['planes','carreras','modif']));
  }


  public function editar(Request $request){
    plan_de_estudios::where('id_plan',$request->id_plan)->update([
      'id_carrera'=>$request->carrera,
      'nombre_plan'=>$request->nombrec,
      'fecha'=>$request->fecha
    ]);
    $planes=plan_de_estudios::select('plan_de_estudios.id_plan as id_plan','c.id_carrera as id_carrera','c.nombre_carrera as carrera','nombre_plan','plan_de_estudios.fecha as fecha','plan_de_estudios.activo as activo')
    ->join('carrera as c','plan_de_estudios.id_carrera','=','c.id_carrera')
    ->get();
    $modif=true;
    $carreras=carrera::select('id_carrera','nombre_carrera')->get();
    return view('admin.planes',compact(['planes','carreras','modif']));
  }
}
