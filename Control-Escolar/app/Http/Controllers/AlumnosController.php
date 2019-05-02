<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;
use App\Models\alumno;

class AlumnosController extends Controller
{
    public function lista () {
      $personas = persona::select('persona.id_persona','nombres','apaterno','amaterno','fnaci','email','ncontrol','alumno.activo as activo')
        ->join('alumno','persona.id_persona','=','alumno.id_persona')->get();
      $cambio=-1;
        return view('admin.listas.alumnos',compact(['personas','cambio']));
    }

    public function lista_as ($idg,$idc,Request $request) {
      //idg
      //idc
        $semestre = $request->get('semestre');
        if($semestre==null){
        $semestre = 1;
        }

      $personas = persona::select('persona.id_persona','nombres','apaterno','amaterno','fnaci','email','ncontrol')
        ->join('alumno','persona.id_persona','=','alumno.id_persona')
        ->where('id_carrera',$idc)
      //  ->semestre($semestre)
        ->where('semestre',$semestre)
        ->get();
        return view('admin.asignar',compact('personas','idc','idg'))
        ->withInput(request(['semestre']));
    }
    public function eliminar(Request $request){
      $alumno=alumno::select('activo')->where('ncontrol',$request->ncontrol)->first();
      if($alumno->activo>0){
        alumno::where('ncontrol',$request->ncontrol)->update(['activo'=>0]);
      }else{
        alumno::where('ncontrol',$request->ncontrol)->update(['activo'=>1]);

      }
      $personas = persona::select('persona.id_persona','nombres','apaterno','amaterno','fnaci','email','ncontrol','alumno.activo as activo')
        ->join('alumno','persona.id_persona','=','alumno.id_persona')->get();
      $cambio=1;
        return view('admin.listas.alumnos',compact(['personas','cambio']));
    }
}
