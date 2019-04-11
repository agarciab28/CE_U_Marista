<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;
use App\Models\coordinador;

class ListaCoordinadorController extends Controller
{
  public function lista(){
    $personas = persona::select('id_coordinador as usuario','coordinador.id_persona','nombres','apaterno','amaterno','fnaci','email')
      ->join('coordinador','persona.id_persona','=','coordinador.id_persona')->get();
    return view('admin.listas.coordinadores',compact('personas'));
  }
}
