<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Examen 2do Parcial</title>
    @vite(['resources/app.js'])
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

    <h1 class="text-center text-primary mt-5 mb-4">Registro de usuarios</h1>

    <div class="container  col-md-4">

@if(session('exito'))
<x-Alert tipo="success">{{session('exito')}}</x-Alert>
@endif

@session('exito')
    <x-Alert tipo="warning"> {{$value}} </x-Alert>
@endsession


<script>
    @if(session('mensaje'))
        Swal.fire({
            icon: 'success',
            title: '¡Éxito!',
            text: '{{ session('mensaje') }}'
        });
    @endif
</script>


    <form method="POST" action="{{route('guardar_usuario') }}">
    @csrf
        <div class="mb-3">
            <label  class="form-label">Correo: </label>
            <input type="text" class="form-control" name="TxtCorreo" >
            <small class="text-danger"> {{ $errors->first('TxtCorreo')}}</small>
        </div>

        <div class="mb-3">
            <label class="form-label">Contraseña: </label>
            <input type="text" class="form-control" name="TxtContra">
            <small class="text-danger"> {{ $errors->first('TxtContra')}}</small>
        </div>                

        <div class="mb-3">
            <label  class="form-label">Edad: </label>
            <input type="text" class="form-control" name="TxtEdad" >
            <small class="text-danger"> {{ $errors->first('TxtEdad')}}</small>
        </div>



        <button type="" class="btn btn-danger "> Guardar Usuario</button>


</div>


</body>
</html>