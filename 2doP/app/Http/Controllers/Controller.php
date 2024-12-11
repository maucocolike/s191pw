<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\FormRequest;

abstract class Controller
{
    public function mostrarFormulario(){
    return view('formUsuarios');
    }

    public function procesaCliente(Request $request){
            
    }
}


