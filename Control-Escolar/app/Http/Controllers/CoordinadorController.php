<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;
use App\Models\coordinador;
use App\Models\personal;
use App\Models\carrera;

class CoordinadorController extends Controller
{
  public function lista(){
    $personas = persona::select('c.username as usuario','p.id_persona as persona','id_carrera','nombres','apaterno','amaterno','fnaci','email','p.activo as activo')
      ->join('personal as p','persona.id_persona','=','p.id_persona')
      ->join('coordinador as c','c.username','=','p.username')
      ->get();
      $cambio=-1;
      $modif=false;
    return view('admin.listas.coordinadores',compact(['personas','cambio','modif']));
  }


    public function lista_mod($ida){
      $personas = persona::select('c.username as usuario','p.id_persona as persona','nombres','rol','ced_fiscal','nssoc','ca.id_carrera as id_carrera','nombre_carrera','sexo','curp','apaterno','amaterno','fnaci','email','p.activo as activo')
        ->join('personal as p','persona.id_persona','=','p.id_persona')
        ->join('coordinador as c','c.username','=','p.username')
        ->join('carrera as ca','ca.id_carrera','=','c.id_carrera')
        ->where('persona.id_persona',$ida)
        ->get();
        $carreras= carrera::get(['id_carrera','nombre_carrera']);
      return view('admin.modificar.coordinadores',compact(['personas','carreras']));
    }


public function modificar_coordinador($ida, Request $req){
try {

  $coor_persona = [
    'curp' => $req->get('curp'),
    'nombres' => $req->get('nombres'),
    'apaterno' => $req->get('apaterno'),
    'amaterno' => $req->get('amaterno'),
    'fnaci' => $req->get('fnaci'),
    'sexo' => $req->get('sexo'),
    'email' => $req->get('email')
  ];
  $coor_personal = [
    'username' => $req->get('username'),
    'password' => $req->get('pass'),
    'ced_fiscal' => $req->get('ced_fiscal'),
    'nssoc' => $req->get('nssoc')
  ];

  persona::where('id_persona',$ida)->update($coor_persona);
  personal::where('id_persona',$ida)->update($coor_personal);

  $aux = personal::where('id_persona',$ida)->get()->first();

  coordinador::where('username',$aux->username)->update(['id_carrera' => $req->get('id_carrera_coordinador')]);
      $modif=true;
} catch (\Exception $e) {
        $modif=false;
}

  $personas = persona::select('c.username as usuario','p.id_persona as persona','id_carrera','nombres','apaterno','amaterno','fnaci','email','p.activo as activo')
    ->join('personal as p','persona.id_persona','=','p.id_persona')
    ->join('coordinador as c','c.username','=','p.username')
    ->get();
    $cambio=-1;
  return view('admin.listas.coordinadores',compact(['personas','cambio','modif']));
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
      $modif=false;
    return view('admin.listas.coordinadores',compact(['personas','cambio','modif']));
  }
}
