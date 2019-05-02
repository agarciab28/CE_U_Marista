<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;
use App\Models\profesor;
use App\Models\personal;

class ProfesoresController extends Controller
{
  public function lista () {
  $personas = persona::select('pe.username as usuario','persona.id_persona as persona','nombres','apaterno','amaterno','fnaci','email','pe.activo as activo')
    ->join('personal as pe','pe.id_persona','=','persona.id_persona')
    ->join('profesor as pr','pr.username','=','pe.username')->get();
    //dd($personas);
    $cambio=-1;
    return view('admin.listas.profes',compact(['personas','cambio']));

  }
  public function elimina($usuario){
    $persona=personal::select('activo')->where('username',$usuario)->first();

    if($persona->activo>0){
      personal::where('username',$usuario)->update(['activo'=>0]);

    }else{
      personal::where('username',$usuario)->update(['activo'=>1]);
    }
    $personas = persona::select('pe.username as usuario','persona.id_persona as persona','nombres','apaterno','amaterno','fnaci','email','pe.activo as activo')
      ->join('personal as pe','pe.id_persona','=','persona.id_persona')
      ->join('profesor as pr','pr.username','=','pe.username')->get();
      //dd($personas);
      $cambio=1;
    return view('admin.listas.profes',compact(['personas','cambio']));
  }
}
