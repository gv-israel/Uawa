<?php

namespace Uawa;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //
    protected $table='pedidos';

    protected $primaryKey='id';

    public $timestamps=true;

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';

    protected $fillable = [

        'deUsuario',
        'codigoPedido',
        'metodoEnvio',

    	'cedula',
        'nombres',
        'provincia',
        'poblacion',
        'codigoPostal',
        'direccion',
        'direccion2',
        'observaciones',
        'telefono',
        'celular',

        'facturaCedula',
        'facturaNombres',
        'facturaProvincia',
        'facturaPoblacion',
        'facturaCodigoPostal',
        'facturaDireccion',
        'facturaDireccion2',
        'facturaTelefono',
        'facturaCelular',

        'codigoCupon',
        'descuento',
        'costeEnvio',
        'subtotal',


        'estado',
        
        
    ];

}
