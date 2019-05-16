<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;
use App\Models\alumno;

class alumnController extends Controller
{
    public function showDatos(){
      $datos=alumno::join('persona as p','alumno.id_persona','=','p.id_persona')
      ->where('ncontrol',session('ncontrol'))
      ->get()->first();
      //dd($datos);
      return view('alumno.misdatos',compact('datos'));
    }




}
