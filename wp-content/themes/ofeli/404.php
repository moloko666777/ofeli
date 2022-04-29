<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Olefi
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
            <div class="not-found__wrapper container-xxl">
                <div class="not-found__title ">
                    404
                </div>
                <div class="not-found__sub-title">
                    <?php echo pll_e('Страница не  найдена...'); ?>
                </div>
                <div class="not-found__button">
                    <a href="<?php echo home_url(); ?>">
                        <?php echo pll_e('Вернуться на главную'); ?>
                    </a>
                </div>
            </div>
		</section>

	</main>

<?php
get_footer();
