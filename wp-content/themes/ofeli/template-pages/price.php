<?php
/* Template name: Шаблон "Прайс-лист" */
get_header();
$fields = get_fields();
?>
<main>
    <div class=" price">

        <div class="container-xxl price__wrapper">
            <div class="price__sub-title wow animate__animated  animate__fadeInLeftBig">PRICE</div>
            <div class="price__title wow animate__animated animate__fadeInLeft"><?php the_title(); ?></div>
            <div class=" wow animate__animated animate__fadeInBottomRight price__accordion accordion-flush" id="accordionFlushExample">
                <?php if(!empty($fields)) : ?>
                    <?php foreach($fields['services'] as $key => $service) : ?>
                        <div class="">
                            <h2 class="" id="flush-heading<?php echo $key; ?>">
                                <button class="price__accordion-button accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $key; ?>" aria-expanded="false"
                                        aria-controls="flush-collapse<?php echo $key; ?>">
                                    <?php echo $service['title']; ?>
                                </button>
                            </h2>
                            <div id="flush-collapse<?php echo $key; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $key; ?>"
                                 data-bs-parent="#accordionFlushExample">
                                <div class="price__accordion-wrapper">
                                    <?php if(!empty($service['services'])) : ?>
                                        <?php foreach ($service['services'] as $child) : ?>
                                            <div class="price__accordion-body-wrapper">
                                                <div class="price__accordion-body">
                                                    <p><?php echo $child['title']; ?></p>
                                                    <span><?php echo $child['price']; ?></span>
                                                </div>
                                            </div>
                                            <?php if(!empty($child['services'])) : ?>
                                                <?php foreach ($child['services'] as $sub) : ?>
                                                    <div class="price__accordion-body-sub">
                                                        <p><?php echo $sub['title']; ?></p>
                                                        <span><?php echo $sub['price']; ?></span>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
