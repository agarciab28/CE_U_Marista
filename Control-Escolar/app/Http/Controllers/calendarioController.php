<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\evento;
use App\Models\configuracion;
use App\Models\kardex;
use App\Models\calificaciones;
use App\Models\alumno;
use DB;

class calendarioController extends Controller
{
    public function eventos(){
      $eventos = evento::select("id_evento","titulo as title","fecha_inicio as start","fecha_final as end","color")
      ->get()->toArray();
      return response()->json($eventos);
    }
    public function registra_evento(Request $request){
      $evento= new evento();
      $evento->titulo=$request->nombre;
      $evento->fecha_inicio=$request->inicio;
      $evento->fecha_final=$request->fin;
      $evento->color=$request->color;
      $evento->save();

      $configuracion = configuracion::get()->first();
      return view('admin.calendario',compact('configuracion'));
    }

    public function showCalendario(){
      $configuracion = configuracion::get()->first();
      return view('admin.calendario',compact('configuracion'));
    }
    public function modificaConfiguracion(Request $request){
      $seleccion=configuracion::get()->first();
      DB::table('configuracion')->update(['periodo_actual'=>$request->periodo_actual,
        'director'=>$request->director,
        'fecha_inicio'=>$request->finicio,
        'fecha_terminacion'=>$request->fterm,
        'Jefe_control_escolar'=>$request->jefe_control
        ]);
        return redirect()->route('admin_calendario');
    }
    public function aKardex(){
      $calificaciones=calificaciones::select('calificaciones.ncontrol as ncontrol','g.id_materia as id_materia','a.semestre as semestre','nombre_materia','primer_parcial','segundo_parcial','examen_final','promedio_calificacion','total_faltas','opcion_calificacion')
        ->join('grupo as g','g.id_grupo','=','calificaciones.id_grupo')
        ->join('materia as m','g.id_materia','=','m.id_materia')
        ->join('alumno as a','a.ncontrol','=','calificaciones.ncontrol')
        ->get();
        $alumnos=alumno::all();
        $periodo=configuracion::get()->first();

      //dd($calificaciones);
      DB::transaction(function ()  use ($calificaciones,$alumnos,$periodo){
        foreach ($calificaciones as $calificacion) {
          /*dd(json_encode(['id_materia'=>$calificacion->id_materia,
            'semestre'=>$calificacion->semestre,
            'nombre_materia'=>$calificacion->nombre_materia,
            'primer_parcial'=>$calificacion->primer_parcial,
            'segundo_parcial'=>$calificacion->segundo_parcial,
            'examen_final'=>$calificacion->examen_final,
            'total_faltas'=>$calificacion->total_faltas,
            'promedio_calificacion'=>$calificacion->promedio_calificacion,
            'opcion_calificacion'=>$calificacion->opcion_calificacion
          ]));*/
          $kardex= new kardex();
          $kardex->ncontrol=$calificacion->ncontrol;
          $kardex->obj_calificacion=json_encode(['id_materia'=>$calificacion->id_materia,
            'semestre'=>$calificacion->semestre,
            'nombre_materia'=>$calificacion->nombre_materia,
            'primer_parcial'=>$calificacion->primer_parcial,
            'segundo_parcial'=>$calificacion->segundo_parcial,
            'examen_final'=>$calificacion->examen_final,
            'total_faltas'=>$calificacion->total_faltas,
            'promedio_calificacion'=>$calificacion->promedio_calificacion,
            'opcion_calificacion'=>$calificacion->opcion_calificacion
          ]);
          $kardex->periodo=$periodo->periodo_actual;
          $kardex->save();
        }

        DB::statement('set foreign_key_checks = 0;');
        DB::table('calificaciones')->truncate();
        DB::table('grupo')->truncate();
        DB::table('lista_grupo')->truncate();
        DB::statement('set foreign_key_checks = 1;');

        foreach ($alumnos as $alumno ) {
          alumno::where('ncontrol',$alumno->ncontrol)->update(['semestre'=>$alumno->semestre+1]);
        }


      });
      return redirect()->route('admin_home');
    }
}
