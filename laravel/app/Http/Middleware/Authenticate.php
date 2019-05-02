<?php

namespace Uawa\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            //ENVIA COOKIE PARA MOSTRAR MODAL
                \Cookie::queue('mostrarIniciarSesion', 'true', 0.05);
               
            //ROUTE DONDE REDIGIRA PARA INCIAR SESION
            return route('iniciar-sesion');
        }
    }
}
