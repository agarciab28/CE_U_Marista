<?php

use Illuminate\Database\Seeder;
use \App\Models\calificaciones;

class CalificacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::statement('set foreign_key_checks = 0;');
    DB::table('calificaciones')->truncate();
    DB::statement('set foreign_key_checks = 1;');

    $calificaciones = new calificaciones();
    $calificaciones->ncontrol="1111";
    $calificaciones->id_grupo="1";
    $calificaciones->primer_parcial="10";
    $calificaciones->segundo_parcial="7";
    $calificaciones->examen_final="8";
    $calificaciones->opcion_calificacion="1";
    $calificaciones->save();

    $calificaciones = new calificaciones();
    $calificaciones->ncontrol="1234";
    $calificaciones->id_grupo="2";
    $calificaciones->primer_parcial="9";
    $calificaciones->segundo_parcial="7";
    $calificaciones->examen_final="8";
    $calificaciones->opcion_calificacion="1";
    $calificaciones->save();



    }
}
