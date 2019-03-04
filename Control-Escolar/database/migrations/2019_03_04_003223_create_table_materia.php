<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMateria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia', function (Blueprint $table) {
            $table->string('id_materia',18);
            $table->string('id_plan',30);
            $table->string('nombre_materia');
            $table->integer('horas_materia');
            //$table->timestamps();

            $table->primary('id_materia');
            $table->foreign('id_plan')->references('id_plan')->on('plan_de_estudios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materia');
    }
}
