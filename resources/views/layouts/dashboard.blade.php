<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'deNexos') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="fixed inset-y-0 left-0 z-40 w-64 bg-darkGray text-white transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out"
        id="sidebar">
        <div class="flex items-center justify-center border-b border-gray-600">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo_dashboard.png') }}" class="w-52 p-2" alt="Logo Dashboard">
            </a>
        </div>
        <a class="flex justify-center mt-4" href="{{ route('upload-notice.index') }}">
            <x-button class="bg-primary">Subir aviso</x-button>
        </a>
        <ul class="mt-6">
            <li><a href="{{ route('dashboard') }}" class="block font-bold px-4 py-2 hover:bg-gray-600">Inicio</a>
            </li>
            @if (Auth::user()->isClient())
                <li><a href="{{ route('my-notices.index') }}" class="block font-bold px-4 py-2 hover:bg-gray-600">Mis
                        Avisos</a>
                </li>
                <li><a href="{{ route('my-notices.index') }}" class="block font-bold px-4 py-2 hover:bg-gray-600">Mis
                        Avisos Promocionados</a>
                </li>
            @elseif (Auth::user()->isAdmin())
                <li><a href="{{ route('get-users') }}" class="block font-bold px-4 py-2 hover:bg-gray-600">Usuarios</a>
                </li>
                <li><a href="#" class="block font-bold px-4 py-2 hover:bg-gray-600">Codigos de descuento</a></li>
                <li><a href="#" class="block font-bold px-4 py-2 hover:bg-gray-600">
                        Avisos publicados</a>
                </li>
            @endif
            <li><a href="{{ route('account.index') }}" class="block font-bold px-4 py-2 hover:bg-gray-600">Mi
                    Cuenta</a>
            </li>
            <form action="{{ route('logout') }}" method="POST" style="display: inline;" class="ml-2">
                @csrf
                <button type="submit" class="block font-bold px-4 py-2 hover:bg-gray-600">Cerrar sesión</button>
            </form>
        </ul>
    </div>

    <div class="flex flex-row justify-between items-center bg-white py-4">
        <div>
            @php
                $user = Auth::user();
            @endphp
            @if (Auth::user()->isClient())
                <p class="text-black ml-72">{{ $user->name }} - Cliente</p>
            @elseif(Auth::user()->isAdmin())
                <p class="text-black ml-72">{{ $user->name }} - Administrador</p>
            @endif
        </div>
        <div>
            <a href="{{ route('account.index') }}">
                <p class="text-black mr-6 border border-black rounded-full p-2">Perfil</p>
            </a>
        </div>
    </div>


    <!-- Aquí se inyecta el contenido de las vistas del dashboard -->
    <div class="min-h-screen bg-gray-100">
        {{ $slot }}
    </div>


    <!-- Script para el menú -->
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const sidebar = document.getElementById('sidebar');

        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>
</body>

</html>
