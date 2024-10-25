<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Convertidor MB/GB/TB</title>

    <style>
        body {
            background-color: #2c3e50;
            color: #ecf0f1;
            font-family: 'Arial', sans-serif;
        }

        .convertidor-container {
            margin-top: 80px;
            background-color: #34495e;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            max-width: 500px;
            margin: 0 auto;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #ecf0f1;
        }

        .form-label {
            color: #bdc3c7;
            font-size: 1.2rem;
        }

        .form-control {
            background-color: #2c3e50;
            color: #ecf0f1;
            border: 2px solid #34495e;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            background-color: #1a252f;
            border-color: #1abc9c;
            box-shadow: none;
        }

        .btn-custom {
            background-color: transparent;
            border: 2px solid #1abc9c;
            color: #1abc9c;
            padding: 10px 20px;
            font-size: 1.1rem;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #1abc9c;
            color: #fff;
        }

        .alert-info {
            background-color: #16a085;
            border-radius: 10px;
            padding: 15px;
            color: white;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <div class="convertidor-container text-center">
        <h1>Convertidor MB a GB / GB a MB</h1>
        
        <form action="{{ route('convertir') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="mb" class="form-label">Ingresa MB:</label>
                <input type="number" name="mb" id="mb" class="form-control" placeholder="Ejemplo: 1024">
            </div>
            <div class="mb-4">
                <label for="gb" class="form-label">Ingresa GB:</label>
                <input type="number" name="gb_to_mb" id="gb" class="form-control" placeholder="Ejemplo: 1">
            </div>
            <button type="submit" class="btn btn-custom">Convertir</button>
        </form>

        @if (isset($conversion))
            <div class="alert alert-info mt-4">
                {{ $conversion }}
            </div>
        @endif
    </div>
</body>
</html>
