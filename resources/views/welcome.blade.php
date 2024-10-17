<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'deNexos') }}</title>

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

<body class="font-sans antialiased h-screen flex flex-col bg-lightGray space-y-6">
    <x-navbar />
    {{-- container mx-auto p-4 flex-1 --}}
    <div class="mx-4">
        <!-- Publicidad -->
        <div class="bg-secondary text-white text-center py-4 rounded-lg mt-16">
            <p class="text-lg font-bold">Espacio para Publicidad</p>
        </div>

        <!-- Barra de búsqueda e inicio de sesión -->
        <div class="bg-white flex sm:space-x-4 py-4 my-4 rounded-lg flex-col sm:flex-row shadow-md">
            <!-- Ubicación / Buscador Rápido -->
            <div class="flex-1 sm:ml-4">
                <input placeholder="¿Qué estás buscando?" class="rounded w-full p-2" />
            </div>
            <div class="flex-1">
                <input placeholder="Ubicación" class="rounded w-full p-2" />
            </div>
            <div>
                <x-button class="bg-primary py-2 px-4 sm:mr-4">
                    <i class="fa-solid fa-magnifying-glass text-white mr-2 text-xl cursor-pointer"></i>Buscar
                </x-button>
            </div>
        </div>
        <!-- Galería -->
        <div class="bg-white p-6 rounded-lg shadow-md my-4">
            <!-- Galería en Carrusel Horizontal -->
            <div class="bg-white p-6 rounded-lg shadow-md my-4">
                <p class="text-primary text-center font-bold text-xl">Galería de Productos y Servicios</p>
            </div>

            <!-- Carrusel Horizontal -->
            <div class="overflow-x-auto flex space-x-6 p-4 mt-4">
                <!-- Producto/Servicio 1 -->
                <div class="flex-shrink-0 w-64 bg-gray-100 p-4 rounded-lg shadow-md text-center">
                    <img src="https://via.placeholder.com/300" alt="Producto 1"
                        class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-bold mb-2">Servicio de Limpieza</h3>
                    <p class="text-gray-700 mb-2">Limpieza completa de oficinas y hogares.</p>
                    <p class="text-green-500 font-bold mb-2">$50.000 CLP</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Contratar</button>
                </div>

                <!-- Producto/Servicio 2 -->
                <div class="flex-shrink-0 w-64 bg-gray-100 p-4 rounded-lg shadow-md text-center">
                    <img src="https://via.placeholder.com/300" alt="Producto 2"
                        class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-bold mb-2">Computadora Portátil</h3>
                    <p class="text-gray-700 mb-2">Laptop de alto rendimiento con 16GB de RAM y 512GB SSD.</p>
                    <p class="text-green-500 font-bold mb-2">$1.200.000 CLP</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Comprar</button>
                </div>

                <!-- Producto/Servicio 3 -->
                <div class="flex-shrink-0 w-64 bg-gray-100 p-4 rounded-lg shadow-md text-center">
                    <img src="https://via.placeholder.com/300" alt="Producto 3"
                        class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-bold mb-2">Servicio de Jardinería</h3>
                    <p class="text-gray-700 mb-2">Mantenimiento y cuidado de jardines y áreas verdes.</p>
                    <p class="text-green-500 font-bold mb-2">$40.000 CLP</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Contratar</button>
                </div>

                <!-- Producto/Servicio 4 -->
                <div class="flex-shrink-0 w-64 bg-gray-100 p-4 rounded-lg shadow-md text-center">
                    <img src="https://via.placeholder.com/300" alt="Producto 4"
                        class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-bold mb-2">Cámara Fotográfica</h3>
                    <p class="text-gray-700 mb-2">Cámara DSLR con lente de 18-55mm, ideal para fotografía
                        profesional.
                    </p>
                    <p class="text-green-500 font-bold mb-2">$850.000 CLP</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Comprar</button>
                </div>

                <!-- Producto/Servicio 5 -->
                <div class="flex-shrink-0 w-64 bg-gray-100 p-4 rounded-lg shadow-md text-center">
                    <img src="https://via.placeholder.com/300" alt="Producto 5"
                        class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-bold mb-2">Clases de Guitarra</h3>
                    <p class="text-gray-700 mb-2">Clases particulares para aprender a tocar guitarra desde cero.</p>
                    <p class="text-green-500 font-bold mb-2">$30.000 CLP</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Contratar</button>
                </div>
            </div>

        </div>
        <!-- Enlaces a categorías -->
        <div class="bg-white p-6 rounded-lg shadow-md my-4">
            <!-- Enlaces a categorías -->
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

                {{--
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <i class="fas fa-house fa-3x text-center text-primary"></i>
                    <p class="text-center font-bold text-lg mt-2">Inmuebles</p>
                    <p class="text-center text-sm text-gray-500">Marca, modelo, transmisión, combustible, etc.</p>
                </div> --}}

                {{--
                <!-- Categoría: Vehículos -->
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <i class="fas fa-car fa-3x text-center text-primary"></i>
                    <p class="text-center font-bold text-lg mt-2">Vehículos</p>
                    <p class="text-center text-sm text-gray-500">Marca, modelo, transmisión, combustible, etc.</p>
                </div> --}}

                <!-- Categoría: Vestuario -->
                {{-- <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <i class="fas fa-tshirt fa-3x text-center text-primary"></i>
                    <p class="text-center font-bold text-lg mt-2">Vestuario</p>
                    <p class="text-center text-sm text-gray-500">Tipo, estado, género, talla</p>
                </div> --}}

                {{-- <!-- Categoría: Instrumentos Musicales -->
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <i class="fas fa-guitar fa-3x text-center text-primary"></i>
                    <p class="text-center font-bold text-lg mt-2">Instrumentos Musicales</p>
                    <p class="text-center text-sm text-gray-500">&lt;Sin características específicas adicionales&gt;
                    </p>
                </div> --}}

                <!-- Categoría: Computación y Electrónica -->
                {{-- <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <i class="fas fa-laptop fa-3x text-center text-primary"></i>
                    <p class="text-center font-bold text-lg mt-2">Computación y Electrónica</p>
                    <p class="text-center text-sm text-gray-500">&lt;Sin características específicas adicionales&gt;
                    </p>
                </div> --}}

                <!-- Categoría: Construcción (Herramientas y Equipamiento) -->
                {{-- <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <i class="fas fa-tools fa-3x text-center text-primary"></i>
                    <p class="text-center font-bold text-lg mt-2">Construcción (Herramientas y Equipamiento)</p>
                    <p class="text-center text-sm text-gray-500">&lt;Sin características específicas
                        adicionales&gt;
                    </p>
                </div> --}}

                <!-- Categoría: Artículos del Hogar -->
                {{-- <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <i class="fas fa-couch fa-3x text-center text-primary"></i>
                    <p class="text-center font-bold text-lg mt-2">Artículos del Hogar</p>
                    <p class="text-center text-sm text-gray-500">&lt;Sin características específicas
                     adicionales&gt;</p>
                </div> --}}

                <!-- Categoría: Hobbies y Deportes -->
                {{-- <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <i class="fas fa-futbol fa-3x text-center text-primary"></i>
                    <p class="text-center font-bold text-lg mt-2">Hobbies y Deportes</p>
                    <p class="text-center text-sm text-gray-500">&lt;Sin características específicas
                     adicionales&gt;
                    </p>
                </div> --}}

                <!-- Categoría: Otros Artículos -->
                {{-- <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <i class="fas fa-box fa-3x text-center text-primary"></i>
                    <p class="text-center font-bold text-lg mt-2">Otros Artículos</p>
                    <p class="text-center text-sm text-gray-500">&lt;Sin características específicas
                    adicionales&gt;
                    </p>
                </div> --}}

            </div>

        </div>

        <!-- Publicidad Emergente -->
        <div class="fixed right-4 bottom-4 bg-secondary text-white p-4 rounded-lg shadow-lg">
            <p class="font-medium text-center">Publicidad Emergente Temporal</p>
        </div>
    </div>

</body>
<!-- Footer -->
<x-footer />

</html>
