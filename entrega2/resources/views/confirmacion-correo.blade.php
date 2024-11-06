<!DOCTYPE html>
<html lang="es">
<head>
<!-- http://127.0.0.1:8000/confirmacion-correo  -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Correo Electrónico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .container {
            text-align: center;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        .input-code {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin: 20px 0;
        }
        .input-code input {
            width: 50px;
            height: 50px;
            font-size: 24px;
            text-align: center;
            border: 2px solid #ddd;
            border-radius: 5px;
        }
        .btn-confirm {
            margin-top: 20px;
            font-size: 18px;
            padding: 10px 20px;
        }
        .link {
            display: block;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
        }
        .link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<script>
    document.querySelectorAll('.input-code input').forEach((input, index, inputs) => {
        input.addEventListener('input', (e) => {
            if (e.target.value.length === 1 && inputs[index + 1]) {
                inputs[index + 1].focus();
            }
        });
    });
</script>
    <div class="container">
        <h2>Por favor, confirma tu dirección de correo electrónico:</h2>
        <p>Enviamos un código de verificación a user1@gmail.com</p>
        <p>Escribe el código de verificación:</p>

        <!-- Código de verificación con campos individuales -->
        <div class="input-code">
            <input type="text" maxlength="1">
            <input type="text" maxlength="1">
            <input type="text" maxlength="1">
            <input type="text" maxlength="1">
            <input type="text" maxlength="1">
        </div>

        <!-- Botón para confirmar -->
        <button class="btn btn-primary btn-confirm">Confirmar</button>

        <!-- Link para reenviar el correo -->
        <a href="#" class="link">Click aquí para reenviar correo</a>
    </div>

    <!-- Incluye Bootstrap JS y Popper (opcional para funcionalidades adicionales) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
