<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uawa\Transportista;
use Uawa\Provincia;

class TransportistasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $transportistas = array(
            [
                'transportista'=>'Servientrega',
                'slug'=>'servientrega',
                'tiempo'=>'24/48h',
                'seguimiento'=>1,
                'url'=>'http://www.servientrega.com.ec/rastreo/multiple',
                'imagen'=>'servientrega.png',
                'activo'=>1
            ],
            [
                'transportista'=>'Tramaco',
                'slug'=>'tramaco',
                'tiempo'=>'24/48h',
                'seguimiento'=>0,
                'url'=>null,
                'imagen'=>'tramaco.png',
                'activo'=>0
            ],
            [
                'transportista'=>'Cooperativa de transporte',
                'slug'=>'cooperativa',
                'tiempo'=>'24/48h',
                'seguimiento'=>0,
                'url'=>null,
                'imagen'=>'cooperativa.png',
                'activo'=>0
            ],
            [
                'transportista'=>'Recogida en oficina',
                'slug'=>'recogida',
                'tiempo'=>'24/48h',
                'seguimiento'=>0,
                'url'=>null,
                'imagen'=>'recogida.png',
                'activo'=>1
            ],

        );
        Transportista::insert($transportistas);

        $costes = array(
            [
                'deTransportista'=>'servientrega',
                'azuay'=>'4',
                'bolivar'=>'4',
                'canar'=>'4',
                'carchi'=>'4',
                'chimborazo'=>'4',
                'cotopaxi'=>'4',
                'el_oro'=>'4',
                'esmeraldas'=>'4',
                'galapagos'=>'4',
                'guayas'=>'4',
                'imbabura'=>'4',
                'loja'=>'4',
                'los_rios'=>'4',
                'manabi'=>'4',
                'morona_santiago'=>'4',
                'napo'=>'4',
                'orellana'=>'4',
                'pastaza'=>'4',
                'pichincha'=>'4',
                'santa-elena'=>'4',
                'santo_domingo'=>'4',
                'sucumbios'=>'4',
                'tungurahua'=>'4',
                'zamora_chinchipe'=>'4'
            ],
            [
                'deTransportista'=>'tramaco',
                'azuay'=>'6',
                'bolivar'=>'6',
                'canar'=>'6',
                'carchi'=>'6',
                'chimborazo'=>'6',
                'cotopaxi'=>'6',
                'el_oro'=>'6',
                'esmeraldas'=>'6',
                'galapagos'=>'6',
                'guayas'=>'6',
                'imbabura'=>'6',
                'loja'=>'6',
                'los_rios'=>'6',
                'manabi'=>'6',
                'morona_santiago'=>'6',
                'napo'=>'6',
                'orellana'=>'6',
                'pastaza'=>'6',
                'pichincha'=>'6',
                'santa-elena'=>'6',
                'santo_domingo'=>'6',
                'sucumbios'=>'6',
                'tungurahua'=>'6',
                'zamora_chinchipe'=>'6'
            ],
            [
                'deTransportista'=>'cooperativa',
                'azuay'=>'9',
                'bolivar'=>'9',
                'canar'=>'9',
                'carchi'=>'9',
                'chimborazo'=>'9',
                'cotopaxi'=>'9',
                'el_oro'=>'9',
                'esmeraldas'=>'9',
                'galapagos'=>'9',
                'guayas'=>'9',
                'imbabura'=>'9',
                'loja'=>'9',
                'los_rios'=>'9',
                'manabi'=>'9',
                'morona_santiago'=>'9',
                'napo'=>'9',
                'orellana'=>'9',
                'pastaza'=>'9',
                'pichincha'=>'9',
                'santa-elena'=>'9',
                'santo_domingo'=>'9',
                'sucumbios'=>'9',
                'tungurahua'=>'9',
                'zamora_chinchipe'=>'9'
            ],
            [
                'deTransportista'=>'recogida',
                'azuay'=>'8',
                'bolivar'=>'8',
                'canar'=>'8',
                'carchi'=>'8',
                'chimborazo'=>'8',
                'cotopaxi'=>'8',
                'el_oro'=>'8',
                'esmeraldas'=>'8',
                'galapagos'=>'8',
                'guayas'=>'8',
                'imbabura'=>'8',
                'loja'=>'8',
                'los_rios'=>'8',
                'manabi'=>'8',
                'morona_santiago'=>'8',
                'napo'=>'8',
                'orellana'=>'8',
                'pastaza'=>'8',
                'pichincha'=>'8',
                'santa-elena'=>'8',
                'santo_domingo'=>'8',
                'sucumbios'=>'8',
                'tungurahua'=>'8',
                'zamora_chinchipe'=>'8'
            ]

        );
        Provincia::insert($costes);
    }
}