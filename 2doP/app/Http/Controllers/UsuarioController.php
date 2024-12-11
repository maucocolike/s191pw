<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function mostrarFormulario()
    {
        return view('formUsuarios');
    }

    public function guardarUsuario(Request $request)
    {
        // Lógica para guardar el usuario
    }
}
