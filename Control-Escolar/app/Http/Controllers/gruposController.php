<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\grupo;
use App\Models\carrera;
use App\Models\profesor;
use App\Models\persona;
use App\Models\materia;

class gruposController extends Controller
{
  public function showGrupos(){
    $grupos=grupo::select('grupo.id_grupo as grupo','seccion','nombre_materia','nombre_carrera','periodo','nombres','apaterno','amaterno')
    ->join('carrera as c','c.id_carrera','=','grupo.id_carrera')
    ->join('materia as m','m.id_materia','=','grupo.id_materia')
    ->join('profesor as p','p.id_prof','=','grupo.id_prof')
    ->join('personal as per','per.username','p.username')
    ->join('persona as pe','pe.id_persona','=','per.id_persona')
    ->get();
    return view('admin.listas.grupos',compact(['grupos']));
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

   } catch (\Exception $e) {
   }
   $grupos=grupo::select('grupo.id_grupo as grupo','seccion','nombre_materia','nombre_carrera','periodo','nombres','apaterno','amaterno')
   ->join('carrera as c','c.id_carrera','=','grupo.id_carrera')
   ->join('materia as m','m.id_materia','=','grupo.id_materia')
   ->join('profesor as p','p.id_prof','=','grupo.id_prof')
   ->join('personal as per','per.username','p.username')
   ->join('persona as pe','pe.id_persona','=','per.id_persona')
   ->get();
   return view('admin.listas.grupos',compact(['grupos']));
 }


 public function showFormGrupo(){
   $carreras= carrera::get(['id_carrera','nombre_carrera']);
   $materias=materia::get(['id_materia','nombre_materia']);
   $profesores=profesor::select('nombres','apaterno','amaterno','id_prof')
    ->join('personal as pe','pe.username','=','profesor.username')
    ->join('persona as pers','pers.id_persona','=','pe.id_persona')
    ->get();
   return view('admin.grupos',compact(['carreras','materias','profesores']));
 }



 public function gruposProf(){
   $carreras= carrera::get(['id_carrera','nombre_carrera']);
   $registro=false;
   return view('docente.grupos',compact(['registro','carreras']));
 }


}
