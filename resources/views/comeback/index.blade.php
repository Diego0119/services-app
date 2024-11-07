<x-dashboard-layout>
    <div class="flex flex-col p-8 bg-gray-100 md:ml-64">
        <!-- Título de la página -->
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Opciones de Remontar Anuncio</h2>

        <!-- Formulario de opciones de remontar -->
        <form action="#" method="POST" class="space-y-6">
            @csrf

            <!-- Sección de opciones de visibilidad y posicionamiento -->
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Opciones de Destacado</h3>
                <p class="text-gray-600 mb-4">Seleccione cómo desea destacar su anuncio para atraer más visibilidad.</p>

                <!-- Destacar por duración -->
                <div class="mb-4">
                    <label for="duration" class="block text-gray-700 font-medium">Duración del destacado</label>
                    <select name="duration" id="duration"
                        class="w-full px-4 py-3 border border-gray-300 rounded focus:ring focus:ring-blue-200">
                        <option value="1">1 semana - $5.00</option>
                        <option value="2">2 semanas - $9.00</option>
                        <option value="4">1 mes - $15.00</option>
                    </select>
                </div>

                <!-- Posición en la lista -->
                <div class="mb-4">
                    <label for="position" class="block text-gray-700 font-medium">Posición en la lista</label>
                    <select name="position" id="position"
                        class="w-full px-4 py-3 border border-gray-300 rounded focus:ring focus:ring-blue-200">
                        <option value="top">Primera posición - $10.00</option>
                        <option value="featured">Posición destacada - $7.00</option>
                        <option value="regular">Posición regular - Gratis</option>
                    </select>
                </div>

                <!-- Color de fondo del anuncio -->
                <div class="mb-4">
                    <label for="highlight_color" class="block text-gray-700 font-medium">Color de fondo del
                        anuncio</label>
                    <select name="highlight_color" id="highlight_color"
                        class="w-full px-4 py-3 border border-gray-300 rounded focus:ring focus:ring-blue-200">
                        <option value="none">Sin color de fondo - Gratis</option>
                        <option value="yellow">Fondo amarillo - $2.00</option>
                        <option value="blue">Fondo azul - $2.00</option>
                        <option value="green">Fondo verde - $2.00</option>
                    </select>
                </div>
            </div>

            <!-- Resumen de la compra -->
            <div class="bg-white p-6 rounded shadow mt-6">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Resumen de la Compra</h3>
                <p class="text-gray-600">El costo total se calculará en función de las opciones seleccionadas.</p>

                <div class="mt-4">
                    <p class="text-gray-800 font-medium">Total: <span id="total-cost" class="text-blue-600">$0.00</span>
                    </p>
                </div>
            </div>

            <!-- Botones de acción -->
            <div class="flex justify-between mt-8">
                <a href="{{ route('my-notices.index') }}"
                    class="px-6 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 focus:ring focus:ring-gray-300">
                    Cancelar
                </a>
                <button type="submit"
                    class="px-6 py-2 bg-green-500 text-white rounded hover:bg-green-600 focus:ring focus:ring-green-200">
                    Pagar y Remontar
                </button>
            </div>
        </form>
    </div>
</x-dashboard-layout>
