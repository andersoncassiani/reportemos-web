<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Crear reporte | Empieza a reportar para llegar hasta el lugar</title>
    <link rel="icon" href="img/logo-de-reciclar.png" type="img/jpg"> <!-- Para ponerle icono a la Web -->

  <!-- Iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    html {
        line-height: 1.15;
        -webkit-text-size-adjust: 100%
    }

    body {
        margin: 0
    }

    a {
        background-color: transparent
    }

    [hidden] {
        display: none
    }

    html {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        line-height: 1.5
    }

    *,
    :after,
    :before {
        box-sizing: border-box;
        border: 0 solid #e2e8f0
    }

    a {
        color: inherit;
        text-decoration: inherit
    }

    svg,
    video {
        display: block;
        vertical-align: middle
    }

    video {
        max-width: 100%;
        height: auto
    }

    .bg-white {
        --bg-opacity: 1;
        background-color: #fff;
        background-color: rgba(255, 255, 255, var(--bg-opacity))
    }

    .bg-gray-100 {
        --bg-opacity: 1;
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--bg-opacity))
    }

    .border-gray-200 {
        --border-opacity: 1;
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--border-opacity))
    }

    .border-t {
        border-top-width: 1px
    }

    .flex {
        display: flex
    }

    .grid {
        display: grid
    }

    .hidden {
        display: none
    }

    .items-center {
        align-items: center
    }

    .justify-center {
        justify-content: center
    }

    .font-semibold {
        font-weight: 600
    }

    .h-5 {
        height: 1.25rem
    }

    .h-8 {
        height: 2rem
    }

    .h-16 {
        height: 4rem
    }

    .text-sm {
        font-size: .875rem
    }

    .text-lg {
        font-size: 1.125rem
    }

    .leading-7 {
        line-height: 1.75rem
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto
    }

    .ml-1 {
        margin-left: .25rem
    }

    .mt-2 {
        margin-top: .5rem
    }

    .mr-2 {
        margin-right: .5rem
    }

    .ml-2 {
        margin-left: .5rem
    }

    .mt-4 {
        margin-top: 1rem
    }

    .ml-4 {
        margin-left: 1rem
    }

    .mt-8 {
        margin-top: 2rem
    }

    .ml-12 {
        margin-left: 3rem
    }

    .-mt-px {
        margin-top: -1px
    }

    .max-w-6xl {
        max-width: 72rem
    }

    .min-h-screen {
        min-height: 100vh
    }

    .overflow-hidden {
        overflow: hidden
    }

    .p-6 {
        padding: 1.5rem
    }

    .py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem
    }

    .px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    .pt-8 {
        padding-top: 2rem
    }

    .fixed {
        position: fixed
    }

    .relative {
        position: relative
    }

    .top-0 {
        top: 0
    }

    .right-0 {
        right: 0
    }

    .shadow {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
    }

    .text-center {
        text-align: center
    }

    .text-gray-200 {
        --text-opacity: 1;
        color: #edf2f7;
        color: rgba(237, 242, 247, var(--text-opacity))
    }

    .text-gray-300 {
        --text-opacity: 1;
        color: #e2e8f0;
        color: rgba(226, 232, 240, var(--text-opacity))
    }

    .text-gray-400 {
        --text-opacity: 1;
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--text-opacity))
    }

    .text-gray-500 {
        --text-opacity: 1;
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--text-opacity))
    }

    .text-gray-600 {
        --text-opacity: 1;
        color: #718096;
        color: rgba(113, 128, 150, var(--text-opacity))
    }

    .text-gray-700 {
        --text-opacity: 1;
        color: #4a5568;
        color: rgba(74, 85, 104, var(--text-opacity))
    }

    .text-gray-900 {
        --text-opacity: 1;
        color: #1a202c;
        color: rgba(26, 32, 44, var(--text-opacity))
    }

    .underline {
        text-decoration: underline
    }

    .antialiased {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .w-5 {
        width: 1.25rem
    }

    .w-8 {
        width: 2rem
    }

    .w-auto {
        width: auto
    }

    .grid-cols-1 {
        grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    @media (min-width:640px) {
        .sm\:rounded-lg {
            border-radius: .5rem
        }

        .sm\:block {
            display: block
        }

        .sm\:items-center {
            align-items: center
        }

        .sm\:justify-start {
            justify-content: flex-start
        }

        .sm\:justify-between {
            justify-content: space-between
        }

        .sm\:h-20 {
            height: 5rem
        }

        .sm\:ml-0 {
            margin-left: 0
        }

        .sm\:px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .sm\:pt-0 {
            padding-top: 0
        }

        .sm\:text-left {
            text-align: left
        }

        .sm\:text-right {
            text-align: right
        }
    }

    @media (min-width:768px) {
        .md\:border-t-0 {
            border-top-width: 0
        }

        .md\:border-l {
            border-left-width: 1px
        }

        .md\:grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }
    }

    @media (min-width:1024px) {
        .lg\:px-8 {
            padding-left: 2rem;
            padding-right: 2rem
        }
    }

    @media (prefers-color-scheme:dark) {
        .dark\:bg-gray-800 {
            --bg-opacity: 1;
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--bg-opacity))
        }

        .dark\:bg-gray-900 {
            --bg-opacity: 1;
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--bg-opacity))
        }

        .dark\:border-gray-700 {
            --border-opacity: 1;
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--border-opacity))
        }

        .dark\:text-white {
            --text-opacity: 1;
            color: #fff;
            color: rgba(255, 255, 255, var(--text-opacity))
        }

        .dark\:text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }
    }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <style>
    body {
        font-family: 'Nunito';
    }
    </style>
