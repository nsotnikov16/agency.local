<?php
define('BG_2', true);
$SEO_TITLE = 'Страница не найдена';
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php';
?>
<?php getHeader(); ?>
<section class="section hero hero_inner">
    <div class="container">
        <h1 class="hero__title text-center" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0">Страница не найдена</h1>
        <span class="hero__img" style="max-width: 400px" data-img-svg data-src="<?= ASSETS_PATH ?>images/404.svg"></span>
    </div>
</section>
<?php getFooter();
