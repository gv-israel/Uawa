<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PreguntasRespuestas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas_respuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('categoria', 150);
            $table->string('pregunta', 150);
            $table->string('respuesta', 1200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('preguntas_respuestas');
    }
}
