<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aulasControler extends Controller
{
    public function showAulas(){
      return view('admin.aulas');
    }
}
