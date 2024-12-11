@extends('layouts.plantilla')

@section('titulo', 'Resultados de Vuelos - Turista sin Maps')

@section('contenido')
<div class="container my-5">
    <h1 class="text-center">Resultados de Búsqueda de Vuelos</h1>
    <p>Mostrando resultados para el destino <strong>CDMX</strong> en la fecha <strong>27/11/2024</strong>.</p>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Número de Vuelo</th>
                <th>Aerolínea</th>
                <th>Hora de Salida</th>
                <th>Hora de Llegada</th>
                <th>Precio</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1234</td>
                <td>AeroMexico</td>
                <td>10:00 AM</td>
                <td>12:00 PM</td>
                <td>$1500</td>
                <td><a href="#" class="btn btn-primary">Reservar</a></td>
            </tr>
            <tr>
                <td>5678</td>
                <td>Volaris</td>
                <td>02:00 PM</td>
                <td>04:30 PM</td>
                <td>$2000</td>
                <td><a href="#" class="btn btn-primary">Reservar</a></td>
            </tr>
            <tr>
                <td colspan="6" class="text-center">No se encontraron más vuelos disponibles.</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
