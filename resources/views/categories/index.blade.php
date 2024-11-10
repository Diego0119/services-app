<x-app-layout>
    <x-gallery-layout />
    @if ($category)
        <p class="text-primary text-center font-bold text-xl mt-4">{{ $category->name }}</p>
    @else
        <p class="text-primary text-center font-bold text-xl mt-4">Esa categoria no existe</p>
    @endif

    <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 p-6 mt-6 bg-white rounded-md shadow-md">
        <!-- Producto/Servicio -->
        @if (count($notices) > 0)
            @foreach ($notices as $notice)
                @if ($notice->status == 'ACTIVO')
                    <div
                        class="flex flex-col bg-gray-100 p-6 rounded-lg shadow-md text-center space-y-4 hover:scale-105 transition-all cursor-pointer">
                        <!-- Etiqueta colorida, con clase dinámica -->

                        <div
                            class="top-2 left-2 px-2 py-1 text-white font-bold rounded-md
                            @if ($notice->highlight_color == 'yellow') bg-yellow-400 <span>Promocionado</span> <i class="fas fa-medal"></i>
                            @elseif ($notice->highlight_color == 'indigo')  bg-purple-500 <span>Promocionado</span> <i class="fas fa-diamond"></i>
                            @elseif ($notice->highlight_color == 'green')  bg-green-500 <span>Promocionado</span> <i class="fas fa-trophy"></i>
                            @elseif ($notice->highlight_color == 'blue')  bg-blue-500  <span>Promocionado</span> <i class="fas fa-check"></i> @endif">
                        </div>

                        <img src="https://via.placeholder.com/300" alt="Producto"
                            class="w-full h-44 object-cover rounded-md">
                        <h3 class="text-lg font-bold">{{ $notice->title }}</h3>
                        <p class="text-gray-700"></p>
                        <p class="text-green-500 font-bold">{{ $notice->price }} CLP</p>
                        <a href="{{ route('notice.show', $notice->id) }}"
                            class="bg-secondary text-white px-4 py-2 rounded hover:bg-primary inline-block w-1/2 mx-auto">Ver
                            más</a>
                    </div>
                @endif
            @endforeach
        @else
            <div class="flex flex-col items-center justify-center w-full p-6 text-center">
                <p class="text-gray-700">No hay posts</p>
            </div>
        @endif
    </div>
</x-app-layout>
