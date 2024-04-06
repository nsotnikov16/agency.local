<?php
define('BG_2', true);
$SEO_TITLE = 'Выполненные проекты | ITRinity';
$SEO_DESCRIPTION = 'Познакомьтесь с нашими успешными проектами, которые мы разработали и поддерживаем. Мы гордимся нашей работой и стремимся к достижению ваших целей.';
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php'; ?>
<? getHeader(); ?>
<section class="section hero hero_inner">
    <div class="container">
        <h1 class="hero__title text-center" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0">Наши выполненные проекты</h1>
        <span class="hero__img" style="max-width: 400px;" data-img-svg data-src="<?= ASSETS_PATH
        ?>images/about/group-presentation.svg" ></span>
    </div>
</section>
<section class="section projects">
    <div class="container">
        <ul class="projects__list">
            <li class="project project_easygoenglish" data-aos="zoom-in" data-aos-duration="2000">
                <a href="https://easygoenglish.ru/" target="_blank" class="project__wrapper not-effect">
                    <div class="project__feat">
                        <img class="project__img" loading="lazy" src="<?= ASSETS_PATH ?>images/projects/easygoenglish
                        .png"  alt="EasyGoEnglish"/>
                    </div>
                    <div class="project__info">
                        <span class="project__title link">EasyGoEnglish</span> - курсы английского языка
                    </div>
                </a>
            </li>
            <li class="project project_niko" data-aos="zoom-in" data-aos-duration="2000">
                <a href="https://sochi.niko-m.ru/" target="_blank" class="project__wrapper not-effect">
                    <div class="project__feat">
                        <video class="project__video" playsinline autoplay muted loop data-lazy-src="<?= ASSETS_PATH ?>video/niko.mp4"></video>
                        <img class="project__img" loading="lazy" src="<?= ASSETS_PATH ?>images/projects/niko.png"
                             alt="Niko-Media Landing" />
                    </div>
                    <div class="project__info">
                        <span class="project__title link">Niko-Media</span> - наружная реклама
                    </div>
                </a>
            </li>
            <li class="project m-auto" data-aos="zoom-in" data-aos-duration="2000">
                <a href="https://neiros.ru/help/rabota-s-konstruktorom-chat-botov/" target="_blank" class="project__wrapper not-effect">
                    <div class="project__feat" style="transform: translate3d(0px, -6px, 0) rotate(-1deg);">
                        <img class="project__img" loading="lazy" src="<?= ASSETS_PATH ?>images/projects/neiros.png"
                             alt="Neiros"/>
                    </div>
                    <div class="project__info">
                        <span class="project__title link">Neiros</span> - конструктор чат-ботов
                    </div>
                </a>
            </li>
            <li class="project" data-aos="zoom-in" data-aos-duration="2000">
                <a href="https://sauna-pautina.ru/" target="_blank" class="project__wrapper not-effect">
                    <div class="project__feat">
                        <img class="project__img" loading="lazy" src="<?= ASSETS_PATH ?>images/projects/sauna.png"
                             alt="Pautina"/>
                    </div>
                    <div class="project__info">
                        <span class="project__title link">Паутина</span> - сауна, хамам, СПА
                    </div>
                </a>
            </li>
        </ul>
        <div class="content text-center">
            <h3>На этом пока всё :(<br> Мы начинающая компания и скоро здесь будет намного больше!</h3>
        </div>
    </div>
</section>
<? getFooter();
