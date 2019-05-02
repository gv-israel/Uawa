<?php

namespace Uawa;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    //
    protected $table='provincias';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable = [
    	'deTransportista',
		'Azuay',
        'Bolívar',
        'Cañar',
        'Carchi',
        'Chimborazo',
        'Cotopaxi',
        'El Oro',
        'Esmeraldas',
        'Galápagos',
        'Guayas',
        'Imbabura',
        'Loja',
        'Los Ríos',
        'Manabí',
        'Morona Santiago',
        'Napo',
        'Orellana',
        'Pastaza',
        'Pichincha',
        'Santa Elena',
        'Santo Domingo de los Tsáchilas',
        'Sucumbíos',
        'Tungurahua',
        'Zamora Chinchipe'
    ];
}
