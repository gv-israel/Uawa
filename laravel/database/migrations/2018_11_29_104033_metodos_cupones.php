<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MetodosCupones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('cupones_descuento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->enum('tipo', ['porcentaje','segunda_unidad','primera_compra']);
            $table->enum('aplicableEn', ['articulo','categoria','todo']);
            $table->string('codigo')->unique();
            $table->integer('limite')->nullable();
            $table->boolean('activo');
        });
        Schema::create('metodos_envio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('transportista');
            $table->string('slug')->unique();
            $table->string('tiempo');
            $table->boolean('seguimiento');
            $table->string('url');
            $table->string('imagen');
            $table->boolean('activo');
        });
        Schema::create('metodos_pago', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->string('entidad');
            $table->string('descripcion');
            $table->string('imagen')->nullable();
            $table->string('beneficiario')->nullable();
            $table->string('numeroCuenta')->nullable();
            $table->string('tipo')->nullable();
            $table->string('otrosDatos')->nullable();
            $table->string('instrucciones')->nullable();
            $table->boolean('activo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
       Schema::drop('metodos_pago');
        Schema::drop('metodos_envio');
        
        Schema::drop('cupones_descuento');
    }
}
