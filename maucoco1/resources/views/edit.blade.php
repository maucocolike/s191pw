@extends('layouts.plantilla1')
@section('contenido')

<div class="container mt-5 col-md-6">
    <h3>Editar Cliente</h3>
    <form action="{{ route('actualizar', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $cliente->nombre }}" required>
        </div>

        <div class="mb-3">
            <label for="correo" class="form-label">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" value="{{ $cliente->correo }}" required>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $cliente->telefono }}" required>
        </div>

        <form action="{{ route('actualizar', $cliente->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- Necesario para indicar que es un método PUT -->
    <button type="submit" class="btn btn-warning btn-sm">{{ __('Actualizar') }}</button>
</form>
        <a href="{{ route('consulta') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

@endsection
