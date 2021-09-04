<?php
/* Template name: Шаблон "Контакты" */
get_header();
$fields = get_fields();
?>
<main>
    <section class="">
        <div class="contact">
            <div class="contact__wrapper container-xxl">
                <div class="contact__border wow animate__animated animate__fadeInRight">
                    <div class="contact__border-top-left"></div>
                    <div class="contact__border-bottom-right"></div>
                </div>
                <div class="contact__title wow animate__animated animate__fadeIn">
                    <h2><?=$fields['title']; ?></h2>
                    <div class="contact__row row">
                        <div class="col-xl-6 col-md-12">
                            <div class="contact__address">
                                <?=$fields['address']; ?>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-12">
                            <div class="contact__time">
                                <?=$fields['time_work']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
