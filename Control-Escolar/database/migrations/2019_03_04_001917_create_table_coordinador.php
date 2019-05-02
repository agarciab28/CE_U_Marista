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
            $table->increments('id_coordinador',10);
            $table->string('id_carrera',10);
            $table->string('username',100)->unique();
            $table->timestamps();

            $table->foreign('id_carrera')->references('id_carrera')->on('carrera');
            $table->foreign('username')->references('username')->on('personal');


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
