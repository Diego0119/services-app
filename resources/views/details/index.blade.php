<x-app-layout>
    <!-- Contenedor principal -->
    <div class="bg-white p-6 rounded-lg shadow-md my-4 flex flex-col space-y-4">
        <!-- Título y precio -->
        <div class="flex justify-between items-center border-b pb-4">
            <h1 class="text-2xl font-bold text-gray-800">{{ $notice->title }}</h1>
            <span class="text-xl font-semibold text-green-600">{{ $notice->price }} CLP</span>
        </div>

        <!-- Valorización (solo si es un servicio) -->
        <div class="flex items-center space-x-2">
            <p class="text-yellow-500 text-lg">★★★★★</p>
            <p class="text-gray-600">(Valorización del servicio)</p>
        </div>

        <!-- Contacto, nombre y ubicación del vendedor -->
        <div class="flex flex-col space-y-2">
            <p class="text-gray-800">Contacto: {{ $user->name }}</p>
            <p class="text-gray-600">Ubicación: {{ $commune->name }}</p>
        </div>

        <!-- Imagen y descripción -->
        <div class="flex flex-row space-x-6">
            <!-- Imagen del producto o servicio -->
            <div class="w-1/3">
                <img src="https://via.placeholder.com/400x300" alt="Imagen del producto o servicio"
                    class="w-full h-auto rounded-lg">
            </div>

            <!-- Descripción del artículo -->
            <div class="w-2/3">
                <p class="text-gray-700">
                    {{ $notice->description }}
                </p>
            </div>
        </div>
    </div>

    <!-- Galería de imágenes (x-gallery-layout) -->
    <div class="bg-white p-6 rounded-lg shadow-md my-4">
        <!-- Galería en Carrusel Horizontal -->
        <div class="bg-white p-6 rounded-lg shadow-md my-4">
            <p class="text-primary text-center font-bold text-xl">Avisos relacionados</p>
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

</x-app-layout>
