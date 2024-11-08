<x-dashboard-layout>
    <div class="flex flex-col p-8 bg-gray-100 md:ml-64">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Editar Anuncio</h2>

        <form action="{{ route('notice.update', $notice->id) }}" method="POST" class="space-y-6">
            @csrf

            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Detalles del Anuncio</h3>

                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-medium">Título</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $notice->title) }}"
                        class="w-full px-4 py-3 border border-gray-300 rounded focus:ring focus:ring-blue-200" required>
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-medium">Descripción</label>
                    <textarea name="description" id="description" rows="5"
                        class="w-full px-4 py-3 border border-gray-300 rounded focus:ring focus:ring-blue-200" required>{{ old('description', $notice->description) }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="price" class="block text-gray-700 font-medium">Precio</label>
                    <input type="number" name="price" id="price" value="{{ old('price', $notice->price) }}"
                        class="w-full px-4 py-3 border border-gray-300 rounded focus:ring focus:ring-blue-200" required>
                </div>
            </div>

            <div class="bg-white p-6 rounded shadow mt-6">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Estado del Anuncio</h3>

                <div>
                    <label for="status" class="block text-gray-700 font-medium mb-2">Estado</label>
                    <select name="status" id="status"
                        class="w-full px-4 py-3 border border-gray-300 rounded focus:ring focus:ring-blue-200">
                        <option value="ACTIVO" {{ old('status', $notice->status) === 'active' ? 'selected' : '' }}>
                            Visible</option>
                        <option value="PAUSADO" {{ old('status', $notice->status) === 'inactive' ? 'selected' : '' }}>
                            Pausado</option>
                    </select>
                </div>
            </div>

            <div class="bg-white p-6 rounded shadow mt-6">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Opciones adicionales</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-blue-600 font-semibold mr-2">Remontar (de pago):</span>
                        <span class="text-gray-600">Coloca el anuncio en una posición destacada en la matriz.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 font-semibold mr-2">Subir a galería (de pago):</span>
                        <span class="text-gray-600">Añade el anuncio a una galería especial para mayor
                            visibilidad.</span>
                    </li>
                </ul>

                <div class="flex space-x-4 mt-6">
                    <a href="{{ route('comeback') }}"
                        class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 focus:ring focus:ring-indigo-300">
                        Remontar
                    </a>
                    <a href="{{ route('up-to-gallery.get', $notice->id) }}"
                        class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 focus:ring focus:ring-indigo-300">
                        Subir a galería
                    </a>
                </div>
            </div>

            <div class="flex justify-end space-x-4 mt-8">
                <button type="submit"
                    class="px-6 py-2 bg-green-500 text-white rounded hover:bg-green-600 focus:ring focus:ring-green-200"
                    name="submit_general">
                    Guardar Cambios
                </button>
                <a href="{{ route('my-notices.index') }}"
                    class="px-6 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 focus:ring focus:ring-gray-300">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</x-dashboard-layout>
