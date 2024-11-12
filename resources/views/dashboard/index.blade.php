<x-dashboard-layout>
    <!-- Contenedor para el layout completo -->
    <div class="flex h-screen bg-gray-200">
        <!-- Sidebar -->

        <!-- Contenido principal -->
        <div class="flex-1 flex flex-col md:ml-64">
            <!-- Botón para abrir el menú en pantallas pequeñas -->
            <header class="md:hidden bg-gray-800 text-white flex justify-between items-center p-4">
                <button id="menu-toggle" class="p-2 text-white bg-gray-700 rounded">Menu</button>
                <h2 class="text-lg font-semibold">Panel de Administración</h2>
            </header>

            <!-- Contenido principal del panel -->
            <main class="flex-1 p-6">
                <h2 class="text-2xl font-semibold mb-4">Bienvenido al Panel de Administración</h2>

                <!-- Mensajes -->
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('warning'))
                    <div class="bg-yellow-300 border border-yellow-600 text-white- px-4 py-3 rounded relative mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="bg-red-300 border border-red-600 text-white- px-4 py-3 rounded relative mb-4">
                        {{ session('error') }}
                    </div>
                @endif


                <div class="bg-white shadow-md rounded-lg p-4 mb-6">
                    <h3 class="text-xl font-semibold text-gray-800">Estadísticas</h3>
                    <p class="mt-2">Total de anuncios: <span class="font-bold">12</span></p>
                    <p>Vistas totales: <span class="font-bold">$5,300</span></p>
                </div>
            </main>
        </div>
    </div>
</x-dashboard-layout>
