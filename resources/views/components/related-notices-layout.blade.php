<header>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</header>

<div class="bg-white p-6 rounded-lg shadow-md my-4">
    <div class="bg-white p-6 rounded-lg shadow-md my-4">
        <p class="text-primary text-center font-bold text-xl">Avisos relacionados</p>
    </div>

    <div class="swiper-container overflow-x-hidden p-4 mt-4">
        <div class="swiper-wrapper flex flex-row">
            @if ($related_notices->isNotEmpty())
                @foreach ($related_notices as $related_notice)
                    <div class="swiper-slide flex-shrink-0 w-64 bg-gray-100 p-4 rounded-lg shadow-md text-center hover:scale-105 transition-transform transform-gpu"
                        onmouseover="this.style.transform='scale(1.005) translateY(-10px)'; swiper.autoplay.stop();"
                        onmouseout="this.style.transform='scale(1) translateY(0)'; swiper.autoplay.start();">
                        <img src="https://via.placeholder.com/300" alt="Producto 1"
                            class="w-full h-48 object-cover rounded-md mb-4">
                        <h3 class="text-lg font-bold mb-2">{{ $related_notice->title }}</h3>
                        <p class="text-gray-700 mb-2">{{ $related_notice->description }}</p>
                        <p class="text-green-500 font-bold mb-2">{{ $related_notice->price }}</p>
                        <a>
                            <a href={{ route('notice.show', $related_notice->id) }}>
                                <button class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-800">Ver
                                    más</button>
                            </a>
                    </div>
                @endforeach
            @else
                <div
                    class="flex justify-center items-center text-gray-500 font-semibold text-xl p-4 border border-dashed border-gray-300 rounded-lg bg-gray-50">
                    No hay anuncios relacionados
                </div>
            @endif

        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.swiper-container', {
            loop: true,
            slidesPerView: 3,
            spaceBetween: 20,
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 5,
                },
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        });
        window.swiper = swiper;
    });
</script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
