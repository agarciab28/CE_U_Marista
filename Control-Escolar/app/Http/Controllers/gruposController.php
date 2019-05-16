<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\grupo;
use App\Models\carrera;
use App\Models\profesor;
use App\Models\persona;
use App\Models\materia;
use Illuminate\Support\Facades\DB;
use App\Models\lista_grupo;
use App\Models\horario;
use App\Models\alumno;
use App\Models\aula;
class gruposController extends Controller
{
  public function showGrupos(){

    $grupos=grupo::select('grupo.id_grupo as grupo','seccion','nombre_materia','nombre_carrera','periodo','nombres','apaterno','amaterno','grupo.activo as activo','c.id_carrera as id_carrera')
    ->join('carrera as c','c.id_carrera','=','grupo.id_carrera')
    ->join('materia as m','m.id_materia','=','grupo.id_materia')
    ->join('profesor as p','p.id_prof','=','grupo.id_prof')
    ->join('personal as per','per.username','p.username')
    ->join('persona as pe','pe.id_persona','=','per.id_persona')
    ->get();
    $carrerasl= carrera::get(['id_carrera','nombre_carrera']);
   $materiasl=materia::get(['id_materia','nombre_materia']);
   $profesoresl=profesor::select('nombres','apaterno','amaterno','id_prof')
    ->join('personal as pe','pe.username','=','profesor.username')
    ->join('persona as pers','pers.id_persona','=','pe.id_persona')
    ->get();
   return view('admin.listas.grupos',compact(['grupos','carrerasl','materiasl','profesoresl']));
 }


