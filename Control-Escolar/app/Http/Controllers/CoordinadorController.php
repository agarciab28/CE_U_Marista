<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;
use App\Models\coordinador;
use App\Models\personal;

class CoordinadorController extends Controller
{
  public function lista(){
    $personas = persona::select('c.username as usuario','p.id_persona as persona','nombres','apaterno','amaterno','fnaci','email','p.activo as activo')
      ->join('personal as p','persona.id_persona','=','p.id_persona')
      ->join('coordinador as c','c.username','=','p.username')
      ->get();
      $cambio=-1;
    return view('admin.listas.coordinadores',compact(['personas','cambio']));
  }
  public function elimina($usuario){
    $persona=personal::select('activo')->where('username',$usuario)->first();

    if($persona->activo>0){
      personal::where('username',$usuario)->update(['activo'=>0]);

    }else{
      personal::where('username',$usuario)->update(['activo'=>1]);
    }
    $personas = persona::select('c.username as usuario','p.id_persona as persona','nombres','apaterno','amaterno','fnaci','email','p.activo as activo')
      ->join('personal as p','persona.id_persona','=','p.id_persona')
      ->join('coordinador as c','c.username','=','p.username')
      ->get();
      $cambio=1;
    return view('admin.listas.coordinadores',compact(['personas','cambio']));
  }
}
