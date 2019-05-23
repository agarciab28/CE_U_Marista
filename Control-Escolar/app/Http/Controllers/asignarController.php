<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\grupo;
use App\Models\lista_grupo;
use App\Models\calificaciones;

class asignarController extends Controller
{
    public function guardar (Request $request) {
      try {
        $var=0;
        $var2=0;
        foreach ($request->alumnos as $alumnos){
           $datos=preg_split("/[\s,]+/",$request->alumnos[$var]);
           $lista = new lista_grupo();
            $lista->ncontrol=$datos[0];
            $lista->nombres=$datos[1];
            $lista->id_grupo=$datos[2];
            $var2++;
            $lista->save();
            $calificaciones= new calificaciones();
            $calificaciones->ncontrol=$datos[0];
            $calificaciones->id_grupo=$datos[2];
            $calificaciones->save();

            $var++;
        }
          } catch (\Exception $e) {
            if($var2==0){
              $message = "Debes seleccionar al menos 1 alumno";
            }
            else{
              $message="Ya registraste ese o esos alumnos";
            }
            echo "<script type='text/javascript'>alert('$message');</script>";
            return view('admin.home');
          }
          $message = "Registro exitoso";
          echo "<script type='text/javascript'>alert('$message');</script>";
          return view('admin.home');
    }



}
