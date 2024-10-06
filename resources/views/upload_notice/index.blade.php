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


                <div id="attribute-container">
                    <!-- Aquí se añadirán los inputs dinámicamente -->
                </div>

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
        let categories = @json($categories);
        let category_attribute = @json($category_attribute);
        let attributes = @json($attributes);
        console.log(attributes);

        // Obtener elementos de DOM
        const categoriaSelect = document.getElementById('categoria');
        const attributeContainer = document.getElementById('attribute-container'); // Contenedor para los atributos

        // Función para actualizar los inputs de atributos
        function updateAttributes(categoryId) {
            // Limpiar los inputs actuales
            attributeContainer.innerHTML = '';

            // Filtrar los atributos que coincidan con la categoría seleccionada
            const filteredAttributes = category_attribute
                .filter(ca => ca.category_id == categoryId)
                .map(ca => ca.attribute_id);

            // Filtrar los atributos en función de los IDs obtenidos
            const options = attributes.filter(attr => filteredAttributes.includes(attr.id));

            // Añadir los nuevos inputs filtrados
            options.forEach(attr => {
                let input;
                switch (attr.type) { // Usar 'type' en lugar de 'input_type'
                    case 'checkbox':
                        input = document.createElement('input');
                        input.type = 'checkbox';
                        input.id = `attribute_${attr.id}`;
                        input.name = `attribute[]`; // Para enviar como array
                        input.value = attr.id;
                        break;

                    case 'radio':
                        input = document.createElement('input');
                        input.type = 'radio';
                        input.id = `attribute_${attr.id}`;
                        input.name = `attribute`; // Para seleccionar un solo atributo
                        input.value = attr.id;
                        break;

                    case 'select':
                        input = document.createElement('select');
                        input.id = `attribute_${attr.id}`;
                        input.name = `attribute[]`; // Para enviar como array
                        // Suponiendo que tienes opciones para el select
                        attr.options.forEach(option => {
                            const opt = document.createElement('option');
                            opt.value = option.value; // Asegúrate de que tengas el valor correcto
                            opt.textContent = option.label; // Asegúrate de que tengas el texto correcto
                            input.appendChild(opt);
                        });
                        break;

                    default: // Si no coincide con los anteriores, crear un campo de texto
                        input = document.createElement('input');
                        input.type = 'text';
                        input.id = `attribute_${attr.id}`;
                        input.name = `attribute[]`;
                        break;
                }

                const label = document.createElement('label');
                label.textContent = attr.name; // Nombre del atributo
                label.htmlFor = `attribute_${attr.id}`; // Asocia la etiqueta con el input

                attributeContainer.appendChild(label);
                attributeContainer.appendChild(input);
            });
        }

        // Escuchar cambios en el select de categorías
        categoriaSelect.addEventListener('change', function() {
            const selectedCategoryId = this.value;
            updateAttributes(selectedCategoryId);
        });
    </script>

</x-dashboard-layout>
