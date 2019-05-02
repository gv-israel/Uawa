<?php

namespace Uawa;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    public $timestamps=true;

    const CREATED_AT = 'fechaRegistro';
    const UPDATED_AT = null;

    protected $fillable = [
        'nombres',
        'apellidos',
        'email',
        'password',
        'codigoDistribuidor',
        'tipoUsuario',
        'avatar',
        'activo',
        'usuario'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];
}
