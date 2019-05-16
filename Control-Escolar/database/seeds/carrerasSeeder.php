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
      $carrera->nombre_carrera="Licenciatura en Animación Digital Video juegos";
      $carrera->rvoe="20130269";
      $carrera->total_creditos="200";
      $carrera->fecha="2010-06-01";
      $carrera->save();

      $carrera = new carrera();
      $carrera->id_carrera="arq";
      $carrera->nombre_carrera="Licenciatura en Arquitectura";
      $carrera->rvoe="20130270";
      $carrera->total_creditos="200";
      $carrera->fecha="2010-06-01";
      $carrera->save();


      $carrera = new carrera();
      $carrera->id_carrera="der";
      $carrera->nombre_carrera="Licenciatura en Derecho";
      $carrera->rvoe="20130271";
      $carrera->total_creditos="200";
      $carrera->fecha="2010-06-01";
      $carrera->save();


      $carrera = new carrera();
      $carrera->id_carrera="fis";
      $carrera->nombre_carrera="Licenciatura en Fisioterapia y Rehabilitacion";
      $carrera->rvoe="20122400";
      $carrera->total_creditos="200";
      $carrera->fecha="2010-06-01";
      $carrera->save();


      $carrera = new carrera();
      $carrera->id_carrera="for";
      $carrera->nombre_carrera="Licenciatura en Formacion Catequetica";
      $carrera->rvoe="20121315";
      $carrera->total_creditos="200";
      $carrera->fecha="2010-06-01";
      $carrera->save();


      $carrera = new carrera();
      $carrera->id_carrera="ind";
      $carrera->nombre_carrera="Ingenieria Industrial y en Sistemas Organizacionales";
      $carrera->rvoe="20130272";
      $carrera->total_creditos="200";
      $carrera->fecha="2010-06-01";
      $carrera->save();

      $carrera = new carrera();
      $carrera->id_carrera="mer";
      $carrera->nombre_carrera="Licenciatura en Mercadotecnia y Publicidad";
      $carrera->rvoe="20130270";
      $carrera->total_creditos="200";
      $carrera->fecha="2010-06-01";
      $carrera->save();

      $carrera = new carrera();
      $carrera->id_carrera="neg";
      $carrera->nombre_carrera="Licenciatura en Negocios Internacionales";
      $carrera->rvoe="20130274";
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
