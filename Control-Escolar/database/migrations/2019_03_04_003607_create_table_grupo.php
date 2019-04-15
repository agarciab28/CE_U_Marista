<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGrupo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo', function (Blueprint $table) {
            $table->string('id_grupo',30);
            $table->string('seccion');
            $table->string('id_carrera',10);
            $table->string('id_materia',18);
            $table->string('id_prof',20);
            $table->string('periodo');
            $table->timestamps();

            $table->primary('id_grupo');
            $table->foreign('id_carrera')->references('id_carrera')->on('carrera');
            $table->foreign('id_materia')->references('id_materia')->on('materia');
            $table->foreign('id_prof')->references('id_prof')->on('profesor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupo');
    }
}
