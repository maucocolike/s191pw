<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        //inicio
        return view('inicio');
    }

    public function insert(){
        //formulario
        return view('formulario');
    }

    public function select(){
        //tarjetas del cliente
        return view('clientes');
    }


}
