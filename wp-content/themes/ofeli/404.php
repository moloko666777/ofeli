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
                <div class="not-found__title">
                    404
                </div>
                <div class="not-found__sub-title">
                    Страница не  найдена...
                </div>
                <div class="not-found__button">
                    <button>
                        Вернуться на главную
                    </button>
                </div>
            </div>
		</section>

	</main>

<?php
get_footer();
