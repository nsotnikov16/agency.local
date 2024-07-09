<? require_once __DIR__ . '/head.php' ?>

<header class="header">
    <div class="container">
        <div class="header__wrapper">
            <a href="<?= getCityURL() ?>/" class="logo header__logo not-effect"><span data-img-svg data-src="<?=
                                                                                                            ASSETS_PATH ?>/images/logo.svg"></span></a>
            <div class="header__menu-wrapper">
                <nav class="header__nav">
                    <a href="<?= getCityURL() ?>/services/" class="header__nav-link <?= checkUrl('/services') ? 'link link_active' : '' ?>">Услуги</a>
                    <a href="<?= getCityURL() ?>/projects/" class="header__nav-link <?= checkUrl('/projects') ? 'link link_active' : '' ?>">Портфолио</a>
                    <a href="<?= getCityURL() ?>/contacts/" class="header__nav-link <?= checkUrl('/contacts') ? 'link link_active' : '' ?>">Контакты</a>
                    <a href="<?= getCityURL() ?>/start/" class="header__nav-project btn not-effect">Обсудить проект</a>
                </nav>
            </div>

            <button class="header__mob-btn">
                <span></span>
            </button>
        </div>

    </div>

</header>

<main>
    <? require_once(__DIR__ . '/views/breadcrumbs.php') ?>