<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Portada de Inicio</title>
    
    <style>
        body {
            background-color: #2c3e50;
        }
        .portada {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .logo {
            max-width: 150px;
            margin-bottom: 20px;
        }
        h1, h3 {
            color: #333;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            margin-top: 30px;
            transition: background-color 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #2c3e50;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="portada text-center">
            <img src="{{ asset ('images/LOGO UNIV.png') }}" alt="Logo UPQ" class="logo">


            <h1>Mauricio Alemán Sosa</h1>
            <h3>Universidad Politécnica de Querétaro</h3>
            <h4>Grupo: S191</h4>

 
            <a href="{{ route('repaso1') }}" class="btn btn-custom">Ir al contenido</a>
        </div>
    </div>

</body>
</html>
