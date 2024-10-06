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

                        @foreach ($categories as $category)
                            {
                            <option value={{ $category->id }}>{{ $category->name }}</option>
                            }
                        @endforeach

                    </select>
                </div>

                {{-- <div class="mb-4">
                    <label for="attribute" class="block text-sm font-medium text-gray-700">Categoría adicional</label>
                    <select name="attribute" id="attribute"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                        <option value="">Selecciona una categoria adicional</option>

                        @foreach ($attributes as $attribute)
                            {
                            <option value={{ $attribute->id }}>{{ $attribute->name }}</option>
                            }
                        @endforeach

                    </select>
                </div> --}}

                <!-- Región -->
                <div class="mb-4">
                    <label for="region" class="block text-sm font-medium text-gray-700">Región</label>
                    <select name="region" id="region"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                        <option value="">Selecciona una región</option>

                        @foreach ($regions as $region)
                            {
                            <option value={{ $region->id }}>{{ $region->name }}</option>
                            }
                        @endforeach

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
    <script>
        // Pasar los atributos desde Blade a JavaScript como un JSON
        let attributes = @json($attributes);

        // Obtener elementos de DOM
        const categoriaSelect = document.getElementById('categoria');
        const attributeSelect = document.getElementById('attribute');

        // Función para actualizar el select de atributos
        function updateAttributes(categoryId) {
            // Limpiar las opciones actuales
            attributeSelect.innerHTML = '<option value="">Selecciona una categoría adicional</option>';

            // Filtrar atributos que coincidan con la categoría seleccionada
            const filteredAttributes = attributes.filter(attribute => attribute.category_id == categoryId);

            // Añadir las nuevas opciones filtradas
            filteredAttributes.forEach(attribute => {
                const option = document.createElement('option');
                option.value = attribute.id;
                option.textContent = attribute.name;
                attributeSelect.appendChild(option);
            });
        }

        // Escuchar cambios en el select de categorías
        categoriaSelect.addEventListener('change', function() {
            const selectedCategoryId = this.value;
            updateAttributes(selectedCategoryId);
        });
    </script>
</x-dashboard-layout>
