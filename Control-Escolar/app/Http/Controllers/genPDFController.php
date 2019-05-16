<?php
  namespace App\Http\Controllers;
  use Dompdf\Dompdf;
  use App\Models\kardex;
  use App\Models\persona;
  use App\Models\materia;
  use App\Models\calificaciones;
  use App\Models\configuracion;
  use Illuminate\Http\Request;
  require '../vendor/autoload.php';
  require '../config/database.php';

  class genPDFController extends Controller
  {
    //PDF's DOCENTES
    public function pdfA_docente(){
      $id_grupo='1';

      $datos=calificaciones::select('gr.id_grupo', 'gr.seccion', 'gr.periodo', 'nombres', 'apaterno', 'amaterno', 'car.nombre_carrera', 'ma.nombre_materia')
        ->join('grupo as gr', 'calificaciones.id_grupo', '=', 'gr.id_grupo')
        ->join('profesor as pr', 'pr.id_prof', '=', 'gr.id_prof')
        ->join('personal as pe', 'pe.username', '=', 'pr.username')
        ->join('persona as per', 'per.id_persona', '=', 'pe.id_persona')
        ->join('materia as ma', 'ma.id_materia', '=', 'gr.id_materia')
        ->join('carrera as car', 'car.id_carrera', '=', 'gr.id_carrera')
        ->where('calificaciones.id_grupo', $id_grupo)
        ->get()
        ->first();

      $calificaciones=calificaciones::select('al.ncontrol', 'pe.nombres', 'pe.apaterno', 'pe.amaterno', 'primer_parcial', 'faltas_primer', 'segundo_parcial', 'faltas_segundo', 'examen_final', 'faltas_tercer', 'total_faltas', 'promedio_calificacion')
      ->join('alumno as al', 'calificaciones.ncontrol', '=', 'al.ncontrol')
      ->join('persona as pe', 'al.id_persona', '=', 'pe.id_persona')
      ->where('id_grupo', $id_grupo)
      ->where('opcion_calificacion', '1')
      ->get();

      $configuracion=configuracion::get()->first();

      $pdf = \PDF::loadView('docente.pdfA', compact('id_grupo','datos','calificaciones','configuracion'));
      $pdf->setPaper('letter', 'landscape');

      return $pdf->stream('Acta de calificaciones.pdf');
    }

    public function pdfB_docente(){
      $id_grupo='1';
      $opcion="primera";
      $opc='2';

      $datos=calificaciones::select('gr.id_grupo', 'gr.seccion', 'gr.periodo', 'nombres', 'apaterno', 'amaterno', 'car.nombre_carrera', 'ma.nombre_materia')
        ->join('grupo as gr', 'calificaciones.id_grupo', '=', 'gr.id_grupo')
        ->join('profesor as pr', 'pr.id_prof', '=', 'gr.id_prof')
        ->join('personal as pe', 'pe.username', '=', 'pr.username')
        ->join('persona as per', 'per.id_persona', '=', 'pe.id_persona')
        ->join('materia as ma', 'ma.id_materia', '=', 'gr.id_materia')
        ->join('carrera as car', 'car.id_carrera', '=', 'gr.id_carrera')
        ->where('calificaciones.id_grupo', $id_grupo)
        ->get()
        ->first();

      $calificaciones=calificaciones::select('al.ncontrol', 'pe.nombres', 'pe.apaterno', 'pe.amaterno', 'promedio_calificacion')
      ->join('alumno as al', 'calificaciones.ncontrol', '=', 'al.ncontrol')
      ->join('persona as pe', 'al.id_persona', '=', 'pe.id_persona')
      ->where('id_grupo', $id_grupo)
      ->where('opcion_calificacion', $opc)
      ->get();

      $configuracion=configuracion::get()->first();

      $pdf = \PDF::loadView('docente.pdfB', compact('id_grupo','datos','calificaciones','configuracion', 'opcion'));
      $pdf->setPaper('letter');

      return $pdf->stream('Acta de calificaciones.pdf');
    }

    public function pdfC_docente(){
      $id_grupo='1';
      $opcion="primera";
      $opc='2';

      $datos=calificaciones::select('gr.id_grupo', 'gr.seccion', 'gr.periodo', 'nombres', 'apaterno', 'amaterno', 'car.nombre_carrera', 'ma.nombre_materia')
        ->join('grupo as gr', 'calificaciones.id_grupo', '=', 'gr.id_grupo')
        ->join('profesor as pr', 'pr.id_prof', '=', 'gr.id_prof')
        ->join('personal as pe', 'pe.username', '=', 'pr.username')
        ->join('persona as per', 'per.id_persona', '=', 'pe.id_persona')
        ->join('materia as ma', 'ma.id_materia', '=', 'gr.id_materia')
        ->join('carrera as car', 'car.id_carrera', '=', 'gr.id_carrera')
        ->where('calificaciones.id_grupo', $id_grupo)
        ->get()
        ->first();

      $calificaciones=calificaciones::select('calificaciones.ncontrol', 'nombres', 'apaterno', 'amaterno', 'opcion_calificacion', 'promedio_calificacion')
      ->join('alumno as al', 'calificaciones.ncontrol', '=', 'al.ncontrol')
      ->join('persona as pe', 'al.id_persona', '=', 'pe.id_persona')
      ->where('id_grupo', $id_grupo)
      ->where('opcion_calificacion', $opc)
      ->where('promedio_calificacion','<','6')
      ->get();

      $configuracion=configuracion::get()->first();

      $pdf = \PDF::loadView('docente.pdfC', compact('id_grupo','datos','calificaciones','configuracion', 'opcion'));
      $pdf->setPaper('letter');

      return $pdf->stream('Acta de calificaciones.pdf');
    }

    public function pdfF_docente(){
      $id_grupo='1';

      $datos=calificaciones::select('gr.id_grupo', 'gr.seccion', 'gr.periodo', 'nombres', 'apaterno', 'amaterno', 'car.nombre_carrera', 'ma.nombre_materia')
        ->join('grupo as gr', 'calificaciones.id_grupo', '=', 'gr.id_grupo')
        ->join('profesor as pr', 'pr.id_prof', '=', 'gr.id_prof')
        ->join('personal as pe', 'pe.username', '=', 'pr.username')
        ->join('persona as per', 'per.id_persona', '=', 'pe.id_persona')
        ->join('materia as ma', 'ma.id_materia', '=', 'gr.id_materia')
        ->join('carrera as car', 'car.id_carrera', '=', 'gr.id_carrera')
        ->where('calificaciones.id_grupo', $id_grupo)
        ->get()
        ->first();

      $calificaciones=calificaciones::select('al.ncontrol', 'pe.nombres', 'pe.apaterno', 'pe.amaterno', 'opcion_calificacion', 'promedio_calificacion')
      ->join('alumno as al', 'calificaciones.ncontrol', '=', 'al.ncontrol')
      ->join('persona as pe', 'al.id_persona', '=', 'pe.id_persona')
      ->where('id_grupo', $id_grupo)
      ->get();

      $configuracion=configuracion::get()->first();

      $pdf = \PDF::loadView('docente.pdfF', compact('id_grupo','datos','calificaciones','configuracion'));
      $pdf->setPaper('letter');

      return $pdf->stream('Acta de calificaciones.pdf');
    }

    //PDF'S COORDINADOR
    public function pdfA_coordi(){
      $id_grupo='1';

      $datos=calificaciones::select('gr.id_grupo', 'gr.seccion', 'gr.periodo', 'nombres', 'apaterno', 'amaterno', 'car.nombre_carrera', 'ma.nombre_materia')
        ->join('grupo as gr', 'calificaciones.id_grupo', '=', 'gr.id_grupo')
        ->join('profesor as pr', 'pr.id_prof', '=', 'gr.id_prof')
        ->join('personal as pe', 'pe.username', '=', 'pr.username')
        ->join('persona as per', 'per.id_persona', '=', 'pe.id_persona')
        ->join('materia as ma', 'ma.id_materia', '=', 'gr.id_materia')
        ->join('carrera as car', 'car.id_carrera', '=', 'gr.id_carrera')
        ->where('calificaciones.id_grupo', $id_grupo)
        ->get()
        ->first();

      $calificaciones=calificaciones::select('al.ncontrol', 'pe.nombres', 'pe.apaterno', 'pe.amaterno', 'primer_parcial', 'faltas_primer', 'segundo_parcial', 'faltas_segundo', 'examen_final', 'faltas_tercer', 'total_faltas', 'promedio_calificacion')
      ->join('alumno as al', 'calificaciones.ncontrol', '=', 'al.ncontrol')
      ->join('persona as pe', 'al.id_persona', '=', 'pe.id_persona')
      ->where('id_grupo', $id_grupo)
      ->where('opcion_calificacion', '1')
      ->get();

      $configuracion=configuracion::get()->first();

      $pdf = \PDF::loadView('coordinador.pdfA', compact('id_grupo','datos','calificaciones','configuracion'));
      $pdf->setPaper('letter','landscape');

      return $pdf->stream('Acta de calificaciones.pdf');
    }

    public function pdfB_coordi(){
      $id_grupo='1';
      $opcion="primera";
      $opc='2';

      $datos=calificaciones::select('gr.id_grupo', 'gr.seccion', 'gr.periodo', 'nombres', 'apaterno', 'amaterno', 'car.nombre_carrera', 'ma.nombre_materia')
        ->join('grupo as gr', 'calificaciones.id_grupo', '=', 'gr.id_grupo')
        ->join('profesor as pr', 'pr.id_prof', '=', 'gr.id_prof')
        ->join('personal as pe', 'pe.username', '=', 'pr.username')
        ->join('persona as per', 'per.id_persona', '=', 'pe.id_persona')
        ->join('materia as ma', 'ma.id_materia', '=', 'gr.id_materia')
        ->join('carrera as car', 'car.id_carrera', '=', 'gr.id_carrera')
        ->where('calificaciones.id_grupo', $id_grupo)
        ->get()
        ->first();

      $calificaciones=calificaciones::select('al.ncontrol', 'pe.nombres', 'pe.apaterno', 'pe.amaterno', 'promedio_calificacion')
      ->join('alumno as al', 'calificaciones.ncontrol', '=', 'al.ncontrol')
      ->join('persona as pe', 'al.id_persona', '=', 'pe.id_persona')
      ->where('id_grupo', $id_grupo)
      ->where('opcion_calificacion', $opc)
      ->get();

      $configuracion=configuracion::get()->first();

      $pdf = \PDF::loadView('coordinador.pdfB', compact('id_grupo','datos','calificaciones','configuracion', 'opcion'));
      $pdf->setPaper('letter');

      return $pdf->stream('Acta de calificaciones.pdf');
    }

    public function pdfF_coordi(){
      $id_grupo='1';

      $datos=calificaciones::select('gr.id_grupo', 'gr.seccion', 'gr.periodo', 'nombres', 'apaterno', 'amaterno', 'car.nombre_carrera', 'ma.nombre_materia')
        ->join('grupo as gr', 'calificaciones.id_grupo', '=', 'gr.id_grupo')
        ->join('profesor as pr', 'pr.id_prof', '=', 'gr.id_prof')
        ->join('personal as pe', 'pe.username', '=', 'pr.username')
        ->join('persona as per', 'per.id_persona', '=', 'pe.id_persona')
        ->join('materia as ma', 'ma.id_materia', '=', 'gr.id_materia')
        ->join('carrera as car', 'car.id_carrera', '=', 'gr.id_carrera')
        ->where('calificaciones.id_grupo', $id_grupo)
        ->get()
        ->first();

      $calificaciones=calificaciones::select('al.ncontrol', 'pe.nombres', 'pe.apaterno', 'pe.amaterno', 'opcion_calificacion', 'promedio_calificacion')
      ->join('alumno as al', 'calificaciones.ncontrol', '=', 'al.ncontrol')
      ->join('persona as pe', 'al.id_persona', '=', 'pe.id_persona')
      ->where('id_grupo', $id_grupo)
      ->get();

      $configuracion=configuracion::get()->first();

      $pdf = \PDF::loadView('coordinador.pdfF', compact('id_grupo','datos','calificaciones','configuracion'));
      $pdf->setPaper('letter');

      return $pdf->stream('Acta de calificaciones.pdf');
    }

    public function pdfAM_coordi(){
      $id_materia='DGD-1';

      $datos=materia::select('nombre_materia', 'periodo')
        ->join('grupo as gr', 'materia.id_materia', '=', 'gr.id_materia')
        ->where('gr.id_materia', $id_materia)
        ->get()
        ->first();

      $calificaciones=calificaciones::select('al.ncontrol', 'pe.nombres', 'pe.apaterno', 'pe.amaterno', 'car.nombre_carrera', 'gr.id_grupo', 'primer_parcial', 'faltas_primer', 'segundo_parcial', 'faltas_segundo', 'examen_final', 'faltas_tercer', 'total_faltas', 'promedio_calificacion')
      ->join('alumno as al', 'calificaciones.ncontrol', '=', 'al.ncontrol')
      ->join('persona as pe', 'al.id_persona', '=', 'pe.id_persona')
      ->join('grupo as gr', 'gr.id_grupo', '=', 'calificaciones.id_grupo')
      ->join('carrera as car', 'al.id_carrera', '=', 'car.id_carrera')
      ->where('gr.id_materia', $id_materia)
      ->where('opcion_calificacion', '1')
      ->get();

      $configuracion=configuracion::get()->first();

      $pdf = \PDF::loadView('coordinador.pdfAM', compact('id_materia','datos','calificaciones','configuracion'));
      $pdf->setPaper('letter', 'landscape');

      return $pdf->stream('Acta de calificaciones.pdf');
    }

    public function pdfBM_coordi(){
      $id_materia='1';
      $opcion="primera";
      $opc='2';

      $datos=materia::select('nombre_materia', 'periodo')
        ->join('grupo as gr', 'materia.id_materia', '=', 'gr.id_materia')
        ->where('gr.id_materia', $id_materia)
        ->get()
        ->first();

        $calificaciones=calificaciones::select('al.ncontrol', 'pe.nombres', 'pe.apaterno', 'pe.amaterno', 'car.nombre_carrera', 'gr.id_grupo', 'promedio_calificacion')
        ->join('alumno as al', 'calificaciones.ncontrol', '=', 'al.ncontrol')
        ->join('persona as pe', 'al.id_persona', '=', 'pe.id_persona')
        ->join('grupo as gr', 'gr.id_grupo', '=', 'calificaciones.id_grupo')
        ->join('carrera as car', 'al.id_carrera', '=', 'car.id_carrera')
        ->where('gr.id_materia', $id_materia)
        ->where('opcion_calificacion', $opc)
        ->get();

      $configuracion=configuracion::get()->first();

      $pdf = \PDF::loadView('coordinador.pdfBM', compact('id_materia','datos','calificaciones','configuracion', 'opcion'));
      $pdf->setPaper('letter');

      return $pdf->stream('Acta de calificaciones.pdf');
    }

    public function pdfFM_coordi(){
      $id_materia='1';

      $datos=materia::select('nombre_materia', 'periodo')
        ->join('grupo as gr', 'materia.id_materia', '=', 'gr.id_materia')
        ->where('gr.id_materia', $id_materia)
        ->get()
        ->first();

        $calificaciones=calificaciones::select('al.ncontrol', 'pe.nombres', 'pe.apaterno', 'pe.amaterno', 'car.nombre_carrera', 'gr.id_grupo', 'opcion_calificacion','promedio_calificacion')
        ->join('alumno as al', 'calificaciones.ncontrol', '=', 'al.ncontrol')
        ->join('persona as pe', 'al.id_persona', '=', 'pe.id_persona')
        ->join('grupo as gr', 'gr.id_grupo', '=', 'calificaciones.id_grupo')
        ->join('carrera as car', 'al.id_carrera', '=', 'car.id_carrera')
        ->where('gr.id_materia', $id_materia)
        ->get();

      $configuracion=configuracion::get()->first();

      $pdf = \PDF::loadView('coordinador.pdfFM', compact('id_materia','datos','calificaciones','configuracion'));
      $pdf->setPaper('letter', 'landscape');

      return $pdf->stream('Acta de calificaciones.pdf');
    }

    //PDF's ALUMNOS
    public function pdfA_al(){
      $ncontrol='1111';

      $datos=persona::select('nombres','apaterno','amaterno','semestre','nombre_carrera as carrera')
        ->join('alumno as a','persona.id_persona','=','a.id_persona')
        ->join('carrera as c','a.id_carrera','=','c.id_carrera')
        ->where('a.ncontrol',$ncontrol)->get()->first();

      $kardex=kardex::where('ncontrol',$ncontrol)->get();
      $calificaciones=array();
      foreach ($kardex as $key) {
        array_push($calificaciones,json_decode($key->obj_calificacion));
      }

      $configuracion=configuracion::get()->first();

      $pdf = \PDF::loadView('alumno.pdfA', compact('ncontrol','datos','calificaciones','configuracion'));
      $pdf->setPaper('letter','landscape');

      return $pdf->stream('Acta de calificaciones.pdf');
    }

    public function pdfB_al(){
      $ncontrol='1111';

      $datos=persona::select('nombres','apaterno','amaterno','semestre','nombre_carrera as carrera')
        ->join('alumno as a','persona.id_persona','=','a.id_persona')
        ->join('carrera as c','a.id_carrera','=','c.id_carrera')
        ->where('a.ncontrol',$ncontrol)->get()->first();

      $kardex=kardex::where('ncontrol',$ncontrol)->get();
      $calificaciones=array();
      foreach ($kardex as $key) {
        array_push($calificaciones,json_decode($key->obj_calificacion));
      }

      $configuracion=configuracion::get()->first();

      $pdf = \PDF::loadView('alumno.pdfB', compact('ncontrol','datos','calificaciones','configuracion'));
      $pdf->setPaper('letter');

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
      return view('alumno.boletas',compact(['ncontrol','datos','calificaciones','configuracion'])); } }
