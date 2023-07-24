<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
use DB;

class AuthController extends Controller
{
    public function registro(Request $request)
    {
        // Validar los datos del formulario de registro
        $request->validate([
            'usuEmail' => 'required|email|unique:usuario',
            'usuNombre1' => 'required',
            'usuApell1' => 'required',
            'usuFechNac' => 'required|date',
            'usuPassword' => 'required|min:8',
            'usuUsername' => 'required|unique:usuario',
            
            
            'usuTipoCuenta' => 'required|in:gratis,vip,premium',
        ]);

        // Crear un nuevo usuario en la base de datos
        $usuario = Usuario::create([
            'usuEmail' => $request->usuEmail,
            'usuNombre1' => $request->usuNombre1,
            'usuNombre2' => $request->usuNombre2,
            'usuApell1' => $request->usuApell1,
            'usuApell2' => $request->usuApell2,
            'usuFechNac' => $request->usuFechNac,
            'usuPassword' => bcrypt($request->usuPassword),
            'usuUsername' => $request->usuUsername,
            'usuPais' => $request->usuPais,
            'usuCiudad' => $request->usuCiudad,
            'usuTipoCuenta' => $request->usuTipoCuenta,
        ]);
        

        // Iniciar sesión automáticamente después del registro
        Auth::login($usuario);

        // Redirigir al usuario a la página de inicio
        return redirect('crud/director');
    }

    public function mostrarFormularioRegistro()
    {
        // Mostrar el formulario de registro
        return view('registro');
    }

    public function login(Request $request)
    {
        // Validar los datos del formulario de inicio de sesión
        $credentials = $request->validate([
            'usuEmail' => 'required|email',
            'password' => 'required',
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt($credentials)) {
            // El usuario ha sido autenticado correctamente
            return redirect()->intended('crud/director');
        } else {
            // Las credenciales son incorrectas
            return back()->withErrors([
                'usuEmail' => 'Las credenciales proporcionadas son incorrectas.',
            ]);
        }
    }

    public function mostrarFormularioLogin()
    {
        // Mostrar el formulario de inicio de sesión
        return view('login');
    }

    public function logout()
    {
        // Cerrar sesión del usuario actual
        Auth::logout();

        // Redirigir al usuario a la página de inicio
        return redirect('/')->with('status', '¡Has cerrado sesión correctamente!');
    }
}
