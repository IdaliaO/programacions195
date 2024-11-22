@extends('layouts.plantilla1')
@section('titulo', 'Clientes')
@section('contenido')
<div class="container mt-5 col-md-8">
    @foreach($consultaClientes as $clientes)
        <div class="card text-justify font-monospace mt-3">
            <div class="card-header fs-5 text-primary">
                {{ $clientes->Nombre }}
            </div>
            <div class="card-body">
                <h5 class="fw-bold">{{ $clientes->Apellido }}</h5>
                <h5 class="fw-bold">{{ $clientes->Correo }}</h5>
                <h5 class="fw-medium">{{ $clientes->Telefono }}</h5>
                <p class="card-text fw-lighter"></p>
            </div>
            <div class="card-footer text-muted">
                <form action="{{ route('editarCliente', $clientes->id) }}" method="GET" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-warning btn-sm">Actualizar</button>
                </form>
                <form action="{{ route('eliminarCliente', $clientes->id) }}" method="POST" id="form-eliminar-{{ $clientes->id }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmarEliminar({{ $clientes->id }})">Eliminar</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '¡Éxito!',
            text: '{{ session('success') }}',
            confirmButtonText: 'Aceptar'
        });
    </script>
@endif
<script>
    function confirmarEliminar(clienteId) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sí, eliminarlo',
            cancelButtonText: 'Cancelar',
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('form-eliminar-' + clienteId).submit();
            }
        });
    }
</script>
@endsection
