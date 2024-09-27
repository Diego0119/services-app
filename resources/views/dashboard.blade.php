<x-app-layout>
    <!-- Contenedor para el layout completo -->
    <div class="flex h-screen bg-gray-200">
        <!-- Sidebar -->

        <!-- Contenido principal -->
        <div class="flex-1 flex flex-col md:ml-64">
            <div class="flex flex-row justify-between bg-white py-4">
                <div class="">
                    <p class="text-black ml-6">Diego - CLIENTE</p>
                </div>
                <div>
                    <p class="text-black mr-6">Perfil</p>
                </div>
            </div>
            <!-- Botón para abrir el menú en pantallas pequeñas -->
            <header class="md:hidden bg-gray-800 text-white flex justify-between items-center p-4">
                <button id="menu-toggle" class="p-2 text-white bg-gray-700 rounded">Menu</button>
                <h2 class="text-lg font-semibold">Panel de Administración</h2>
            </header>

            <!-- Contenido principal del panel -->
            <main class="flex-1 p-6">
                <h2 class="text-2xl font-semibold mb-4">Bienvenido al Panel de Administración</h2>
                <div class="bg-white shadow-md rounded-lg p-4 mb-6">
                    <h3 class="text-xl font-semibold text-gray-800">Estadísticas</h3>
                    <p class="mt-2">Total de usuarios: <span class="font-bold">120</span></p>
                    <p>Total de ventas: <span class="font-bold">$5,300</span></p>
                    <p>Tickets abiertos: <span class="font-bold">8</span></p>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>
