<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\personal;
use App\Models\persona;

class adminController extends Controller
{
    public function showDatos(){
      $datos=personal::join('persona as p','personal.id_persona','=','p.id_persona')
      ->where('username',session('username'))
      ->get()->first();
      //dd($datos);
      return view('admin.misdatos',compact('datos'));
    }

    public function editar(Request $request){
      $seleccion=persona::select('p.id_persona as persona','username')->join('personal as p','p.id_persona','=','persona.id_persona')->get()->first();
      //dd($request);
      persona::where('id_persona',$seleccion->persona)->update([
        'sexo'=>$request->sexo,
        'fnaci'=>$request->fnaci,
        'curp'=>$request->curp,
        'num_tel'=>$request->tel,
        'num_cel'=>$request->cel,
        'estado'=>$request->estado,
        'ciudad'=>$request->ciudad,
        'colonia'=>$request->colonia,
        'codigo_postal'=>$request->postal,
        'email'=>$request->email
      ]);
      personal::where('id_persona',$seleccion->id_persona)->update([
        'username'=>$request->user,
        'nssoc'=>$request->nssocp,
        'ced_fiscal'=>$request->cedulap
      ]);
      return redirect()->route('mis_datos');

    }
    public function descarga(){
      return response()->download(public_path('Alumno.csv'));
    }

    public function sube(Request $request){
      Storage::put('files', $request->file('file'), 'public');
       return redirect()->route('admin_home');

    }

}
