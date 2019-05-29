<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;
use App\Models\kardex;
use App\Models\alumno;
use App\Models\carrera;
use App\Models\lista_grupo;
use App\Models\coordinador;
use App\Models\plan_de_estudios;
use App\Models\calificaciones;
use App\Models\configuracion;
use App\Models\grupo;
use Illuminate\Support\Facades\Storage;

class AlumnosController extends Controller
{
    public function lista () {
      $personas = persona::select('persona.id_persona','nombres','apaterno','carrera.nombre_carrera as ncarrera','amaterno','fnaci','email','ncontrol','rol','alumno.activo as activo','curp')
        ->join('alumno','persona.id_persona','=','alumno.id_persona')
        ->join('carrera','alumno.id_carrera','=','carrera.id_carrera')
        ->get();
        $planes= plan_de_estudios::select('id_plan','id_carrera','nombre_plan')->get();
        $carreras= carrera::get(['id_carrera','nombre_carrera']);
        $cambio=-1;
        $modif=false;
        return view('admin.listas.alumnos',compact(['personas','cambio','planes','carreras','modif']));
    }
    public function listacoord() {
      $carrera=coordinador::select('id_carrera')->where('username',session('username'))->get()->first();
      $personas=alumno::select('nombres','apaterno','amaterno','fnaci','alumno.ncontrol as ncontrol')
      ->join('persona as p','p.id_persona','=','alumno.id_persona')
      ->where('id_carrera',$carrera->id_carrera)
      ->get();
      return view('coordinador.alumnos',compact(['personas']));
    }

    public function liat_modificar ($ida) {
      $personas = persona::select('persona.id_persona','nombres','imagen','apaterno','amaterno','fnaci','email','ncontrol','rol','alumno.activo as activo','curp','sexo',
      'nombre_carrera','semestre','nombre_plan','id_plan','carrera.id_carrera as id_carrera')
        ->join('alumno','persona.id_persona','=','alumno.id_persona')
        ->join('carrera','alumno.id_carrera','=','carrera.id_carrera')
        ->join('plan_de_estudios','carrera.id_carrera','=','plan_de_estudios.id_carrera')
        ->where("persona.id_persona",$ida)
        ->get();

        $imagen=$personas[0]->imagen;
        $url=storage::url($imagen);
        $planes= plan_de_estudios::select('id_plan','id_carrera','nombre_plan')->get();
        $carreras= carrera::get(['id_carrera','nombre_carrera']);
        return view('admin.modificar.usuarios',compact(['personas','planes','carreras','url']));
    }

    public function modificar_alu ($ida,Request $req) {
try {

      $alumno_persona = [
       'nombres' => $req->get('nombres'),
       'apaterno' => $req->get('apaterno'),
       'amaterno' => $req->get('amaterno'),
       'fnaci' => $req->get('fnaci'),
       'sexo' => $req->get('sexo'),
       'email' => $req->get('email'),
       'curp' => $req->get('curp')
      ];

      $alumno_alumno = [
        'ncontrol' => $req->get('ncontrol'),
        'password' => hash_hmac('sha256', $req->get('pass'), env('HASH_KEY')),
        'semestre' => $req->get('semestre'),
        'id_carrera' => $req->get('id_carrera'),
        'plan_de_estudios' => $req->get('plan_de_estudios')
      ];

        persona::where("id_persona",$ida)->update($alumno_persona);
        alumno::where("id_persona",$ida)->update($alumno_alumno);

        $modif = true;

      }  catch (\Exception $e) {
        $modif = false;
       }

      $personas = persona::select('persona.id_persona','nombres','apaterno','amaterno','fnaci','email','ncontrol','rol','alumno.activo as activo','curp')
        ->join('alumno','persona.id_persona','=','alumno.id_persona')
        ->get();
        $planes= plan_de_estudios::select('id_plan','id_carrera','nombre_plan')->get();
        $carreras= carrera::get(['id_carrera','nombre_carrera']);
        $cambio=-1;
        return view('admin.listas.alumnos',compact(['personas','cambio','planes','carreras','modif']));
    }


    public function lista_as ($idg,$idc,Request $request) {
      //idg
      //idc
        $semestre = $request->get('semestre');
        if($semestre==null){
        $semestre = 1;
        }

      $personas = persona::select('persona.id_persona','nombres','apaterno','amaterno','fnaci','email','ncontrol')
        ->join('alumno','persona.id_persona','=','alumno.id_persona')
        ->where('id_carrera',$idc)
      //  ->semestre($semestre)
        ->where('semestre',$semestre)
        ->get();
        $carrera=carrera::select('nombre_carrera')
        ->where('id_carrera',$idc)->value('nombre_carrera');
        return view('admin.asignar',compact('personas','idc','idg','carrera'))
        ->withInput(request(['semestre']));
    }
    public function eliminar(Request $request){
      $alumno=alumno::select('activo')->where('ncontrol',$request->ncontrol)->first();
      if($alumno->activo>0){
        alumno::where('ncontrol',$request->ncontrol)->update(['activo'=>0]);
      }else{
        alumno::where('ncontrol',$request->ncontrol)->update(['activo'=>1]);

      }
      $personas = persona::select('persona.id_persona','nombres','apaterno','amaterno','fnaci','email','ncontrol','alumno.activo as activo')
        ->join('alumno','persona.id_persona','=','alumno.id_persona')->get();
      $cambio=1;
      $modif=false;
        return view('admin.listas.alumnos',compact(['personas','cambio','modif']));
    }

