<nav class="bg-primary p-4 shadow-md fixed top-0 w-full z-50">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold text-secondary"><a href="{{ route('home') }}">deNexos</a></h1>
        <div class="space-x-4">
            @if (Auth::check())
                <a href="{{ route('dashboard') }}"
                    class="bg-secondary text-black px-4 py-2 hover:bg-lightGray rounded hover:cursor-pointer">Dashboard</a>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="bg-secondary px-4 py-2 text-black hover:bg-lightGray rounded">Cerrar
                        sesión</button>
                </form>
            @else
                <a href="{{ route('login') }}"
                    class="bg-secondary text-black px-4 py-2 hover:bg-lightGray rounded">Iniciar Sesión</a>
                <a href="{{ route('register') }}"
                    class="bg-secondary text-black px-4 py-2 hover:bg-lightGray rounded">Nuevo Usuario</a>
            @endif
        </div>
    </div>
</nav>
