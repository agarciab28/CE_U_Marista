<?php
  namespace App\Http\Controllers;
  use Dompdf\Dompdf;
  use App\Models\kardex;
  use App\Models\persona;
  use App\Models\materia;
  use App\Models\configuracion;
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
      //aquí se va a obtener el ncontrol de la variable de sesión $ncontrol=session('ncontrol');
      //en lo mientras el ejemplo va a ser con el men con ncontrol 1111 que está en los seeders
      $ncontrol='1111';
      //También ya hay una variable de sesión con el nombre pero como todavía no funciona chido
      //el back en alumno lo wa sacar manual
      $datos=persona::select('nombres','apaterno','amaterno','semestre','nombre_carrera as carrera')
        ->join('alumno as a','persona.id_persona','=','a.id_persona')
        ->join('carrera as c','a.id_carrera','=','c.id_carrera')
        ->where('a.ncontrol',$ncontrol)->get()->first();
        //sacamos el kardex del vato
      $kardex=kardex::where('ncontrol',$ncontrol)->get();
      $calificaciones=array();
      foreach ($kardex as $key) {
        array_push($calificaciones,json_decode($key->obj_calificacion));
      }

      //sacamos la configuración del semestre actual
      $configuracion=configuracion::get()->first();
      //llamamos a la vista y enviamos las variables
      return view('alumno.boletas',compact(['ncontrol','datos','calificaciones','configuracion']));
    }
}
