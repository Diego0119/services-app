<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'deNexos') }}</title>

    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" /> --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>

<body class="font-sans antialiased h-screen flex flex-col bg-lightGray space-y-6">
    <x-navbar />
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mx-4">
        <div class="bg-secondary text-white text-center py-4 rounded-lg mt-16">
            <p class="text-lg font-bold">Espacio para Publicidad</p>
        </div>

        <x-search />

        <x-gallery-layout />

        <div class="bg-white p-6 rounded-lg shadow-md my-4">
            <div class="bg-white p-6 rounded-lg shadow-md my-4">
                <p class="text-primary text-center font-bold text-xl">Enlaces a las Distintas Categorías</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-4">
                @foreach ($categories as $category)
                    <a class="cursor-pointer hover:scale-105 transition-all"
                        href="{{ route('category.show', $category->id) }}">
                        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                            @php
                                switch ($category->name) {
                                    case 'Casa':
                                        $icon = 'fa-house';
                                        break;
                                    case 'Oficina':
                                        $icon = 'fa-briefcase';
                                        break;
                                    case 'Departamento':
                                        $icon = 'fa-building';
                                        break;
                                    case 'Almacenamiento y bodega':
                                        $icon = 'fa-archive';
                                        break;
                                    case 'Habitación':
                                        $icon = 'fa-bed';
                                        break;
                                    case 'Quincho':
                                        $icon = 'fa-cutlery';
                                        break;
                                    case 'Vehículos':
                                        $icon = 'fa-car';
                                        break;
                                    case 'Electrónica':
                                        $icon = 'fa-laptop';
                                        break;
                                    case 'Ropa':
                                        $icon = 'fa-tshirt';
                                        break;
                                    case 'Muebles':
                                        $icon = 'fa-chair';
                                        break;
                                    case 'Servicios':
                                        $icon = 'fa-check-circle';
                                        break;
                                    case 'Instrumentos Musicales':
                                        $icon = 'fa-music';
                                        break;
                                    case 'Construcción':
                                        $icon = 'fa-wrench';
                                        break;
                                    case 'Hobbies y Deportes':
                                        $icon = 'fa-running';
                                        break;
                                    case 'Otros':
                                        $icon = 'fa-info-circle';
                                        break;

                                    default:
                                        $icon = 'fa-question-circle'; // Icono por defecto si no coincide
                                        break;
                                }
                            @endphp
                            <i class="fas {{ $icon }} fa-3x text-center text-primary"></i>
                            <p class="text-center font-bold text-lg mt-2">{{ $category->name }}</p>
                        </div>
                    </a>
                @endforeach
            </div>

        </div>

        <div class="fixed right-4 bottom-4 bg-secondary text-white p-4 rounded-lg shadow-lg">
            <p class="font-medium text-center z-20">Publicidad Emergente Temporal</p>
        </div>
    </div>

</body>
<x-footer />

</html>
