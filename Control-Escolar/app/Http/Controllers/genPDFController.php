<?php
  namespace App\Http\Controllers;
  use Dompdf\Dompdf;
  use App\Models\kardex;
  use App\Models\persona;
  use App\Models\materia;
  use App\Models\calificaciones;
  use App\Models\configuracion;
  use App\Models\alumno;
  use Illuminate\Http\Request;
  //require '../vendor/autoload.php';
  //require '../config/database.php';

  class genPDFController extends Controller
  {
    public function kardexAlumno($ncontrol){

    $semestres = kardex::select('periodo')->where('ncontrol', session('ncontrol'))->groupBy('periodo')->get();
    //dd($semestres);
    $kardex = array();
    foreach ($semestres as $semestre) {
      array_push($kardex, kardex::where('ncontrol', $ncontrol)->where('periodo', $semestre->periodo)->get());
    }
    //dd($kardex);
    $calificaciones = array();
    //dd($semestres);
    $promedio = 0;
    $contador = 0;
    foreach ($kardex as $semestress) {
      foreach ($semestress as $semestre) {
        $aux = json_decode($semestre['obj_calificacion']);
        $aux2 = $aux->promedio_calificacion;
        $promedio += $aux2;
        $contador++;

        array_push($calificaciones, ['calificaciones' => json_decode($semestre->obj_calificacion), 'periodo' => $semestre->periodo, 'pr' => $aux2]);
      }
      $promedio = $promedio / $contador;
    }
    //dd( $calificaciones);
    //$calificaciones=json_decode($json->obj_calificacionn,true);

    $datos = alumno::select('nombres', 'apaterno', 'amaterno', 'ncontrol', 'nombre_carrera')
      ->join('persona as p', 'p.id_persona', '=', 'alumno.id_persona')
      ->join('carrera as c', 'c.id_carrera', '=', 'alumno.id_carrera')
      ->where('alumno.ncontrol', $ncontrol)
      ->get()->first();
    //dd($datos);
    /*$calificaciones=array();
      foreach ($calificacioness as $calif) {
        array_push($calificaciones,json_decode($calif));
      }*/
    //dd($calificaciones);
    $configuracion = configuracion::get()->first();
    //dd([$datos,$calificaciones,$configuracion,$semestres]);
    $califfin = array();
    foreach ($calificaciones as $calificacion) {
      //dd($calificacion['calificaciones']->promedio_calificacion);
      array_push($califfin, $calificacion['calificaciones']->promedio_calificacion);
    }
    //dd($califfin);




      $pdf = \PDF::loadView('admin.kardex', compact(['datos', 'calificaciones', 'configuracion', 'semestres', 'califfin', 'promedio']));
      $pdf->setPaper('letter', 'landscape');

      return $pdf->stream('Acta de calificaciones.pdf');
    }


    //PDF's DOCENTES
    public function pdfA_docente($grupo){
      $id_grupo=$grupo;

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
      ->get();

      $configuracion=configuracion::get()->first();

      $promedio1=calificaciones::where('id_grupo', $id_grupo)
      ->avg('primer_parcial');

      $promedio2=calificaciones::where('id_grupo', $id_grupo)
      ->avg('segundo_parcial');

      $promedio3=calificaciones::where('id_grupo', $id_grupo)
      ->avg('examen_final');

      $promfaltas=calificaciones::where('id_grupo', $id_grupo)
      ->avg('total_faltas');

      $promfinal=calificaciones::where('id_grupo', $id_grupo)
      ->avg('promedio_calificacion');

      $pdf = \PDF::loadView('docente.pdfA', compact('id_grupo','datos','calificaciones','configuracion', 'promedio1','promedio2','promedio3','promfaltas','promfinal'));
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

    public function pdfC_docente(Request $request){

      $id_grupo=$request->id_grupo;

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
      ->where('promedio_calificacion','<','6')
      ->get();

      $configuracion=configuracion::get()->first();

      $pdf = \PDF::loadView('docente.pdfC', compact('id_grupo','datos','calificaciones','configuracion'));
      $pdf->setPaper('letter');

      return $pdf->stream('Lista de alumnos no aprobados.pdf');
    }

    public function pdfD_docente(){
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

      $calificaciones=calificaciones::select('calificaciones.ncontrol', 'nombres', 'apaterno', 'amaterno')
      ->join('alumno as al', 'calificaciones.ncontrol', '=', 'al.ncontrol')
      ->join('persona as pe', 'al.id_persona', '=', 'pe.id_persona')
      ->where('id_grupo', $id_grupo)
      ->get();

      $configuracion=configuracion::get()->first();

      $pdf = \PDF::loadView('docente.pdfD', compact('id_grupo','datos','calificaciones','configuracion', 'opcion'));
      $pdf->setPaper('letter');

      return $pdf->stream('Lista de alumnos.pdf');
    }

    public function pdfF_docente($grupo){
      $id_grupo=$grupo;

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

      $promedio=calificaciones::where('id_grupo', $id_grupo)
      ->avg('promedio_calificacion');


      $configuracion=configuracion::get()->first();

      $pdf = \PDF::loadView('docente.pdfF', compact('id_grupo','datos','calificaciones','configuracion', 'promedio'));
      $pdf->setPaper('letter');

      return $pdf->stream('Acta de calificaciones.pdf');
    }

    //PDF'S COORDINADOR
    public function pdfA_coordi(Request $request){

      $id_grupo=$request['id_grupo'];

      $datos=calificaciones::select('gr.id_grupo as id_grupo', 'gr.seccion', 'gr.periodo', 'nombres', 'apaterno', 'amaterno', 'car.nombre_carrera', 'ma.nombre_materia')
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
      ->where('opcion_calificacion', '0')
      ->get();

      $promprimer=calificaciones::where('id_grupo', $id_grupo)
      ->avg('primer_parcial');

      $promseg=calificaciones::where('id_grupo', $id_grupo)
      ->avg('segundo_parcial');

      $promex=calificaciones::where('id_grupo', $id_grupo)
      ->avg('examen_final');

      $promfaltas=calificaciones::where('id_grupo', $id_grupo)
      ->avg('total_faltas');

      $promfinal=calificaciones::where('id_grupo', $id_grupo)
      ->avg('promedio_calificacion');


      $configuracion=configuracion::get()->first();
      $contador=1;

      $pdf = \PDF::loadView('coordinador.pdfA', compact('id_grupo','datos','calificaciones','configuracion','contador','promprimer','promseg','promex','promfaltas','promfinal'));
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

    public function pdfF_coordi(Request $request){
      $id_grupo=$request['id_grupo'];

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

      $promfin=calificaciones::where('id_grupo', $id_grupo)
      ->avg('promedio_calificacion');




      $configuracion=configuracion::get()->first();
      $contador=1;

      $pdf = \PDF::loadView('coordinador.pdfF', compact('id_grupo','datos','calificaciones','configuracion','contador','promfin'));
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

    public function pdfB_k(){
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

    public function pdfF_admin($grupo){

      $id_grupo=$grupo;

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

        if($datos==null){
           return redirect()->route('admin_lgrupos');

        }

      $calificaciones=calificaciones::select('al.ncontrol', 'pe.nombres', 'pe.apaterno', 'pe.amaterno', 'opcion_calificacion', 'promedio_calificacion')
      ->join('alumno as al', 'calificaciones.ncontrol', '=', 'al.ncontrol')
      ->join('persona as pe', 'al.id_persona', '=', 'pe.id_persona')
      ->where('id_grupo', $id_grupo)
      ->get();

      $promfin=calificaciones::where('id_grupo', $id_grupo)
      ->avg('promedio_calificacion');

      $configuracion=configuracion::get()->first();
      $contador=1;

      $pdf = \PDF::loadView('coordinador.pdfF', compact('id_grupo','datos','calificaciones','configuracion','contador','promfin'));
      $pdf->setPaper('letter');

      return $pdf->stream('Acta de calificaciones.pdf');
    }
    public function showBoleta(){
      //aquí se va a obtener el ncontrol de la variable de sesión $ncontrol=session('ncontrol');
      //en lo mientras el ejemplo va a ser con el men con ncontrol 1111 que está en los seeders
      $ncontrol=session('ncontrol');
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
