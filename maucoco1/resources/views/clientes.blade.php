@extends ('layouts.plantilla1')
@section('contenido')


{{--para encerrar los contenidos y me de una buena estructura--}}



<div class="container mt-5 col-md-8">
  @foreach($consultarClientes as $cliente)
<div class="card text-justify font-monospace">
    <div class="card-header fs-5 text-primary">
    {{$cliente->nombre}}
    </div>

    <div class="card-body">
        <h5 class="fw-bold">{{$cliente->correo}}</h5>
        <h5 class="fw-medium">{{$cliente->telefono}}</h5>
        <p class="card-text fw-lihgter"></p>
    </div>

    <div class="card-footer text-muted">
    {{-- Botón de actualizar --}}
    <a href="{{ route('edit', $cliente->id) }}" class="btn btn-warning btn-sm">{{ __('Actualizar') }}</a>

        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este cliente?')">
            {{ __('Eliminar') }}
        </button>
    </form>
    </div>

</div>
  @endforeach
</div>

 @endsection