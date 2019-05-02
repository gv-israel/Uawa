<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigoPedido');
            $table->unsignedInteger('deUsuario');
            $table->foreign('deUsuario')
                    ->references('id')
                    ->on('users');
            $table->unsignedInteger('metodoEnvio');
            $table->foreign('metodoEnvio')
                    ->references('id')
                    ->on('metodos_envio');

            //INFO PEDIDO
            $table->string('cedula');
            $table->string('nombres');
            $table->string('provincia');
            $table->string('poblacion');
            $table->string('codigoPostal');
            $table->string('direccion');
            $table->string('direccion2')->nullable();
            $table->string('observaciones')->nullable();
            $table->integer('telefono');
            $table->integer('celular');

            //FACTURACION
            $table->string('facturaCedula')->nullable();
            $table->string('facturaNombres')->nullable();
            $table->string('facturaProvincia')->nullable();
            $table->string('facturaPoblacion')->nullable();
            $table->string('facturaCodigoPostal')->nullable();
            $table->string('facturaDireccion')->nullable();
            $table->string('facturaDireccion2')->nullable();
            $table->integer('facturaTelefono');
            $table->integer('facturaCelular');

            
            $table->timestamp('fecha_creacion')->nullable();
            $table->timestamp('fecha_modificacion')->nullable();

            $table->integer('codigoCupon')->nullable();
            $table->float('descuento', 8, 2)->nullable()->default('0');
            $table->float('costeEnvio', 8, 2)->nullable()->default('0');
            $table->float('subtotal', 8, 2);
            $table->enum('estado', ['pendiente_pago','pendiente_envio','recibido_transportista','en_transito','en_reparto','pendiente_recogida','entregado','finalizado']);
            $table->boolean('activo');
        });


        Schema::create('pedidos_articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('dePedido');
            $table->foreign('dePedido')->references('id')->on('pedidos');
            $table->unsignedInteger('articulo');
            $table->foreign('articulo')->references('id')->on('articulos');
            $table->integer('cantidad');
            $table->string('detalles');
            $table->float('pvp', 8, 2);

        });

        Schema::create('pedidos_pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('dePedido');
            $table->foreign('dePedido')->references('id')->on('pedidos');
            $table->string('formaPago');
            $table->string('numero')->nullable();
            $table->boolean('pagado');
            $table->integer('verificado')->nullable();
            $table->timestamp('fecha_creacion')->timestamp();
            $table->timestamp('fecha_pago')->nullable();
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
        
       Schema::drop('pedidos_pagos');
        Schema::drop('pedidos_articulos');
        
        Schema::drop('pedidos');
    }
}
