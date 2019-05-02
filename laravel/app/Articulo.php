<?php

namespace Uawa;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //
    protected $table='articulos';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable = [
    	'codigo',
        'deCategoria',
        'nombre',
        'descripcion',
        'tipo',

        'talla-0',
        'talla-2',
        'talla-4',
        'talla-6',
        'talla-8',
        'talla-10',
        'talla-12',
        'talla-14',
        'talla-m-s',
        'talla-m-m',
        'talla-m-l',
        'talla-m-xl',
        'talla-h-s',
        'talla-h-m',
        'talla-h-l',
        'talla-h-xl',
        'talla-h-xxl',
        'talla-h-xxxl',

        'stock-otros',
        'color',
        'coste',
        'pvp',
        

    ];

    protected $hidden = [
        'estado'
    ];

}
