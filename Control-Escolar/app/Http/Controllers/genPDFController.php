<?php
  namespace App\Http\Controllers;
  use Dompdf\Dompdf;
  use Illuminate\Http\Request;
  require '../vendor/autoload.php';
  require '../config/database.php';

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

    //PDF's ALUMNOS
    public function pdfA_al(){
      return view('alumno.pdfA');
    }

    public function pdfB_al(){
      return view('alumno.pdfB');
    }
}
