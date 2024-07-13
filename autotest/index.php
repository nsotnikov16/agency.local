<?php
define('BG_2', true);
define('HIDE_LEAD_SECTION', true);
$SEO_TITLE = 'Конструктор автотестов - предназначение, инструкция пользования';
$SEO_DESCRIPTION = '&#9658;Конструктор автотестов &#9757; Что это за инструмент и почему его так любят тестировщики';
$breadcrumbs = ['/autotest' => 'Конструктор автотестов'];
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php';
?>
<?php getHeader(); ?>
<section class="section hero hero_inner">
    <div class="container" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0">
        <h1 class="hero__title text-center">Конструктор автотестов</h1>
        <a href="/autotest/constructor/" class="btn btn_autotest not-effect scale">Попробовать</a>
    </div>
</section>
<section class="section pt-0">
    <div class="container">
        <div class="nav-content spoiler spoiler_open">
            <div class="nav-content__top spoiler__top">
                <div class="nav-content__title spoiler__name">Содержание</div>
                <div class="nav-content__plus spoiler__btn"></div>
            </div>
            <div class="spoiler__bottom">
                <ol>
                    <li>
                        <a href="#title1">Что такое автотестирование?</a>
                    </li>
                    <li>
                        <a href="#title2">Для чего нужен конструктор автотестов</a>
                        <ol>
                            <li>
                                <a href="#title2-1">Плюсы</a>
                            </li>
                            <li>
                                <a href="#title2-2">Плюсы</a>
                            </li>
                        </ol>
                    </li>
                    <li>
                        <a href="#title3">Инструкция по применению</a>
                        <ul>
                            <li>
                                <a href="#title3-1">Создание сценария</a>
                            </li>
                            <li>
                                <a href="#title3-2">Выбор действия</a>
                            </li>
                            <li>
                                <a href="#title3-3">Заполнение блока действия</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Хранение сценариев</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container" style="max-width: 1200px;">
        <div class="content">
            <h2 id="title1">Что такое автотестирование?</h2>
            <p>Автотестирование – это процесс тестирования программного обеспечения с использованием специальных программ и инструментов, позволяющих автоматизировать выполнение тестовых сценариев. Автотесты повышают эффективность тестирования, ускоряют процесс разработки и выявляют потенциальные ошибки в коде раньше, чем вручную проводимые тесты. В результате автотесты готовы поспособствовать улучшению качества программного продукта и увеличению его надежности.</p>
            <br>
            <h2 id="title2">Для чего нужен конструктор автотестов</h2>
            <p>Конструктор автотестов предоставляет возможность создания сценария для тестирования без навыков программирования. Конструктор сам за Вас сгенерирует JavaScript код, позволяющий выполнить созданный Вами сценарий. Вам остаётся только скопировать код и вставить его на нужной странице, после чего можно наблюдать за автоматическим выполнением действий на сайте.</p>
            <br>
            <h3 id="title2-1">Плюсы</h3>
            <ul>
                <li>Легко и удобно</li>
                <li>Не нужно скачивать и устанавливать ПО</li>
                <li>Нет необходимости знать языки программирования</li>
                <li>Заменяет ручные действия</li>
            </ul>
            <br>
            <h3 id="title2-2">Минусы</h3>
            <ul>
                <li>Выполняется в рамках одной страницы (многостраничное выполнение рассматривается в будущем по возможности способностей браузера)</li>
            </ul>
            <br>
            <h2 id="title3">Инструкция по применению</h2>
            <h3 id="title3-1">Создание сценария</h3>
            <p>Добавьте сценарий и назовите его. Включите его с помощью тумблера. Запустите сценарий с помощью кнопки "Нажмите, чтобы начать".</p>
            <figure>
                <img src="/autotest/img/dobavlenie.jpg" alt="Добавление сценария" loading="lazy">
                <figcaption>Добавление сценария</figcaption>
            </figure>
            <br>
            <h3 id="title3-2">Выбор действия</h3>
            <p><u>Клик</u> - действие клика мышью по нужному элементу страницы.</p>
            <p><u>Фокус</u> - для текстовых полей форм, устанавливает курсор в поле и переходит в ожидание набора текста.</p>
            <p><u>Ввод значения</u> - заполняет текстовое поле формы нужным значением, например, ввод имени и фамилии.</p>
            <p><u>Ожидание</u> - "таймаут" перед следующим действием. Используется, например, если нужно подождать появление какого-нибудь элемента.</p>
            <p><u>Свой скрипт</u> - пользовательский JavaScript код.</p>
            <figure>
                <img src="/autotest/img/vibor-deystvia.jpg" alt="Выбор действия" loading="lazy" >
                <figcaption>Выбор действия</figcaption>
            </figure>
            <br>
            <h3 id="title3-3">Заполнение блока действия</h3>
            <p></p>
            <h2>Хранение сценариев</h2>
            <h2>Важные моменты</h2>
            <!-- Зарезервированное время ожидания и появления элемента -->
        </div>
    </div>

</section>
<?php getFooter();
