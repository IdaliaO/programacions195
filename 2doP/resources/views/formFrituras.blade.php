<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>

@if(session('exito'))
    <x-Alert tipo="success">{{ session('exito') }}</x-Alert>
@endif


  <h1 class="text-center text-success mt-5 mb-4">
{{__('Registro Frituras')}}
  </div>
  <div class="container col-md-5">
        <form action="{{ route('rutaguardar') }}" method="POST">
            @csrf
            
        <div class="mb-3">
            <label for="nombre" class="form-label">{{__('Nombre:')}}</label>
            <input type="text" class="form-control" name="txtnombre" >
            <small class="text-danger fst-italic">{{ $errors->first('txtnombre') }}</small>
        </div>

        <div class="mb-3">
            <label for="sabor" class="form-label">{{__('Sabor(s):')}} </label>
            <input type="text" class="form-control" name="txtsabor">
            <small class="text-danger fst-italic">{{ $errors->first('txtsabor') }}</small>

        </div>                

        <div class="mb-3">
            <label  for="peso" class="form-label">{{__('Peso:')}} </label>
            <input type="text" class="form-control" name="txtpeso" >
            <small class="text-danger fst-italic">{{ $errors->first('txtpeso') }}</small>
   </div>
   
            <div class="d-grid gap-2 mt-2 mb-1">
                <button type="submit" class="btn btn-primary">{{ __('Guardar Fritura') }}</button>
            </div>
        
    </form>
</div>
</body>
</html>