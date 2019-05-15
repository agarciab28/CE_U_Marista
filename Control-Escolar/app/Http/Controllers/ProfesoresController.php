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
    $modif=false;
    return view('admin.listas.profes',compact(['personas','cambio','modif']));

  }

  public function liat_modificar ($ida) {
    $personas = persona::select('pe.username as usuario','persona.id_persona as persona','nombres','apaterno','amaterno','fnaci','email','pe.activo as activo','sexo','curp','pe.username as username','especialidad','ced_fiscal','nssoc')
      ->join('personal as pe','pe.id_persona','=','persona.id_persona')
      ->join('profesor as pr','pr.username','=','pe.username')
      ->where('persona.id_persona',$ida)
      ->get();
      //dd($personas);
      $cambio=-1;
      return view('admin.modificar.profesores',compact(['personas','cambio']));

  }

  public function modificar_profesor (Request $req,$ida) {
try {

    $profesor_persona_up = [
     'nombres' => $req->get('nombres'),
     'apaterno' => $req->get('apaterno'),
     'amaterno' => $req->get('amaterno'),
     'fnaci' => $req->get('fnaci'),
     'sexo' => $req->get('sexo'),
     'curp' => $req->get('curp'),
     'email' => $req->get('email')
   ];
   $profesor_personal_up = [
    'username' => $req->get('username'),
    'ced_fiscal' => $req->get('cedulap'),
    'nssoc' => $req->get('nssocp'),
    'password' => hash_hmac('sha256', $req->get('pass'), env('HASH_KEY'))
  ];
    persona::where("id_persona",$ida)->update($profesor_persona_up);
    personal::where("id_persona",$ida)->update($profesor_personal_up);
    //consulta
    $caux = personal::where("id_persona",$ida)->get()->first();
    $profesor_prof_up = [
      'especialidad' => $req->get('especialidad_profe')
    ];
    profesor::where("username",$caux->username)->update($profesor_prof_up);

    $modif=true;
  } catch (\Exception $e) {
      $modif=false;
  }

      $personas = persona::select('pe.username as usuario','persona.id_persona as persona','nombres','apaterno','amaterno','fnaci','email','pe.activo as activo')
        ->join('personal as pe','pe.id_persona','=','persona.id_persona')
        ->join('profesor as pr','pr.username','=','pe.username')->get();
        //dd($personas);
        $cambio=-1;
        return view('admin.listas.profes',compact(['personas','cambio','modif']));
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
          $modif=false;
    return view('admin.listas.profes',compact(['personas','cambio','modif']));
  }
}
