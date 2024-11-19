<x-dashboard-layout>

    <x-slot name="header">
        {{ __('My Account') }}
    </x-slot>

    <div class="container bg-white p-4 rounded-xl md:ml-64">
        <div class="text-center">

            <!-- Formulario de edición de cuenta -->
            <h3 class="text-2xl font-semibold text-gray-900 mb-4">{{ __('Edit My Account') }}</h3>
            <form action={{ route('account.index') }} method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- <div class="mb-6">
                    <label for="avatar" class="cursor-pointer relative">
                        <div class="border-red-900 border rounded-full p-2 mx-auto"
                            style="width: 180px; height: 180px;">
                            <div class="group relative">
                                <div
                                    class="w-full h-full absolute top-0 left-0 flex items-center justify-center opacity-0 bg-black bg-opacity-70 group-hover:opacity-100 rounded-full transition-opacity duration-300">
                                    <span class="text-white">{{ __('Upload Avatar') }}</span>
                                </div>
                                @if (auth()->user()->avatar)
                                    <img src="{{ auth()->user()->avatar }}" alt="Avatar"
                                        class="rounded-full h-full w-full">
                                @else
                                    <img src="{{ asset('images/default-avatar.png') }}" alt="Avatar"
                                        class="rounded-full h-full w-full">
                                @endif
                                <i class="fas fa-pencil-alt text-red absolute bottom-0 right-2 text-lg"></i>
                            </div>
                        </div>
                        <!-- Campo de carga de archivo oculto -->
                        <input id="avatar" type="file" name="avatar" class="hidden" accept="image/*">
                    </label>
                </div>

                <!-- Quitar Avatar -->
                <div class="mb-6">
                    <label for="remove_avatar"
                        class="block text-sm font-medium text-gray-700">{{ __('Remove Avatar') }}:</label>
                    <input type="checkbox" id="remove_avatar" name="remove_avatar" value="1"
                        class="form-checkbox h-5 w-5 text-blue-600">
                </div> --}}

                <!-- Nombre -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}:</label>
                    <input type="text" name="name" value="{{ auth()->user()->name }}"
                        class="border rounded-md p-3 w-full max-w-md focus:outline-none focus:bg-white">
                </div>

                <!-- Correo electrónico -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}:</label>
                    <input type="text" name="email" value="{{ auth()->user()->email }}"
                        class="border rounded-md p-3 w-full max-w-md bg-gray-100 focus:outline-none focus:bg-white"
                        disabled>
                </div>

                <!-- Contraseña -->
                <div class="mb-4">
                    <label for="password"
                        class="block text-sm font-medium text-gray-700">{{ __('New Password') }}:</label>
                    <input type="password" id="password" name="password"
                        class="border rounded-md p-3 w-full max-w-md focus:outline-none focus:bg-white ml-4">
                    <button type="button" onclick="togglePassword('password')" class="text-gray-500">
                        <i id="toggle-icon-password" class="fas fa-eye"></i>
                    </button>
                </div>
                <div class="mb-4">
                    <label for="password_confirmation"
                        class="block text-sm font-medium text-gray-700">{{ __('Confirm Password') }}:</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="border rounded-md p-3 w-full max-w-md focus:outline-none focus:bg-white ml-4">
                    <button type="button" onclick="togglePassword('password_confirmation')" class="text-gray-500">
                        <i id="toggle-icon-password_confirmation" class="fas fa-eye"></i>
                    </button>
                </div>

                <!-- Botón para actualizar la cuenta -->
                <x-button class="mb-4" type="submit">
                    {{ __('Update Account') }}
                </x-button>

                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                        {{ session('success') }}
                    </div>
                @elseif (session('error'))
                    <div class="bg-red-300 border border-red-600 text-black px-4 py-3 rounded relative mb-4">
                        {{ session('error') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-black px-4 py-3 rounded relative mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
        </div>
    </div>
    <script>
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(`toggle-icon-${inputId}`);

            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>

</x-dashboard-layout>
