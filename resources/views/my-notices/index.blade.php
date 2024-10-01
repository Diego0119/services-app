<x-dashboard-layout>
    <div class="flex flex-col p-6 bg-gray-200 md:ml-64">
        <h2 class="text-2xl font-semibold mb-4">Lista de Avisos</h2>
        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-lg">
            <thead>
                <tr class="bg-gray-100 border-b">
                    <th class="text-left px-4 py-2">Título</th>
                    <th class="text-left px-4 py-2">Precio</th>
                    <th class="text-left px-4 py-2">Contacto</th>
                    <th class="text-left px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2">Aviso 1</td>
                    <td class="px-4 py-2">$100</td>
                    <td class="px-4 py-2">Juan Pérez - 123456789</td>
                    <td class="px-4 py-2">
                        <a href="#" class="text-blue-600 hover:underline">Ver</a>
                        <a href="#" class="text-yellow-600 hover:underline ml-4">Editar</a>
                        <a href="#" class="text-red-600 hover:underline ml-4">Eliminar</a>
                    </td>
                </tr>
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2">Aviso 2</td>
                    <td class="px-4 py-2">$150</td>
                    <td class="px-4 py-2">María Gómez - 987654321</td>
                    <td class="px-4 py-2">
                        <a href="#" class="text-blue-600 hover:underline">Ver</a>
                        <a href="#" class="text-yellow-600 hover:underline ml-4">Editar</a>
                        <a href="#" class="text-red-600 hover:underline ml-4">Eliminar</a>
                    </td>
                </tr>
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2">Aviso 3</td>
                    <td class="px-4 py-2">$200</td>
                    <td class="px-4 py-2">Pedro Martínez - 456123789</td>
                    <td class="px-4 py-2">
                        <a href="#" class="text-blue-600 hover:underline">Ver</a>
                        <a href="#" class="text-yellow-600 hover:underline ml-4">Editar</a>
                        <a href="#" class="text-red-600 hover:underline ml-4">Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-dashboard-layout>
