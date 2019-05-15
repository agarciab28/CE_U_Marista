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
      	"semestre": "1",
      	"calificaciones": {
      		"1": "10",
      		"IC-1": "8",
      		"PEET-1": "6"
      	},
      	"intentos": {
      		"1": "0",
      		"IC-1": "1",
      		"PEET-1": "0"
      	}
      }
      ';
      $kardex->periodo='agosto-diciembre 2019'
      $kardex->save();

      $kardex= new kardex();
      $kardex->ncontrol='1111';
      $kardex->obj_calificacion='
      {
      	"semestre": "2",
      	"calificaciones": {
      		"II-1": "10",
      		"TID-1": "8",
      		"QMC-1": "6"
      	},
      	"intentos": {
      		"II-1": "0",
      		"TID-1": "0",
      		"QMC-1": "0"
      	},
      }
      ';
      $kardex->periodo='agosto-diciembre 2019'
      $kardex->save();

    }
}
