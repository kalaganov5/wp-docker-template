<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package e-bee
 */

?>

<footer class="footer" id="footer">
    <div class="container footer__contact" id="support">
        <h2 class="heading footer__heading">
            <?php
            _e(
                'Ask your question to&nbsp;<span style="white-space: nowrap;">E-bee</span> tech support',
                'e-bee'
            ) ?>
        </h2>
        <ul class="footer__social-link social social--footer">
            <li class="social__item">
                <a href="<?php
                echo CONTACT_TELEGRAM ?>" class="social__link">
                    <span class="screen-reader-text">
                      Telegram
                    </span>
                    <svg class="social__icon" role="img" focusable="false" aria-hidden="true" width="40" height="40">
                        <use xlink:href="#icon-telegram"></use>
                    </svg>
                </a>
            </li>
            <li class="social__item">
                <a href="<?php
                echo CONTACT_WHATSAPP ?>" class="social__link">
                    <span class="screen-reader-text">
                      WhatsApp
                    </span>
                    <svg class="social__icon" role="img" focusable="false" aria-hidden="true" width="40" height="40">
                        <use xlink:href="#icon-whatsapp"></use>
                    </svg>
                </a>
            </li>
        </ul>
    </div><!-- .site-info -->
    <div class="footer__main container">
        <div class="footer__logo logo logo--footer">
            <a <?php
            if ( ! is_front_page() || is_home()) : ?> href="<?php
            echo esc_url(home_url('')); ?>" <?php
            endif; ?> class="logo__link">
                <img class="logo__icon" width="408" height="100" loading="lazy" src="<?php
                echo get_template_directory_uri() . '/assets/images/icon-e-bee.png' ?>"
                     alt="<?php
                     _e('E-bee – Your socket anywhere in town', 'e-bee') ?>">
            </a>
        </div>
        <div class="footer__navigation navigation navigation--footer">
            <?php
            if (has_nav_menu('lp-main-menu')) { // Проверяем наличие меню с указанным местоположением
                $menu_args = array(
                    'theme_location' => 'lp-main-menu',
                    'container'      => false,
                    'items_wrap'     => '<ul class="navigation__list">%3$s</ul>',
                );
                wp_nav_menu($menu_args);
            }
            ?>
        </div>
        <div class="footer__social">
            <ul class="footer__download download__list download__list--footer">
                <li class="download__item">
                    <a class="download__link" href="<?php
                    echo CONTACT_GOOGLE_PLAY ?>" target="_blank">
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
                    <a class="download__link" href="<?php
                    echo CONTACT_APPSTORE ?>" target="_blank">
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
            <ul class="footer__social-main social social--main-footer">
                <li class="social__item">
                    <a href="<?php
                    echo CONTACT_INSTAGRAM ?>" class="social__link">
                    <span class="screen-reader-text">
                      Instagram
                    </span>
                        <svg class="social__icon" role="img" focusable="false" aria-hidden="true" width="40"
                             height="40">
                            <use xlink:href="#icon-instagram"></use>
                        </svg>
                    </a>
                </li>
                <li class="social__item">
                    <a href="<?php
                    echo CONTACT_TELEGRAM ?>" class="social__link">
                    <span class="screen-reader-text">
                      Telegram
                    </span>
                        <svg class="social__icon" role="img" focusable="false" aria-hidden="true" width="40"
                             height="40">
                            <use xlink:href="#icon-telegram"></use>
                        </svg>
                    </a>
                </li>
                <li class="social__item">
                    <a href="<?php
                    echo CONTACT_WHATSAPP ?>" class="social__link">
                    <span class="screen-reader-text">
                      WhatsApp
                    </span>
                        <svg class="social__icon" role="img" focusable="false" aria-hidden="true" width="40"
                             height="40">
                            <use xlink:href="#icon-whatsapp"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer__copy container">
        <p>&copy;<?php
            echo date('Y');
            _e(' <span style="white-space: nowrap;">E-bee</span>. All rights reserved', 'e-bee') ?></p>
        <p><?php
            _e('<a href="/privacy">Privacy policy</a>', 'e-bee') ?></p>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<div class="modal micromodal-slide" id="modal-qr" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-qr-title">
            <header class="modal__header">
                <h2 class="modal__title" id="modal-qr-title">
                    <?php
                    _e('Scan the&nbsp;QR code to&nbsp;download the app ', 'e-bee') ?>
                </h2>
                <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
            </header>
            <div class="modal__content" id="modal-qr-content">
                <svg class="download__icon download__icon--modal" width="80" height="80">
                    <use xlink:href="#icon-qr"></use>
                </svg>
                <p><?php
                    _e('For new users, the first 30&nbsp;minutes are free.', 'e-bee'); ?></p>
            </div>
            <footer class="modal__footer">
                <button class="modal__btn" data-micromodal-close aria-label="<?php
                _e('Close this dialog window', 'e-bee') ?>">
                    <?php
                    _e('Close', 'e-bee') ?>
                </button>
            </footer>
        </div>
    </div>
</div>

<div class="qr__fixed">
    <a class="download__link modal-qr qr__link" target="_blank">
        <svg class="download__icon qr__icon" width="80" height="80">
            <use xlink:href="#icon-qr"></use>
        </svg>
        <?php
        _e('Scan the&nbsp;QR code for a&nbsp;30-minute free trial for new users.', 'e-bee'); ?>
    </a>
</div>
<?php
wp_footer(); ?>

</body>
</html>
