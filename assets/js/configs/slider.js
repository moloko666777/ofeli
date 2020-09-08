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
    // breakpoints: {
    //     320: {
    //         spaceBetween: 40,
    //         slidesPerView: 1,
    //         slidesPerGroup: 1,
    //     },
    //     430: {
    //         spaceBetween: 40,
    //         slidesPerView: 2,
    //         slidesPerGroup: 2,
    //     },
    //     768: {
    //         spaceBetween: 45,
    //         slidesPerView: 3,
    //         slidesPerGroup: 3,
    //     },
    //     1024: {
    //         spaceBetween: 80,
    //         slidesPerView: 3,
    //         slidesPerGroup: 3,
    //     }
    // }
})
