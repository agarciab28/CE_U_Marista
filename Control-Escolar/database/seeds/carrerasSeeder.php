<?php

use Illuminate\Database\Seeder;
use \App\Models\carrera;

class carrerasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('set foreign_key_checks = 0;');
      DB::table('carrera')->truncate();
      DB::statement('set foreign_key_checks = 1;');

      $carrera = new carrera();
      $carrera->id_carrera="isc";
      $carrera->nombre_carrera="sistemas computacionales";
      $carrera->rvoe="sistemillas";
      $carrera->total_creditos="55";
      $carrera->fecha="2010-12-12";
      $carrera->save();

    }
}
