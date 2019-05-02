<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uawa\User;

class UsuariosTableSeeder extends Seeder
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
                'tipoUsuario'=>'admin',
                'activo'=>1,
                'usuario'=>'admin',
                'nombres'=>'nombres',
                'apellidos'=>'apellidos',
                'email'=>'admin@admin.com',
                'password'=>bcrypt('admin'),
                'codigoDistribuidor'=>null,
            ],
            [
                'tipoUsuario'=>'user',
                'activo'=>1,
                'usuario'=>'brandon123',
                'nombres'=>'Brandon Israel',
                'apellidos'=>'Guevara',
                'email'=>'brandonguevara@gmail.com',
                'password'=>bcrypt('admin'),
                
                'codigoDistribuidor'=>null,
            ],
            [
                'tipoUsuario'=>'user',
                'activo'=>1,
                'usuario'=>'user',
                'nombres'=>'Nombres',
                'apellidos'=>'Guevara',
                'email'=>'user@user.com',
                'password'=>bcrypt('user'),
                
                'codigoDistribuidor'=>null,
            ],

        );

        User::insert($data);
    }
}