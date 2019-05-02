<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class genPDFController extends Controller
{
    public function pdfA(){
      return view('docente.pdfA');
    }

    public function pdfB(){
      return view('docente.pdfB');
    }

    public function pdfC(){
      return view('docente.pdfC');
    }

    public function pdfF(){
      return view('docente.pdfF');
    }
}
