<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/plantilla.css') }}">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <a class="navbar-brand" href="/">
        <img src="{{ asset('images/logo.png') }}" alt="Logo Biblioteca" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/registro">Registro de Libro</a>
            </li>
        </ul>
    </div>
</nav>

    <div class="container mt-4">
        @yield('contenido')
    </div>

    <footer class="footer">
        <p> Biblioteca Cardenal &copy; {{ \Carbon\Carbon::now()->locale('es')->isoFormat('D [de] MMMM [de] Y') }}</p>
        <div class="social-media">
            <a href="https://facebook.com" class="btn btn-outline-light btn-sm">Facebook</a>
            <a href="https://twitter.com" class="btn btn-outline-light btn-sm">Twitter</a>
            <a href="https://instagram.com" class="btn btn-outline-light btn-sm">Instagram</a>
        </div>
    </footer>

</body>
</html>
