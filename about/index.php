<?php
define('BG_2', true);
$SEO_TITLE = 'О нас | ITRinity';
$SEO_DESCRIPTION = 'Узнайте больше о нашем веб-агентстве, нашей команде и нашем опыте. Мы стремимся к качеству, инновациям и удовлетворению потребностей наших клиентов.';
$breadcrumbs = ['/about' => 'О нас'];
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php'; ?>
<? getHeader(); ?>
    <section class="section hero hero_inner">
        <div class="container">
            <h1 class="hero__title text-center" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0">О нашем
                веб-агентстве</h1>
            <span class="hero__img" data-img-svg data-src="<?= ASSETS_PATH ?>images/about/online-team-meeting.svg"
            ></span>
        </div>
    </section>
    <section class="section about about_page">
        <div class="container">
            <div class="about__wrapper">
                <div class="about__row">
                    <div class="about__row-left">
                        <h2>Кто мы?</h2>
                        <span class="about__row-img" data-img-svg
                              data-src="<?= ASSETS_PATH ?>images/about/group-presentation.svg"></span>
                    </div>
                    <div class="about__row-right content">
                        <p>ITRinity (Айтринити) - это молодая и развивающаяся компания, занимающаяся разработкой и
                            продвижением сайтов. <br>Мы помогаем компаниям любого размера и отрасли достичь своих
                            бизнес-целей.<br> Наша цель - помочь предприятиям любого
                            размера получить максимальную отдачу от своих инвестиций в веб-технологии.</p>
                    </div>
                </div>
                <div class="about__row">
                    <div class="about__row-left">
                        <h2>Чем мы занимаемся?</h2>
                        <span class="about__row-img" data-img-svg
                              data-src="<?= ASSETS_PATH ?>images/about/office-work-flatline.svg"></span>
                    </div>
                    <div class="about__row-right content">
                        <p>Мы предлагаем широкий спектр услуг, начиная от разработки сайтов с нуля до оптимизации
                            существующих веб-сайтов для повышения их видимости и рейтинга в поисковых системах.
                            <!--  Наши услуги также включают в себя SEO (поисковая оптимизация), SMM (социальные медиа маркетинг), контекстную рекламу и многое другое. --></p>
                        <p>Обратиться к нам лучше всего, если вы хотите увеличить свою клиентскую базу, улучшить свои
                            онлайн-продажи или просто обновить свой веб-сайт. Мы предлагаем индивидуальный подход к
                            каждому клиенту, учитывая его бизнес-цели и бюджет.</p>
                    </div>
                </div>
                <div class="about__row">
                    <div class="about__row-left">
                        <h2>Наши преимущества</h2>
                        <span class="about__row-img" data-img-svg
                              data-src="<?= ASSETS_PATH ?>images/about/competition-flatline.svg"></span>
                    </div>
                    <div class="about__row-right content">
                        <p>Включают в себя опыт работы с различными отраслями, глубокие знания в области веб-технологий
                            , а также способность создавать эффективные решения, которые соответствуют
                            потребностям каждого клиента. Мы постоянно следим за новыми тенденциями и технологиями в
                            области разработки и продвижения сайтов, чтобы предлагать нашим клиентам самые современные и
                            эффективные решения.</p>
                        <p>Наша команда состоит из опытных специалистов, которые обладают глубокими знаниями в области
                            веб-дизайна, разработки, SEO и маркетинга.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<? getFooter();
