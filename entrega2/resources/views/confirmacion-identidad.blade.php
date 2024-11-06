<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Identidad</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f7f7f7;
        }
        .container {
            text-align: center;
            background-color: white;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 300px;
        }
        h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }
        p {
            font-size: 16px;
            margin-bottom: 20px;
            color: #666;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        .btn-recover {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            margin-bottom: 15px;
        }
        .btn-recover:hover {
            background-color: #0056b3;
        }
        .link {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }
        .link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Confirma tu identidad</h2>
        <p>Escriba el código que enviamos a (nombre)@gmail.com</p>
        <input type="text" placeholder="Código de verificación">
        <button class="btn-recover">Recuperar</button>
        <a href="{{ route('confirmacion.telefono') }}" class="link">Prueba con tu número de teléfono</a>
    </div>
</body>
</html>
