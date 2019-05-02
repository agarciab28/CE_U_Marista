<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class genPDFController extends Controller
{
    //PDF's DOCENTES
    public function pdfA_docente(){
      return view('docente.pdfA');
    }

    public function pdfB_docente(){
      return view('docente.pdfB');
    }

    public function pdfC_Doc(){
      return view('docente.pdfC');
    }

    public function pdfF_Doc(){
      return view('docente.pdfF');
    }

    //PDF'S COORDINADOR
    public function pdfA_coordi(){
      return view('coordinador.pdfA');
    }

    public function pdfB_coordi(){
      return view('coordinador.pdfB');
    }

    public function pdfF_coordi(){
      return view('coordinador.pdfF');
    }

    public function pdfAM_coordi(){
      return view('coordinador.pdfAM');
    }

    public function pdfBM_coordi(){
      return view('coordinador.pdfBM');
    }

    public function pdfFM_coordi(){
      return view('coordinador.pdfFM');
    }
}
