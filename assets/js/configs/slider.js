new Swiper('.swiper-container',{
    slidesPerView: 2.5,
    slidesPerGroup: 1,
    spaceBetween: 30,
    speed: 400,
    pagination: {
        // el: '.swiper-pagination-1',
        // type: 'bullets',
    },
    navigation: {
        nextEl: '.slider-button-next',
        prevEl: '.slider-button-prev',
    },
    breakpoints: {
        320: {
            spaceBetween: 10,
            slidesPerView: 1.12,
            slidesPerGroup: 1,
        },
        430: {
            spaceBetween: 10,
            slidesPerView: 1.2,
            slidesPerGroup: 1,
        },
        768: {
            spaceBetween: 20,
            slidesPerView: 2.5,
            slidesPerGroup: 1,
        },
        1024: {
            spaceBetween: 30,
            slidesPerView: 2.5,
            slidesPerGroup: 1,
        }
    }
});
