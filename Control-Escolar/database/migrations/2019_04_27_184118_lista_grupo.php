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
        Schema::create('lista_grupo', function (Blueprint $table) {
            $table->increments('id_lista_grupo',10);
            $table->integer('ncontrol')->unique();
            $table->string('nombres');
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
        Schema::dropIfExists('lista_grupo');
    }
}
