<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class graficasController extends Controller
{
    public function alumnosCarrera(){
      $alumnos=DB::select('select count(*) as cantidad , nombre_carrera from alumno as a inner join carrera as c on a.id_carrera=c.id_carrera group by nombre_carrera');
      $sexo=DB::select('select count(*) as cantidad , sexo from persona as p inner join alumno as a on p.id_persona=a.id_persona group by sexo');
      dd([$alumnos,$sexo]);
    }
    public function show(){
      $alumnos=DB::select('select count(*) as cantidad , c.id_carrera as id, c.nombre_carrera as carrera from alumno as a inner join carrera as c on a.id_carrera=c.id_carrera group by c.id_carrera,c.nombre_carrera');
      $sexos=DB::select('select count(*) as cantidad , sexo from persona as p inner join alumno as a on p.id_persona=a.id_persona group by sexo');
       return view('admin.estadisticas',compact(['alumnos','sexos']));
    }
}
