<?php
define('BG_2', true);
$SEO_TITLE = 'Технологии | ITRinity (Айтринити)';
$SEO_DESCRIPTION = 'Мы используем современные технологии и инструменты для разработки и поддержки сайтов, создания CRM-систем и других проектов. Узнайте больше о наших технологических возможностях.';
$breadcrumbs = ['/technologies/' => 'Технологии'];
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php'; ?>
<? getHeader(); ?>
<section class="section hero hero_inner">
    <div class="container">
        <h1 class="hero__title" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0">Технологии, которыми владеем</h1>
    </div>
</section>
<section class="section skills">
    <div class="container">
        <div class="skills__wrapper">
            <div class="skills__block">
                <h3 class="skills__title">Базовые навыки</h3>
                <ul class="skills__list">
                    <li class="skill">
                        <img class="skill__img" loading="lazy" src="<?= ASSETS_PATH ?>images/skills/php.svg" alt="PHP">
                        <p class="skill__name">PHP</p>
                    </li>
                    <li class="skill">
                        <img class="skill__img" loading="lazy" src="<?= ASSETS_PATH ?>images/skills/js.svg" alt="JS">
                        <p class="skill__name">JavaScript</p>
                    </li>
                    <li class="skill">
                        <img class="skill__img" loading="lazy" src="<?= ASSETS_PATH ?>images/skills/html.svg" alt="HTML">
                        <p class="skill__name">HTML</p>
                    </li>
                    <li class="skill">
                        <img class="skill__img" loading="lazy" src="<?= ASSETS_PATH ?>images/skills/css.svg" alt="CSS">
                        <p class="skill__name">CSS</p>
                    </li>
                </ul>
            </div>
            <div class="skills__block">
                <h3 class="skills__title">Фреймворки / платформы / библиотеки</h3>
                <ul class="skills__list">
                    <li class="skill">
                        <img class="skill__img" loading="lazy" src="<?= ASSETS_PATH ?>images/skills/laravel.svg" alt="Laravel">
                        <p class="skill__name">Laravel</p>
                    </li>
                    <li class="skill">
                        <img class="skill__img" loading="lazy" src="<?= ASSETS_PATH ?>images/skills/nodejs.svg" alt="NodeJS">
                        <p class="skill__name">NodeJS</p>
                    </li>
                    <li class="skill">
                        <img class="skill__img" loading="lazy" src="<?= ASSETS_PATH ?>images/skills/express.svg" alt="ExpressJS">
                        <p class="skill__name">Express</p>
                    </li>
                    <li class="skill">
                        <img class="skill__img" loading="lazy" src="<?= ASSETS_PATH ?>images/skills/react.svg" alt="ReactJS">
                        <p class="skill__name">ReactJS</p>
                    </li>
                    <li class="skill">
                        <img class="skill__img" loading="lazy" src="<?= ASSETS_PATH ?>images/skills/redux.svg" alt="Redux">
                        <p class="skill__name">Redux</p>
                    </li>
                    <li class="skill">
                        <img class="skill__img" loading="lazy" src="<?= ASSETS_PATH ?>images/skills/vue.svg" alt="VueJS">
                        <p class="skill__name">VueJS</p>
                    </li>
                    <li class="skill">
                        <img class="skill__img" loading="lazy" src="<?= ASSETS_PATH ?>images/skills/vuex.png" alt="Vuex">
                        <p class="skill__name">Vuex</p>
                    </li>
                    <li class="skill">
                        <img class="skill__img" loading="lazy" src="<?= ASSETS_PATH ?>images/skills/nuxt.svg" alt="Nuxt">
                        <p class="skill__name">Nuxt</p>
                    </li>
                </ul>
            </div>
            <div class="skills__block">
                <h3 class="skills__title">Вёрстка</h3>
                <ul class="skills__list">
                    <li class="skill">
                        <img class="skill__img" loading="lazy" src="<?= ASSETS_PATH ?>images/skills/gulp.svg" alt="Gulp">
                        <p class="skill__name">Gulp</p>
                    </li>
                    <li class="skill">
                        <img class="skill__img" loading="lazy" src="<?= ASSETS_PATH ?>images/skills/webpack.svg" alt="Webpack">
                        <p class="skill__name">Webpack</p>
                    </li>
                    <li class="skill">
                        <img class="skill__img" loading="lazy" src="<?= ASSETS_PATH ?>images/skills/bootstrap.svg" alt="Bootstrap">
                        <p class="skill__name">Bootstrap</p>
                    </li>
                    <li class="skill">
                        <img class="skill__img" loading="lazy" src="<?= ASSETS_PATH ?>images/skills/tailwind.svg" alt="Tailwind">
                        <p class="skill__name">Tailwind</p>
                    </li>
                </ul>
            </div>
            <div class="skills__block">
                <h3 class="skills__title">Контроль версий</h3>
                <ul class="skills__list">
                    <li class="skill">
                        <img class="skill__img" loading="lazy" src="<?= ASSETS_PATH ?>images/skills/git.svg" alt="Git">
                        <p class="skill__name">Git</p>
                    </li>
                </ul>
            </div>
            <div class="skills__block">
                <h3 class="skills__title">Система управления контентом (CMS) / Конструкторы</h3>
                <ul class="skills__list">
                    <li class="skill">
                        <img class="skill__img" loading="lazy" src="<?= ASSETS_PATH ?>images/skills/bitrix.png" alt="Bitrix">
                        <p class="skill__name">1С-Битрикс</p>
                    </li>
                    <li class="skill">
                        <img class="skill__img" loading="lazy" src="<?= ASSETS_PATH ?>images/skills/wordpress.svg" alt="Wordpress">
                        <p class="skill__name">Wordpress</p>
                    </li>
                    <li class="skill">
                        <img class="skill__img" loading="lazy" src="<?= ASSETS_PATH ?>images/skills/tilda.svg" alt="Tilda">
                        <p class="skill__name">Tilda</p>
                    </li>
                </ul>
            </div>
            <div class="skills__block">
                <h3 class="skills__title">Дизайн</h3>
                <ul class="skills__list">
                    <li class="skill">
                        <img class="skill__img" loading="lazy" src="<?= ASSETS_PATH ?>images/skills/figma.svg" alt="Figma">
                        <p class="skill__name">Figma</p>
                    </li>
                    <li class="skill">
                        <img class="skill__img" loading="lazy" src="<?= ASSETS_PATH ?>images/skills/photoshop.svg" alt="Photoshop">
                        <p class="skill__name">Photoshop</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<? getFooter();
