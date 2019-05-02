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

<<<<<<< HEAD
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
=======
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
>>>>>>> 2b34e53247d829019d5737e8650108a47acfc0ed
