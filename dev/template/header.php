<? require_once __DIR__ . '/head.php' ?>

<header class="header">
    <div class="container">
        <div class="header__wrapper">
            <a href="/" class="logo header__logo not-effect"><img data-img-svg data-src="<?= ASSETS_PATH ?>/images/logo.svg"></a>
            <div class="header__menu-wrapper">
                <nav class="header__nav">
                    <a href="/services/" class="header__nav-link <?= checkUrl('/services') ? 'link link_active' : ''?>">Услуги</a>
                    <a href="/projects/" class="header__nav-link <?= checkUrl('/projects') ? 'link link_active' : ''?>">Портфолио</a>
                    <a href="#contacts" class="header__nav-link header__nav-link_contacts">Контакты</a>
                    <a href="/start/" class="header__nav-project btn not-effect">Начать проект</a>
                </nav>
            </div>

            <button class="header__mob-btn">
                <span></span>
            </button>
        </div>

    </div>

</header>

<main>