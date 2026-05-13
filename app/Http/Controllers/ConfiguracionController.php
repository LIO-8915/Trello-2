<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;

class ConfiguracionController extends Controller
{
    public function index()
    {
        $configuraciones = Config::all();
        return view('config', compact('config'));
    }

    public function update(Request $request)
    {
        foreach ($request->input('config', []) as $clave => $valor) {
            Config::where('clave', $clave)->update(['valor' => $valor]);
        }
        return redirect()->back()->with('success', 'Configuración actualizada correctamente.');
    }
}
