new Swiper('.swiper-container',{
    slidesPerView: 2.5,
    slidesPerGroup: 1,
    spaceBetween: 30,
    loop: true,
    speed: 400,
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',

    },
    navigation: {
        nextEl: '.swiper-button-next',
        // prevEl: '.swiper-button-prev',
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
