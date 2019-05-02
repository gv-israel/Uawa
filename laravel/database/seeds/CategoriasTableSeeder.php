<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uawa\Categoria;

class CategoriasTableSeeder extends Seeder
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
                'nombre'=>'Realidad Aumentada',
                'slug'=>'realidad-aumentada',
                'descripcion'=>'Camisetas de realidad aumentada.',
                'estado'=>1
            ],
            [
                'nombre'=>'Realidad Virtual',
                'slug'=>'realidad-virtual',
                'descripcion'=>'Servicios de realidad virtual.',
                'estado'=>1
            ],
            [
                'nombre'=>'Otros',
                'slug'=>'otros',
                'descripcion'=>'Otros productos o servicios.',
                'estado'=>1
            ],

        );

        Categoria::insert($data);
    }
}