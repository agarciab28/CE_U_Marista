<?php

use Illuminate\Database\Seeder;
use \App\Models\plan_de_estudios;

class PlanDeEstudiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('set foreign_key_checks = 0;');
        DB::table('plan_de_estudios')->truncate();
        DB::statement('set foreign_key_checks = 1;');

        $plan_de_estudios = new plan_de_estudios();
        $plan_de_estudios->id_plan="2";
        $plan_de_estudios->id_carrera="anim";
        $plan_de_estudios->nombre_plan="Animacion Digital Video juegos";
        $plan_de_estudios->fecha="2012-5-14";
        $plan_de_estudios->save();

        $plan_de_estudios = new plan_de_estudios();
        $plan_de_estudios->id_plan="3";
        $plan_de_estudios->id_carrera="arq";
        $plan_de_estudios->nombre_plan="Arquitectura";
        $plan_de_estudios->fecha="2010-4-4";
        $plan_de_estudios->save();

        $plan_de_estudios = new plan_de_estudios();
        $plan_de_estudios->id_plan="4";
        $plan_de_estudios->id_carrera="der";
        $plan_de_estudios->nombre_plan="Derecho";
        $plan_de_estudios->fecha="2012-5-1";
        $plan_de_estudios->save();

        $plan_de_estudios = new plan_de_estudios();
        $plan_de_estudios->id_plan="5";
        $plan_de_estudios->id_carrera="fis";
        $plan_de_estudios->nombre_plan="Fisioterapia y Rehabilitacion";
        $plan_de_estudios->fecha="2015-5-9";
        $plan_de_estudios->save();

        $plan_de_estudios = new plan_de_estudios();
        $plan_de_estudios->id_plan="6";
        $plan_de_estudios->id_carrera="for";
        $plan_de_estudios->nombre_plan="Formacion Catequetica";
        $plan_de_estudios->fecha="2010-1-1";
        $plan_de_estudios->save();

        $plan_de_estudios = new plan_de_estudios();
        $plan_de_estudios->id_plan="7";
        $plan_de_estudios->id_carrera="ind";
        $plan_de_estudios->nombre_plan="Industrial y en Sistemas Organizacionales";
        $plan_de_estudios->fecha="2010-7-4";
        $plan_de_estudios->save();

        $plan_de_estudios = new plan_de_estudios();
        $plan_de_estudios->id_plan="8";
        $plan_de_estudios->id_carrera="mer";
        $plan_de_estudios->nombre_plan="Mercadotecnia y Publicidad";
        $plan_de_estudios->fecha="2015-7-3";
        $plan_de_estudios->save();

        $plan_de_estudios = new plan_de_estudios();
        $plan_de_estudios->id_plan="9";
        $plan_de_estudios->id_carrera="neg";
        $plan_de_estudios->nombre_plan="Negocios Internacionales";
        $plan_de_estudios->fecha="2015-9-1";
        $plan_de_estudios->save();




    }
}
