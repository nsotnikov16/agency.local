<?php
define('BG_2', true);
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php'; ?>

<?
$default = true;
if (isset($_GET['type'])) {
    $filePath = __DIR__ . '/include/' . $_GET['type'] . '.php';
    if (file_exists($filePath)) {
        include $filePath;
        $default = false;
    } 
}
?>
<? if ($default) : ?>
    <?
    $GLOBALS['SEO_TITLE'] = 'База знаний';
    getHeader(); ?>
    <section class="section hero hero_inner">
        <div class="container">
            <h1 class="hero__title text-center" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0">База знаний</h1>
        </div>
    </section>
    <section class="section content">
        <div class="container">
            <ul>
                <li><a href="<?=getCityURL()?>/info/?type=crm">CRM</a></li>
                <li><a href="<?=getCityURL()?>/info/?type=cms">CMS</a></li>
                <li><a href="<?=getCityURL()?>/info/?type=hosting-and-domain">Хостинг и домен</a></li>
                <li><a href="<?=getCityURL()?>/info/?type=virtual-server">Виртуальный сервер</a></li>
            </ul>
        </div>
    </section>
<?
endif;
?>
<? getFooter();