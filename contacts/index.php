<?php
define('BG_2', true);
$SEO_TITLE = 'Контакты агентства Itrinity';
$breadcrumbs = ['/contacts' => 'Контакты'];
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php'; ?>
<? getHeader(); ?>
<section class="section contacts">
    <div class="container">
        <h1 class="hero__title text-center mw-100" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0">Контакты</h1>
        <div class="contacts__container">
            <ul class="contacts__list">
                <li class="contacts__list-item">
                    <b>Адрес:</b> мы работаем по всей России дистанционно
                    <br>
                    <small>Если Вы из <b>Сургута</b>, место встречи согласуем индивидуально</small>
                </li>
                <li class="contacts__list-item">
                    <b>Время работы:</b> 08:00 - 17:00 (по московскому времени)
                </li>
                <li class="contacts__list-item">
                    <b>Телефон:</b> <a href="<?= getHrefForPhone(PHONE) ?>"><?= PHONE ?></a>
                </li>
                <li class="contacts__list-item">
                    <b>Email:</b> <a href="mailto:<?= EMAIL ?>"> <?= EMAIL ?></a>
                </li>
                <li class="contacts__list-item">
                    <div class="social">
                        <? if (defined('TELEGRAM') && TELEGRAM) : ?>
                            <a class="telegram not-effect" target="_blank" href="<?= TELEGRAM ?>">
                                <span data-img-svg data-src="<?= ASSETS_PATH ?>/images/icons/telegram.svg"></span>
                            </a>
                        <? endif; ?>
                    </div>
                </li>
            </ul>
            <div class="contacts__map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A24850dc50ca68ac65437b1995b0f6fe7adfe5828fd1bafce236d44061265e962&amp;width=100%25&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
        <div class="contacts__form">
            <h2 class="section__title">Консультация</h2>
            <? view('form-consultant'); ?>
        </div>
    </div>
</section>
<? getFooter(); ?>