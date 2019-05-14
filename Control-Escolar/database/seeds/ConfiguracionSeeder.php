<?php

use Illuminate\Database\Seeder;
use App\Models\configuracion;

class ConfiguracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('set foreign_key_checks = 0;');
      DB::table('configuracion')->truncate();
      DB::statement('set foreign_key_checks = 1;');

      $configuracion= new configuracion();
      $configuracion->periodo_actual='Agosto-Diciembre 2019';
      $configuracion->director='Paulino Rivas';
      $configuracion->fecha_inicio='2019-06-01';
      $configuracion->fecha_terminacion='2019-12-12';
      $configuracion->jefe_control_escolar='Alejandro García Barajas';
      $configuracion->save();
    }
}
