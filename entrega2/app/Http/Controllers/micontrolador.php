<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class micontrolador extends Controller
{
    public function mostrarInicio()
    {
        return view('confirmacion-identidad');
    }

    public function confirmarTelefono()
    {
        return view('confirmacion-telefono');
    }
}

