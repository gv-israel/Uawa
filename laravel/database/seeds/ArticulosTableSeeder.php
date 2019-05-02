<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uawa\Articulo;

class ArticulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $data = array(
            [
                'slug'=>'hulk',
                'deCategoria' => 1,
                'nombre'=>'Hulk',
                'descripcion'=>'Increible camiseta de hulk en 3d.',
                'tipo' => 'camiseta',
                'talla_2' => 7,
                'color' => 0,
                'coste' => 6,
                'pvp' => 9,
                'estado'=>1
            ],
            [
                'slug'=>'iron-man',
                'deCategoria' => 2,
                'nombre'=>'IronMan',
                'descripcion'=>'Increible camiseta de IronMan en 3d.',
                'tipo' => 'camiseta',
                'talla_2' => 77,
                'color' => 0,
                'coste' => 8,
                'pvp' => 19,
                'estado'=>1
            ],

        );

        Articulo::insert($data);
    }
}