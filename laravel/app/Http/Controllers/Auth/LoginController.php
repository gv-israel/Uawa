<?php

namespace Uawa\Http\Controllers\Auth;

use Uawa\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers {
    redirectPath as laravelRedirectPath;
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected function redirectTo()
    {

        session()->flash( 'mostrarMensaje', 
            [
               'mensaje' => 'Ha iniciado sesión con éxito.',
               'tipoMensaje'    => 'alert-success'
            ]);
    // Return the results of the method we are overriding that we aliased.
        return '/';


        
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage

        return \Redirect::route('/')
                ->with('mostrarMensaje', 
                [
                   'mensaje' => 'Ha cerrado sesión con éxito.',
                   'tipoMensaje'    => 'alert-success'
                ]);
    }
}
