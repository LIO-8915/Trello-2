<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Auth_Controller extends Controller
{
    // Muestra la vista de login
    public function showLogin()
    {
        return view('Login');
    }

    // Procesa el inicio de sesión
    public function login(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Buscar al usuario por correo
        $user = User::where('email', $request->email)->first();

        // Comparación en texto plano (SIN ENCRIPTAR)
        if ($user && $user->password === $request->password) {
            Auth::login($user); // Iniciar sesión manualmente
            $request->session()->regenerate();
            return redirect()->route('welcome'); // Redirección a welcome
        }

        // Si falla, regresar con error
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }

    // Procesa el registro de un nuevo usuario
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirecciona al login con un mensaje de éxito
        return redirect()->route('login')->with('success', 'Cuenta creada. Por favor, inicia sesión.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}