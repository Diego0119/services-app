<x-app-layout>
    <!-- Contenedor principal -->
    <div class="bg-white p-6 rounded-lg shadow-md my-4 flex flex-col space-y-4">
        <!-- Título y precio -->
        <div class="flex justify-between items-center border-b pb-4">
            <h1 class="text-2xl font-bold text-gray-800">Título del Aviso</h1>
            <span class="text-xl font-semibold text-green-600">$99.99</span>
        </div>

        <!-- Valorización (solo si es un servicio) -->
        <div class="flex items-center space-x-2">
            <p class="text-yellow-500 text-lg">★★★★★</p>
            <p class="text-gray-600">(Valorización del servicio)</p>
        </div>

        <!-- Contacto, nombre y ubicación del vendedor -->
        <div class="flex flex-col space-y-2">
            <p class="text-gray-800">Contacto: Juan Pérez</p>
            <p class="text-gray-600">Ubicación: Santiago, Chile</p>
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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum
                    vestibulum. Cras venenatis euismod malesuada. Fusce sed commodo justo. Vivamus in enim sed eros
                    ultrices dictum.
                </p>
            </div>
        </div>
    </div>

    <!-- Galería de imágenes (x-gallery-layout) -->
    <x-gallery-layout />

</x-app-layout>
