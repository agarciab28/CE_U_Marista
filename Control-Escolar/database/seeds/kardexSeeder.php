<?php

use Illuminate\Database\Seeder;
use App\Models\kardex;

class kardexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('set foreign_key_checks = 0;');
      DB::table('kardex')->truncate();
      DB::statement('set foreign_key_checks = 1;');

      $kardex= new kardex();
      $kardex->ncontrol='1111';
      $kardex->obj_calificacion='
      {
      	"id_materia":"1",
        "semestre":"1",
        "nombre_materia":"Calculo diferencial",
        "primer_parcial":"10",
        "segundo_parcial":"9",
        "examen_final":"6",
        "total_faltas":"2",
        "promedio_calificacion":"8",
        "opcion_calificacion":"0"
      }
      ';
      $kardex->periodo='agosto-diciembre 2019';
      $kardex->save();

      $kardex= new kardex();
      $kardex->ncontrol='1111';
      $kardex->obj_calificacion='
      {
        "id_materia":"DGD-1",
        "semestre":"1",
        "nombre_materia":"Dibujo y Geometria Descriptiva",
        "primer_parcial":"10",
        "segundo_parcial":"7",
        "examen_final":"6",
        "total_faltas":"2",
        "promedio_calificacion":"8",
        "opcion_calificacion":"0"
      }
      ';
      $kardex->periodo='agosto-diciembre 2019';
      $kardex->save();

    }
}
