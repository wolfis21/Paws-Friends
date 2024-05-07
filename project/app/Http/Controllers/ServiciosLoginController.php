<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ServiciosLoginController extends Controller
{
/*     use AuthenticatesUsers;

    protected $redirectTo = '/home'; // Redirección por defecto */

    protected function authenticated(Request $request, $user)
    {
        return redirect()->route('moduloServicios.dashboard');
    }

    public function showLoginForm()
    {
        return view('auth_admin.login'); // Asegúrate de tener la vista correspondiente
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (auth()->attempt($credentials)) {
            // Autenticación exitosa
            return redirect()->route('moduloServicios.dashboard');
        } else {
            // Autenticación fallida
            return redirect()->back()->withInput()->withErrors(['loginError' => 'Credenciales incorrectas']);
        }
    }
    
}