<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;
use App\Models\coordinador;

class CoordinadorController extends Controller
{
  public function lista(){
    $personas = persona::select('c.username as usuario','p.id_persona','nombres','apaterno','amaterno','fnaci','email')
      ->join('personal as p','persona.id_persona','=','p.id_persona')
      ->join('coordinador as c','c.username','=','p.username')
      ->get();
    return view('admin.listas.coordinadores',compact('personas'));
  }
}