</head>

<body class="antialiased">
    <!---
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif
        -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="/"><img src="img/logo-de-reciclar.png" width="45" height="40" alt=""></a>

        <!--Boton de 3 lineas al hacer menu responsive-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <span class="text-center resposive text-uppercase px-2 text-success">Reporta los residuos que observes a tu
            arrededor, de esa manera nos ayudas a cuidar el medio ambiente!</span>

        <!--Desplegable del boton, aqui en el div centro los botones para cuando se le de clic queden centraditos-->
        <div class="collapse navbar-collapse align-items-center justify-content-center text-center" id="menu">
            <ul class="navbar-nav mr-auto">
                <li class="">
                    <a href="{{ route('register') }}" class="btn btn-outline-success  my-sm-0 m-2"
                        type="submit"><b>Crear cuenta</a>

                    <a href="{{ route('login') }}" class="btn btn-outline-success  my-sm-0" type="submit"><b>Iniciar
                            sesion</a>

                </li>
            </ul>
    </nav>


    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

    <div class="card-group">
    @forelse($reportes as $reporte)
        <div class="card mb-3 justify-content-center">
            <img src="{{ asset('storage/reportes') . '/' . $reporte->imagen }}" class="card-img-top" alt="Reporte Imagen" height="290px">
            <div class="card-body">
                <h5 class="card-title text-success fw-bold text-center"> <i class="bi bi-geo-alt-fill mx-1"></i>{{ $reporte->direccion }}</h5>
                <p class="card-text  text-justify text-center">{{ $reporte->descripcion }}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item text-success"><i class="bi bi-person-fill"></i> {{ $reporte->user->name }}</li>
            </ul>
            <div class="card-body">
                <p class="card-link"><small class="text-muted">Publicado: {{ $reporte->created_at }}</small></p>
            </div>
        </div>
    @empty
        <p class="text-center mx-auto">No hay reportes disponibles.</p>
    @endforelse
</div>


<!--Oculto los links de paginacion para no verlos en la vista.-->
<!--{{ $reportes->links() }}-->

        <div class="card bg-dark text-white ">
            <img src="../img/zona-verde.jpg" class="card-img " height="500">
            <div class="card-img-overlay pt-5 mt-5 align-items-center">

                <h3
                    class="card-title text-center  rounded-top font-weight-light text-success bg-success bg-white py-md-1 m-0 ">
                    <b>¿Que esperas para empezar a reportar?
                </h3>

                <p class="card-text text-justify rounded-bottom font-weight-normal bg-success py-2  p-0 ">Recuerda que
                    con tu reporte nos ayudas a cuidar y preservar el medio ambiente. Lo cual no libra a todos de
                    infecciones y problemas como calentamiento global, enfermedades respiratorias entre otas, causadas
                    por la contaminacion. Formas sencillas para proteger el medio ambiente: <b>Planta árboles, Ahorrar
                        agua, No quemar basuras, No arrojar basura en lugares piblicos, ETC.</b></p>


                <div class=" align-items-center justify-content-center text-center pt-2">
                    <!--Aqui centro el boton que esta debajo "Has clic aqui para empezar"-->
                    <a href="{{ route('login') }}" class="btn btn-success border border-white" type="submit"><b>Has clic
                            aqui para empezar</a>

                </div>

            </div>
        </div>

        <footer class="text-center text-white" style="background-color: #f1f1f1;">

            <!-- Copyright -->
            <div class="text-center bg-light text-dark p-3">
                © Copyright 2023 | Desarrollador Anderson Cassiani - Todos los derechos resevados.
                <a class="text-success" href="https://youtube.com/">Ir a nuestro canal de YouTube</a>
            </div>
            <!-- Copyright -->
        </footer>


</body>


</html>