<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRequest;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class controlador extends Controller
{
    public function agRincipal()
    {
        // Aquí puedes cargar una vista o procesar la solicitud
        return view('principal'); // Asegúrate de que esta vista existe en resources/views
    }

    public function Regis()
    {
        // Aquí puedes cargar una vista o procesar la solicitud
        return view('formularioContacto'); // Asegúrate de que esta vista existe en resources/views
    }

    public function store(validadorRequest $request)
    {
        //aqui vamos a hacer el insert
        DB::table('contactos')->insert([
            "nombre"=>$request->input('nombre'),
            "correo"=>$request->input('correo'),
            "telefono"=>$request->input('telefono'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);

         return to_route('principal');

    }

}
