<x-dashboard-layout>
    <div class="flex h-screen bg-gray-200">
        <!-- Contenido principal -->
        <div class="flex-1 flex flex-col md:ml-64 p-6">
            <!-- Título de la sección -->
            <h2 class="text-2xl font-bold text-black mb-6">Subir un nuevo aviso</h2>

            <!-- Formulario -->
            <form method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
                @csrf
                <!-- Título del aviso -->
                <div class="mb-4">
                    <label for="titulo" class="block text-sm font-medium text-gray-700">Título del Aviso</label>
                    <input type="text" name="titulo" id="titulo"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md"
                        placeholder="Ingresa el título del aviso" required>
                </div>

                <!-- Descripción del aviso -->
                <div class="mb-4">
                    <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                    <textarea name="descripcion" id="descripcion" rows="4"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md" placeholder="Describe el producto o servicio"
                        required></textarea>
                </div>

                <!-- Precio -->
                <div class="mb-4">
                    <label for="precio" class="block text-sm font-medium text-gray-700">Precio</label>
                    <input type="number" name="precio" id="precio"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md" placeholder="Ingresa el precio"
                        required>
                </div>

                <!-- Categoría -->
                <div class="mb-4">
                    <label for="categoria" class="block text-sm font-medium text-gray-700">Categoría</label>
                    <select name="categoria" id="categoria"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                        <option value="">Selecciona una categoría</option>
                        <option value="servicio">Servicio</option>
                        <option value="producto">Producto</option>
                    </select>
                </div>

                <!-- Imagen del aviso -->
                <div class="mb-4">
                    <label for="imagen" class="block text-sm font-medium text-gray-700">Imagen del Aviso</label>
                    <input type="file" name="imagen" id="imagen" class="mt-1 block w-full text-sm text-gray-700"
                        required>
                </div>

                <!-- Botón de enviar -->
                <div class="flex justify-end">
                    <button type="submit"
                        class="px-4 py-2 bg-secondary text-white font-semibold rounded-md shadow-sm hover:bg-blue-700 transition duration-300">
                        Publicar Aviso
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-dashboard-layout>
