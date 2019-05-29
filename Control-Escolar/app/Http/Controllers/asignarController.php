<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\grupo;
use App\Models\lista_grupo;
use App\Models\calificaciones;

class asignarController extends Controller
{
    public function guardar (Request $request) {

        $var=0;
        $var2=0;
        foreach ($request->alumnos as $alumnos){
          $datos=preg_split("/[\s,]+/",$request->alumnos[$var]);
          $existe=lista_grupo::select()->where(['ncontrol'=>$datos[0],'id_grupo'=>$datos[2]])->get()->first();
          if($existe['ncontrol']==null){
          $lista = new lista_grupo();
          $lista->ncontrol=$datos[0];
          $lista->nombres=$datos[1];
          $lista->id_grupo=$datos[2];
          $lista->save();
          $calificaciones= new calificaciones();
          $calificaciones->ncontrol=$datos[0];
          $calificaciones->id_grupo=$datos[2];
          $calificaciones->save();
          $message = "Registro exitoso";
          }
          else{
            $message="Registro no exitoso";
            break;
          }
        }

          echo "<script type='text/javascript'>alert('$message');</script>";
          return view('admin.home');
    }



}
