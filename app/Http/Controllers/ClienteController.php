<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // Mostrar formulario
    public function index()
    {
        return view('registro');
    }

    // Procesar registro
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:20',
            'apellidos' => 'required|string|max:40',
            'correo' => 'required|email|max:20|unique:usuarios,correo',
            'contrasena' => 'required|string|min:6',
            'noches' => 'required|integer|min:1',
            'f_ingreso' => 'required|date',
            'f_salida' => 'required|date|after_or_equal:f_ingreso',
        ]);

        Usuario::create([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'correo' => $request->correo,
            'contrasena' => $request->contrasena,
            'password_hash' => bcrypt($request->contrasena),
            'token' => bin2hex(random_bytes(32)),
            'noches' => $request->noches,
            'f_ingreso' => $request->f_ingreso,
            'f_salida' => $request->f_salida
        ]);

        return redirect()->back()->with('success', 'Usuario registrado con éxito.');
    }
}
