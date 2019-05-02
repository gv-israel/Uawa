<?php

namespace Uawa;

use Illuminate\Database\Eloquent\Model;

class UsuarioDatos extends Model
{
    //
    protected $table='usuarios_datos';

    protected $primaryKey='id';

    public $timestamps=false;

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';

    protected $fillable = [
        'deUsuario',
        'cedula',
            'nombres',
           'apellidos',
          'provincia',
          'poblacion', 
           'codigoPostal',
          'direccion',
           'direccion2',

           'mismosDatos',

           'facCedula',
            'facNombres',
            'facApellidos',
           'facProvincia',
           'facPoblacion',
           'facCodigoPostal',
            'facDireccion',
    ];
}
