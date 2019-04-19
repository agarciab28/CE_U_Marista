<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class genPDFController extends Controller
{
    public function index(){
      return view('docente.pdfA');
    }
}
