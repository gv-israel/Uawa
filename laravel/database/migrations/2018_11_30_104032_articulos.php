<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Articulos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->string('codigo');
            $table->unsignedInteger('deCategoria');
            $table->foreign('deCategoria')->references('id')->on('categorias');
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('tipo');

            $table->integer('talla_0')->nullable()->default('0');
            $table->integer('talla_2')->nullable()->default('0');
            $table->integer('talla_4')->nullable()->default('0');
            $table->integer('talla_6')->nullable()->default('0');
            $table->integer('talla_8')->nullable()->default('0');
            $table->integer('talla_10')->nullable()->default('0');
            $table->integer('talla_12')->nullable()->default('0');
            $table->integer('talla_14')->nullable()->default('0');
            $table->integer('talla_m_s')->nullable()->default('0');
            $table->integer('talla_m_m')->nullable()->default('0');
            $table->integer('talla_m_l')->nullable()->default('0');
            $table->integer('talla_m_xl')->nullable()->default('0');
            $table->integer('talla_h_s')->nullable()->default('0');
            $table->integer('talla_h_m')->nullable()->default('0');
            $table->integer('talla_h_l')->nullable()->default('0');
            $table->integer('talla_h_xl')->nullable()->default('0');
            $table->integer('talla_h_xxl')->nullable()->default('0');
            $table->integer('talla_h_xxxl')->nullable()->default('0');

            $table->integer('stock_otros')->nullable()->default('0');
            $table->string('color')->nullable();
            $table->decimal('coste', 8, 2)->nullable()->default('0');
            $table->decimal('pvp', 8, 2);
            $table->boolean('estado')->default('1');
        });

        Schema::create('articulos_imagenes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('deArticulo');
            $table->foreign('deArticulo')->references('id')->on('articulos');
            $table->string('imagen');
            $table->boolean('destacado');
            $table->timestamp('fecha_creacion')->nullable();
            $table->timestamp('fecha_modificacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articulos_imagenes');
        Schema::drop('articulos');
        
    }
}
