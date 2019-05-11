<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;
use App\Models\alumno;

class AlumnosController extends Controller
{
    public function lista () {
      $personas = persona::select('persona.id_persona','nombres','apaterno','amaterno','fnaci','email','ncontrol','alumno.activo as activo')
        ->join('alumno','persona.id_persona','=','alumno.id_persona')->get();
      $cambio=-1;
        return view('admin.listas.alumnos',compact(['personas','cambio']));
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
        return view('admin.asignar',compact('personas','idc','idg'))
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
        return view('admin.listas.alumnos',compact(['personas','cambio']));
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
}
