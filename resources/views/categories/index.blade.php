<x-app-layout>
    <div class="bg-white p-6 rounded-lg shadow-md my-4">
        <p class="text-primary text-center font-bold text-xl">Enlaces a las Distintas Categorías</p>

        <ul class="mt-4">
            <p>HOla</p>
            {{-- @foreach ($categories as $category)
                <li class="text-secondary text-lg my-2">
                    <!-- Aquí mostramos el nombre de la categoría y enlazamos a su página -->
                    {{-- <a href="{{ route('categories.show', $category->id) }}" class="hover:underline">
                    {{ $category->name }}
                </a> --}}
            </li>
            {{-- @endforeach --}}
        </ul>
    </div>
</x-app-layout>
