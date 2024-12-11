@extends('layouts.plantilla')

@section('titulo', 'Recuperar Contraseña - Turista sin Maps')

@section('contenido')
<div class="container mt-5">
    <h1 class="text-center mb-4">Recuperar Contraseña</h1>
    <p class="text-center">Introduce tu dirección de correo electrónico y te enviaremos un enlace para restablecer tu contraseña.</p>
    <form action="#" method="POST" class="mt-4">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="ejemplo@correo.com" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Enviar </button>
        </div>
    </form>
</div>
@endsection
