
new Swiper('#services-container',{
    slidesPerView: 1,
    spaceBetween: 20,
    speed: 400,
    loop: true,
    navigation: {
        nextEl: '.slider-button-next',
        prevEl: '.slider-button-prev',
    },
    // breakpoints: {
    //     320: {
    //         spaceBetween: 15,
    //         slidesPerView: 1,
    //         slidesPerGroup: 1,
    //     },
    //     430: {
    //         spaceBetween: .9,
    //         slidesPerView: 1,
    //         slidesPerGroup: 1,
    //     },
    //     768: {
    //         spaceBetween: 15,
    //         // slidesPerView: 1.5,
    //         slidesPerView: 2,
    //         slidesPerGroup: 1,
    //     },
    //     1024: {
    //         spaceBetween: 20,
    //         slidesPerView: 4,
    //         slidesPerGroup: 1,
    //     }
    // }
});

new Swiper('.social__slider',{
    slidesPerView: 5,
    // slidesPerGroup: 1,
    // slidesPerColumn: 2,
    // slidesPerColumnFill: 'row',
    spaceBetween: 17,
    speed: 400,
    loop: true,
    // autoplay: {
    //     delay: 2500,
    //     disableOnInteraction: false,
    // },
    pagination: {
        // el: '.swiper-pagination-1',
        // type: 'bullets',
    },
    navigation: {
        nextEl: '.slider-button-next',
        prevEl: '.slider-button-prev',
    },
    breakpoints: {
        // 320: {
        //     spaceBetween: 15,
        //     slidesPerView: 1,
        //     slidesPerGroup: 1,
        // },
        // 430: {
        //     spaceBetween: .9,
        //     slidesPerView: 1,
        //     slidesPerGroup: 1,
        // },
        768: {
            spaceBetween: 15,
            // slidesPerView: 1.5,
            slidesPerView: 2,
            slidesPerGroup: 1,
        },
        // 1024: {
        //     spaceBetween: 20,
        //     slidesPerView: 4,
        //     slidesPerGroup: 1,
        // }
    }
});

new Swiper('#serv-slider',{
    slidesPerView: 1,
    // slidesPerGroup: 1,
    // slidesPerColumn: 2,
    // slidesPerColumnFill: 'row',
    spaceBetween: 20,
    speed: 400,
    loop: true,
    // autoplay: {
    //     delay: 2500,
    //     disableOnInteraction: false,
    // },
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
    },
    // navigation: {
    //     nextEl: '.slider-button-next',
    //     prevEl: '.slider-button-prev',
    // },
    breakpoints: {
        320: {
            spaceBetween: 15,
            slidesPerView: 1,
            slidesPerGroup: 1,
        },
        430: {
            spaceBetween: 10,
            slidesPerView: 1,
            slidesPerGroup: 1,
        },
    }
});

new Swiper('#instagram-slider',{
    slidesPerView: 5,
    slidesPerGroup: 1,
    spaceBetween: 21,
    speed: 400,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
    },
    breakpoints: {
        375: {
            spaceBetween: 9,
            slidesPerView: 2,
        },
        430: {
            spaceBetween: 9,
            slidesPerView: 2,
        },
        768: {
            spaceBetween: 21,
            slidesPerView: 4,
        },

    }
});

new Swiper('#visage-slider',{
    slidesPerView: 5,
    slidesPerGroup: 1,
    spaceBetween: 21,
    speed: 400,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
    },
    breakpoints: {
        375: {
            spaceBetween: 9,
            slidesPerView: 2,
        },
        430: {
            spaceBetween: 9,
            slidesPerView: 2,
        },
        767: {
            spaceBetween: 25,
            slidesPerView: 3,
        },

    }
});