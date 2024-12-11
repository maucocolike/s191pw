@extends('layouts.plantilla')

@section('titulo', 'Gestión de Hoteles')

@section('contenido')
<div class="container mt-5">
    <h1 class="text-center mb-4">Gestión de Hoteles</h1>

    <!-- Botón para agregar nuevo hotel -->
    <div class="mb-3 text-end">
        <a href="#" class="btn btn-primary">Agregar Nuevo Hotel</a>
    </div>

    <!-- Tabla de hoteles -->
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Datos simulados directamente en la vista -->
            <tr>
                <td>1</td>
                <td>Hotel Paraíso</td>
                <td>Calle Principal 123</td>
                <td>555-1234</td>
                <td>info@paraiso.com</td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Editar</a>
                    <button class="btn btn-sm btn-danger" onclick="confirm('¿Está seguro de eliminar este hotel?')">Eliminar</button>
                    <a href="{{ route('admin.habitacionadmin') }}" class="btn btn-sm btn-secondary">Editar Habitación</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Hotel Sol y Mar</td>
                <td>Avenida del Mar 456</td>
                <td>555-5678</td>
                <td>contacto@solymar.com</td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Editar</a>
                    <button class="btn btn-sm btn-danger" onclick="confirm('¿Está seguro de eliminar este hotel?')">Eliminar</button>
                    <a href="{{ route('admin.habitacionadmin') }}" class="btn btn-sm btn-secondary">Editar Habitación</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Hotel Luna</td>
                <td>Bulevar Luna Nueva 789</td>
                <td>555-9876</td>
                <td>reservas@luna.com</td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Editar</a>
                    <button class="btn btn-sm btn-danger" onclick="confirm('¿Está seguro de eliminar este hotel?')">Eliminar</button>
                    <a href="{{ route('admin.habitacionadmin') }}" class="btn btn-sm btn-secondary">Editar Habitación</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
