<?php
/* Template name: Шаблон "Парикмахерские услуги" */
$fields = get_fields();
$woman = getOption('general')['hairdressing_services_girls'];
$man = getOption('general')['hairdressing_services_men'];
$kids = getOption('general')['hairdressing_services_kids'];

if (pll_current_language() == 'ua') {
    $current_page = pll_get_post(get_queried_object()->ID, 'ru');
} else {
    $current_page = get_queried_object()->ID;
}

$page_style = '';

if ($current_page == pll_get_post($woman->ID, 'ru')) $page_style = 'woman';
if ($current_page == pll_get_post($man->ID, 'ru')) $page_style = 'man';
if ($current_page == pll_get_post($kids->ID, 'ru')) $page_style = 'kids';

get_header();
?>

<main>
    <section class="">
        <div class="visage__wrapper">
            <div class="visage hairdressing-services container-xxl">
                <div class="visage__left visage__left wow animate__animated animate__fadeInLeft">
                    <div class="visage__image">
                        <img src="<?php echo $fields['image']; ?>"
                             alt=""/>
                        <h3><?php echo $fields['title']; ?></h3>
                    </div>
                    <?php echo $fields['description']; ?>
                </div>
                <div class="visage__right visage__right wow animate__animated animate__fadeInRight">

                    <div class="visage__right-tabs hairdressing-services__tabs">
                        <?php if ($page_style == 'woman') : ?>
                            <div class="hairdressing-services__button-wrapper">
                                <a href="<?php echo get_permalink($man); ?>" class="hairdressing-services__button">
                                    <?php echo pll_e('Мужчины'); ?>
                                </a>
                            </div>
                            <div class="hairdressing-services__button-wrapper">
                                <a href="<?php echo get_permalink($kids); ?>" class="hairdressing-services__button">
                                    <?php echo pll_e('Дети'); ?>
                                </a>
                            </div>
                        <?php elseif ($page_style == 'man') : ?>
                            <div class="hairdressing-services__button-wrapper">
                                <a href="<?php echo get_permalink($woman); ?>" class="hairdressing-services__button">
                                    <?php echo pll_e('Девушки'); ?>
                                </a>
                            </div>
                            <div class="hairdressing-services__button-wrapper">
                                <a href="<?php echo get_permalink($kids); ?>" class="hairdressing-services__button">
                                    <?php echo pll_e('Дети'); ?>
                                </a>
                            </div>
                        <?php elseif ($page_style == 'kids') : ?>
                            <div class="hairdressing-services__button-wrapper">
                                <a href="<?php echo get_permalink($man); ?>" class="hairdressing-services__button">
                                    <?php echo pll_e('Мужчины'); ?>
                                </a>
                            </div>
                            <div class="hairdressing-services__button-wrapper">
                                <a href="<?php echo get_permalink($woman); ?>" class="hairdressing-services__button">
                                    <?php echo pll_e('Девушки'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if ($page_style == 'woman') : ?>
                        <div class="visage__right-price">
                            <button type="button" class="hairdressing-services__modal-button" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                <?php echo pll_e('Линейка длины волос'); ?>
                                <span>
                                <svg width="20" height="8" viewBox="0 0 20 8" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.3536 4.35355C19.5488 4.15829 19.5488 3.84171 19.3536 3.64645L16.1716 0.464466C15.9763 0.269204 15.6597 0.269204 15.4645 0.464466C15.2692 0.659728 15.2692 0.976311 15.4645 1.17157L18.2929 4L15.4645 6.82843C15.2692 7.02369 15.2692 7.34027 15.4645 7.53553C15.6597 7.7308 15.9763 7.7308 16.1716 7.53553L19.3536 4.35355ZM0 4.5H19V3.5H0V4.5Z"
                                          fill="#40362E"/>
                                </svg>
                            </span>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade modal-fullscreen-xxl-down" id="staticBackdrop"
                                 data-bs-backdrop="static"
                                 data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog hairdressing-services__modal-dialog">
                                    <div class="modal-content hairdressing-services__modal-content">

                                        <button type="button" class=" hairdressing-services__modal-button-close"
                                                data-bs-dismiss="modal" aria-label="Close">
                                            <?php echo pll_e('Закрыть'); ?>
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="25" cy="25" r="25" fill="#DAABE1" fill-opacity="0.21"/>
                                                <path d="M26.8742 25.5001L32.7149 19.6591C33.095 19.2792 33.095 18.6649 32.7149 18.2849C32.335 17.905 31.7207 17.905 31.3408 18.2849L25.4999 24.1259L19.6592 18.2849C19.2791 17.905 18.665 17.905 18.2851 18.2849C17.905 18.6649 17.905 19.2792 18.2851 19.6591L24.1258 25.5001L18.2851 31.3411C17.905 31.721 17.905 32.3353 18.2851 32.7153C18.4744 32.9048 18.7234 33 18.9721 33C19.2209 33 19.4697 32.9048 19.6592 32.7153L25.4999 26.8743L31.3408 32.7153C31.5303 32.9048 31.7791 33 32.0279 33C32.2766 33 32.5254 32.9048 32.7149 32.7153C33.095 32.3353 33.095 31.721 32.7149 31.3411L26.8742 25.5001Z"
                                                      fill="#40362E"/>
                                            </svg>
                                        </button>

                                        <div class="hairdressing-services__modal-body">
                                            <h3><?php echo pll_e('Линейка длины волос'); ?></h3>
                                            <div class="hairdressing-services__type">
                                                <div class="hairdressing-services__type-wrapper">
                                                    <div class="hairdressing-services__type-image">

                                                        <div class="hairdressing-services__type-line">
                                                            <div class="hairdressing-services__type-line-text">
                                                                <div class="hairdressing-services__type-line-text-wrapper">
                                                                    <?php echo pll_e('1 длина до середины уха'); ?>
                                                                </div>
                                                                <div class="hairdressing-services__item"></div>
                                                            </div>
                                                            <div class="hairdressing-services__type-line-text">
                                                                <div class="hairdressing-services__type-line-text-wrapper">
                                                                    <?php echo pll_e('2 длина по плечи'); ?>
                                                                </div>
                                                                <div class="hairdressing-services__item"></div>
                                                            </div>
                                                            <div class="hairdressing-services__type-line-text">
                                                                <div class="hairdressing-services__type-line-text-wrapper">
                                                                    <?php echo pll_e('3 длина ниже плечей до лопаток'); ?>
                                                                </div>
                                                                <div class="hairdressing-services__item"></div>
                                                            </div>
                                                            <div class="hairdressing-services__type-line-text">
                                                                <div class="hairdressing-services__type-line-text-wrapper">
                                                                    <?php echo pll_e('4 длина ниже лопаток'); ?>
                                                                </div>
                                                                <div class="hairdressing-services__item"></div>
                                                            </div>
                                                            <div class="hairdressing-services__type-line-text">
                                                                <div class="hairdressing-services__type-line-text-wrapper">
                                                                    <?php echo pll_e('5 длина до пояса'); ?>
                                                                </div>
                                                                <div class="hairdressing-services__item"></div>
                                                            </div>
                                                            <div class="hairdressing-services__type-line-text">
                                                                <div class="hairdressing-services__type-line-text-wrapper">
                                                                    <?php echo pll_e('1 длина ниже пояса'); ?>
                                                                </div>
                                                                <div class="hairdressing-services__item"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" id="pills-tabContent">
                                <h4><?php echo pll_e('ПРАЙС'); ?></h4>
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                     aria-labelledby="pills-home-tab">
                                    <div class="accordion visage__accordion service__accordion-top"
                                         id="accordionExample">
                                        <div class="service-price">
                                            <?php foreach ($fields['pricelist'] as $key => $item) : ?>
                                                <?php if (isset($item['services']) && !empty($item['services'])) : ?>
                                                    <div class="accordion" id="accordion<?php echo $key; ?>">
                                                        <div class="service__accordion">
                                                            <div class="service__accordion-item"
                                                                 id="heading<?php echo $key; ?>">
                                                                <!--                                                                <button class="accordion-button collapsed" type="button"-->
                                                                <!--                                                                        data-bs-toggle="collapse"-->
                                                                <!--                                                                        data-bs-target="#collapse-->
                                                                <?php //echo $key; ?><!--"-->
                                                                <!--                                                                        aria-expanded="true"-->
                                                                <!--                                                                        aria-controls="collapse-->
                                                                <?php //echo $key; ?><!--">-->
                                                                <!--                                                                    --><?php //echo $item['title']; ?>
                                                                <!--                                                                </button>-->
                                                                <button class="accordion-button collapsed" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseOne<?php echo $key; ?>"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseOne<?php echo $key; ?>">
                                                                    <?php echo $item['title']; ?>
                                                                </button>
                                                                <span><?php echo $item['price']; ?></span>
                                                            </div>
                                                            <div id="collapseOne<?php echo $key; ?>"
                                                                 class="accordion-collapse collapse"
                                                                 aria-labelledby="headingOne<?php echo $key; ?>"
                                                                 data-bs-parent="#accordion<?php echo $key; ?>">
                                                                <div class="service__accordion-body">
                                                                    <div>
                                                                        <?php foreach ($item['services'] as $service) : ?>
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
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                     aria-labelledby="pills-profile-tab">2
                                </div>
                            </div>
                            <div>
                                <button class="visage__btn" data-bs-toggle="modal" href="#exampleModalToggle"
                                        role="button"> <?php echo pll_e('Онлайн запись'); ?> </button>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="visage__right-price">

                            <div class="tab-content">
                                <div class="visage__title-wrapper">
                                    <h4><?php echo pll_e('ПРАЙС'); ?></h4>
                                    <?php if ($page_style == 'kids') : ?>
                                        <p class="visage-children__text"><?php echo pll_e('Дети до 7 лет включительно'); ?></p>
                                    <?php endif; ?>
                                </div>

                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                     aria-labelledby="pills-home-tab">
                                    <ul>
                                        <?php foreach ($fields['pricelist'] as $item) : ?>
                                        <li>
                                            <div class="visage__price">
                                                <p><?= $item['title']; ?></p>
                                                <span><?= $item['price']; ?></span>
                                            </div>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <button class="visage__btn" data-bs-toggle="modal" href="#exampleModalToggle"
                                        role="button"> Онлайн запись
                                </button>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="visage__text-bottom">
                <?php echo $fields['description']; ?>
            </div>
        </div>
    </section>
    <section>
        <div class="social__wrapper">
            <div class="social container-xxl in-process wow animate__animated animate__fadeInUp">
                <span class="wow animate__animated  animate__fadeInLeftBig">ofeli</span>
                <h3 class="wow animate__animated animate__fadeInLeft"><?php echo pll_e('В ПРОЦЕССЕ РАБОТЫ'); ?></h3>
                <div class="social__card-wrapper wow animate__animated animate__fadeInTopRight">
                    <?php foreach ($fields['work_process'] as $item) : ?>
                        <div class="social__card scale">
                            <a href="#">
                                <img src="<?php echo $item; ?>" alt="social"/>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>


            </div>

        </div>

        <div class="social-slider visage__social-slider container-xxl">
            <p>OFELI</p>
            <h3><?php echo pll_e('В ПРОЦЕССЕ РАБОТЫ'); ?></h3>
            <div id="visage-slider" class="swiper-container social-slider__card-container">
                <div class="swiper-wrapper social-slider__card-wrapper">
                    <?php foreach ($fields['work_process'] as $item) : ?>
                        <div class="swiper-slide visage-slider__card">
                            <a href="#">
                                <img src="<?php echo $item; ?>" alt="social"/>
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
