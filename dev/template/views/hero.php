<section class="section hero">
    <div class="container">
        <? if ($vars['title']) : ?>
            <h1 class="hero__title" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0"><?= $vars['title'] ?></h1>
        <? endif; ?>
        <? if ($vars['subtitle']) : ?>
            <p class="hero__subtitle" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="150"><?= $vars['subtitle'] ?></p>
        <? endif; ?>
    </div>
</section>