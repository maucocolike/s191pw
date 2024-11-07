<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\FormRequest;

abstract class Controller
{
    public function FormRequest(Request $peticion){
        

        $validacion= $peticion->validate([
            'TxtCorreo'=> 'required|email',
            'TxtContra'=> 'required',
            'TxtEdad'=> 'required|min:1|max:2'
        ]);
        
        $usuario= $peticion->input('TxtCorreo');
        session()->flash('exito','Se guardo el usuario: '.$usuario);
        return to_route('formUsuarios')
    }
}

