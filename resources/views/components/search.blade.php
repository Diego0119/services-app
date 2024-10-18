 <!-- Barra de búsqueda e inicio de sesión -->
 <form action={{ route('search-notice') }} METHOD="GET">
     @csrf
     <div class="bg-white flex sm:space-x-4 py-4 my-4 rounded-lg flex-col sm:flex-row shadow-md">
         <!-- Ubicación / Buscador Rápido -->
         <div class="flex-1 sm:ml-4">
             <input type="text" name="query" placeholder="¿Qué estás buscando?" class="rounded w-full p-2" />
         </div>
         <div class="flex-1">
             <input placeholder="Ubicación" class="rounded w-full p-2" />
         </div>
         <div>
             <x-button class="bg-primary py-2 px-4 sm:mr-4" type="submit">
                 <i class="fa-solid fa-magnifying-glass text-white mr-2 text-xl cursor-pointer"></i>Buscar
             </x-button>
         </div>
     </div>
 </form>
