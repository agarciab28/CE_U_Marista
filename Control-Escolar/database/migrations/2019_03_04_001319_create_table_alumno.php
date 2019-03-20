<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAlumno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->string('ncontrol',10);
            $table->string('id_carrera',10);
            $table->string('num_tel_fam',20)->nullable();
            $table->string('nombre_fam',50)->nullable();
            $table->integer('id_persona')->unsigned();
            $table->text('password');
            $table->timestamps();
            $table->primary('ncontrol');
            $table->foreign('id_carrera')->references('id_carrera')->on('carrera');
            $table->foreign('id_persona')->references('id_persona')->on('persona');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno');
    }
}
