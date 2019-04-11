<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\plan_de_estudios;

class planController extends Controller
{
  public function showPlan(){
    $planes=plan_de_estudios::select('c.nombre_carrera as carrera','nombre_plan','plan_de_estudios.fecha as fecha')
    ->join('carrera as c','plan_de_estudios.id_carrera','=','c.id_carrera')
    ->get();
    return view('admin.planes',compact(['planes']));
  }
}
