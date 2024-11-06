<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class micontrolador extends Controller
{
    public function confirmarTelefono()
    {
        // Aquí puedes cargar una vista o procesar la solicitud
        return view('confirmacion-telefono'); // Asegúrate de que esta vista existe en resources/views
    }
}
