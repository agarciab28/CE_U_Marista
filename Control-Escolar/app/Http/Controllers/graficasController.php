<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class graficasController extends Controller
{
    public function alumnosCarrera(){
      $alumnos=DB::select('select count(*) as cantidad , nombre_carrera from alumno as a inner join carrera as c on a.id_carrera=c.id_carrera group by nombre_carrera');
        dd($alumnos);
    }
    public function show(){
      $alumnos=DB::select('select count(*) as cantidad , nombre_carrera from alumno as a inner join carrera as c on a.id_carrera=c.id_carrera group by nombre_carrera');
       return view('admin.estadisticas',compact(['alumnos']));
    }
}