    public function modificar_alumno(Request $request, $id){
      //metodo para actualizar registros
  try{
        $usuario = Usuario::find($id);
  $usuario_n = [
    'nombre' => $request->get('nombre'),
    'apellidoP' => $request->get('apellidoP'),
    'apellidoM' => $request->get('apellidoM'),
    'correoElectronico' => $request->get('correoElectronico'),
    'nombreDeUsuario' => $request->get('nombreDeUsuario'),
    'password' => bcrypt($request->get('password')),
    'cedulaProfesional' => $request->get('cedulaProfesional'),
    'cedulaMoE' => $request->get('cedulaMoE'),
    'telefono' => $request->get('telefono'),
    'curp' => $request->get('curp')
    ];
  //dd($usuario_n);
  //dd($request->except('_token'));
  $usuario->update($usuario_n);
}catch(\Exception $e){
    $message="Algo salio mal al actualizar";
    echo "<script type='text/javascript'>alert('$message');</script>";
    return redirect()->route('listu');

}
$message="Actualizacion de datos exitosa";
echo "<script type='text/javascript'>alert('$message');</script>";
    return redirect()->route('listu');


    }

    public function actualizaCalificacion(Request $request){
      //dd([$request]);
      calificaciones::where('ncontrol',$request->ncontrol)
        ->update(['primer_parcial'=>$request->cal1,
        'segundo_parcial'=>$request->cal2,
        'examen_final'=>$request->examen,
        'total_faltas'=>$request->faltas,
        ]);
      $alumnos=lista_grupo::select('p.nombres as nombres','p.apaterno as apaterno','p.amaterno as amaterno','c.primer_parcial as primero','c.segundo_parcial as segundo','c.examen_final as examen','c.total_faltas as faltas','a.ncontrol as ncontrol','g.id_grupo as grupo','a.ncontrol as ncontrol')
       ->join('alumno as a','a.ncontrol','=','lista_grupo.ncontrol')
       ->join('persona as p','p.id_persona','=','a.id_persona')
       ->join('grupo as g','g.id_grupo','=','lista_grupo.id_grupo')
       ->join('profesor as pr','pr.id_prof','=','g.id_prof')
       ->join('personal as pe','pe.username','pr.username')
       ->join('calificaciones as c','c.ncontrol','=','a.ncontrol')
       ->where('pe.username',session('username'))
       ->where('g.id_grupo',$request->grupo)
       ->get();
      return view('docente.opciones.alumnos',compact(['alumnos']));


    }
    public function actualizaFinal(Request $request){
    //  dd($request->grupo);
      if($request->calif<=10 && $request->calif>=0){
        $gp = grupo::where('id_grupo',$request->grupo)->first();
  if ($gp) {
    echo "string";
  }
        calificaciones::where('ncontrol',$request->ncontrol)
          ->update(['promedio_calificacion'=>$request->calif]);
      }
      $alumnos=lista_grupo::select('p.nombres as nombres','p.apaterno as apaterno','p.amaterno as amaterno','c.primer_parcial as primero','c.segundo_parcial as segundo','c.examen_final as examen','c.total_faltas as faltas','c.promedio_calificacion as final','a.ncontrol as ncontrol','g.id_grupo as grupo')
       ->join('alumno as a','a.ncontrol','=','lista_grupo.ncontrol')
       ->join('persona as p','p.id_persona','=','a.id_persona')
       ->join('grupo as g','g.id_grupo','=','lista_grupo.id_grupo')
        ->join('calificaciones as c','c.ncontrol','=','a.ncontrol')
        ->where('g.id_grupo',$request->grupo)->get();
      $sugerencias=array();
      foreach ($alumnos as $alumno) {
        $promedio=($alumno->primero*30/100)+($alumno->segundo*30/100)+($alumno->examen*40/100);
        $final=$promedio;
        if($alumno->final!=0){
          $final=$alumno->final;
        }
        array_push($sugerencias,['alumno'=>$alumno->nombres.' '.$alumno->apaterno.' '.$alumno->amaterno,
          'ncontrol'=>$alumno->ncontrol,
          'sug'=>$promedio,
          'final'=>$final,
          'grupo'=>$alumno->grupo
        ]);
    }
    return view('docente.opciones.calif_finales',compact('sugerencias','grupo'));
  }
  public function kardexAlumno(){

    $semestres=kardex::select('periodo')->where('ncontrol',session('ncontrol'))->groupBy('periodo')->get();
    //dd($semestres);
    $kardex=array();
    foreach ($semestres as $semestre) {
      array_push($kardex,kardex::where('ncontrol',session('ncontrol'))->where('periodo',$semestre->periodo)->get());
    }
    //dd($kardex);
    $calificaciones=array();
    //dd($semestres);
    foreach ($kardex as $semestress) {
      foreach ($semestress as $semestre) {
        array_push($calificaciones,['calificaciones'=>json_decode($semestre->obj_calificacion),'periodo'=>$semestre->periodo]);
      }


    }
    //$calificaciones=json_decode($json->obj_calificacionn,true);

    $datos=alumno::select('nombres','apaterno','amaterno','ncontrol')
      ->join('persona as p','p.id_persona','=','alumno.id_persona')
      ->where('alumno.ncontrol',session('ncontrol'))
      ->get()->first();
      //dd($datos);
      /*$calificaciones=array();
      foreach ($calificacioness as $calif) {
        array_push($calificaciones,json_decode($calif));
      }*/
      //dd($calificaciones);
      $configuracion=configuracion::get()->first();
      //dd([$datos,$calificaciones,$configuracion,$semestres]);
    return view('alumno.kardex',compact(['datos','calificaciones','configuracion','semestres']));
  }
}
