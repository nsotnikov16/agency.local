<?php
define('BG_2', true);
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php'; ?>
<? getHeader(); ?>
<section class="section hero hero_about">
    <div class="container">
        <h1 class="hero__title" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0">О нас</h1>
        <img class="hero__img" data-img-svg data-src="<?= ASSETS_PATH ?>images/about/online-team-meeting.svg" alt="">
    </div>
</section>
<section class="section about about_page">
    <div class="container">
        <div class="about__wrapper">
            <div class="about__row">
                <div class="about__row-left">
                    <h3>Кто мы?</h3>
                    <img class="about__row-img" data-img-svg data-src="<?= ASSETS_PATH ?>images/about/group-presentation.svg" alt="">
                </div>
                <div class="about__row-right">
                    <p>ITrinity - это компания, занимающаяся разработкой и продвижением сайтов. Мы помогаем компаниям любого размера и отрасли улучшить свой онлайн-присутствие и достичь своих бизнес-целей. Наша цель - помочь предприятиям любого размера получить максимальную отдачу от своих инвестиций в веб-технологии.</p>
                </div>
            </div>
            <div class="about__row">
                <div class="about__row-left">
                    <h3>Чем мы занимаемся?</h3>
                    <img class="about__row-img" data-img-svg data-src="<?= ASSETS_PATH ?>images/about/office-work-flatline.svg" alt="">
                </div>
                <div class="about__row-right">
                    <p>Мы предлагаем широкий спектр услуг, начиная от разработки сайтов с нуля до оптимизации существующих веб-сайтов для повышения их видимости и рейтинга в поисковых системах. Наши услуги также включают в себя SEO (поисковая оптимизация), SMM (социальные медиа маркетинг), контекстную рекламу и многое другое.</p>
                    <br>
                    <p>Обратиться к нам лучше всего, если вы хотите увеличить свою клиентскую базу, улучшить свои онлайн-продажи или просто обновить свой веб-сайт. Мы предлагаем индивидуальный подход к каждому клиенту, учитывая его бизнес-цели и бюджет.</p>
                </div>
            </div>
            <div class="about__row">
                <div class="about__row-left">
                    <h3>Наши преимущества</h3>
                    <img class="about__row-img" data-img-svg data-src="<?= ASSETS_PATH ?>images/about/competition-flatline.svg" alt="">
                </div>
                <div class="about__row-right">
                    <p>Включают в себя опыт работы с различными отраслями, глубокие знания в области веб-технологий и маркетинга, а также способность создавать эффективные решения, которые соответствуют потребностям каждого клиента. Мы постоянно следим за новыми тенденциями и технологиями в области разработки и продвижения сайтов, чтобы предлагать нашим клиентам самые современные и эффективные решения.</p>
                    <br>
                    <p>Наша команда состоит из опытных специалистов, которые обладают глубокими знаниями в области веб-дизайна, разработки, SEO и маркетинга.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<? getFooter();
