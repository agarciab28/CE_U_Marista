<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCoordinador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordinador', function (Blueprint $table) {
            $table->string('id_coordinador',10);
            $table->string('id_carrera',10);
            $table->string('id_persona',10);
            //$table->timestamps();

            $table->primary('id_coordinador');
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
        Schema::dropIfExists('coordinador');
    }
}
