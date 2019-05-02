<?php

namespace Uawa;

use Illuminate\Database\Eloquent\Model;

class PedidoArticulo extends Model
{
    //
    protected $table='pedidos_articulos';

    protected $primaryKey='id';

    public $timestamps=false;

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';

    protected $fillable = [
    	'dePedido',
        'articulo',
        'cantidad',
        'detalles',
        'pvp'
    ];

}
