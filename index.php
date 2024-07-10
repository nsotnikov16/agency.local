<?php
$SEO_TITLE = 'Разработка сайтов для бизнеса - веб-студия ITRinity (Айтринити) &#128077';
$SEO_DESCRIPTION = 'Мы предлагаем профессиональные услуги по разработке и поддержке сайтов. Надежное партнерство, индивидуальный подход и современные технологии - вот что делает нас лучшим выбором для вашего онлайн-присутствия.';
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php';
?>
<?php getHeader(); ?>
<?php view('hero-index'); ?>
<?php view('services-index'); ?>
<?php view('projects-index'); ?>
<?php view('about-index'); ?>
<?php getFooter();
