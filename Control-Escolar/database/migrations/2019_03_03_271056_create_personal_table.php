<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->string('username',100)->primary();
            $table->integer('id_persona')->unsigned();
            $table->text('password');
            $table->string('ced_fiscal');
            $table->string('nssoc')->nullable();
            $table->boolean('activo');
            $table->timestamps();

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
        Schema::dropIfExists('personal');
    }
}
