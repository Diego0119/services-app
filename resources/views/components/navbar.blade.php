<nav class="bg-primary p-4 shadow-md fixed top-0 w-full z-50">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-white text-2xl font-bold text-secondary"><a href="{{ route('home') }}">deNexos</a></h1>
        <div>
            @if (Auth::check())
                <a href="{{ route('dashboard') }}"
                    class="bg-secondary text-white px-4 py-2 hover:bg-lightGray rounded">Dashboard</a>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="bg-secondary px-4 py-2 text-white hover:bg-lightGray rounded">Cerrar
                        sesión</button>
                </form>
            @else
                <a href="{{ route('login') }}"
                    class="bg-secondary text-white px-4 py-2 hover:bg-lightGray rounded">Iniciar Sesión</a>
                <a href="{{ route('register') }}"
                    class="bg-secondary text-white px-4 py-2 hover:bg-lightGray rounded">Nuevo Usuario</a>
            @endif
        </div>
    </div>
</nav>
