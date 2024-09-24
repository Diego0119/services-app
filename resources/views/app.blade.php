<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    @vite('resources/css/app.css')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>

<body class="font-sans antialiased">
    <div class="flex flex-col">
        <div class="">
            {{-- publicidad --}}
            <p class="">publicidad</p>
        </div>
        <div class="flex flex-row justify-between">
            <div>
                {{-- busqueda por ubicación --}}
                <p>Busqueda por ubicación</p>
            </div>
            <div>
                {{-- inicio de sesión, creacion de avisos, usuario nuevo --}}
                <p>Inicio de sesión, creación de avisos, usuario nuevo</p>

            </div>
        </div>
        <div>
            {{-- galeria --}}
            <p>Galeria</p>
        </div>
        <div>
            <p>Enlace a distinas categorias</p>
        </div>
    </div>

</body>
<footer>
    <x-footer />
</footer>

</html>
