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

    public function procesaCliente(Request $peticion){
        //return 'la info del cliente llego al controlador';

        $validacion= $peticion->validate([
            'txtnombre'=> 'required|min:3|max:19',
            'txtapellido'=> 'required',
            'txtcorreo'=> 'required|email',
            'txttelefono'=> 'required|numeric',

            

        ]);

        $usuario= $peticion->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);

        return to_route('formu');
    }


}
