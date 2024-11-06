<footer class="bg-darkGray text-white py-8 mt-8">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Sección 1: Información de la empresa -->
        <div>
            <h3 class="text-lg font-semibold mb-4">Sobre deNexos</h3>
            <p class="text-sm">deNexos es un marketplace donde puedes encontrar y ofrecer productos y servicios de
                calidad. Nuestra misión es conectar a compradores y vendedores de manera sencilla y segura.</p>
        </div>

        <!-- Sección 2: Enlaces rápidos -->
        <div>
            <h3 class="text-lg font-semibold mb-4">Enlaces Rápidos</h3>
            <ul>
                <li><a href={{ route('home') }} class="hover:underline text-sm">Inicio</a></li>
                <li><a href={{ route('policies') }} class="hover:underline text-sm">Política de privacidad </a></li>
                <li><a href={{ route('services') }} class="hover:underline text-sm">Servicios </a></li>
            </ul>
        </div>

        <!-- Sección 3: Contacto -->
        <div>
            <h3 class="text-lg font-semibold mb-4">Contacto</h3>
            <ul class="text-sm">
                <li><a href={{ route('contact') }} class="hover:underline text-sm">Contactanos aquí</a></li>
            </ul>

            {{-- <!-- Redes Sociales -->
            <div class="mt-4">
                <p class="font-semibold">Síguenos en:</p>
                <div class="flex space-x-4 mt-2">
                    <a href="#" aria-label="Facebook" class="hover:text-secondary">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <!-- SVG de Facebook -->
                        </svg>
                    </a>
                    <a href="#" aria-label="Twitter" class="hover:text-secondary">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <!-- SVG de Twitter -->
                        </svg>
                    </a>
                    <a href="#" aria-label="Instagram" class="hover:text-secondary">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <!-- SVG de Instagram -->
                        </svg>
                    </a>
                </div>
            </div> --}}
        </div>
    </div>

    <!-- Footer Inferior -->
    <div class="border-t border-gray-700 mt-8 pt-4 text-center">
        <p class="text-sm">© 2024 deNexos.cl - Todos los derechos reservados | Diseñado y desarrollado por Diego Alonso
            Sanhueza Aguilar</p>
    </div>
</footer>
