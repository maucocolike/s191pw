@extends('layouts.plantilla')

@section('titulo', 'Detalle de Habitación - Turista sin Maps')

@section('contenido')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Detalle de Habitación</h1>
        <input type="text" placeholder="Buscar..." class="form-control w-25">
    </div>

    <div class="room-detail-container">
        <!-- Carrusel de imágenes -->
        <div class="room-image-carousel position-relative">
            <button class="btn btn-light position-absolute top-50 start-0 translate-middle-y" onclick="previousImage()">&#x276E;</button>
            <img id="roomImage" src="https://via.placeholder.com/400" alt="Imagen de la habitación" class="rounded mx-auto d-block">
            <button class="btn btn-light position-absolute top-50 end-0 translate-middle-y" onclick="nextImage()">&#x276F;</button>
        </div>

        <!-- Información de la habitación -->
        <div class="room-info mt-4">
            <h3><a href="#" class="text-decoration-none text-primary">Habitación Deluxe Stadia Suites</a></h3>
            <p>
                Descripción detallada de la habitación. Incluye comodidades, vista y características especiales.
            </p>

            <!-- Calendario de selección de fechas -->
            <div class="mb-3">
                <label for="calendar" class="form-label">Seleccione su fecha de estadía:</label>
                <input type="text" id="calendar" class="form-control">
            </div>

            <!-- Precio y métodos de pago -->
            <div class="room-price text-success">$2109.60 MXN</div>
            <div class="payment-methods d-flex align-items-center">
                <img src="https://via.placeholder.com/40x20?text=VISA" alt="Visa" class="me-2">
                <img src="https://via.placeholder.com/40x20?text=PayPal" alt="PayPal" class="me-2">
                <img src="https://via.placeholder.com/40x20?text=Mastercard" alt="Mastercard" class="me-2">
                <img src="https://via.placeholder.com/40x20?text=Amex" alt="Amex">
            </div>
            <p class="mt-3">Información adicional de pago y términos.</p>

            <!-- Botón de confirmación de pago -->
            <div class="text-center mt-4">
                <button class="btn btn-primary confirm-button">Confirmar Pago</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>
<script>
    // Función para inicializar el calendario
    flatpickr("#calendar", {
        enableTime: false,
        dateFormat: "Y-m-d",
        minDate: "today"
    });

    // Simulación de un carrusel de imágenes
    const images = [
        "https://via.placeholder.com/400",
        "https://via.placeholder.com/400?text=Imagen+2",
        "https://via.placeholder.com/400?text=Imagen+3"
    ];
    let currentImageIndex = 0;

    function updateImage() {
        document.getElementById("roomImage").src = images[currentImageIndex];
    }

    function previousImage() {
        currentImageIndex = (currentImageIndex > 0) ? currentImageIndex - 1 : images.length - 1;
        updateImage();
    }

    function nextImage() {
        currentImageIndex = (currentImageIndex < images.length - 1) ? currentImageIndex + 1 : 0;
        updateImage();
    }
</script>
@endsection