 public function registroGrupo(Request $request){
   try {
     $grupo = new grupo();
     $grupo->seccion=$request->seccion;
     $grupo->id_carrera=$request->carrera;
     $grupo->id_materia=$request->materia;
     $grupo->id_prof=$request->profesor;
     $grupo->periodo=$request->periodo;
     $grupo->save();

     $horario=new horario();
     $horario->hora_i_lu=$request->hora_ini_lunes;
     $horario->hora_f_lu=$request->hora_fin_lunes;
     $horario->aula_lu=$request->aula_lunes;

     $horario->hora_i_ma=$request->hora_ini_martes;
     $horario->hora_f_ma=$request->hora_fin_martes;
     $horario->aula_ma=$request->aula_martes;

     $horario->hora_i_mi=$request->hora_ini_miercoles;
     $horario->hora_f_mi=$request->hora_fin_miercoles;
     $horario->aula_mi=$request->aula_miercoles;

     $horario->hora_i_ju=$request->hora_ini_jueves;
     $horario->hora_f_ju=$request->hora_fin_jueves;
     $horario->aula_ju=$request->aula_jueves;

     $horario->hora_i_vi=$request->hora_ini_viernes;
     $horario->hora_f_vi=$request->hora_fin_viernes;
     $horario->aula_vi=$request->aula_viernes;

     $horario->hora_i_sa=$request->hora_ini_sabado;
     $horario->hora_f_sa=$request->hora_fin_sabado;
     $horario->aula_sa=$request->aula_sabado;
     $idg = DB::table('grupo')->select('id_grupo')
     ->orderBy('id_grupo', 'desc')->limit(1)
     ->value('id_grupo');
     $horario->id_grupo=$idg;
     if (horario::where('hora_i_lu', '=', $request->hora_ini_lunes)->count() > 0) {
      if (horario::where('aula_lu', '=', $request->aula_lunes)->count() > 0) {
        $message="No se pudo registrar el grupo hay un empalme en el horario y grupo";
        echo "<script type='text/javascript'>alert('$message');</script>";
        $carreras= carrera::get(['id_carrera','nombre_carrera']);
        $materias=materia::get(['id_materia','nombre_materia']);
        $profesores=profesor::select('nombres','apaterno','amaterno','id_prof')
         ->join('personal as pe','pe.username','=','profesor.username')
         ->join('persona as pers','pers.id_persona','=','pe.id_persona')
         ->get();
        return view('admin.grupos',compact(['carreras','materias','profesores']));
      }
    }
    if (horario::where('hora_i_ma', '=', $request->hora_ini_martes)->count() > 0) {
      if (horario::where('aula_ma', '=', $request->aula_martes)->count() > 0) {
        $message="No se pudo registrar el grupo hay un empalme en el horario y grupo";
        echo "<script type='text/javascript'>alert('$message');</script>";
        $carreras= carrera::get(['id_carrera','nombre_carrera']);
        $materias=materia::get(['id_materia','nombre_materia']);
        $profesores=profesor::select('nombres','apaterno','amaterno','id_prof')
         ->join('personal as pe','pe.username','=','profesor.username')
         ->join('persona as pers','pers.id_persona','=','pe.id_persona')
         ->get();
        return view('admin.grupos',compact(['carreras','materias','profesores']));
      }
    }
    if (horario::where('hora_i_mi', '=', $request->hora_ini_miercoles)->count() > 0) {
      if (horario::where('aula_mi', '=', $request->aula_miercoles)->count() > 0) {
        $message="No se pudo registrar el grupo hay un empalme en el horario y grupo";
        echo "<script type='text/javascript'>alert('$message');</script>";
        $carreras= carrera::get(['id_carrera','nombre_carrera']);
        $materias=materia::get(['id_materia','nombre_materia']);
        $profesores=profesor::select('nombres','apaterno','amaterno','id_prof')
         ->join('personal as pe','pe.username','=','profesor.username')
         ->join('persona as pers','pers.id_persona','=','pe.id_persona')
         ->get();
        return view('admin.grupos',compact(['carreras','materias','profesores']));
      }
    }
    if (horario::where('hora_i_ju', '=', $request->hora_ini_jueves)->count() > 0) {
      if (horario::where('aula_ju', '=', $request->aula_jueves)->count() > 0) {
        $message="No se pudo registrar el grupo hay un empalme en el horario y grupo";
        echo "<script type='text/javascript'>alert('$message');</script>";
        $carreras= carrera::get(['id_carrera','nombre_carrera']);
        $materias=materia::get(['id_materia','nombre_materia']);
        $profesores=profesor::select('nombres','apaterno','amaterno','id_prof')
         ->join('personal as pe','pe.username','=','profesor.username')
         ->join('persona as pers','pers.id_persona','=','pe.id_persona')
         ->get();
        return view('admin.grupos',compact(['carreras','materias','profesores']));
      }
    }
    if (horario::where('hora_i_vi', '=', $request->hora_ini_viernes)->count() > 0) {
      if (horario::where('aula_vi', '=', $request->aula_viernes)->count() > 0) {
        $message="No se pudo registrar el grupo hay un empalme en el horario y grupo";
        echo "<script type='text/javascript'>alert('$message');</script>";
        $carreras= carrera::get(['id_carrera','nombre_carrera']);
   $materias=materia::get(['id_materia','nombre_materia']);
   $profesores=profesor::select('nombres','apaterno','amaterno','id_prof')
    ->join('personal as pe','pe.username','=','profesor.username')
    ->join('persona as pers','pers.id_persona','=','pe.id_persona')
    ->get();
   return view('admin.grupos',compact(['carreras','materias','profesores']));
      }
    }
    if (horario::where('hora_i_sa', '=', $request->hora_ini_sabado)->count() > 0) {
      if (horario::where('aula_sa', '=', $request->aula_sabado)->count() > 0) {
        $message="No se pudo registrar el grupo hay un empalme en el horario y grupo";
        echo "<script type='text/javascript'>alert('$message');</script>";
        $carreras= carrera::get(['id_carrera','nombre_carrera']);
        $materias=materia::get(['id_materia','nombre_materia']);
        $profesores=profesor::select('nombres','apaterno','amaterno','id_prof')
         ->join('personal as pe','pe.username','=','profesor.username')
         ->join('persona as pers','pers.id_persona','=','pe.id_persona')
         ->get();
        return view('admin.grupos',compact(['carreras','materias','profesores']));
      }
    }
     $horario->save();

   } catch (Exception $e) {
     $message="Hubo un error al guardar el grupo";
    echo "<script type='text/javascript'>alert('$message');</script>";
    showFormGrupo();
   }

   $grupos=grupo::select('grupo.id_grupo as grupo','seccion','nombre_materia','nombre_carrera','periodo','nombres','apaterno','amaterno','grupo.activo as activo','c.id_carrera as id_carrera')
   ->join('carrera as c','c.id_carrera','=','grupo.id_carrera')
   ->join('materia as m','m.id_materia','=','grupo.id_materia')
   ->join('profesor as p','p.id_prof','=','grupo.id_prof')
   ->join('personal as per','per.username','p.username')
   ->join('persona as pe','pe.id_persona','=','per.id_persona')
   ->get();
   $carrerasl= carrera::get(['id_carrera','nombre_carrera']);
  $materiasl=materia::get(['id_materia','nombre_materia']);
  $profesoresl=profesor::select('nombres','apaterno','amaterno','id_prof')
   ->join('personal as pe','pe.username','=','profesor.username')
   ->join('persona as pers','pers.id_persona','=','pe.id_persona')
   ->get();
  return view('admin.listas.grupos',compact(['grupos','carrerasl','materiasl','profesoresl']));
 }
 //funcion eliminar
 public function eliminagrupos($grupo){
   try{
  $seleccion=grupo::select('activo')->where('id_grupo',$grupo)->first();

  if($seleccion->activo>0){
    grupo::where('id_grupo',$grupo)->update(['activo'=>0]);

  }else{
    grupo::where('id_grupo',$grupo)->update(['activo'=>1]);
  }
}catch(Exception $e){
  $message="Hubo un error al guardar el grupo";
  echo "<script type='text/javascript'>alert('$message');</script>";
  $grupos=grupo::select('grupo.id_grupo as grupo','seccion','nombre_materia','nombre_carrera','periodo','nombres','apaterno','amaterno','grupo.activo as activo','c.id_carrera as id_carrera')
    ->join('carrera as c','c.id_carrera','=','grupo.id_carrera')
    ->join('materia as m','m.id_materia','=','grupo.id_materia')
    ->join('profesor as p','p.id_prof','=','grupo.id_prof')
    ->join('personal as per','per.username','p.username')
    ->join('persona as pe','pe.id_persona','=','per.id_persona')
    ->get();
    $carrerasl= carrera::get(['id_carrera','nombre_carrera']);
   $materiasl=materia::get(['id_materia','nombre_materia']);
   $profesoresl=profesor::select('nombres','apaterno','amaterno','id_prof')
    ->join('personal as pe','pe.username','=','profesor.username')
    ->join('persona as pers','pers.id_persona','=','pe.id_persona')
    ->get();
   return view('admin.listas.grupos',compact(['grupos','carrerasl','materiasl','profesoresl']));

}
$grupos=grupo::select('grupo.id_grupo as grupo','seccion','nombre_materia','nombre_carrera','periodo','nombres','apaterno','amaterno','grupo.activo as activo','c.id_carrera as id_carrera')
    ->join('carrera as c','c.id_carrera','=','grupo.id_carrera')
    ->join('materia as m','m.id_materia','=','grupo.id_materia')
    ->join('profesor as p','p.id_prof','=','grupo.id_prof')
    ->join('personal as per','per.username','p.username')
    ->join('persona as pe','pe.id_persona','=','per.id_persona')
    ->get();
    $carrerasl= carrera::get(['id_carrera','nombre_carrera']);
   $materiasl=materia::get(['id_materia','nombre_materia']);
   $profesoresl=profesor::select('nombres','apaterno','amaterno','id_prof')
    ->join('personal as pe','pe.username','=','profesor.username')
    ->join('persona as pers','pers.id_persona','=','pe.id_persona')
    ->get();
   return view('admin.listas.grupos',compact(['grupos','carrerasl','materiasl','profesoresl']));
}

//funcion modificar
 public function modificagrupos(Request $request){
   try{
  grupo::where('id_grupo',$request->idgrupo)->update([
    'seccion'=>$request->seccion,
    'id_carrera'=>$request->carrera,
    'id_materia'=>$request->materia,
    'id_prof'=>$request->profesor,
    'periodo'=>$request->periodo
  ]);}catch(Exception $e){
    $message="Hubo un error al guardar el grupo";
    echo "<script type='text/javascript'>alert('$message');</script>";
    $grupos=grupo::select('grupo.id_grupo as grupo','seccion','nombre_materia','nombre_carrera','periodo','nombres','apaterno','amaterno','grupo.activo as activo','c.id_carrera as id_carrera')
    ->join('carrera as c','c.id_carrera','=','grupo.id_carrera')
    ->join('materia as m','m.id_materia','=','grupo.id_materia')
    ->join('profesor as p','p.id_prof','=','grupo.id_prof')
    ->join('personal as per','per.username','p.username')
    ->join('persona as pe','pe.id_persona','=','per.id_persona')
    ->get();
    $carrerasl= carrera::get(['id_carrera','nombre_carrera']);
   $materiasl=materia::get(['id_materia','nombre_materia']);
   $profesoresl=profesor::select('nombres','apaterno','amaterno','id_prof')
    ->join('personal as pe','pe.username','=','profesor.username')
    ->join('persona as pers','pers.id_persona','=','pe.id_persona')
    ->get();
   return view('admin.listas.grupos',compact(['grupos','carrerasl','materiasl','profesoresl']));

  }
  $grupos=grupo::select('grupo.id_grupo as grupo','seccion','nombre_materia','nombre_carrera','periodo','nombres','apaterno','amaterno','grupo.activo as activo','c.id_carrera as id_carrera')
    ->join('carrera as c','c.id_carrera','=','grupo.id_carrera')
    ->join('materia as m','m.id_materia','=','grupo.id_materia')
    ->join('profesor as p','p.id_prof','=','grupo.id_prof')
    ->join('personal as per','per.username','p.username')
    ->join('persona as pe','pe.id_persona','=','per.id_persona')
    ->get();
    $carrerasl= carrera::get(['id_carrera','nombre_carrera']);
   $materiasl=materia::get(['id_materia','nombre_materia']);
   $profesoresl=profesor::select('nombres','apaterno','amaterno','id_prof')
    ->join('personal as pe','pe.username','=','profesor.username')
    ->join('persona as pers','pers.id_persona','=','pe.id_persona')
    ->get();
   return view('admin.listas.grupos',compact(['grupos','carrerasl','materiasl','profesoresl']));

}

