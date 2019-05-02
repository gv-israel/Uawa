<?php

namespace Uawa;

use Illuminate\Database\Eloquent\Model;

class Transportista extends Model
{
    //
    protected $table='metodos_envio';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable = [
    	'transportista',
        'slug',
    	'coste',
    	'tiempo',
    	'seguimiento',
        'url',
        'imagen',
        'activo'
    ];
}
