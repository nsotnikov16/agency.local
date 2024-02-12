<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php'; ?>
<? getHeader(); ?>
<? view('hero-index'); ?>
<? view('services-index'); ?>
<? view('projects-index'); ?>
<section class="section about bg-2">
    <div class="container">
        <h2 class="section__title" data-aos="fade-right">Почему стоит обратиться к нам?</h2>
        <? view('about'); ?>
    </div>
</section>
<? getFooter();
