<?php

namespace Uawa;

use Illuminate\Database\Eloquent\Model;

class ArticuloImagen extends Model
{
    //
    protected $table='articulos_imagenes';

    protected $primaryKey='id';

    public $timestamps=true;

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';

    protected $fillable = [
    	'deArticulo',
        'imagen',
        'destacado'
    ];
}
