<x-app-layout>
    <x-gallery-layout />

    <!-- Carrusel Horizontal -->
    <div class="grid grid-cols-4 space-x-2 p-4 mt-4 bg-white rounded-md shadow-md">
        <!-- Producto/Servicio 1 -->
        @if (count($results) > 0)
            @foreach ($results as $result)
                <div class="flex-shrink-0 w-62 bg-gray-100 p-4 rounded-lg shadow-md text-center">
                    <img src="https://via.placeholder.com/300" alt="Producto 1"
                        class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-bold mb-2">{{ $result->title }}</h3>
                    <p class="text-gray-700 mb-2"></p>
                    <p class="text-green-500 font-bold mb-2">{{ $result->price }} CLP</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600"><a
                            href="{{ route('notice.show', $result->id) }}">Ver</a></button>
                </div>
            @endforeach
        @else
            <div class="flex-shrink-0 w-66 p-4 rounded-lg text-center">
                <p class="text-gray-700 mb-2">No se encontro algo relacionado a '{{ $query }}'</p>
            </div>
        @endif
</x-app-layout>
