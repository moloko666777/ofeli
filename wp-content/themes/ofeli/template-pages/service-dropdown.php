<?php
/* Template name: Услуга с Price DropDown */
get_header();
$fields = get_fields();
?>

<main>
    <section>
        <div class="visage__wrapper">
            <div class="visage hairdressing-services container-xxl">
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
                        <h4><?php echo  pll_e('ПРАЙС'); ?></h4>
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                             aria-labelledby="pills-home-tab">
                            <div class="accordion visage__accordion service__accordion-top" id="accordionExample">
                                <div class="service-price">
                                    <?php foreach ($fields['pricelist'] as $key => $item) : ?>
                                        <?php if(isset($item['services']) && !empty($item['services'])) : ?>
                                            <div class="accordion" id="accordion<?php echo $key; ?>">
                                                <div class="service__accordion">
                                                    <div class="service__accordion-item" id="heading<?php echo $key; ?>">
                                                        <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseOne<?php echo $key; ?>"
                                                                aria-expanded="true" aria-controls="collapseOne<?php echo $key; ?>">
                                                            <?php echo $item['title']; ?>
                                                        </button>
                                                        <span><?php echo $item['price']; ?></span>
                                                    </div>
                                                    <div id="collapseOne<?php echo $key; ?>" class="accordion-collapse collapse <?php if($key == 0) echo 'show'; ?>"
                                                         aria-labelledby="headingOne<?php echo $key; ?>"
                                                         data-bs-parent="#accordion<?php echo $key; ?>">
                                                        <div class="service__accordion-body">
                                                            <div>
                                                                <?php foreach($item['services'] as $service) : ?>
                                                                    <div class="service__accordion-body-price">
                                                                        <p><?php echo $service['title']; ?></p>
                                                                        <span><?php echo $service['price']; ?></span>
                                                                    </div>
                                                                <?php endforeach; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php else : ?>
                                            <div class="service__not-drop-down-wrapper">
                                                <div class="service__not-drop-down">
                                                    <p><?php echo $item['title']; ?></p>
                                                    <span><?php echo $item['price']; ?></span>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
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
