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
      $pdf = \PDF::loadView('docente.pdfA');
      $pdf->setPaper('letter', 'landscape');

      //return $pdf->download('ejemplo.pdf');
      return $pdf->stream('Acta de calificaciones.pdf');
    }

    public function pdfB_docente(){
      $pdf = \PDF::loadView('docente.pdfB');
      $pdf->setPaper('letter');

      //return $pdf->download('ejemplo.pdf');
      return $pdf->stream('Acta de calificaciones.pdf');
    }

    public function pdfC_docente(){
      $pdf = \PDF::loadView('docente.pdfC');
      $pdf->setPaper('letter');

      //return $pdf->download('ejemplo.pdf');
      return $pdf->stream('Acta de calificaciones.pdf');
    }

    public function pdfF_docente(){
      $pdf = \PDF::loadView('docente.pdfF');
      $pdf->setPaper('letter');

      //return $pdf->download('ejemplo.pdf');
      return $pdf->stream('Acta de calificaciones.pdf');
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
      $pdf = \PDF::loadView('alumno.pdfA');
      $pdf->setPaper('letter','landscape');

      //return $pdf->download('ejemplo.pdf');
      return $pdf->stream('Acta de calificaciones.pdf');
    }

    public function pdfB_al(){
      $pdf = \PDF::loadView('alumno.pdfB');
      $pdf->setPaper('letter');

      //return $pdf->download('ejemplo.pdf');
      return $pdf->stream('Kárdex de calificaciones.pdf');
    }
}
