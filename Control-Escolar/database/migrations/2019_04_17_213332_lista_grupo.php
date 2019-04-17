<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ListaGrupo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lg', function (Blueprint $table) {
            $table->increments('id_lg');
            $table->integer('id_grupo');
            $table->integer('id_persona');
            $table->timestamps();
            
            $table->foreign('id_persona')->references('id_persona')->on('persona');
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
        Schema::dropIfExists('lg');
    }
}
