<?php

namespace Uawa\Http\Controllers\Auth;

use Uawa\User;
use Uawa\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected function redirectTo()
    {
        \Cookie::queue('tipoMensaje', 'alert-success', 0.1);
        \Cookie::queue('mostrarMensaje', 'Se ha registrado correctamente.', 0.1);
        return '/';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        \Cookie::queue('tipoMensaje', 'alert-success', 0.1);
        \Cookie::queue('mostrarRegistro', 'true', 0.1);
        return Validator::make($data, [
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            //'codigoDistribuidor' => 'nullable'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \APIPeliculas\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nombres' => $data['nombres'],
            'apellidos' => $data['apellidos'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'usuario' => uniqid(),
            'tipoUsuario' => '1',
            'codigoDistribuidor' => 'DISTCODE',
            'activo' => '1',
            //'fechaRegistro' => timestamp(),
        ]);
    }
}
