<x-dashboard-layout>
    <div class="flex flex-col p-6 bg-gray-100 md:ml-64">
        <h2 class="text-2xl font-semibold mb-6">Opciones del anuncio</h2>

        <form action="{{ route('notice.update', $notice) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Título del anuncio -->
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Título</label>
                <input type="text" name="title" id="title" value="{{ old('title', $notice->title) }}"
                    class="w-full px-3 py-2 border border-gray-300 rounded" required>
            </div>

            <!-- Descripción del anuncio -->
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Descripción</label>
                <textarea name="description" id="description" rows="5" class="w-full px-3 py-2 border border-gray-300 rounded"
                    required>{{ old('description', $notice->description) }}</textarea>
            </div>

            <!-- Precio del anuncio -->
            <div class="mb-4">
                <label for="price" class="block text-gray-700">Precio</label>
                <input type="number" name="price" id="price" value="{{ old('price', $notice->price) }}"
                    class="w-full px-3 py-2 border border-gray-300 rounded" required>
            </div>

            <!-- Estado del anuncio (enum) -->
            <div class="mb-4">
                <label for="status" class="block text-gray-700">Estado</label>
                <select name="status" id="status" class="w-full px-3 py-2 border border-gray-300 rounded">
                    <option value="active" {{ old('status', $notice->status) === 'active' ? 'selected' : '' }}>Visible
                    </option>
                    <option value="PAUSADO" {{ old('status', $notice->status) === 'inactive' ? 'selected' : '' }}>
                        Pausado</option>
                </select>
            </div>

            <!-- Opción de Impulsar (de pago) -->
            <div class="mb-4">
                <label for="boost" class="flex items-center text-gray-700">
                    <input type="checkbox" name="boost" id="boost" value="1"
                        {{ old('boost', $notice->boost) ? 'checked' : '' }} class="mr-2">
                    Impulsar (de pago)
                </label>
                <p class="text-gray-500 text-sm">Coloca el anuncio en una posición destacada en la matriz.</p>
            </div>

            <!-- Opción de Galería (de pago) -->
            <div class="mb-4">
                <label for="gallery" class="flex items-center text-gray-700">
                    <input type="checkbox" name="gallery" id="gallery" value="1"
                        {{ old('gallery', $notice->gallery) ? 'checked' : '' }} class="mr-2">
                    Galería (de pago)
                </label>
                <p class="text-gray-500 text-sm">Añade el anuncio a una galería especial para mayor visibilidad.</p>
            </div>

            <!-- Botones de acción -->
            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Guardar
                    Cambios</button>
                <a href="{{ route('my-notices.index') }}"
                    class="ml-4 px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Cancelar</a>
            </div>
        </form>
    </div>
</x-dashboard-layout>
