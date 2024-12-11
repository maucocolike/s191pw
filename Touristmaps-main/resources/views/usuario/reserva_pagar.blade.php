@extends('layouts.plantilla')

@section('titulo', 'Resumen de Reserva - Turista sin Maps')

@section('contenido')
<div class="container">
    <header class="text-center bg-dark text-white py-3">
        <h1>Resumen de Reserva</h1>
    </header>

    <div class="card mt-4">
        <img src="https://via.placeholder.com/150" alt="Imagen de la habitación" class="rounded">
        <div class="card-info">
            <h3>Habitación Deluxe Stadia Suite</h3>
            <p>Descripción breve de la habitación con todos sus servicios y comodidades.</p>
            <p>Check-in: 3:00 PM | Check-out: 12:00 PM</p>
            <p>Capacidad: 2 adultos, 1 niño</p>
            <div class="price text-success">$2109.60 MXN</div>
            <div class="payment-options d-flex mt-2">
                <img src="https://via.placeholder.com/30?text=VISA" alt="VISA" class="me-2">
                <img src="https://via.placeholder.com/30?text=PayPal" alt="PayPal" class="me-2">
                <img src="https://via.placeholder.com/30?text=MC" alt="MasterCard" class="me-2">
                <img src="https://via.placeholder.com/30?text=AMEX" alt="American Express">
            </div>
            <button class="btn btn-dark mt-3 btn-pagar">Pagar</button>
        </div>
    </div>
</div>
@endsection
