<x-dashboard-layout>
    <div class="flex flex-col p-6 bg-gray-200 md:ml-64">
        <h2 class="text-2xl font-semibold mb-4">Lista de Avisos</h2>

        @if (count($notices) > 0)
            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-lg">
                <thead>
                    <tr class="bg-gray-100 border-b">
                        <th class="text-left px-4 py-2">Título</th>
                        <th class="text-left px-4 py-2">Precio</th>
                        <th class="text-left px-4 py-2">Contacto</th>
                        <th class="text-left px-4 py-2">Estado</th>
                        <th class="text-left px-4 py-2">Vistas</th>
                        <th class="text-left px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notices as $notice)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2">{{ $notice->title }}</td>
                            <td class="px-4 py-2">{{ $notice->price }} CLP</td>
                            <td class="px-4 py-2">{{ $notice->user->name }} - {{ $notice->user->email }}</td>
                            <td class="px-4 py-2">{{ $notice->status }}</td>
                            <td class="px-4 py-2">{{ $notice->views > 0 ? $notice->views : 0 }}</td>
                            <td class="px-4 py-2">
                                <a href={{ route('notice.show', $notice->id) }} class="text-blue-600 hover:underline"
                                    href="#">
                                    <i class="fas fa-eye bg-blue-600 text-white rounded-md p-2"></i>
                                </a>
                                <a class="text-red-600 hover:urnderline ml-4" href="#">
                                    <i class="fas fa-trash-alt bg-red-600 text-white rounded-md p-2"></i>
                                </a>
                                <a href={{ route('notice.modify', $notice->id) }}
                                    class="text-yellow-600 hover:underline ml-4" href="#">
                                    <i class="fas fa-cog bg-yellow-600 text-white rounded-md p-2"></i>
                                </a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No tienes anuncios publicados.</p>
        @endif
        {{ $notices->links() }}
    </div>
</x-dashboard-layout>
