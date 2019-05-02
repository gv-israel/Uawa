<?php

namespace Uawa;

use Illuminate\Database\Eloquent\Model;

class PedidoPago extends Model
{
    //
    protected $table='pedidos_pagos';

    protected $primaryKey='id';

    public $timestamps=false;

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';

    protected $fillable = [
        'dePedido',
        'formaPago',
        'numero',
        'pagado',
        'verificado'
    ];

}
