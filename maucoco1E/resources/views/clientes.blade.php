

@extends ('layouts.plantilla1')

@section('titulo','formulario clientes')

{{--para encerrar los contenidos y me de una buena estructura--}}

  @section('contenido')

{{--inicia la tarjeta de formulario--}}
<div class="container mt-5 col-md-8">

  @foreach ($consulta as $cliente)

<div class="card text-justify font-monospace">
    <div class="card-header fs-5 text-primary">
        {{$cliente->nombre}} - {{$cliente->apellido}} 
    </div>

    <div class="card-body">
        <h5 class="fw-bold"> {{$cliente->correo}}</h5>
        <h5 class="fw-medium"> {{$cliente->telefono}}</h5>
        <p class="card-text fw-lihgter"></p>
    </div>

    <div class="card-footer text-muted">
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-list-stars"></i> Opciones
            </button>
            <ul class="dropdown-menu">
                <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#update{{$cliente->id}}">
                    <i class="bi bi-pencil-square"></i>Editar 
                  </button>
                <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#destroy{{$cliente->id}}">
                    <i class="bi bi-trash"></i> Borrar 
                  </button>
            </ul>
          </div> 
    </div>
    @include('options');
  </div>
  
  
  @endforeach
</div>

{{--para delimitar la seccion de codigo--}}
@endsection