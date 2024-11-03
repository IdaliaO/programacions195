<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('/css/operaciones.css') }}" rel="stylesheet">
    @vite('resources/js/app.js')
    <title>Operaciones</title>
</head>
<body>
    <div class="container text-center altura-completa d-flex flex-column justify-content-center align-items-center">
        <h2 class="font-monospace"> Convertidor de unidades de almacenamiento</h2>
        <form action= "{{route('rutaoperaciones')}}" method=POST>
            @csrf
            <div class="form-group">
            <label for="valor">Cantidad:</label>
            <input type="number" step="any" name="valor" class="form-control" required>
    </div>
    <div class="form-group mt-3">
        <label for="unidad">Seleccione unidad a convertir:</label>
        <select name="unidad" id="unidad" class="form-select">
            <option value="mb_a_gb">Mb a Gb</option>
            <option value="gb_a_mb">Gb a Mb</option>
            <option value="gb_a_tb">Gb a Tb</option>
            <option value="tb_a_gb">Tb a Gb</option>
    </select>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Convertir</button>
    </form>
    @if (isset($resultado))
    <div class="alert alert-info mt-3">
        <strong>Resultado:</strong> {{$resultado}}
    </div>
    @endif
    </div>
    <integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>