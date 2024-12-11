<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'TxtCorreo'=> 'required|email',
            'TxtContra'=> 'required',
            'TxtEdad'=> 'required|min:1|max:2'
        ];
    }

    public function guardarUsuario (UsuarioRequest $request){
        $datos = $request ->validated();

        Usuarios::create($datos);

        return response()->json(['mensaje','usuario guardado con exito']);
    }
}
