<?php

use Illuminate\Database\Seeder;
use  \App\Models\grupo;
class grupos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('set foreign_key_checks = 0;');
        DB::table('grupo')->truncate();
        DB::statement('set foreign_key_checks = 1;');

        $grupo= new grupo();
        $grupo->id_grupo='materia';
        $grupo->seccion='1';
        $grupo->id_carrera='adm';
        $grupo->id_materia='1';
        $grupo->id_prof='nancy';
        $grupo->periodo='agosto-diciembre';
        $grupo->save();

        $grupo= new grupo();
        $grupo->id_grupo='meteria';
        $grupo->seccion='1';
        $grupo->id_carrera='anim';
        $grupo->id_materia='DGD-1';
        $grupo->id_prof='ruby';
        $grupo->periodo='agosto-diciembre';
        $grupo->save();
    }
}
