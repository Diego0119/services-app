<x-app-layout>
    <!-- Contenedor principal -->
    <div class="bg-white p-6 rounded-lg shadow-md my-4 flex flex-col space-y-4">
        <!-- Título y precio -->
        <div class="flex justify-between items-center border-b pb-4">
            <h1 class="text-2xl font-bold text-gray-800">{{ $notice->title }}</h1>
            <span class="text-xl font-semibold text-green-600">{{ $notice->price }} CLP</span>
        </div>

        <!-- Valorización (solo si es un servicio) -->
        {{-- <div class="flex items-center space-x-2">
            <p class="text-yellow-500 text-lg">★★★★★</p>
            <p class="text-gray-600">(Valorización del servicio)</p>
        </div> --}}

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
        {{-- aca deberian ir los atributos adicionales  --}}
        @foreach ($attributes as $attribute)
            <div class="w-2/3">
                <p class="text-gray-700">
                    @if ($attribute->type != 'checkbox')
                        {{ $attribute->name }}: {{ $attribute->value }}
                    @elseif ($attribute->type == 'checkbox')
                        {{ $attribute->name }}: Si
                    @endif
                </p>
            </div>
        @endforeach
        @if (auth()->user())
            <!-- Contacto, nombre y ubicación del vendedor -->
            <div class="flex flex-col space-y-2">
                <p class="text-gray-800">Nombre: {{ $user->name }}</p>
                <p class="text-gray-800">Correo de contacto: {{ $user->email }}</p>
                <p class="text-gray-800">Número telefónico: +569 12345678</p>
                <p class="text-gray-600">Ubicación: {{ $commune->name }}</p>
            </div>
        @else
            <div class="flex flex-col space-y-4 mt-4">
                <p class="text-gray-700">Contacto por correo, si quieres ver toda la información de contacto <a
                        href={{ route('register') }} class="text-blue-500 underline">registrate aquí</a></p>
                <a href="mailto:{{ $user->email }}?subject=Consulta&body=Hola, me gustaría hacer una consulta sobre..."
                    class="bg-secondary text-white text-center rounded px-4 py-2 inline-block sm:w-40">
                    Redactar correo
                </a>
            </div>
        @endif

    </div>
    <x-related-notices-layout :related_notices="$related_notices" />
</x-app-layout>
