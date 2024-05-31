<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package e-bee
 */

get_header();

?>

    <main id="primary" class="container">
        <div class="screen-index__download download">
            <p class="download__text download__text--post">
                <?php
                _e(
                    '
                    Please download the application using the links below',
                    'e-bee'
                ) ?> </p>
            <ul class="download__list">
                <li class="download__item">
                    <a class="download__link" href="https://play.google.com/store/games?hl=en&amp;gl=US"
                       target="_blank">
                                <span class="screen-reader-text">
                                    <?php
                                    _e('Download on Google Play', 'e-bee') ?>
                                </span>
                        <svg class="download__icon" width="120" height="40">
                            <use xlink:href="#icon-google-play"></use>
                        </svg>
                    </a>
                </li>
                <li class="download__item">
                    <a class="download__link" href="https://www.apple.com/app-store/" target="_blank">
                                <span class="screen-reader-text">
                                    <?php
                                    _e('Download on the App Store', 'e-bee') ?>
                                </span>
                        <svg class="download__icon" width="120" height="40">
                            <use xlink:href="#icon-app-store"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>

        <style>
            .qr__fixed {
                display: none !important;
            }
        </style>
    </main><!-- #main -->

<?php
get_footer();
