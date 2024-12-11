@extends('layouts.plantilla')

@section('titulo', 'Mis Reservaciones - Turista sin Maps')

@section('contenido')
<div class="container mt-4">
    <h1 class="mb-4">Mis Reservaciones</h1>

    <!-- Lista de reservaciones -->
    <div class="accordion" id="reservacionesAccordion">
        <!-- Reservación de habitación -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Habitación Deluxe Stadia Suite - 2024-12-15 a 2024-12-20
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#reservacionesAccordion">
                <div class="accordion-body">
                    <p><strong>Total de noches:</strong> 5</p>
                    <p><strong>Precio:</strong> $10,548.00 MXN</p>
                    <p><strong>Dirección:</strong> Av. Reforma 123, Ciudad de México</p>
                    <p><strong>Estado:</strong> Confirmado</p>
                    <!-- Botones de acción -->
                    <button class="btn btn-success btn-sm">Pagar Reservación</button>
                    <button class="btn btn-danger btn-sm">Cancelar Reservación</button>
                </div>
            </div>
        </div>

        <!-- Reservación de vuelo -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Vuelo Ciudad de México - Cancún - 2024-12-15
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#reservacionesAccordion">
                <div class="accordion-body">
                    <p><strong>Fecha:</strong> 2024-12-15</p>
                    <p><strong>Precio:</strong> $3,000.00 MXN</p>
                    <p><strong>Estado:</strong> Confirmado</p>
                    <!-- Botones de acción -->
                    <button class="btn btn-success btn-sm">Pagar Reservación</button>
                    <button class="btn btn-danger btn-sm">Cancelar Reservación</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
