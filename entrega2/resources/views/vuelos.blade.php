<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Vuelos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-4">
        <h2 class="mb-4">Lista de Vuelos</h2>
        
        <!-- Primer vuelo -->
        <div class="card mb-4">
            <div class="card-body d-flex align-items-center">
                <!-- Imagen de la aerolínea -->
                <div class="me-3" style="flex-shrink: 0; width: 100px; height: 100px;">
                    <img src="https://via.placeholder.com/100" alt="Logo Aerolínea" class="img-fluid" style="max-width: 100%; max-height: 100%; object-fit: cover;">
                </div>

                <!-- Información del vuelo -->
                <div class="flex-grow-1">
                    <h5 class="card-title mb-0">QRO ⇔ TIJ</h5>
                    <p class="text-muted">Vie., 7 feb. - Jue., 13 feb.</p>
                </div>

                <!-- Precio y botones -->
                <div class="text-end" style="min-width: 150px;">
                    <h4 class="mb-2">$6432.90</h4>
                    <button class="btn btn-sm btn-secondary me-2">Editar</button>
                    <button class="btn btn-sm btn-danger">Eliminar</button>
                </div>
            </div>
        </div>

        <!-- Segundo vuelo -->
        <div class="card mb-4">
            <div class="card-body d-flex align-items-center">
                <!-- Imagen de la aerolínea -->
                <div class="me-3" style="flex-shrink: 0; width: 100px; height: 100px;">
                    <img src="https://via.placeholder.com/100" alt="Logo Aerolínea" class="img-fluid" style="max-width: 100%; max-height: 100%; object-fit: cover;">
                </div>

                <!-- Información del vuelo -->
                <div class="flex-grow-1">
                    <h5 class="card-title mb-0">QRO ⇔ CD. JUAREZ</h5>
                    <p class="text-muted">Sáb., 15 feb. - Sáb., 8 mar.</p>
                </div>

                <!-- Precio y botones -->
                <div class="text-end" style="min-width: 150px;">
                    <h4 class="mb-2">$5670.88</h4>
                    <button class="btn btn-sm btn-secondary me-2">Editar</button>
                    <button class="btn btn-sm btn-danger">Eliminar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Incluye Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
