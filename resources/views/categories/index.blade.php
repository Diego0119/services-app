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
                        @if ($notice->highlighted_id == 2)
                            <div
                                class="top-2 left-2 px-2 py-1 text-white font-bold rounded-md
                             bg-yellow-400">
                                <span>Promocionado <i class="fa-solid fa-medal"></i></span>
                            </div>
                        @endif

                        <img src="https://via.placeholder.com/300" alt="Producto"
                            class="w-full h-44 object-cover rounded-md">
                        <h3 class="text-lg font-bold">{{ $notice->title }}</h3>
                        <p class="text-gray-700">Descripción: {{ \Str::limit($notice->description, 100) }}</p>
                        <p class="text-gray-700"> Fecha de publicación:
                            {{ \Carbon\Carbon::parse($notice->created_at)->format('Y-m-d') }} <i
                                class="fa-regular fa-calendar text-primary"></i></p>
                        <p class="text-gray-700">{{ $notice->commune->name }} <i
                                class="fa-solid fa-map-pin text-primary"></i></p>
                        <p class="text-green-500 font-bold">{{ $notice->price }} CLP</p>
                        <a href="{{ route('notice.show', $notice->id) }}"
                            class="bg-secondary text-white px-4 py-2 rounded hover:bg-primary inline-block w-1/2 mx-auto">Ver
                            más</a>
                    </div>
                @endif
            @endforeach
        @else
            <div
                class="flex justify-center items-center text-gray-500 font-semibold text-xl p-4 border border-dashed border-gray-300 rounded-lg bg-gray-50">
                No hay posts
            </div>
        @endif
    </div>
</x-app-layout>
