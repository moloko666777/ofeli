<?php
/* Template name: Услуга */
get_header();
$fields = get_fields();
?>

    <main>
        <section>
            <div class="visage__wrapper">
                <div class="visage container-xxl">
                    <div class="visage__left wow animate__animated animate__fadeInLeft">
                        <div class="visage__image">
                            <img src="<?=$fields['image']; ?>"
                                 alt=""/>
                            <h3><?=$fields['title']; ?></h3>
                        </div>
                        <?=$fields['description']; ?>
                    </div>
                    <div class="visage__right wow animate__animated animate__fadeInRight">
                        <div class="visage__right-tabs"></div>
                        <div class="visage__right-price">
                            <h4><?=pll_e('ПРАЙС'); ?></h4>
                            <ul>
                                <?php foreach($fields['pricelist'] as $item) : ?>
                                    <li>
                                        <div class="visage__price">
                                            <p><?=$item['title']; ?></p>
                                            <span><?=$item['price']; ?></span>
                                        </div>

                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <button class="visage__btn" data-bs-toggle="modal" href="#exampleModalToggle" role="button"> <?=pll_e('Онлайн запись'); ?> </button>
                        </div>
                    </div>
                </div>
                <div class="visage__text-bottom">
                    <?=$fields['description']; ?>
                </div>
            </div>
        </section>
        <section>
            <div class="social__wrapper">
                <div class="social container-xxl in-process wow animate__animated animate__fadeInUp">
                    <span class="wow animate__animated  animate__fadeInLeftBig">ofeli</span>
                    <h3 class="wow animate__animated animate__fadeInLeft"><?=pll_e('В ПРОЦЕССЕ РАБОТЫ'); ?></h3>
                    <div class="social__card-wrapper wow animate__animated animate__fadeInTopRight">
                        <?php foreach($fields['work_process'] as $item) : ?>
                            <div class="social__card scale">
                                <a href="#">
                                    <img src="<?=$item; ?>" alt="social"/>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>


                </div>

            </div>

            <div class="social-slider visage__social-slider container-xxl">
                <p>OFELI</p>
                <h3><?=pll_e('В ПРОЦЕССЕ РАБОТЫ'); ?></h3>
                <div id="visage-slider" class="swiper-container social-slider__card-container">
                    <div class="swiper-wrapper social-slider__card-wrapper">
                        <?php foreach($fields['work_process'] as $item) : ?>
                            <div class="swiper-slide visage-slider__card">
                                <a href="#">
                                    <img src="<?=$item; ?>" alt="social"/>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
