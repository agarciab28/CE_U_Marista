<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personal;

class adminController extends Controller
{
    public function showDatos(){
      $datos=personal::join('persona as p','personal.id_persona','=','p.id_persona')
      ->where('username',session('username'))
      ->get()->first();
      return view('admin.misdatos',compact('datos'));
    }


}
