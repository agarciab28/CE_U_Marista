<?php

use Illuminate\Database\Seeder;
use \App\Models\materia;

class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('set foreign_key_checks = 0;');
        DB::table('materia')->truncate();
        DB::statement('set foreign_key_checks = 1;');

        $materia = new materia();
        $materia->id_materia="1";
        $materia->id_plan="7";
        $materia->nombre_materia="Calculo diferencial";
        $materia->horas_materia="100";
        $materia->save();

        $materia = new materia();
        $materia->id_materia="IC-1";
        $materia->id_plan="7";
        $materia->nombre_materia="Introduccion a la Computacion";
        $materia->horas_materia="100";
        $materia->save();

        $materia = new materia();
        $materia->id_materia="II-1";
        $materia->id_plan="7";
        $materia->nombre_materia="Introduccion a la Ingenieria";
        $materia->horas_materia="100";
        $materia->save();

        $materia = new materia();
        $materia->id_materia="QMC-1";
        $materia->id_plan="7";
        $materia->nombre_materia="Quimica";
        $materia->horas_materia="100";
        $materia->save();

        $materia = new materia();
        $materia->id_materia="DGD-1";
        $materia->id_plan="7";
        $materia->nombre_materia="Dibujo y Geometria Descriptiva";
        $materia->horas_materia="90";
        $materia->save();

        $materia = new materia();
        $materia->id_materia="PEET-1";
        $materia->id_plan="7";
        $materia->nombre_materia="Participacion Efectiva en Equipos de Trabajo";
        $materia->horas_materia="90";
        $materia->save();

        $materia = new materia();
        $materia->id_materia="TID-1";
        $materia->id_plan="7";
        $materia->nombre_materia="Tecnicas de Investigacion Documental";
        $materia->horas_materia="90";
        $materia->save();




    }
}
