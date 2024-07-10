<?php
define('BG_2', true);
define('HIDE_LEAD_SECTION', true);
$SEO_TITLE = 'Начать проект | ITRinity (Айтринити)';
$SEO_DESCRIPTION = 'Готовы приступить к реализации вашей идеи? Начните свой проект с нашей веб-студией. Мы предлагаем индивидуальный подход, качественную разработку и техническую поддержку на всех этапах проекта.';
$breadcrumbs = ['/start' => 'Обсудить проект'];
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php'; ?>
<? getHeader(); ?>
<? view('hero-start'); ?>
<? view('form-start'); ?>
<? getFooter();
