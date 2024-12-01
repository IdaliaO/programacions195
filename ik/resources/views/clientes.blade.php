@extends('layouts.plantilla1')
@section('titulo', 'Clientes')
@section('contenido')
<div class="container mt-5 col-md-8">
    @foreach($consulta as $item)
        <div class="card text-justify font-monospace mt-3">
            <div class="card-header fs-5 text-primary">
                {{$item->Nombre}}
                 </div>
                    <div class="card-body">
                 <h5 class="fw-bold">{{ $item->Apellido }}</h5>
                <h5 class="fw-bold">{{$item->Correo}}</h5>
                <h5 class="fw-medium">{{$item->Telefono}}</h5>
                <p class="card-text fw-lighter"></p>
                </div>
            <div class="card-footer text-muted">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list-stars"></i> Opciones
                    </button>
                    <ul class="dropdown-menu">
                        
                    <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#update{{$item->id}}">
                    <i class="bi bi-pencil-square"></i> Editar
                            </button>

                            <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#destroy{{$item->id}}">
                                <i class="bi bi-trash"></i> Borrar
                            </button>

                    </ul>
                </div>
            </div>
        </div>
        @include('options')
    @endforeach
</div>
@endsection
