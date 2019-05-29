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
            $table->increments('id_grupo');
            $table->string('seccion');
            $table->string('id_carrera',10);
            $table->string('id_materia',18);
            $table->integer('id_prof')->unsigned();
            $table->string('periodo');
            $table->boolean('check_calif')->default('0');
            $table->boolean('activo')->default('1');
            $table->timestamps();

            $table->foreign('id_prof')->references('id_prof')->on('profesor');
            $table->foreign('id_carrera')->references('id_carrera')->on('carrera');
            $table->foreign('id_materia')->references('id_materia')->on('materia');
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
