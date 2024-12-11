@extends('layouts.plantilla')

@section('titulo', 'Inicio - Turista sin Maps')

@section('contenido')



    <div class="container">
        <h2>Búsqueda de vuelos</h2>
        
        <div class="search-section">
            <input type="text" placeholder="¿A dónde quieres viajar?" class="form-control">
            
            <div>
                <label for="fecha" class="form-label">Fechas:</label>
                <input type="date" id="fecha" class="form-control" style="max-width: 200px;">
            </div>

            <div class="seat-select">
                <label for="asientos" class="form-label">Número de asientos:</label>
                <select id="asientos" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6+</option>
                </select>
            </div>

            <a href="{{ route('resultados_vuelos') }}" class="btn-search">Buscar vuelo</a>

            <a href="{{ route('busqueda_hoteles') }}" class="link-hotels">¿Quieres buscar Hoteles?</a>
        </div>
    </div>
    @endsection