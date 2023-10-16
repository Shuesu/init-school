<?php

/**
 * The template for displaying home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package init
 */

get_header();
?>

<section class="init">
    <div class="init__wrapper">

        <div class="init__home article-md">

            <div class="init__header">

                <a class="init__logo" href="#">
                    <span class="init__span">init</span>.kz
                </a>

                <nav class="init__navigation">
                    <div class="init__menu menu">
                        <div class="menu__text">
                            <span class="icon-code"></span>
                            <p>Menu</p>
                            <span class="icon-down dropdown"></span>
                        </div>
                        <nav class="menu__nav">
                            <div class="nav__wrapper">
                                <a class="nav__mail" href="#">
                                    <span class="icon-email"></span>
                                    <div class="mail__info">
                                        <span class="info__title">Контакты</span>
                                        <p class="info__text">Описание для контакты</p>
                                    </div>
                                </a>
                                <a class="nav__mail" href="#">
                                    <span class="icon-email"></span>
                                    <div class="mail__info">
                                        <span class="info__title">Lorem</span>
                                        <p class="info__text">Описание</p>
                                    </div>
                                </a>
                                <a class="nav__mail" href="#">
                                    <span class="icon-email"></span>
                                    <div class="mail__info">
                                        <span class="info__title">Lorem</span>
                                        <p class="info__text">Описание </p>
                                    </div>
                                </a>
                            </div>
                        </nav>
                    </div>
                    <div class="init__projects menu">
                        <div class="menu__text">
                            <span class="icon-display"></span>
                            <p>Projects</p>
                            <span class="icon-down dropdown"></span>
                        </div>
                        <nav class="menu__nav">
                            <div class="nav__wrapper">
                                <a class="nav__mail" href="#">
                                    <span class="icon-email"></span>
                                    <div class="mail__info">
                                        <span class="info__title">Контакты</span>
                                        <p class="info__text">Описание для контакты</p>
                                    </div>
                                </a>
                                <a class="nav__mail" href="#">
                                    <span class="icon-email"></span>
                                    <div class="mail__info">
                                        <span class="info__title">Lorem</span>
                                        <p class="info__text">Описание</p>
                                    </div>
                                </a>
                                <a class="nav__mail" href="#">
                                    <span class="icon-email"></span>
                                    <div class="mail__info">
                                        <span class="info__title">Lorem</span>
                                        <p class="info__text">Описание </p>
                                    </div>
                                </a>
                            </div>
                        </nav>
                    </div>

                </nav>

            </div>

            <div class="init__content">

                <div class="init__title">
                    <span class="init__span">init</span>.school
                </div>

                <div class="init__info">
                    Frontend + Backend
                </div>

                <div class="init__subtitle">
                    <p>Наша школа предоставляет уникальную возмодность для всех желающих освоить мир веб-разработки -
                        захватывающего и динамичного направления современной информационной технологии.</p>
                    <p>Мы стремимся помочь нашим студентам развить навыки, необходимые для создания <span>красивых,
                            функциональных</span> и <span>инновационных</span> веб-сайтов.</p>
                </div>

            </div>

            <div class="init__advantages">
                <div class="init__advantage">
                    <span class="advantage__icon icon-coin"></span>
                    <span class="advantage__text">Возврат 100% суммы при отсутствии результата</span>
                </div>
                <div class="init__advantage">
                    <span class="advantage__icon icon-case"></span>
                    <span class="advantage__text">Обучение у действующих веб-разработчиков</span>
                </div>
                <div class="init__advantage">
                    <span class="advantage__icon icon-kaspi"></span>
                    <span class="advantage__text">Оплата в рассрочку с помощью Kaspi</span>
                </div>
            </div>

            <div class="init__stack"></div>

        </div>

        <div class="init__stream stream">

            <div class="stream__wrapper">
                
                <div class="stream__item">
                    <div class="stream__main"></div>
                    <div class="stream__footer"></div>
                </div>

                <div class="stream__item">
                    <div class="stream__main"></div>
                    <div class="stream__footer"></div>
                </div>

                <div class="stream__item">
                    <div class="stream__main"></div>
                    <div class="stream__footer"></div>
                </div>

            </div>

        </div>
    </div>
</section>

<section class="index">
    <div class="container">
        <div class="index__wrapper">

            <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('template-parts/content', 'page'); ?>

            <?php endwhile; ?>

        </div>
    </div>
</section>

<?php
get_footer();