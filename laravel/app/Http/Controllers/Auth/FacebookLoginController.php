<?php

namespace Uawa\Http\Controllers\Auth;

use Auth;
use Uawa\User;
use Socialite;
use Illuminate\Http\Request;
use Uawa\Http\Controllers\Controller;
use Illuminate\Support\Str;

class FacebookLoginController extends Controller
{
    // Metodo encargado de la redireccion a Facebook
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    
    // Metodo encargado de obtener la información del usuario
    public function handleProviderCallback($provider)
    {
        // Obtenemos los datos del usuario
        $social_user = Socialite::driver($provider)->user(); 
        // Comprobamos si el usuario ya existe
        if ($user = User::where('email','=', $social_user->email)->first()) { 
            return $this->authAndRedirect($user); // Login y redirección
        } else {  
            // En caso de que no exista creamos un nuevo usuario con sus datos.
            $user = User::create([
                'usuario' => Str::slug($social_user->first_name.'-'.$social_user->last_name.Str::random(2)),
                'nombres' => $social_user->first_name,
                'apellidos' => $social_user->last_name,
                'email' => $social_user->email,
                'avatar' => $social_user->avatar,

                'activo' => 1,
            ]);

            return $this->authAndRedirect($user); // Login y redirección
        }
    }

    // Login y redirección
    public function authAndRedirect($user)
    {
        Auth::login($user);

        return redirect()->to('/');
    }
}