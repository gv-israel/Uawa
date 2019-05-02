<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
	        CategoriasTableSeeder::class,
            UsuariosTableSeeder::class,
            UsuarioDatosTableSeeder::class,
            PreguntasTableSeeder::class,
            ArticulosTableSeeder::class,
            TransportistasTableSeeder::class,
            FormasPagoTableSeeder::class,
   		]);

    }
}
