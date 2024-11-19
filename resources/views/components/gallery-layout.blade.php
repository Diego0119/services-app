<header>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</header>

<div class="bg-white p-6 rounded-lg shadow-md my-4">
    <div class="bg-white p-6 rounded-lg shadow-md my-4">
        <p class="text-primary text-center font-bold text-xl">Galería de Productos y Servicios</p>
    </div>

    <div class="swiper-container overflow-x-hidden p-4 mt-4">
        <div class="swiper-wrapper flex flex-row">
            @foreach ($galleryNotices as $notice)
                <div class="swiper-slide flex-shrink-0 w-64 bg-gray-100 p-4 rounded-lg shadow-md text-center hover:scale-105 transition-transform transform-gpu"
                    onmouseover="this.style.transform='scale(1.005) translateY(-10px)'; swiper.autoplay.stop();"
                    onmouseout="this.style.transform='scale(1) translateY(0)'; swiper.autoplay.start();">
                    <img src="https://media-cldnry.s-nbcnews.com/image/upload/t_fit-1000w,f_auto,q_auto:best/newscms/2019_24/1448814/how-size-doesnt-make-you-happier-today-main-190614.jpg"
                        alt="Producto 1" class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-bold mb-2">{{ $notice->title }}</h3>
                    <p class="text-gray-700 mb-2">{{ $notice->description }}</p>
                    <p class="text-green-500 font-bold mb-2">{{ $notice->price }} CLP</p>
                    <a href="{{ route('notice.show', $notice->id) }}">
                        <button class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-800">Ver más</button>
                    </a>
                </div>
            @endforeach
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