 public function showFormGrupo(){
   $aulas=aula::get();

   $carreras= carrera::get(['id_carrera','nombre_carrera']);
   $materias=materia::get(['id_materia','nombre_materia']);
   $profesores=profesor::select('nombres','apaterno','amaterno','id_prof')
    ->join('personal as pe','pe.username','=','profesor.username')
    ->join('persona as pers','pers.id_persona','=','pe.id_persona')
    ->get();
   return view('admin.grupos',compact(['carreras','materias','profesores','aulas']));
 }



 public function gruposProf(){

   $grupos_de_profesor= grupo::select('grupo.id_grupo as id_grupo','nombre_materia')
   ->join('profesor as p','p.id_prof','=','grupo.id_prof')
   ->join('materia as m','m.id_materia','=','grupo.id_materia')
   ->where('p.username','=',session('username'))->get();

   return view('docente.grupos',compact('grupos_de_profesor'));
 }

 public function describeGruposProf(Request $request){
   //dd($request);
   $alumnos=alumno::select('l.ncontrol as ncontrol','p.nombres as nombres','p.apaterno as apaterno','p.amaterno as amaterno')
    ->join('lista_grupo as l','l.ncontrol','=','alumno.ncontrol')
    ->join('persona as p','p.id_persona','=','alumno.id_persona')
    ->where('l.id_grupo',$request->id_grupo);
   return view('docente.opciones.alumnos',compact(['alumnos']));
 }
 public function calificacionesFinalesGrupo(Request $request){

   return view('docente.opciones.calif_finales');
 }
 public function showlista($idg){
$listag=lista_grupo::select('ncontrol','nombres','id_grupo')
  ->where('id_grupo',$idg)
  ->get();
  return view('admin.listas.alumnosxgrupo',compact(['listag']));
 }
 public function eraselista($idg,$ncontrol){
   DB::table('lista_grupo')
   ->where('ncontrol',$ncontrol)
   ->where('id_grupo',$idg)
   ->delete();
  $listag=lista_grupo::select('ncontrol','nombres','id_grupo')
    ->where('id_grupo',$idg)
    ->get();
    return view('admin.listas.alumnosxgrupo',compact(['listag']));
   }
}
