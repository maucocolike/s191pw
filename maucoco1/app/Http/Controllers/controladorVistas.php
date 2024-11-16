<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

class controladorVistas extends Controller
{
   
    public function select(){
        //tarjetas del cliente
        return view('/clientes');
    }

    public function procesaCliente(validadorCliente $peticion){
        //return 'la info del cliente llego al controlador';

        
    }


}
