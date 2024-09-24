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
    <div>
        <div class="">
            {{-- publicidad --}}
            <p class="">publicidad</p>
        </div>
        <div>
            <div>
                {{-- busqueda por ubicación --}}
            </div>
            <div>
                {{-- inicio de sesión, creacion de avisos, usuario nuevo --}}
            </div>
        </div>
        <div>
            {{-- galeria --}}
        </div>
    </div>

</body>
<footer>
    <x-footer />
</footer>

</html>
