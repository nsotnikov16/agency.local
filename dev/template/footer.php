</main>

<? view('partners'); ?>
<? defined('HIDE_LEAD_SECTION') && HIDE_LEAD_SECTION ? '' : view('lead-section') ?>
<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__contacts" id="contacts">
                <a href="<?= getCityURL() ?>/" class="logo not-effect">
                    <span data-img-svg data-src="<?= ASSETS_PATH ?>/images/logo.svg"></span>
                </a>
                <a href="<?= getHrefForPhone(PHONE) ?>" rel="nofollow"><?= PHONE ?></a>
                <a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a>
                <div class="social footer__social">
                    <? if (defined('TELEGRAM') && TELEGRAM) : ?>
                        <a class="telegram not-effect" target="_blank" href="<?= TELEGRAM ?>">
                            <span data-img-svg data-src="<?= ASSETS_PATH ?>/images/icons/telegram.svg"></span>
                        </a>
                    <? endif; ?>
                    <?/*<a class="whatsapp not-effect" href="#"><img data-img-svg data-src="<?= ASSETS_PATH
                        ?>/images/icons/whatsapp.svg" /></a>
                    <a class="viber not-effect" href="#"><img data-img-svg data-src="<?= ASSETS_PATH
?>/images/icons/viber.svg" /></a>*/ ?>
                </div>
            </div>
            <div class="footer__menu-wrapper">
                <nav class="footer__nav">
                    <span class="footer__nav-title">Что мы делаем</span>
                    <a href="<?= getCityURL() ?>/services/" class="footer__nav-link">Услуги</a>
                    <a href="<?= getCityURL() ?>/projects/" class="footer__nav-link">Проекты</a>
                    <!-- <a href="<?= getCityURL() ?>/autotest/" class="footer__nav-link">Конструктор автотестов</a> -->
                    <!-- <a href="" class="footer__nav-link">Работа с клиентом</a> -->
                    <a href="<?= getCityURL() ?>/technologies/" class="footer__nav-link">Технологии</a>
                    <!-- <a href="" class="footer__nav-link">Обучение</a>
                    <a href="" class="footer__nav-link">Вопрос-ответ</a> -->
                </nav>
                <nav class="footer__nav">
                    <span class="footer__nav-title">Кто мы</span>
                    <a href="<?= getCityURL() ?>/about/" class="footer__nav-link">О нас</a>
                    <a href="<?= getCityURL() ?>/contacts/" class="footer__nav-link">Контакты</a>
                    <!-- <a href="" class="footer__nav-link">Сотрудничество</a> -->
                </nav>
                <nav class="footer__nav">
                    <span class="footer__nav-title">База знаний</span>
                    <a href="<?= getCityURL() ?>/info/crm/" class="footer__nav-link">CRM</a>
                    <a href="<?= getCityURL() ?>/info/cms/" class="footer__nav-link">CMS</a>
                    <a href="<?= getCityURL() ?>/info/hosting-and-domain/" class="footer__nav-link">Хостинг и домен</a>
                    <a href="<?= getCityURL() ?>/info/virtual-server/" class="footer__nav-link">Виртуальный сервер</a>
                    <!-- <a href="<?= getCityURL() ?>/info/?type=crm" class="footer__nav-link">Пример оформления ТЗ</a> -->
                </nav>
            </div>
        </div>

        <div class="footer__bottom">
            <div class="footer__copyright">ITRinity (Айтринити)<br>ИП Сотников Н.С. ОГРНИП: 324890000006185<br>© 2024<?= date('Y') === '2024' ? '' : (' - ' . date('Y')) ?>. Все права защищены.</div>
            <a href="<?= getCityURL() ?>/privacy-policy/" class="footer__policy">Политика обработки персональных данных</a>
        </div>
    </div>
</footer>
<div class="btn-up btn-up-hide"></div>
<? include_once __DIR__ . '/scripts.php' ?>
</body>

</html>