<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\grupo;

class gruposController extends Controller
{
  public function showGrupos(){
    $grupos=grupo::select('grupo.id_grupo as grupo','seccion','nombre_materia','nombre_carrera','periodo','nombres','apaterno','amaterno')
    ->join('carrera as c','c.id_carrera','=','grupo.id_carrera')
    ->join('materia as m','m.id_materia','=','grupo.id_materia')
    ->join('profesor as p','p.id_prof','=','grupo.id_prof')
    ->join('persona as pe','pe.id_persona','=','p.id_persona')
    ->get();
    return view('admin.listas.grupos',compact(['grupos']));
 }
}
