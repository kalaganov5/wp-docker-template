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

    <main id="primary" class="front main">
        <section class="container screen-index">
            <div class="screen-index__inner">
                <div class="screen-index__text">
                    <h1 class="screen-index__headline screen-index__headline--triangle headline">
                        <?php
                        _e(
                            'Charge via <span style="white-space: nowrap;">E-bee</span>, wherever you may&nbsp;be!',
                            'e-bee'
                        ) ?>
                    </h1>
                    <p class="screen-index__subheading">
                        <?php
                        _e(
                            'Your socket anywhere in&nbsp;town. Rent an&nbsp;<span style="white-space: nowrap;">E-bee</span> powerbank for the price of&nbsp;a&nbsp;soda',
                            'e-bee'
                        ) ?>
                    </p>
                </div>
                <div class="screen-index__download download">
                    <p class="download__text">
                        <?php
                        _e('Download the app and go&nbsp;wherever you like!', 'e-bee'); ?>
                    </p>
                    <ul class="download__list download__list--qr">
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
                            <a class="download__link modal-qr" target="_blank">
                                <span class="screen-reader-text">
                                    <?php
                                    _e('Scan the&nbsp;QR code to&nbsp;download the app', 'e-bee') ?>
                                </span>
                                <svg class="download__icon" width="80" height="80">
                                    <use xlink:href="#icon-qr"></use>
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
                </div>
                <div class="screen-index__image-container">
                    <picture>
                        <source srcset="<?php
                        echo get_template_directory_uri() . '/assets/images/e-bee-power-bank.avif' ?>"
                                type="image/avif">
                        <source srcset="<?php
                        echo get_template_directory_uri() . '/assets/images/e-bee-power-bank.webp' ?>"
                                type="image/webp">
                        <img class="screen-index__image" width="298" height="388" loading="eager" src="<?php
                        echo get_template_directory_uri() . '/assets/images/e-bee-power-bank.png' ?>"
                             alt="<?php
                             _e('E-Bee powerbank Station', 'e-bee'); ?>">
                    </picture>
                </div>
            </div>
        </section>
        <section class="advantages" id="advantages">
            <div class="container advantages__container">
                <h2 class="screen-reader-text">
                    <?php
                    _e('Advantages of&nbsp;powebank <span style="white-space: nowrap;">E-bee</span>', 'e-bee') ?>
                </h2>
                <div class="advantages__inner">
                    <p class="advantages__text">
                        <?php
                        _e(
                            'With <span style="white-space: nowrap;">E-bee</span> charging, you can play, work, travel and use your smartphone whenever and wherever
                        you want.',
                            'e-bee'
                        ) ?>
                    </p>
                    <div class="slider__control advantages__control">
                        <button type="button"
                                class="advantages__button advantages__button--prev button--slide-control button--slide-control--prev">
                            <span class="screen-reader-text">
                                <?php
                                _e('Back', 'e-bee'); ?>
                            </span>
                        </button>
                        <button type="button"
                                class="advantages__button advantages__button--next button--slide-control button--slide-control--next">
                            <span class="screen-reader-text">
                              <?php
                              _e('Forward', 'e-bee'); ?>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="advantages__slider slider">
                <ul class="advantages__list slider__list swiper-wrapper">
                    <li class="advantages__item slider__item swiper-slide">
                        <dl class="advantages__info">
                            <dt>
                                <?php
                                _e('145g', 'e-bee') ?>
                            </dt>
                            <dd>
                                <h3>
                                    <?php
                                    _e('Lightweight', 'e-bee') ?>
                                </h3>
                                <p>
                                    <?php
                                    _e('Like 2&nbsp;bars of&nbsp;chocolate', 'e-bee') ?>
                                </p>
                            </dd>
                        </dl>
                    </li>
                    <li class="advantages__item slider__item swiper-slide">
                        <dl class="advantages__info">
                            <dt>
                                <?php
                                _e('3&nbsp;cables', 'e-bee') ?>
                            </dt>
                            <dd>
                                <h3>
                                    <?php
                                    _e('Universal', 'e-bee') ?>
                                </h3>
                                <p>
                                    <?php
                                    _e('iOS, Type-C, Micro', 'e-bee') ?>
                                </p>
                            </dd>
                        </dl>
                    </li>
                    <li class="advantages__item slider__item swiper-slide">
                        <dl class="advantages__info">
                            <dt>
                                <?php
                                _e('1%/min', 'e-bee') ?>
                            </dt>
                            <dd>
                                <h3>
                                    <?php
                                    _e('Fast', 'e-bee') ?>
                                </h3>
                                <p>
                                    <?php
                                    _e('just as&nbsp;fast as&nbsp;an&nbsp;socket', 'e-bee') ?>
                                </p>
                            </dd>
                        </dl>
                    </li>
                    <li class="advantages__item slider__item swiper-slide">
                        <dl class="advantages__info">
                            <dt>
                                <?php
                                _e('5000mAh', 'e-bee') ?>
                            </dt>
                            <dd>
                                <h3>
                                    <?php
                                    _e('Powerful', 'e-bee') ?>
                                </h3>
                                <p>
                                    <?php
                                    _e('That&rsquo;s 2&nbsp;full charges', 'e-bee') ?>
                                </p>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </section>
        <section class="usability" id="usability">
            <div class="container ">
                <h2 class="heading usability__heading usability__heading--image">
                    <img class="usability__heading-icon" src="<?php
                    echo get_template_directory_uri() . '/assets/images/icon-triangle-x3.svg' ?>" alt="" loading="lazy"
                         width="155"
                         height="80">
                    <?php
                    _e('Rent a&nbsp;powerbank while you&rsquo;re', 'e-bee'); ?>
                </h2>
                <div class="screen-reader-text">
                    <?php
                    _e(
                        'Don\'t worry if your battery is running low . Rent a powerbank while you\'re leveling up in a game, studying notes, attending a business meeting, or traveling - there are hundreds of stations across the country. Adventures shouldn\'t stop because of a drained device!',
                        'e-bee'
                    ) ?>
                </div>
                <ul class="usability__list">
                    <li><?php
                        _e('<span>attending a&nbsp;business meeting</span>', 'e-bee') ?></li>
                    <li><?php
                        _e('<span>leveling up&nbsp;in&nbsp;a&nbsp;game</span>', 'e-bee') ?></li>
                    <li><?php
                        _e('<span>studying notes</span>', 'e-bee') ?></li>
                    <li><?php
                        _e('<span class="pc-only">or</span>', 'e-bee') ?></li>
                    <li><?php
                        _e('<span>traveling </span>', 'e-bee') ?></li>
                </ul>
                <div class="usability__location">
                    <div class="usability__image-box">
                        <picture>
                            <source srcset="<?php
                            echo get_template_directory_uri() . '/assets/images/location-image.avif' ?>"
                                    type="image/avif">
                            <source srcset="<?php
                            echo get_template_directory_uri() . '/assets/images/location-image.webp' ?>"
                                    type="image/webp">
                            <img class="usability__image" src="<?php
                            echo get_template_directory_uri() . '/assets/images/location-image.jpeg' ?>" width="660"
                                 height="440" loading="lazy" alt="<?php
                            _e('E-bee', 'e-bee'); ?>">
                        </picture>
                    </div>
                    <div class="usability__text">
                        <p>
                            <?php
                            _e(
                                'Moreover, with the help of&nbsp;a&nbsp;powerbank, you can charge your watch, tablet, headphones, and even keep children entertained with various gadgets. Stay connected and comfortable in&nbsp;any situation, thanks to&nbsp;the convenient and compact powerbank!',
                                'e-bee'
                            ) ?>
                        </p>
                        <p>
                            <?php
                            _e(
                                '<span class="bold">We&nbsp;operate throughout Estonia and soon you will be&nbsp;able to&nbsp;find&nbsp;us in&nbsp;other European countries.</span>',
                                "e-bee"
                            ) ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="how-rent" id="how-rent">
            <div class="container ">
                <h2 class="heading how-rent__heading">
                    <?php
                    _e(
                        'Renting a&nbsp;powerbank <span style="white-space: nowrap;">E-bee</span> is&nbsp;just simple',
                        'e-bee'
                    ) ?>
                </h2>
                <div class="how-rent__inner">
                    <div class="slider__control advantages__control">
                        <button type="button"
                                class="how-rent__button how-rent__button--prev button--slide-control button--slide-control--prev">
                            <span class="screen-reader-text">
                                <?php
                                _e('Back', 'e-bee'); ?>
                            </span>
                        </button>
                        <button type="button"
                                class="how-rent__button how-rent__button--next button--slide-control button--slide-control--next">
                            <span class="screen-reader-text">
                              <?php
                              _e('Forward', 'e-bee'); ?>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="how-rent__slider slider">
                <ul class="how-rent_list slider__list swiper-wrapper">
                    <li class="how-rent__item slider__item swiper-slide">
                        <div class="how-rent__card">

                            <img loading="lazy" class="how-rent__bg" width="290" height="327" src="<?php
                            echo get_template_directory_uri() . '/assets/images/bg-card.svg' ?>" alt="">
                            <img loading="lazy" class="how-rent__bg--pc" width="590" height="537" src="<?php
                            echo get_template_directory_uri() . '/assets/images/bg-card-pc.svg' ?>" alt="">

                            <div class="how-rent__image-box">
                                <picture>
                                    <source srcset="<?php
                                    echo get_template_directory_uri() . '/assets/images/card.avif' ?>"
                                            type="image/avif">
                                    <source srcset="<?php
                                    echo get_template_directory_uri() . '/assets/images/card.webp' ?>"
                                            type="image/webp">
                                    <img class="how-rent__image" width="235" height="476" loading="lazy" src="<?php
                                    echo get_template_directory_uri() . '/assets/images/card.png' ?>" alt="<?php
                                    _e('Download the app from the App Store or Google Play.', 'e-bee') ?>">
                                </picture>
                            </div>
                            <div class="how-rent__body">
                                <div class="how-rent__counter">
                                    01
                                </div>
                                <div class="how-rent__text">
                                    <h3><?php
                                        _e('Download the app', 'e-bee') ?></h3>
                                    <p><?php
                                        _e(
                                            'Registration requires only an&nbsp;email and a&nbsp;bank card.',
                                            'e-bee'
                                        ) ?></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="how-rent__item slider__item swiper-slide">
                        <div class="how-rent__card">

                            <img loading="lazy" class="how-rent__bg" width="290" height="327" src="<?php
                            echo get_template_directory_uri() . '/assets/images/bg-card.svg' ?>" alt="">
                            <img loading="lazy" class="how-rent__bg--pc" width="590" height="537" src="<?php
                            echo get_template_directory_uri() . '/assets/images/bg-card-pc.svg' ?>" alt="">

                            <div class="how-rent__image-box">
                                <picture>
                                    <source srcset="<?php
                                    echo get_template_directory_uri() . '/assets/images/card.avif' ?>"
                                            type="image/avif">
                                    <source srcset="<?php
                                    echo get_template_directory_uri() . '/assets/images/card.webp' ?>"
                                            type="image/webp">
                                    <img class="how-rent__image" width="235" height="476" loading="lazy" src="<?php
                                    echo get_template_directory_uri() . '/assets/images/card.png' ?>" alt="<?php
                                    _e('Find your nearest E-Bee Station.', 'e-bee') ?>">
                                </picture>
                            </div>
                            <div class="how-rent__body">
                                <div class="how-rent__counter">
                                    02
                                </div>
                                <div class="how-rent__text">
                                    <h3><?php
                                        _e('Find your spot', 'e-bee') ?></h3>
                                    <p><?php
                                        _e(
                                            'Locate an&nbsp;<span style="white-space: nowrap;">E-bee</span> powerbank station on&nbsp;the map and scan the&nbsp;QR code.',
                                            'e-bee'
                                        ) ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="how-rent__item slider__item swiper-slide">
                        <div class="how-rent__card">

                            <img loading="lazy" class="how-rent__bg" width="290" height="327" src="<?php
                            echo get_template_directory_uri() . '/assets/images/bg-card.svg' ?>" alt="">
                            <img loading="lazy" class="how-rent__bg--pc" width="590" height="537" src="<?php
                            echo get_template_directory_uri() . '/assets/images/bg-card-pc.svg' ?>" alt="">

                            <div class="how-rent__image-box">
                                <picture>
                                    <source srcset="<?php
                                    echo get_template_directory_uri() . '/assets/images/card.avif' ?>"
                                            type="image/avif">
                                    <source srcset="<?php
                                    echo get_template_directory_uri() . '/assets/images/card.webp' ?>"
                                            type="image/webp">
                                    <img class="how-rent__image" width="235" height="476" loading="lazy" src="<?php
                                    echo get_template_directory_uri() . '/assets/images/card.png' ?>" alt="<?php
                                    _e('Grab and charge anywhere in the city with our powerbank.', 'e-bee') ?>">
                                </picture>
                            </div>
                            <div class="how-rent__body">
                                <div class="how-rent__counter">
                                    03
                                </div>
                                <div class="how-rent__text">
                                    <h3><?php
                                        _e('Grab and charge', 'e-bee') ?></h3>
                                    <p><?php
                                        _e(
                                            'You can use the powerbank at&nbsp;any location across the city.',
                                            'e-bee'
                                        ) ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="how-rent__item slider__item swiper-slide">
                        <div class="how-rent__card">

                            <img loading="lazy" class="how-rent__bg" width="290" height="327" src="<?php
                            echo get_template_directory_uri() . '/assets/images/bg-card.svg' ?>" alt="">
                            <img loading="lazy" class="how-rent__bg--pc" width="590" height="537" src="<?php
                            echo get_template_directory_uri() . '/assets/images/bg-card-pc.svg' ?>" alt="">

                            <div class="how-rent__image-box">
                                <picture>
                                    <source srcset="<?php
                                    echo get_template_directory_uri() . '/assets/images/card.avif' ?>"
                                            type="image/avif">
                                    <source srcset="<?php
                                    echo get_template_directory_uri() . '/assets/images/card.webp' ?>"
                                            type="image/webp">
                                    <img class="how-rent__image" width="235" height="476" loading="lazy" src="<?php
                                    echo get_template_directory_uri() . '/assets/images/card.png' ?>" alt="<?php
                                    _e('Find a convenient drop-off point on the map to end your lease.', 'e-bee') ?>">
                                </picture>
                            </div>
                            <div class="how-rent__body">
                                <div class="how-rent__counter">
                                    04
                                </div>
                                <div class="how-rent__text">
                                    <h3><?php
                                        _e('Easy return', 'e-bee') ?></h3>
                                    <p><?php
                                        _e(
                                            'Find a&nbsp;convenient point to&nbsp;return to&nbsp;on&nbsp;the map and finalize the lease.',
                                            'e-bee'
                                        ) ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="price" id="price">
            <div class="price__inner">
                <h2 class="screen-reader-text">
                    <?php
                    _e('Price rent <span style="white-space: nowrap;">E-bee</span> powerbank', 'e-bee') ?>
                </h2>
                <div class="price__info">
                    <div class="price__amount">
                        <p class="price__hour"><?php
                            _e('1.49&nbsp;&euro;&nbsp;/ hour', 'e-bee') ?></p>
                        <p class="price__day"><?php
                            _e('6&nbsp;&euro;&nbsp;/ 24&nbsp;hours', 'e-bee') ?></p>
                    </div>
                    <div class="price__desc">
                        <?php
                        _e('Don&rsquo;t let your energy drop, <span style="white-space: nowrap;">E-bee</span> keeps you on&nbsp;top, non-stop!', 'e-bee') ?>
                    </div>
                </div>
                <div class="price__download">
                    <h3 class="price__heading">
                        <?php
                        _e('Install the app', 'e-bee') ?>
                    </h3>
                    <ul class="download__list download__list--qr download__list--price">
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
                            <a class="download__link modal-qr" target="_blank">
                                <span class="screen-reader-text">
                                    <?php
                                    _e('Scan the&nbsp;QR code to&nbsp;download the app', 'e-bee') ?>
                                </span>
                                <svg class="download__icon" width="80" height="80">
                                    <use xlink:href="#icon-qr"></use>
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
                </div>
            </div>
        </section>
        <section class="install" id="install">
            <div class="container install__container">
                <h2 class="heading install__heading">
                    <?php
                    _e('Get a&nbsp;charging station installed for free at&nbsp;your establishment', 'e-bee'); ?>
                </h2>
                <div class="install__inner">
                    <div class="install__image-box">
                        <picture>
                            <source srcset="<?php
                            echo get_template_directory_uri() . '/assets/images/station-e-bee.avif' ?>"
                                    type="image/avif">
                            <source srcset="<?php
                            echo get_template_directory_uri() . '/assets/images/station-e-bee.webp' ?>"
                                    type="image/webp">
                            <img class="install__image" src="<?php
                            echo get_template_directory_uri() . '/assets/images/station-e-bee.png' ?>" loading="lazy"
                                 width="395"
                                 height="432" alt="<?php _e('E-bee station', 'e-bee') ?>">
                        </picture>
                    </div>
                    <div class="install__text">
                        <?php
                        _e(
                            'We&nbsp;will provide a&nbsp;complete range of&nbsp;technical maintenance and customer support. Our stations will be&nbsp;relevant everywhere&nbsp;&mdash; from small cafes to&nbsp;large retail chains.',
                            'e-bee'
                        ) ?>
                        <a href="<?php
                        echo 'mailto:' . CONTACT_EMAIL ?>" class="install__link">
                            <?php
                            _e('Contact&nbsp;us', 'e-bee') ?>
                        </a>
                    </div>
                </div>
                <?php
                _e('', 'e-bee'); ?>
            </div>
        </section>

        <section class="faq" id="faq">
            <div class="container faq__container">
                <h2 class="heading faq__heading">
                    <?php
                    _e('FAQ', 'e-bee') ?>
                </h2>
                <ul class="faq__spoiler spoiler">
                    <li class="spoiler__item">
                        <div class="spoiler__headline">
                            <button class="spoiler__button" type="button"><?php
                                _e(
                                    '<span class="spoiler__counter">01</span> <span>How much does renting an&nbsp;<span style="white-space: nowrap;">E-bee</span> powerbank cost?</span>',
                                    'e-bee'
                                ) ?></button>
                        </div>
                        <div class="spoiler__body">
                            <?php
                            _e(
                                '<p>For the first registration, the first 30&nbsp;minutes are free of&nbsp;charge. Thereafter, the rental fee is&nbsp;1.49&euro; per hour. To&nbsp;calculate the full rental price, select an&nbsp;<span style="white-space: nowrap;">E-bee</span> charging station in&nbsp;the app.</p>',
                                'e-bee'
                            ) ?>
                        </div>
                    </li>
                    <li class="spoiler__item">
                        <div class="spoiler__headline">
                            <button class="spoiler__button" type="button"><?php
                                _e(
                                    '<span class="spoiler__counter">02</span> <span>How to&nbsp;use <span style="white-space: nowrap;">E-bee</span> powerbank rental?</span>',
                                    'e-bee'
                                ) ?></button>
                        </div>
                        <div class="spoiler__body">
                            <?php
                            _e(
                                '<ol>
                                    <li>Download the E-bee app from the AppStore or&nbsp;Google Play and register (you only need an&nbsp;email address (or&nbsp;phone number) and a&nbsp;credit card).</li>
                                    <li>Find a&nbsp;convenient rental point on&nbsp;the map.</li>
                                    <li>Go&nbsp;there and find a&nbsp;station with the inscription &laquo;<span style="white-space: nowrap;">E-bee</span>&raquo;.</li>
                                    <li>Scan the&nbsp;QR code on&nbsp;the station using the app.</li>
                                    <li>Pay for the rental in&nbsp;the app.</li>
                                    <li>Take the powerbank and go&nbsp;wherever you want.</li>
                                    <li>You can return the powerbank at&nbsp;a&nbsp;convenient point on&nbsp;the map. Open the app and we&nbsp;will show you the available places to&nbsp;end the rental.</li>
                                </ol>',
                                'e-bee'
                            ) ?>
                        </div>
                    </li>
                    <li class="spoiler__item">
                        <div class="spoiler__headline">
                            <button class="spoiler__button" type="button"><?php
                                _e(
                                    '<span class="spoiler__counter">03</span> <span>Where can&nbsp;I rent a&nbsp;powerbank?</span>',
                                    'e-bee'
                                ) ?></button>
                        </div>
                        <div class="spoiler__body">
                            <?php
                            _e(
                                '<p>You can find available powerbanks in&nbsp;the E-bee app</p>',
                                'e-bee'
                            ) ?>
                        </div>
                    </li>
                    <li class="spoiler__item">
                        <div class="spoiler__headline">
                            <button class="spoiler__button" type="button"><?php
                                _e(
                                    '<span class="spoiler__counter">04</span> <span>What to&nbsp;do&nbsp;if&nbsp;you lose or&nbsp;damage a&nbsp;rental powerbank?</span>',
                                    'e-bee'
                                ) ?></button>
                        </div>
                        <div class="spoiler__body">
                            <?php
                            _e(
                                '<p>If&nbsp;the powerbank is&nbsp;returned damaged or&nbsp;in&nbsp;a&nbsp;non-working condition, a&nbsp;fee equal to&nbsp;the cost of&nbsp;repair or&nbsp;the value of&nbsp;the powerbank will be&nbsp;charged, in&nbsp;case of&nbsp;loss the amount will be&nbsp;30&nbsp;&euro;.</p>
<p>Until the powerbank is&nbsp;returned to&nbsp;the point, you will not be&nbsp;refunded the deposit in&nbsp;the app.</p>',
                                'e-bee'
                            ) ?>
                        </div>
                    </li>
                    <li class="spoiler__item">
                        <div class="spoiler__headline">
                            <button class="spoiler__button" type="button"><?php
                                _e(
                                    '<span class="spoiler__counter">05</span> <span>What to&nbsp;do&nbsp;if&nbsp;you are unable to&nbsp;return a&nbsp;rental powerbank?</span>',
                                    'e-bee'
                                ) ?></button>
                        </div>
                        <div class="spoiler__body">
                            <?php
                            _e(
                                '<p>If&nbsp;you are unable to&nbsp;return a&nbsp;rental powerbank for any reason, you should contact <span style="white-space: nowrap;">E-bee</span> customer service as&nbsp;soon as&nbsp;possible.</p>',
                                'e-bee'
                            ) ?>
                        </div>
                    </li>
                    <li class="spoiler__item">
                        <div class="spoiler__headline">
                            <button class="spoiler__button" type="button"><?php
                                _e(
                                    '<span class="spoiler__counter">06</span> <span>Do&nbsp;you need a&nbsp;deposit to&nbsp;rent a&nbsp;powerbank and what documents are required to&nbsp;rent a&nbsp;powerbank?</span>',
                                    'e-bee'
                                ) ?></button>
                        </div>
                        <div class="spoiler__body">
                            <?php
                            _e(
                                '<p>You don&rsquo;t need any documents to&nbsp;rent a&nbsp;powerbank.</p>
                                <p>A&nbsp;deposit will be&nbsp;reserved on&nbsp;your card before you rent the powerbank.</p>',
                                'e-bee'
                            ) ?>
                        </div>
                    </li>
                    <li class="spoiler__item">
                        <div class="spoiler__headline">
                            <button class="spoiler__button" type="button"><?php
                                _e(
                                    '<span class="spoiler__counter">07</span> <span>What to&nbsp;do&nbsp;if&nbsp;your rental powerbank won&rsquo;t charge your phone?</span>',
                                    'e-bee'
                                ) ?></button>
                        </div>
                        <div class="spoiler__body">
                            <?php
                            _e(
                                '<p>Contact customer service by <a href="#support">phone or e-mail</a></p>',
                                'e-bee'
                            ) ?>
                        </div>
                    </li>
                    <li class="spoiler__item">
                        <div class="spoiler__headline">
                            <button class="spoiler__button" type="button"><?php
                                _e(
                                    '<span class="spoiler__counter">08</span> <span>How to&nbsp;extend your powerbank lease?</span>',
                                    'e-bee'
                                ) ?></button>
                        </div>
                        <div class="spoiler__body">
                            <?php
                            _e(
                                '<p>Contact customer service by <a href="#support">phone or e-mail</a></p>',
                                'e-bee'
                            ) ?>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </main><!-- #main -->

<?php
get_footer();
