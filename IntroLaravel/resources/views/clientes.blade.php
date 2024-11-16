@extends('layouts.plantilla1')
@section('titulo', 'Clientes')
@section('contenido')
<div class="container mt-5 col-md-8">
@foreach($consultaClientes as $clientes)
   
<div class= "card text-justify font-monospace mt-3">
    <div class="card-header fs-5 text -primary">
    {{ $clientes->Nombre}}
</div>
<div class="card-body">
<h5 class="fw-bold">{{ $clientes->Apellido}}</h5>
    <h5 class="fw-bold">{{ $clientes->Correo}}</h5>
   <h5 class="fw-medium">{{ $clientes->Telefono}}</h5>
<p class="card-text fw-ligther"></p>
</div>
<div class="card-footer  text-muted">
    <button type="submit" class="btn btn-warning btn-sm">Actualizar</button>
    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
</div>
</div>
@endforeach

@endsection