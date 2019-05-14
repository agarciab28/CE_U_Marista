<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCalificaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->string('ncontrol',10);
            $table->integer('id_grupo')->unsigned();
            $table->float('primer_parcial',8,2);
            $table->float('segundo_parcial',8,2);
            $table->float('examen_final',8,2);
            $table->integer('faltas_primer')->nullable();
            $table->integer('faltas_segundo')->nullable();
            $table->integer('faltas_tercer')->nullable();
            $table->integer('promedio_faltas')->nullable();
            $table->float('promedio_calificacion',8,2)->nullable();
            $table->string('opcion_calificacion',10);
            $table->timestamps();
            $table->foreign('id_grupo')->references('id_grupo')->on('grupo');
            $table->foreign('ncontrol')->references('ncontrol')->on('alumno');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calificaciones');
    }
}
