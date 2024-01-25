<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{

    public function redirect(){
        return Socialite::driver('google')->redirect();
    
    }
    
    
    public function callbackGoogle()
    {
        try {
            $user_google = Socialite::driver('google')->user();
            
            // Buscar usuario por correo electrónico
            $user = User::where('email', $user_google->getEmail())->first();
    
            if (!$user) {
                // Si el usuario no existe, crear uno nuevo
                $new_user = User::create([
                    'name' => $user_google->getName(),
                    'email' => $user_google->getEmail(),
                    'google_id' => $user_google->getId(),
                ]);
    
                Auth::login($new_user);
            } else {
                // Si el usuario ya existe, simplemente iniciar sesión
                Auth::login($user);
            }
    
            return redirect()->intended('home');
        } catch (\Throwable $th) {
            dd('Ocurrió un error ' . $th->getMessage());
        }
    }
}
