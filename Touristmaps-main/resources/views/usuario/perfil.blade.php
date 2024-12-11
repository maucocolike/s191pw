@extends('layouts.plantilla')

@section('titulo', 'Perfil - Turista sin Maps')

@section('contenido')
<div class="profile-container">
    <div class="profile-info">
        <h1>
            <span class="profile-icon">👤</span> 
            Nombre del Usuario <!-- Nombre estático -->
            <span class="edit-icon-name">✎</span>
        </h1>
        <p>Entusiasta viajero y explorador que ha dedicado gran parte de su vida a descubrir nuevas culturas y destinos alrededor del mundo...</p>

        <!-- Botón que dirige al historial de reservaciones -->
        <a href="{{ route('historialReservaciones') }}" class="btn btn-primary history-button">Historial de Reservaciónes Anteriores</a>

        <!-- Botón que dirige a la página de reservaciones -->
        <a href="{{ route('reservaciones') }}" class="btn btn-success mt-3">Ir a Reservaciones</a>

        <!-- Botón para cerrar sesión -->
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-danger mt-3">Cerrar Sesión</button>
        </form>
    </div>
</div>
@endsection
