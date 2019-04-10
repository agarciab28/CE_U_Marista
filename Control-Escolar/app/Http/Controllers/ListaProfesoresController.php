<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;
use App\Models\profesor;

class ListaProfesoresController extends Controller
{
  public function lista () {
  $personas = persona::select('id_prof as usuario','persona.id_persona','nombres','apaterno','amaterno','fnaci','email')
    ->join('profesor','persona.id_persona','=','profesor.id_persona')->get();
    //dd($personas);
    return view('admin.listas.profes',compact('personas'));

  }
}
