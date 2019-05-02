<?php

namespace Uawa;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $table='usuarios';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable = [
    	'nombres',
        'apellidos',
        'email',
        'clave',
        'usuario',
        'tipoUsuario',
        'codigoDistribuidor',
        'activo'
    ];

}
