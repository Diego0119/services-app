<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Panel de Administración</title>
</head>

<body class="bg-lightGray font-sans">
    <x-navbar />
    <!-- Sidebar -->
    <div class="flex">
        <nav class="fixed inset-y-0 left-0 z-30 w-64 bg-primary text-white transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out"
            id="sidebar">
            <div class="flex items-center justify-center h-16 border-b border-lightGray">
                <h1 class="text-lg font-semibold">Panel Admin</h1>
            </div>
            <ul class="mt-6">
                <li><a href="#" class="block px-4 py-2 hover:bg-darkGray">Inicio</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-darkGray">Usuarios</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-darkGray">Configuraciones</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-darkGray">Reportes</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-darkGray">Cerrar Sesión</a></li>
            </ul>
        </nav>

        <!-- Contenido principal -->
        <div class="flex-1 md:ml-64 p-6">
            <button id="menu-toggle" class="md:hidden p-2 text-white bg-primary rounded">
                Menu
            </button>
            <h2 class="text-2xl font-semibold mb-4">Bienvenido al Panel de Administración</h2>

            <!-- Contenido Dummy -->
            <div class="bg-white shadow-md rounded-lg p-4 mb-6">
                <h3 class="text-xl font-semibold text-primary">Estadísticas</h3>
                <p class="mt-2">Total de usuarios: <span class="font-bold">120</span></p>
                <p>Total de ventas: <span class="font-bold">$5,300</span></p>
                <p>Tickets abiertos: <span class="font-bold">8</span></p>
            </div>

            <div class="bg-white shadow-md rounded-lg p-4 mb-6">
                <h3 class="text-xl font-semibold text-primary">Últimos Usuarios Registrados</h3>
                <ul class="mt-2">
                    <li>Juan Pérez</li>
                    <li>María López</li>
                    <li>Carlos García</li>
                    <li>Ana Martínez</li>
                    <li>Luisa Fernández</li>
                </ul>
            </div>

            <div class="bg-white shadow-md rounded-lg p-4 mb-6">
                <h3 class="text-xl font-semibold text-primary">Reportes Recientes</h3>
                <table class="min-w-full mt-2">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2 bg-lightGray">ID</th>
                            <th class="border px-4 py-2 bg-lightGray">Usuario</th>
                            <th class="border px-4 py-2 bg-lightGray">Estado</th>
                            <th class="border px-4 py-2 bg-lightGray">Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">1</td>
                            <td class="border px-4 py-2">Juan Pérez</td>
                            <td class="border px-4 py-2">Abierto</td>
                            <td class="border px-4 py-2">2024-09-25</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">2</td>
                            <td class="border px-4 py-2">María López</td>
                            <td class="border px-4 py-2">Cerrado</td>
                            <td class="border px-4 py-2">2024-09-24</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">3</td>
                            <td class="border px-4 py-2">Carlos García</td>
                            <td class="border px-4 py-2">En Proceso</td>
                            <td class="border px-4 py-2">2024-09-23</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const sidebar = document.getElementById('sidebar');

        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>

</body>
