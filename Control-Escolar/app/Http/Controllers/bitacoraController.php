<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bitacora;

class bitacoraController extends Controller
{
    public function listaBitacora(){
      $bitacora = bitacora::get();
      return view("admin.bitacora",compact(["bitacora"]));
}
}
