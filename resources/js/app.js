import './bootstrap';

import Swiper from 'swiper/bundle';

// import Swiper styles
import 'swiper/css';
import 'swiper/css/bundle';

new Swiper('.main-slider', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

new Swiper('.brands-swiper-slider', {
    // Optional parameters
    direction: 'horizontal', // atau 'vertical'
    loop: true,
    slidesPerView: 5, // Jumlah slide yang ditampilkan sekaligus
    spaceBetween: 20, // Jarak antara slide
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    breakpoints: {
        // Sesuaikan breakpoint sesuai kebutuhan
        640: {
            slidesPerView: 3,
        },
        320: {
            slidesPerView: 2,
        },
    },
});


