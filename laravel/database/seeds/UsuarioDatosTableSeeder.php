<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uawa\UsuarioDatos;

class UsuarioDatosTableSeeder extends Seeder
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
                'deUsuario'=>'1',
                'cedula'=>'1719395962',
                'nombres'=>'Brandon Israel',
                'apellidos'=>'Guevara G.',
                'provincia'=>'pichincha',
                'poblacion'=>'Carapungo',
                'codigoPostal'=>'EC1700',
                'direccion'=>'El Arenal 380',
                'direccion2'=>'Panamericana Norte y Eucalipto',
                'telefono'=>'666769126',
                'celular'=>'665232222',
                'mismosDatos' => 1,

            ],

        );

        UsuarioDatos::insert($data);
    }
}