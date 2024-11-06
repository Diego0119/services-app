<x-information-layout>

    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-semibold text-center mb-8 mt-16 text-primary">Contáctanos</h1>

        <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
            <form method="POST" action="#>
                @csrf

                <div class="mb-4">
                <label for="name" class="block text-lg font-semibold">Nombre</label>
                <input type="text" id="name" name="name" class="w-full p-3 border rounded-md mt-2" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-lg font-semibold">Correo Electrónico</label>
            <input type="email" id="email" name="email" class="w-full p-3 border rounded-md mt-2" required>
        </div>

        <div class="mb-4">
            <label for="subject" class="block text-lg font-semibold">Asunto</label>
            <input type="text" id="subject" name="subject" class="w-full p-3 border rounded-md mt-2" required>
        </div>

        <div class="mb-4">
            <label for="message" class="block text-lg font-semibold">Mensaje</label>
            <textarea id="message" name="message" rows="4" class="w-full p-3 border rounded-md mt-2" required></textarea>
        </div>

        <div class="mb-6">
            <button type="submit"
                class="w-full py-3 bg-primary text-white font-semibold rounded-lg hover:bg-secondary">
                Enviar Mensaje
            </button>
        </div>
        </form>
    </div>
    </div>
</x-information-layout>
