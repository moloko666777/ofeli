<?php
/* Template name: Контентная страница */
get_header();
?>
<main>
    <section class="content__section">
        <div class="content container-xxl">
            <div class="content__title">
                <div class="content__sub-title wow animate__animated  animate__fadeInLeftBig">TERMS</div>
                <div class="content__title wow animate__animated animate__fadeInLeft"><?php the_title(); ?></div>
            </div>
            <div class="wow animate__animated animate__zoomInRight content__text">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
