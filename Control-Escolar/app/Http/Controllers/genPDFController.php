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
      $pdf = \PDF::loadView('coordinador.pdfA');
      $pdf->setPaper('letter','landscape');

      //return $pdf->download('ejemplo.pdf');
      return $pdf->stream('Acta de calificaciones.pdf');
    }

    public function pdfB_coordi(){
      $pdf = \PDF::loadView('coordinador.pdfB');
      $pdf->setPaper('letter');

      //return $pdf->download('ejemplo.pdf');
      return $pdf->stream('Acta de calificaciones.pdf');
    }

    public function pdfF_coordi(){
      $pdf = \PDF::loadView('coordinador.pdfF');
      $pdf->setPaper('letter');

      //return $pdf->download('ejemplo.pdf');
      return $pdf->stream('Acta de calificaciones.pdf');
    }

    public function pdfAM_coordi(){
      $pdf = \PDF::loadView('coordinador.pdfAM');
      $pdf->setPaper('letter', 'landscape');

      //return $pdf->download('ejemplo.pdf');
      return $pdf->stream('Acta de calificaciones.pdf');
    }

    public function pdfBM_coordi(){
      $pdf = \PDF::loadView('coordinador.pdfBM');
      $pdf->setPaper('letter');

      //return $pdf->download('ejemplo.pdf');
      return $pdf->stream('Acta de calificaciones.pdf');
    }

    public function pdfFM_coordi(){
      $pdf = \PDF::loadView('coordinador.pdfFM');
      $pdf->setPaper('letter', 'landscape');

      //return $pdf->download('ejemplo.pdf');
      return $pdf->stream('Acta de calificaciones.pdf');
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

    public function showBoleta(){
      return view('alumno.boletas');
    }
}
