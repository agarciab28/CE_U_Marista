<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;
use App\Models\alumno;

class AlumnosController extends Controller
{
  public $idc_;
    public function lista () {
      $personas = persona::select('persona.id_persona','nombres','apaterno','amaterno','fnaci','email','ncontrol')
        ->join('alumno','persona.id_persona','=','alumno.id_persona')->get();
        return view('admin.listas.alumnos',compact('personas'));
    }

    public function lista_as ($idc) {
      //idg
      //idc
      $idc_ = $idc;
      $personas = persona::select('persona.id_persona','nombres','apaterno','amaterno','fnaci','email','ncontrol')
        ->join('alumno','persona.id_persona','=','alumno.id_persona')
        ->where('id_carrera',$idc)
        ->get();
        return view('admin.asignar',compact('personas'));
    }
}
