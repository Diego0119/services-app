<x-dashboard-layout>
    <div class="flex flex-col p-8 bg-gray-100 md:ml-64">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Opciones para Subir a la Galería</h2>

        <form action="{{ route('up-to-gallery.post', $notice_id) }}" method="POST" class="space-y-6">
            @csrf

            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Configuración de la Galería</h3>
                <p class="text-gray-600 mb-4">Seleccione cómo desea que su anuncio aparezca en la galería para atraer más
                    visibilidad.</p>

                <div class="mb-4">
                    <label for="gallery_duration" class="block text-gray-700 font-medium">Duración en la galería</label>
                    <select name="gallery_duration" id="gallery_duration"
                        class="w-full px-4 py-3 border border-gray-300 rounded focus:ring focus:ring-blue-200" required>
                        <option value="1">1 semana - $8.00</option>
                        <option value="2">2 semanas - $15.00</option>
                        <option value="3">3 semanas - $22.00</option>
                        <option value="4">1 mes - $25.00</option>
                    </select>
                </div>
            </div>

            <div class="bg-white p-6 rounded shadow mt-6">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Resumen de la Compra</h3>
                <p class="text-gray-600">El costo total se calculará en función de las opciones seleccionadas.</p>

                <div class="mt-4">
                    <p class="text-gray-800 font-medium">Total: <span id="total-cost" class="text-blue-600">$0.00</span>
                    </p>
                </div>
            </div>

            <div class="flex justify-between mt-8">
                <a href="{{ route('my-notices.index') }}"
                    class="px-6 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 focus:ring focus:ring-gray-300">
                    Cancelar
                </a>
                <button type="submit"
                    class="px-6 py-2 bg-green-500 text-white rounded hover:bg-green-600 focus:ring focus:ring-green-200"
                    name="submit_gallery">
                    Pagar y Subir a Galería
                </button>
            </div>
        </form>
    </div>
</x-dashboard-layout>
