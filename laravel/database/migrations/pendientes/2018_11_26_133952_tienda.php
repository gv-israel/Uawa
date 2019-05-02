<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tienda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('descuentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreDescuento');
            $table->string('codigoDescuento');
            $table->unsignedInteger('tipoDescuento'); //POR PORCENTAJE O VALOR
                $table->integer('porcentaje')->nullable();;
                $table->float('valor', 8, 2)->nullable();;
            $table->dateTime('validoDesde');
            $table->dateTime('validoHasta');
            $table->unsignedInteger('enCategoria')->nullable();
            $table->foreign('enCategoria')->references('id')->on('categorias');
        });
        Schema::create('atributos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('deCategoria');
            $table->foreign('deCategoria')->references('id')->on('categorias');
            $table->string('nombreAtributo');
            $table->string('tipo');
            $table->string('opciones')->nullable();
        });
        Schema::create('atributos_contenido', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('deAtributo');
            $table->foreign('deAtributo')->references('id')->on('atributos');
            $table->unsignedInteger('idArticulo');
            $table->foreign('idArticulo')->references('id')->on('articulos');
            $table->string('valorAtributo');
        });


        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idArticulo');
            $table->foreign('idArticulo')->references('id')->on('articulos');
            $table->unsignedInteger('deUsuario');
            $table->foreign('deUsuario')->references('id')->on('usuarios');
            $table->unsignedInteger('deDistribuidor')->nullable();
            $table->foreign('deDistribuidor')->references('id')->on('usuarios');
            $table->unsignedInteger('descuento')->nullable();
            $table->foreign('descuento')->references('id')->on('descuentos');
            $table->timestamp('fecha');
            $table->integer('estado');
            $table->float('precio', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('pedidos');
        Schema::drop('subcategorias');
        Schema::drop('descuentos');
        Schema::drop('atributos');
        Schema::drop('atributos_contenido');
    }
}
