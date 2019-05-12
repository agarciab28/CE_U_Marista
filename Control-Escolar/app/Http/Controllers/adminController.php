<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personal;

class adminController extends Controller
{
    public function showDatos(){
      $datos=personal::where('username',session('username'))->first()->get();
      return view('admin.misdatos',compact('datos'));
    }


}
