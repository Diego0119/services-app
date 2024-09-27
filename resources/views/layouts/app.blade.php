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

<body class="font-sans antialiased h-screen flex flex-col bg-lightGray">
    <x-navbar />
    <div class="container mx-auto p-4 flex-1">
        <!-- Publicidad -->
        <div class="bg-secondary text-white text-center py-4 rounded-lg mt-16">
            <p class="text-lg font-bold">Espacio para Publicidad</p>
        </div>

        <!-- Barra de búsqueda e inicio de sesión -->
        <div class="bg-white flex sm:space-x-4 py-4 my-4 rounded-lg flex-col sm:flex-row shadow-md">
            <!-- Ubicación / Buscador Rápido -->
            <div class="flex-1">
                <input placeholder="¿Qué estás buscando?" class="rounded w-full p-2" />
            </div>
            <div class="flex-1">
                <input placeholder="Ubicación" class="rounded w-full p-2" />
            </div>
            <div>
                <x-button class="bg-primary py-2 px-4">
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
            {{ $slot }}

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
