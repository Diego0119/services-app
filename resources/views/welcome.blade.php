<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>

<body class="font-sans antialiased h-screen flex flex-col bg-lightGray">
    <x-navbar />
    <div class="container mx-auto p-4 flex-1">
        <!-- Publicidad -->
        <div class="bg-secondary text-white text-center py-4 rounded-lg mt-16">
            <p class="text-lg font-bold">Espacio para Publicidad</p>
        </div>

        <!-- Barra de búsqueda e inicio de sesión -->
        <div class="flex justify-between my-4">
            <!-- Ubicación / Buscador Rápido -->
            <div class="bg-white p-4 rounded-lg shadow-md w-1/3">
                <input placeholder="Betonera..." class="rounded" />
                <i class="fa-solid fa-magnifying-glass text-secondary ml-2 text-xl cursor-pointer"></i>
            </div>

            <!-- Inicio de sesión / Nuevo usuario / Creación de avisos -->
            <div class="bg-white p-4 rounded-lg shadow-md w-2/3">
                <!-- Otros elementos -->
            </div>
        </div>


        <!-- Galería -->
        <div class="bg-white p-6 rounded-lg shadow-md my-4">
            <p class="text-primary text-center font-bold text-xl">Galería</p>
        </div>

        <!-- Enlaces a categorías -->
        <div class="bg-white p-6 rounded-lg shadow-md my-4">
            <p class="text-primary text-center font-bold text-xl">Enlaces a las Distintas Categorías</p>
        </div>

        <!-- Publicidad Emergente -->
        <div class="fixed right-4 bottom-4 bg-secondary text-white p-4 rounded-lg shadow-lg">
            <p class="font-medium text-center">Publicidad Emergente Temporal</p>
        </div>
    </div>

    <!-- Footer -->
    <x-footer />

</body>

</html>
