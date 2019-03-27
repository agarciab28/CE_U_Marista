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
      $carrera->nombre_carrera="Sistemas Computacionales";
      $carrera->rvoe="1999";
      $carrera->total_creditos="200";
      $carrera->fecha="2010-12-12";
      $carrera->save();


      $carrera = new carrera();
      $carrera->id_carrera="anim";
      $carrera->nombre_carrera="Animacion Digital";
      $carrera->rvoe="2001";
      $carrera->total_creditos="200";
      $carrera->fecha="2010-06-01";
      $carrera->save();

      $carrera = new carrera();
      $carrera->id_carrera="arq";
      $carrera->nombre_carrera="Arquitectura";
      $carrera->rvoe="2002";
      $carrera->total_creditos="200";
      $carrera->fecha="2010-06-01";
      $carrera->save();


      $carrera = new carrera();
      $carrera->id_carrera="der";
      $carrera->nombre_carrera="Derecho";
      $carrera->rvoe="2003";
      $carrera->total_creditos="200";
      $carrera->fecha="2010-06-01";
      $carrera->save();


      $carrera = new carrera();
      $carrera->id_carrera="fis";
      $carrera->nombre_carrera="Fisioterapia y Rehabilitacion";
      $carrera->rvoe="2004";
      $carrera->total_creditos="200";
      $carrera->fecha="2010-06-01";
      $carrera->save();


      $carrera = new carrera();
      $carrera->id_carrera="for";
      $carrera->nombre_carrera="Formacion catequetica";
      $carrera->rvoe="2005";
      $carrera->total_creditos="200";
      $carrera->fecha="2010-06-01";
      $carrera->save();


      $carrera = new carrera();
      $carrera->id_carrera="ind";
      $carrera->nombre_carrera="Industrial y sistemas";
      $carrera->rvoe="2000";
      $carrera->total_creditos="200";
      $carrera->fecha="2010-06-01";
      $carrera->save();

      $carrera = new carrera();
      $carrera->id_carrera="mer";
      $carrera->nombre_carrera="Mercadotecnia y publicidad";
      $carrera->rvoe="2006";
      $carrera->total_creditos="200";
      $carrera->fecha="2010-06-01";
      $carrera->save();

      $carrera = new carrera();
      $carrera->id_carrera="neg";
      $carrera->nombre_carrera="Negocios Internacionales";
      $carrera->rvoe="2007";
      $carrera->total_creditos="200";
      $carrera->fecha="2010-06-01";
      $carrera->save();

      $carrera = new carrera();
      $carrera->id_carrera="adm";
      $carrera->nombre_carrera="Administracion";
      $carrera->rvoe="2008";
      $carrera->total_creditos="200";
      $carrera->fecha="2010-06-01";
      $carrera->save();

    }
}
