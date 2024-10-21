 <!-- Barra de búsqueda e inicio de sesión -->

 <body>
     <form action={{ route('search-notice') }} METHOD="GET">
         @csrf
         <div class="bg-white flex sm:space-x-4 py-4 my-4 rounded-lg flex-col sm:flex-row shadow-md">
             <!-- Ubicación / Buscador Rápido -->
             <div class="flex-1 sm:ml-4">
                 <input type="text" name="query" placeholder="¿Qué estás buscando?" class="rounded w-full p-2" />
             </div>
             <div class="flex-1">
                 <input id="search" placeholder="Ubicación" name="location" class="rounded w-full p-2" />
                 <div id="search_list"
                     class="bg-white shadow-md rounded mt-1 w-full list-none p-0 m-0 max-h-40 overflow-y-auto">
                 </div>
                 <input type="hidden" id="location_id" name="location_id" />
             </div>
             <div>
                 <x-button class="bg-primary py-2 px-4 sm:mr-4" type="submit">
                     <i class="fa-solid fa-magnifying-glass text-white mr-2 text-xl cursor-pointer"></i>Buscar
                 </x-button>
             </div>
         </div>

         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

         <script>
             $(document).ready(function() {
                 $('#search').on('keyup', function() {
                     var query = $(this).val();
                     $.ajax({
                         url: "{{ route('search') }}",
                         type: "GET",
                         data: {
                             'search': query
                         },
                         success: function(data) {
                             console.log('Datos recibidos:',
                                 data);
                             $('#search_list').html(
                                 data);
                         },
                         error: function(xhr, status, error) {
                             console.error('Error en AJAX: ' + error);
                         }
                     });
                 });
                 $(document).on('click', '#search_list li', function() {
                     var selectedId = $(this).data('id');
                     $('#location_id').val(selectedId);
                     $('#search').val($(this).data('name'));
                     $('#search_list').empty();
                 });
             });
         </script>
     </form>
 </body>
