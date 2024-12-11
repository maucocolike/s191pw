@extends('layouts.plantilla')

@section('titulo', 'Pago - Turista sin Maps')

@section('contenido')
<div class="container mt-4">
    <h1 class="mb-4">Pago</h1>
    
    <!-- Información del resumen del pago -->
    <div class="card mb-4">
        <div class="card-body">
            <h4 class="card-title">Resumen de la Compra</h4>
            <p><strong>Habitación Deluxe Stadia Suite</strong> - $10,548.00 MXN</p>
            <p><strong>Vuelo Ciudad de México - Cancún</strong> - $3,000.00 MXN</p>
            <h5 class="mt-3">Total: <span class="text-success">$13,548.00 MXN</span></h5>
        </div>
    </div>
    
    <!-- Formulario para seleccionar método de pago -->
    <form action="{{ route('confirmar_pago_hotel') }}" method="GET">
        <div class="mb-3">
            <label for="paymentMethod" class="form-label">Método de Pago</label>
            <select id="paymentMethod" class="form-select" required>
                <option value="" selected disabled>Selecciona un método de pago</option>
                <option value="visa">Visa</option>
                <option value="paypal">PayPal</option>
                <option value="mastercard">MasterCard</option>
                <option value="amex">American Express</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="cardNumber" class="form-label">Número de Tarjeta</label>
            <input type="text" id="cardNumber" class="form-control" placeholder="1234 5678 9101 1121" >
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="expiryDate" class="form-label">Fecha de Expiración</label>
                <input type="month" id="expiryDate" class="form-control" >
            </div>
            <div class="col-md-6 mb-3">
                <label for="cvv" class="form-label">CVV</label>
                <input type="text" id="cvv" class="form-control" placeholder="123" >
            </div>
        </div>
        <!-- Botón que redirige a confirmar pago -->
        <button type="submit" class="btn btn-primary">Confirmar Pago</button>
    </form>
</div>
@endsection
