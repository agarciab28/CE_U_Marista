<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;
use App\Models\profesor;

class ProfesoresController extends Controller
{
  public function lista () {
  $personas = persona::select('pe.username as usuario','persona.id_persona','nombres','apaterno','amaterno','fnaci','email')
    ->join('personal as pe','pe.id_persona','=','persona.id_persona')
    ->join('profesor as pr','pr.username','=','pe.username')->get();
    //dd($personas);
    return view('admin.listas.profes',compact('personas'));

  }
}
