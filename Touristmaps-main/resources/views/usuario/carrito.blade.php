@extends('layouts.plantilla')

@section('titulo', 'Carrito de Compras - Turista sin Maps')

@section('contenido')
<div class="container mt-4">
    <h1 class="mb-4">Carrito de Compras</h1>

    <!-- Lista de items en el carrito -->
    <div class="list-group">
        <div class="list-group-item d-flex justify-content-between align-items-center">
            <div>
                <h5 class="mb-1">Habitación Deluxe Stadia Suite</h5>
                <p class="mb-1">Fecha: 2024-12-15 a 2024-12-20</p>
                <p class="mb-1">Total de noches: 5</p>
                <p class="mb-0 text-success"><strong>$10,548.00 MXN</strong></p>
            </div>
            <button class="btn btn-danger btn-sm">Eliminar</button>
        </div>
        <div class="list-group-item d-flex justify-content-between align-items-center">
            <div>
                <h5 class="mb-1">Vuelo Ciudad de México - Cancún</h5>
                <p class="mb-1">Fecha: 2024-12-15</p>
                <p class="mb-0 text-success"><strong>$3,000.00 MXN</strong></p>
            </div>
            <button class="btn btn-danger btn-sm">Eliminar</button>
        </div>
    </div>

    <!-- Resumen de total -->
    <div class="mt-4">
        <h4>Total: <span class="text-success">$13,548.00 MXN</span></h4>
        <button class="btn btn-primary" onclick="window.location.href='{{ route('pago') }}'">Continuar al Pago</button>
    </div>
</div>
@endsection
