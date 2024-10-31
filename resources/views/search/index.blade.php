<x-app-layout>
    <x-gallery-layout />

    <!-- Carrusel Horizontal -->
    <div
        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-6 mt-6 bg-white rounded-md shadow-md">
        <!-- Producto/Servicio -->
        @if (count($results) > 0)
            @foreach ($results as $result)
                @if ($result->status == 'ACTIVO')
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md text-center flex flex-col space-y-4">
                        <img src="https://via.placeholder.com/300" alt="Producto"
                            class="w-full h-48 object-cover rounded-md mb-4">
                        <h3 class="text-lg font-bold">{{ $result->title }}</h3>
                        <p class="text-gray-700"></p>
                        <p class="text-green-500 font-bold">{{ $result->price }} CLP</p>
                        <a href="{{ route('notice.show', $result->id) }}"
                            class="bg-secondary text-white px-4 py-2 w-1/2 mx-auto rounded hover:bg-blue-600 inline-block">Ver</a>
                    </div>
                @endif
            @endforeach
        @else
            <div class="w-full text-center p-6">
                <p class="text-gray-700">No se encontró algo relacionado a '{{ $query }}'</p>
            </div>
        @endif
    </div>
</x-app-layout>
