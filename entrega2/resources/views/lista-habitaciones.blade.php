<!DOCTYPE html>
<html lang="es">
<head>
    <!-- http://127.0.0.1:8000/lista-habitaciones -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Habitaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            display: flex;
            flex-direction: row;
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        .card img {
            width: 200px;
            height: auto;
            border-radius: 8px;
        }
        .card-body {
            flex: 1;
            padding-left: 20px;
        }
        .card-title a {
            text-decoration: none;
            color: #007bff;
        }
        .card-text {
            color: #555;
        }
        .card-price {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        .card-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Lista de Habitaciones</h1>
            <input type="text" placeholder="Buscar..." class="form-control w-25">
        </div>

        <!-- Ejemplo de Card de Habitación -->
        <div class="card">
            <img src="https://via.placeholder.com/200" alt="Imagen de la habitación">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="#">Habitación Deluxe Stadia Suites</a>
                </h5>
                <p class="card-text">
                    Descripción breve de la habitación con información de comodidades, vista y servicios adicionales.
                </p>
            </div>
            <div class="d-flex flex-column align-items-end justify-content-between">
                <div class="card-price">$2109.60</div>
                <div class="card-actions">
                    <button class="btn btn-sm btn-outline-primary" onclick="editarHabitacion()">Editar</button>
                    <button class="btn btn-sm btn-outline-danger" onclick="eliminarHabitacion()">Eliminar</button>
                </div>
            </div>
        </div>

        <!-- Repite el card de arriba para cada habitación -->
        <div class="card">
            <img src="https://via.placeholder.com/200" alt="Imagen de la habitación">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="#">Habitación VIP Stadia Suites</a>
                </h5>
                <p class="card-text">
                    Descripción breve de la habitación con información de comodidades, vista y servicios adicionales.
                </p>
            </div>
            <div class="d-flex flex-column align-items-end justify-content-between">
                <div class="card-price">$1730.60</div>
                <div class="card-actions">
                    <button class="btn btn-sm btn-outline-primary" onclick="editarHabitacion()">Editar</button>
                    <button class="btn btn-sm btn-outline-danger" onclick="eliminarHabitacion()">Eliminar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function editarHabitacion() {
            alert("Funcionalidad de edición no implementada aún.");
            // Aquí puedes abrir un modal o redirigir a una vista de edición
        }

        function eliminarHabitacion() {
            if (confirm("¿Estás seguro de que deseas eliminar esta habitación?")) {
                alert("Habitación eliminada.");
                // Aquí se debería hacer una solicitud para eliminar la habitación
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
