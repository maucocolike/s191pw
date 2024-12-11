@extends('layouts.plantilla')

@section('titulo', 'Detalles del Hotel - Turista sin Maps')

@section('contenido')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Detalles del Hotel</h1>
        <a href="{{ route('busqueda_hoteles') }}" class="btn btn-secondary">Volver a la Búsqueda</a>
    </div>

    <!-- Información del Hotel -->
    <div class="card mb-4">
        <div class="row g-0">
            <div class="col-md-6">
                <!-- Galería de imágenes -->
                <div id="hotelCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://via.placeholder.com/600x400" class="d-block w-100" alt="Imagen del Hotel">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/600x400?text=Imagen+2" class="d-block w-100" alt="Imagen del Hotel">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/600x400?text=Imagen+3" class="d-block w-100" alt="Imagen del Hotel">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#hotelCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#hotelCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h2 class="card-title">Hotel Stadia Suites</h2>
                    <p class="card-text">
                        Disfruta de una experiencia única en este lujoso hotel con vistas impresionantes, servicios de alta calidad y una ubicación privilegiada.
                    </p>
                    <p><strong>Dirección:</strong> Av. Reforma 123, Ciudad de México</p>
                    <p><strong>Teléfono:</strong> +52 55 1234 5678</p>
                    <p><strong>Servicios Incluidos:</strong> WiFi, Piscina, Gimnasio, Restaurante, Servicio a la Habitación</p>
                    <p class="text-success"><strong>Precio desde:</strong> $2109.60 MXN por noche</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Habitaciones Disponibles -->
    <div class="mb-4">
        <h3>Habitaciones Disponibles</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Habitación">
                    <div class="card-body">
                        <h5 class="card-title">Habitación Deluxe</h5>
                        <p class="card-text">Comodidades exclusivas con vista al mar. Incluye desayuno.</p>
                        <p class="text-success"><strong>$2109.60 MXN</strong> por noche</p>
                        <a href="#" class="btn btn-primary">Reservar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Habitación">
                    <div class="card-body">
                        <h5 class="card-title">Suite Ejecutiva</h5>
                        <p class="card-text">Ideal para viajes de negocios, incluye acceso al lounge ejecutivo.</p>
                        <p class="text-success"><strong>$3109.60 MXN</strong> por noche</p>
                        <a href="#" class="btn btn-primary">Reservar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Habitación">
                    <div class="card-body">
                        <h5 class="card-title">Suite Familiar</h5>
                        <p class="card-text">Perfecta para familias, incluye áreas de juego y actividades para niños.</p>
                        <p class="text-success"><strong>$4109.60 MXN</strong> por noche</p>
                        <a href="#" class="btn btn-primary">Reservar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ubicación -->
    <div class="mb-4">
        <h3>Ubicación</h3>
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.276408074207!2d-99.1815822856485!3d19.429182986888076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff362f8c5cbb%3A0xc3c9b1b9b9b8a9b!2sAv.+Paseo+de+la+Reforma+123%2C+Cuauht%C3%A9moc%2C+06500+Ciudad+de+M%C3%A9xico%2C+CDMX%2C+M%C3%A9xico!5e0!3m2!1ses!2sus!4v1639599635789!5m2!1ses!2sus" 
            width="100%" 
            height="400" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy"></iframe>
    </div>
</div>
@endsection
