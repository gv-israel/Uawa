<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->enum('tipoUsuario', ['user','admin']);
            $table->boolean('activo');
            $table->string('usuario')->unique();
            $table->string('nombres', 100);
            $table->string('apellidos', 100);
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('avatar')->nullable();
            $table->string('codigoDistribuidor')->nullable();
            $table->timestamp('emailVerificadoEl')->nullable();
            $table->timestamp('fechaRegistro');
            $table->rememberToken();
        });

        Schema::create('usuarios_datos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('deUsuario');

            $table->string('cedula', 10);
            $table->string('nombres', 100);
            $table->string('apellidos', 100);
            $table->string('provincia', 100);
            $table->string('poblacion', 100);
            $table->string('codigoPostal', 8);
            $table->text('direccion');
            $table->text('direccion2')->nullable();
            $table->integer('telefono');
            $table->integer('celular');

            $table->boolean('mismosDatos');

            $table->string('facCedula', 10)->nullable();
            $table->string('facNombres', 100)->nullable();
            $table->string('facApellidos', 100)->nullable();
            $table->string('facProvincia', 100)->nullable();
            $table->string('facPoblacion', 100)->nullable();
            $table->string('facCodigoPostal', 8)->nullable();
            $table->text('facDireccion')->nullable();
            $table->text('facDireccion2')->nullable();
            $table->unsignedInteger('facTelefono')->nullable();
            $table->unsignedInteger('facCelular')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('usuarios_datos');
    }
}
