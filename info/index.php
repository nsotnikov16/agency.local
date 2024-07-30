<?php
define('BG_2', true);
$SEO_TITLE = 'База знаний | ITRinity (Айтринити)';
$SEO_DESCRIPTION = 'База знаний - ваш надежный источник информации и решений. Откройте для себя статьи, руководства и ответы на часто задаваемые вопросы, чтобы эффективно решать задачи и получать необходимую поддержку.';
$breadcrumbs = ['/info/' => 'База знаний'];
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php'; ?>
<? getHeader(); ?>
<section class="section hero hero_inner">
    <div class="container">
        <h1 class="hero__title text-center" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0">База знаний</h1>
    </div>
</section>
<section class="section content">
    <div class="container">
        <ul>
            <li><a href="<?= getCityURL() ?>/info/crm/">CRM</a></li>
            <li><a href="<?= getCityURL() ?>/info/cms/">CMS</a></li>
            <li><a href="<?= getCityURL() ?>/info/hosting-and-domain/">Хостинг и домен</a></li>
            <li><a href="<?= getCityURL() ?>/info/virtual-server/">Виртуальный сервер</a></li>
        </ul>
    </div>
</section>
<? getFooter();
