<x-dashboard-layout>
    <div class="flex h-screen bg-gray-200">
        <!-- Contenido principal -->
        <div class="flex-1 flex flex-col md:ml-64 p-6">
            <!-- Título de la sección -->
            <h2 class="text-2xl font-bold text-black mb-6">Subir un nuevo aviso</h2>

            <!-- Formulario -->
            <form action={{ route('upload-notice.store') }} method="POST" enctype="multipart/form-data"
                class="bg-white p-6 rounded-lg shadow-md">
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

                <div id="attribute-container" class="flex flex-wrap">
                    <!-- Aquí se añadirán los inputs dinámicamente -->
                </div>


                <!-- Región -->
                <div class="mb-4">
                    <label for="region" class="block text-sm font-medium text-gray-700">Región</label>
                    <select name="region" id="region"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                        <option value="">Selecciona una región</option>
                        @foreach ($regions as $region)
                            <option value="{{ $region->id }}">{{ $region->name }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- Comuna-->
                <div class="mb-4">
                    <label for="commune" class="block text-sm font-medium text-gray-700">Comuna</label>
                    <select id="commune" name="commune"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                        <option value="">Selecciona una comuna</option>
                    </select>

                </div>
                <div id="attribute-container" class="mb-4">
                    <!-- Aquí se agregarán los atributos dinámicamente -->
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
        let communes = @json($communes);

        // Obtener elementos de DOM
        const categoriaSelect = document.getElementById('categoria');
        const attributeContainer = document.getElementById('attribute-container'); // Contenedor para los atributos
        const communeSelect = document.getElementById('commune');

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

            options.forEach(attr => {
                // Crear un contenedor para cada atributo
                const attributeDiv = document.createElement('div');
                attributeDiv.classList.add('flex', 'items-center', 'space-x-2', 'w-full', 'md:w-1/2', 'lg:w-1/3');

                let input;
                switch (attr.type) {
                    case 'checkbox':
                        input = document.createElement('input');
                        input.type = 'checkbox';
                        input.id = `attribute_${attr.id}`;
                        input.name = `attribute[]`;
                        input.value = attr.id;
                        input.classList.add('form-checkbox', 'h-4', 'w-4', 'text-blue-600', 'border-gray-300',
                            'rounded'); // Clases de Tailwind para checkbox
                        break;

                    case 'radio':
                        input = document.createElement('input');
                        input.type = 'radio';
                        input.id = `attribute_${attr.id}`;
                        input.name = `attribute`;
                        input.value = attr.id;
                        input.classList.add('form-radio', 'h-4', 'w-4', 'text-blue-600',
                            'border-gray-300'); // Clases de Tailwind para radio
                        break;

                    case 'select':
                        input = document.createElement('select');
                        input.id = `attribute_${attr.id}`;
                        input.name = `attribute[]`;
                        input.classList.add('form-select', 'mt-1', 'block', 'w-full', 'rounded-md',
                            'border-gray-300', 'shadow-sm');
                        attr.options.forEach(option => {
                            const opt = document.createElement('option');
                            opt.value = option.value;
                            opt.textContent = option.label;
                            input.appendChild(opt);
                        });
                        break;

                    default: // Campo de texto por defecto
                        input = document.createElement('input');
                        input.type = 'text';
                        input.id = `attribute_${attr.id}`;
                        input.name = `attribute[]`;
                        input.classList.add('mt-1', 'block', 'border', 'border-gray-300', 'rounded-md',
                            'shadow-sm'); // Clases de Tailwind para texto
                        break;
                }

                const label = document.createElement('label');
                label.textContent = attr.name;
                label.htmlFor = `attribute_${attr.id}`;
                label.classList.add('block', 'text-sm', 'font-medium',
                    'text-gray-700'); // Clases de Tailwind para etiqueta

                // Añadir la etiqueta y el input al contenedor
                attributeDiv.appendChild(input);
                attributeDiv.appendChild(label);

                // Añadir el contenedor al attribute-container
                attributeContainer.appendChild(attributeDiv);
            });

        }

        // Función para actualizar las comunas basadas en la región seleccionada
        function updateCommunes(regionId) {
            // Limpiar las opciones actuales en el select de comunas
            communeSelect.innerHTML = '<option value="">Selecciona una comuna</option>';

            // Filtrar comunas que coincidan con el regionId
            const filteredCommunes = communes.filter(commune => commune.region_id == regionId);

            // Añadir las nuevas opciones filtradas al select
            filteredCommunes.forEach(commune => {
                const option = document.createElement('option');
                option.value = commune.id; // Asignar el id de la comuna
                option.textContent = commune.name; // Asignar el nombre de la comuna
                communeSelect.appendChild(option); // Añadir la opción al select
            });
        }


        // Escuchar cambios en el select de categorías
        categoriaSelect.addEventListener('change', function() {
            const selectedCategoryId = this.value;
            updateAttributes(selectedCategoryId);
        });

        // Escuchar cambios en el select de regiones
        const regionSelect = document.getElementById('region');
        regionSelect.addEventListener('change', function() {
            const selectedRegionId = this.value;
            updateCommunes(selectedRegionId);
        });
    </script>

</x-dashboard-layout>
