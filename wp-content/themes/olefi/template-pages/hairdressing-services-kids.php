<?php
/* Template name: Шаблон "Парикмахерские услуги - Дети" */
get_header(); ?>

<main>
    <section>
        <div class="visage__wrapper">
            <div class="visage container-xxl">
                <div class="visage__left visage__left wow animate__animated animate__fadeInLeft">
                    <div class="visage__image">
                        <img src="<?=get_template_directory_uri(); ?>/assets/images/children.jpg"
                             alt=""/>
                        <h3>Парикмахерские услуги</h3>
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
                <div class="visage__right visage__right wow animate__animated animate__fadeInRight">

                    <div class="visage__right-tabs hairdressing-services__tabs">
                        <div class="hairdressing-services__button-wrapper">
                            <a href="hairdressing-services-one.html" class="hairdressing-services__button">
                                Мужчины
                            </a>
                        </div>
                        <div class="hairdressing-services__button-wrapper">
                            <a href="hairdressing-services-girl.html" class="hairdressing-services__button">
                                Женщины
                            </a>
                        </div>
                    </div>
                    <div class="visage__right-price">

                        <div class="tab-content">
                            <div class="visage__title-wrapper">
                                <h4>ПРАЙС</h4>
                                <p class="visage-children__text">Дети до 7 лет включительно</p>
                            </div>

                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                 aria-labelledby="pills-home-tab">
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

                            </div>
                        </div>
                        <div>
                            <button class="visage__btn" data-bs-toggle="modal" href="#exampleModalToggle" role="button"> Онлайн запись </button>
                        </div>
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
