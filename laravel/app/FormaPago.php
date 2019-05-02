<?php

namespace Uawa;

use Illuminate\Database\Eloquent\Model;

class FormaPago extends Model
{
    //
    protected $table='metodos_pago';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable = [
        'slug',
    	'entidad',
    	'descripcion',
        'imagen',
    	'beneficiario',
    	'numeroCuenta',
        'tipo',
        'otrosDatos',
        'instrucciones',
        'activo'
    ];
}
