<?php

use Illuminate\Database\Seeder;
use App\Models\calificaciones;
use App\Models\lista_grupo;

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
    DB::table('lista_grupo')->truncate();
    DB::statement('set foreign_key_checks = 1;');

    $calificaciones = new calificaciones();
    $calificaciones->ncontrol="1111";
    $calificaciones->id_grupo="1";
    $calificaciones->primer_parcial="10";
    $calificaciones->faltas_primer="0";
    $calificaciones->segundo_parcial="7";
    $calificaciones->faltas_segundo="0";
    $calificaciones->examen_final="8";
    $calificaciones->faltas_tercer="0";
    $calificaciones->total_faltas="0";
    $calificaciones->promedio_calificacion="0";
    $calificaciones->opcion_calificacion="1";
    $calificaciones->save();

    $calificaciones = new calificaciones();
    $calificaciones->ncontrol="1234";
    $calificaciones->id_grupo="2";
    $calificaciones->primer_parcial="9";
    $calificaciones->faltas_primer="0";
    $calificaciones->segundo_parcial="7";
    $calificaciones->faltas_segundo="0";
    $calificaciones->examen_final="8";
    $calificaciones->faltas_tercer="0";
    $calificaciones->faltas_tercer="0";
    $calificaciones->promedio_calificacion="0";
    $calificaciones->opcion_calificacion="1";
    $calificaciones->save();

    $lista= new lista_grupo();
    $lista->ncontrol='1111';
    $lista->nombres='Pepe';
    $lista->id_grupo='1';
    $lista->save();

    $lista= new lista_grupo();
    $lista->ncontrol='1234';
    $lista->nombres='Javier';
    $lista->id_grupo='2';
    $lista->save();






    }
}
