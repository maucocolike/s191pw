<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/fondo.css') }}">
    <title>@yield('titulo')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Final 2 parcial</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('registrar')?" aria-current="page" href="/registrar">Formulario Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/consultar">Listado Clientes</a> <!-- falta configurar desde aqui para ver el listado -->
        </li>
      </ul>
    </div>
  </div>
</nav>

{{--renderiza la seccion que se le manda--}}
    @yield('contenido')

</body>
</html>