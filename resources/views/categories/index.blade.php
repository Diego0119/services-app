<x-app-layout>
    <x-gallery-layout />
    <p class="text-primary text-center font-bold text-xl">Inmuebles</p>
    <!-- Carrusel Horizontal -->
    <div class="grid grid-cols-4 space-x-2 p-4 mt-4 bg-white rounded-md shadow-md">
        <!-- Producto/Servicio 1 -->

        <div class="flex-shrink-0 w-66 bg-gray-100 p-4 rounded-lg shadow-md text-center">
            <img src="https://via.placeholder.com/300" alt="Producto 1" class="w-full h-48 object-cover rounded-md mb-4">
            <h3 class="text-lg font-bold mb-2">Servicio de Limpieza</h3>
            <p class="text-gray-700 mb-2">Limpieza completa de oficinas y hogares.</p>
            <p class="text-green-500 font-bold mb-2">$50.000 CLP</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600"><a
                    href="{{ route('details.index') }}">Contratar</a></button>
        </div>

        <!-- Producto/Servicio 2 -->
        <div class="flex-shrink-0 w-66 bg-gray-100 p-4 rounded-lg shadow-md text-center">
            <img src="https://via.placeholder.com/300" alt="Producto 2"
                class="w-full h-48 object-cover rounded-md mb-4">
            <h3 class="text-lg font-bold mb-2">Computadora Portátil</h3>
            <p class="text-gray-700 mb-2">Laptop de alto rendimiento con 16GB de RAM y 512GB SSD.</p>
            <p class="text-green-500 font-bold mb-2">$1.200.000 CLP</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Comprar</button>
        </div>

        <!-- Producto/Servicio 3 -->
        <div class="flex-shrink-0 w-66 bg-gray-100 p-4 rounded-lg shadow-md text-center">
            <img src="https://via.placeholder.com/300" alt="Producto 3"
                class="w-full h-48 object-cover rounded-md mb-4">
            <h3 class="text-lg font-bold mb-2">Servicio de Jardinería</h3>
            <p class="text-gray-700 mb-2">Mantenimiento y cuidado de jardines y áreas verdes.</p>
            <p class="text-green-500 font-bold mb-2">$40.000 CLP</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Contratar</button>
        </div>
        <!-- Producto/Servicio 4 -->
        <div class="flex-shrink-0 w-66 bg-gray-100 p-4 rounded-lg shadow-md text-center">
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
        <div class="flex-shrink-0 w-66 bg-gray-100 p-4 rounded-lg shadow-md text-center">
            <img src="https://via.placeholder.com/300" alt="Producto 5"
                class="w-full h-48 object-cover rounded-md mb-4">
            <h3 class="text-lg font-bold mb-2">Clases de Guitarra</h3>
            <p class="text-gray-700 mb-2">Clases particulares para aprender a tocar guitarra desde cero.</p>
            <p class="text-green-500 font-bold mb-2">$30.000 CLP</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-6600">Contratar</button>
        </div>
</x-app-layout>
