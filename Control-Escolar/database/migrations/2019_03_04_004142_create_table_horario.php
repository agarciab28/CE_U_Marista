<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHorario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horario', function (Blueprint $table) {
            $table->increments('id_horario',10);
            $table->string('hora_i_lu')->nullable();
            $table->string('hora_f_lu')->nullable();
            $table->string('aula_lu',10)->nullable();

            $table->string('hora_i_ma')->nullable();
            $table->string('hora_f_ma')->nullable();
            $table->string('aula_ma',10)->nullable();

            $table->string('hora_i_mi')->nullable();
            $table->string('hora_f_mi')->nullable();
            $table->string('aula_mi',10)->nullable();

            $table->string('hora_i_ju')->nullable();
            $table->string('hora_f_ju')->nullable();
            $table->string('aula_ju',10)->nullable();

            $table->string('hora_i_vi')->nullable();
            $table->string('hora_f_vi')->nullable();
            $table->string('aula_vi',10)->nullable();

            $table->string('hora_i_sa')->nullable();
            $table->string('hora_f_sa')->nullable();
            $table->string('aula_sa',10)->nullable();


            $table->integer('id_grupo')->unsigned();
            $table->timestamps();
            $table->foreign('id_grupo')->references('id_grupo')->on('grupo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horario');
    }
}
