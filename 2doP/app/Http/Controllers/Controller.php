<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\FormRequest;

abstract class Controller
{
        
    Route::get('/', function () {
        return view('formUsuarios');
    });

    $usuario= $peticion->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);

        return to_route('formu');
    
        public function procesaCliente(validadorCliente $peticion){
            
        }
}


