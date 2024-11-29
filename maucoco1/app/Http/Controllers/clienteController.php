<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorCliente;
use App\Models\Cliente;


class clienteController extends Controller
{

    public function home(){
        //inicio
        return view('inicio');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultarClientes=DB::table('cliente')-> get();
        return view('clientes', compact('consultarClientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('formulario');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorCliente $request)
    {
        //aqui vamos a hacer el insert
        DB::table('cliente')->insert([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);
        $usuario= $request->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);

        return to_route('formu');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'telefono' => 'required|string|max:15',
        ]);

        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());

        return to_route('consulta')->with('exito', 'Cliente actualizado con éxito');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Método para eliminar un cliente
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return redirect()->back()->with('exito', 'Cliente eliminado con éxito');
    
    }
}
