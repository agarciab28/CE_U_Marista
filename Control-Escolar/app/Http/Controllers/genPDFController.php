<?php
  namespace App\Http\Controllers;
  use Dompdf\Dompdf;
  use Illuminate\Http\Request;
  require '../vendor/autoload.php';
  require '../config/database.php';

  class genPDFController extends Controller
  {
      public function pdfA(){
        return view('docente.pdfA');
      }

      public function pdfB(){
        return view('docente.pdfB');
      }

      public function pdfF(){
        return view('docente.pdfF');
      }

      public function pdfC()
      {
        ob_start();
        include "../resources/views/docente/pdfA.blade.php";
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml(ob_get_clean());

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
      }
  }

?>
