<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\grupo;
use App\Models\lista_grupo;
class calificacionController extends Controller
{
    
//podria servir pero hay que modificar
public function lista_alumnos ($idg,$idc,Request $request) {
    
    $personas = persona::select('persona.id_persona','nombres','apaterno','amaterno','fnaci','email','ncontrol')
      ->join('alumno','persona.id_persona','=','alumno.id_persona')
      ->where('id_carrera',$idc)
    //  ->semestre($semestre)
      ->where('semestre',$semestre)
      ->get();
      return view('admin.asignar',compact('personas','idc','idg'))
      ->withInput(request(['semestre']));
  }
}