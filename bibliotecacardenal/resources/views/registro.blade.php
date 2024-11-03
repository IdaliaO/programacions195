@extends('layouts.plantilla')

@section('titulo', 'Registrar Libro')

@section('contenido')

<div class="container mt-5 col-md-6">
@if(session('exito'))
    <x-Alert tipo="success">{{ session('exito') }}</x-Alert>
@endif

@if(session('exito'))
<script>
  Swal.fire({
    title: "Respuesta del servidor",
    text: '{{ session('exito') }}',
    icon: "success"
  });
</script>
@endif
  
  
<div class="card">
  <div class="card-header fs-5 text-center text-primary">
    {{__('Registro de Libros')}}
  </div>

  <div class="card-body text-justify">
    <form action="/registrar-libro" method="POST">
      @csrf
      <div class="mb-3">
        <label for="isbn" class="form-label">{{__('ISBN (13 dígitos):')}}</label>
        <input type="text" class="form-control" name="txtisbn" value="{{ old('txtisbn') }}">
        <small class="text-danger fst-italic">{{ $errors->first('txtisbn') }}</small>
      </div>

      <div class="mb-3">
        <label for="titulo" class="form-label">{{__('Título:')}}</label>
        <input type="text" class="form-control" name="txttitulo" value="{{ old('txttitulo') }}">
        <small class="text-danger fst-italic">{{ $errors->first('txttitulo') }}</small>
      </div>

      <div class="mb-3">
        <label for="autor" class="form-label">{{__('Autor:')}}</label>
        <input type="text" class="form-control" name="txtautor" value="{{ old('txtautor') }}">
        <small class="text-danger fst-italic">{{ $errors->first('txtautor') }}</small>
      </div>

      <div class="mb-3">
        <label for="paginas" class="form-label">{{__('Número de páginas:')}}</label>
        <input type="number" class="form-control" name="txtpaginas" value="{{ old('txtpaginas') }}">
        <small class="text-danger fst-italic">{{ $errors->first('txtpaginas') }}</small>
      </div>

      <div class="mb-3">
        <label for="anio" class="form-label">{{__('Año de publicación:')}}</label>
        <input type="number" class="form-control" name="txtanio" value="{{ old('txtanio') }}">
        <small class="text-danger fst-italic">{{ $errors->first('txtanio') }}</small>
      </div>

      <div class="mb-3">
        <label for="editorial" class="form-label">{{__('Editorial:')}}</label>
        <input type="text" class="form-control" name="txteditorial" value="{{ old('txteditorial') }}">
        <small class="text-danger fst-italic">{{ $errors->first('txteditorial') }}</small>
      </div>

      <div class="mb-3">
        <label for="email_editorial" class="form-label">{{__('Correo electrónico de la editorial:')}}</label>
        <input type="email" class="form-control" name="txtemail_editorial" value="{{ old('txtemail_editorial') }}">
        <small class="text-danger fst-italic">{{ $errors->first('txtemail_editorial') }}</small>
      </div>
  </div>

  <div class="card-footer text-muted">
    <div class="d-grid gap-2 mt-2 mb-1">
      <button type="submit" class="btn btn-success btn-sm">{{__('Registrar Libro')}}</button>
    </div>
  </form>
  </div>
</div>
</div>
@endsection
