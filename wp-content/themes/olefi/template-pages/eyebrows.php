<?php
/* Template name: Шаблон "Брови и ресницы" */
get_header(); ?>

<main>
    <section>
        <div class="visage__wrapper">
            <div class="visage container-xxl">
                <div class="visage__left wow animate__animated animate__fadeInLeft">
                    <div class="visage__image">
                        <img src="<?=get_template_directory_uri(); ?>/assets/images/14.jpg"
                             alt=""/>
                        <h3>Брови <br> и  ресницы</h3>
                    </div>
                    <p>
                        Есть над чем задуматься: независимые государства объявлены нарушающими общечеловеческие нормы
                        этики
                        и морали. Являясь всего лишь частью общей картины, базовые сценарии поведения пользователей,
                        которые
                        представляют собой. Являясь всего лишь частью общей картины, базовые сценарии поведения
                        пользователей, которые представляют собой.
                    </p>
                </div>
                <div class="visage__right wow animate__animated animate__fadeInRight">
                    <div class="visage__right-tabs"></div>
                    <div class="visage__right-price">
                        <h4>ПРАЙС</h4>
                        <ul>
                            <li>
                                <p>ДНЕВНОЙ МАКИЯЖ<span>450 грн</span></p>
                            </li>
                            <li>
                                <p>ВЕЧЕРНИЙ МАКИЯЖ<span>450 грн</span></p>
                            </li>
                            <li>
                                <p>СВАДЕБНЫЙ МАКИЯЖ<span>450 грн</span></p>
                            </li>
                            <li>
                                <p>РЕСНИЦЫ 1ПУЧОК<span>450 грн</span></p>
                            </li>
                        </ul>
                        <button class="visage__btn" data-bs-toggle="modal" href="#exampleModalToggle" role="button"> Онлайн запись </button>
                    </div>

                </div>
            </div>
            <div class="visage__text-bottom">
                Есть над чем задуматься: независимые государства объявлены нарушающими общечеловеческие нормы этики и
                морали. Являясь всего лишь частью общей картины, базовые сценарии поведения пользователей, которые
                представляют собой. Являясь всего лишь частью общей картины, базовые сценарии поведения пользователей,
                которые представляют собой.
            </div>
        </div>
    </section>
    <section>
        <div class="social__wrapper">
            <div class="social container-xxl in-process wow animate__animated animate__fadeInUp">
                <span class="wow animate__animated  animate__fadeInLeftBig">ofeli</span>
                <h3 class="wow animate__animated animate__fadeInLeft">В ПРОЦЕССЕ РАБОТЫ</h3>
                <div class="social__card-wrapper wow animate__animated animate__fadeInTopRight">
                    <div class="social__card scale">
                        <a href="#">
                            <img src="<?=get_template_directory_uri(); ?>/assets/images/88.jpg" alt="social"/>
                        </a>
                    </div>
                    <div class="social__card scale">
                        <a href="#">
                            <img src="<?=get_template_directory_uri(); ?>/assets/images/889.jpg" alt="social"/>
                        </a>
                    </div>
                    <div class="social__card scale">
                        <a href="#">
                            <img src="<?=get_template_directory_uri(); ?>/assets/images/880.jpg" alt="social"/>
                        </a>
                    </div>
                    <div class="social__card scale">
                        <a href="#">
                            <img src="<?=get_template_directory_uri(); ?>/assets/images/887.jpg" alt="social"/>
                        </a>
                    </div>
                </div>


            </div>

        </div>

        <div class="social-slider visage__social-slider container-xxl">
            <p>OFELI</p>
            <h3>В ПРОЦЕССЕ РАБОТЫ</h3>
            <div id="visage-slider" class="swiper-container social-slider__card-container">
                <div class="swiper-wrapper social-slider__card-wrapper">
                    <div class="swiper-slide visage-slider__card">
                        <a href="#">
                            <img src="<?=get_template_directory_uri(); ?>/assets/images/photo_2020-09-18_11-24-25%202.jpg" alt="social"/>
                        </a>
                    </div>
                    <div class="swiper-slide visage-slider__card">
                        <a href="#">
                            <img src="<?=get_template_directory_uri(); ?>/assets/images/photo_2020-09-17_15-58-27%202.jpg" alt="social"/>
                        </a>
                    </div>
                    <div class="swiper-slide visage-slider__card">
                        <a href="#">
                            <img src="<?=get_template_directory_uri(); ?>/assets/images/photo_2020-09-18_11-26-24%202.jpg" alt="social"/>
                        </a>
                    </div>
                    <div class="swiper-slide visage-slider__card">
                        <a href="#">
                            <img src="<?=get_template_directory_uri(); ?>/assets/images/vladimir-fedotov-NJAFmCuIx1s-unsplash%20-min.jpg" alt="social"/>
                        </a>
                    </div>
                    <div class="swiper-slide visage-slider__card">
                        <a href="#">
                            <img src="<?=get_template_directory_uri(); ?>/assets/images/vladimir-fedotov-NJAFmCuIx1s-unsplash%20-min.jpg" alt="social"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
