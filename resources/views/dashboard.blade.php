<x-app-layout>
    <!-- Contenedor para el layout completo -->
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <div class="fixed inset-y-0 left-0 z-40 w-64 bg-darkGray text-white transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out top-16"
            id="sidebar">
            <div class="flex items-center justify-center h-16 border-b border-gray-600">
                <h1 class="text-lg font-semibold">Panel Admin</h1>
            </div>
            <ul class="mt-6">
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-600">Inicio</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-600">Usuarios</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-600">Configuraciones</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-600">Reportes</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-600">Cerrar Sesión</a></li>
            </ul>
        </div>

        <!-- Contenido principal -->
        <div class="flex-1 flex flex-col md:ml-64 pt-16">
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

    <!-- Script para el menú -->
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const sidebar = document.getElementById('sidebar');

        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>
</x-app-layout>
