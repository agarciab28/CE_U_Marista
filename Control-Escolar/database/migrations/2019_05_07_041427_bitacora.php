<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bitacora extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacora', function (Blueprint $table) {
            $table->bigIncrements('id_mov')->unique();
            $table->string('usuario',50);
            $table->string('tipoderol',30);
            $table->datetime('fecha');
            $table->string('tipodemov',50);
            $table->string('tablaafectada',30);
            $table->string('campoalter',50);
            $table->string('valorant',100);
            $table->string('valornuevo',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bitacora');
    }
}
