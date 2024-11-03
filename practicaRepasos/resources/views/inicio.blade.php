<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="{{ asset('/css/inicio.css') }}" rel="stylesheet">
    @vite('resources/js/app.js')
    <title>Mis datos</title>

</head>
<body>
    <div class="d-flex flex-column justify-content-center align-items-center text-center full-height">
        <h2 class="font-monospace">Mis datos</h2>
        <p>Nombre:</p>
        <p>Idalia Karina Olvera Cruz</p>
        <p>Grupo</p>
        <p>S195</p>
        <a href="/operaciones" class="btn btn-primary">Ir a convertidor</a>
    </div>

    <script integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
