<x-dashboard-layout>
    <div class="flex flex-col p-6 bg-gray-200 md:ml-64">
        <h2 class="text-2xl font-semibold mb-4">Lista de usuarios</h2>
        <div class="flex md:flex-row flex-col gap-x-6 mb-4">
            <input class="rounded-md" type="text" placeholder="Nombre de usuario">
            <input class="rounded-md" type="text" placeholder="Correo">
            <input class="rounded-md" type="text" placeholder="Rol">
            <button class="bg-blue-600 border rounded-lg"><i
                    class="fa-solid fa-magnifying-glass text-white px-4 text-lg"></i></button>
        </div>

        @if (count($users) > 0)
            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-lg">
                <thead>
                    <tr class="bg-gray-100 border-b">
                        <th class="text-left px-4 py-2">Nombre</th>
                        <th class="text-left px-4 py-2">Correo</th>
                        <th class="text-left px-4 py-2">Avisos publicados</th>
                        <th class="text-left px-4 py-2">Rol</th>
                        <th class="text-left px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2">{{ $user->name }}</td>
                            <td class="px-4 py-2">{{ $user->email }}</td>
                            <td class="px-4 py-2">{{ $user->name }} - {{ $user->email }}</td>
                            <td class="px-4 py-2"> Cliente</td>
                            <td class="px-4 py-2">
                                <a class="text-blue-600 hover:underline" href="#">
                                    <i class="fas fa-eye bg-blue-600 text-white rounded-md p-2"></i>
                                </a>
                                <a class="text-red-600 hover:underline ml-4" href="#">
                                    <i class="fas fa-trash-alt bg-red-600 text-white rounded-md p-2"></i>
                                </a>
                                <a class="text-yellow-600 hover:underline ml-4" href="#">
                                    <i class="fas fa-cog bg-yellow-600 text-white rounded-md p-2"></i>
                                </a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No hay usuarios en la plataforma.</p>
        @endif
        {{-- {{ $notices->links() }} --}}
    </div>
</x-dashboard-layout>
