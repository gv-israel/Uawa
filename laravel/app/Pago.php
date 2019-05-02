<?php

namespace Uawa;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    //
    protected $table='pedidos_pagos';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable = [
    	'dePedido',
    	'formaPago',
    	'numero',
    	'pagado',
    	'verificado',
    	'fecha_creacion',
    	'fecha_pago'
    ];
}
