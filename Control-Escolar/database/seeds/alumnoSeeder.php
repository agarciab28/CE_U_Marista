<?php

use Illuminate\Database\Seeder;
use \App\Models\alumno;

class alumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('set foreign_key_checks = 0;');
      DB::table('alumno')->truncate();
      DB::statement('set foreign_key_checks = 1;');

      $alumno= new alumno();
      $alumno->ncontrol='1111';
      $alumno->id_carrera="isc";
      $alumno->num_tel_fam="3212342";
      $alumno->plan_de_estudios="Plan generico";
      $alumno->nombre_fam="Rebecca Gómez";
      $alumno->id_persona="1";
      $alumno->semestre="2";
      $alumno->password=hash_hmac('sha256', "secret", env('HASH_KEY'));
      $alumno->save();
    }
}
