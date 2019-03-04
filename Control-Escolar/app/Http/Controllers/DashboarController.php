<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboarController extends Controller
{
    public function index(){
      return view('dashboard');
    }
}
