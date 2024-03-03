<?php
define('BG_2', true);
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php'; ?>
<? getHeader(); ?>
<section class="section hero hero_inner">
    <div class="container">
        <h1 class="hero__title" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0">Наши услуги</h1>
        <img class="hero__img" style="max-width: 400px;" data-img-svg data-src="<?= ASSETS_PATH ?>images/services/entrepreneurs-flatline.svg" alt="">
    </div>
</section>
<section class="section services services_page">
    <div class="container">
        <div class="content mb-2">
            <p style="font-style:italic; font-weight: 500">* Обращаем Ваше внимание, что расценки на сайте <u>предварительные</u>. Итоговая сумма рассчитывается после оценки Вашего технического задания в часах.</p>
        </div>
        <div class="services__wrapper">
            <ul class="services__list">
                <li class="service" id="dev">
                    <img class="service__img" loading="lazy" src="<?= ASSETS_PATH ?>images/services/razrabotka.svg" alt="Разработка сайтов с нуля">
                    <div class="service__info">
                        <h3 class="service__name">Разработка сайтов с нуля<br> (от лендинга до интернет-магазина)</h3>
                        <div class="content">
                            <p>— Предлагаем полный спектр услуг по разработке сайтов с нуля.</p>
                            <p>— Создаем сайты любой сложности, начиная от простых лендингов и заканчивая полнофункциональными интернет-магазинами.</p>
                            <p>— Учитываем ваши потребности и цели, чтобы создать уникальный и привлекательный веб-сайт, который будет соответствовать вашему бренду и привлекать целевую аудиторию.</p>
                            <p>— Обладаем глубокими знаниями и опытом в различных технологиях и языках программирования, что позволяет нам создавать сайты высокого качества, удобные в использовании и оптимизированные для поисковых систем.</p>
                            <p style="font-style:italic;"><b>от 20 000 руб.</b></p>
                        </div>
                    </div>
                </li>
                <li class="service" id="crm">
                    <img class="service__img" loading="lazy" src="<?= ASSETS_PATH ?>images/services/crm.svg" alt="Индивидуальная разработка CRM для Вашего бизнеса">
                    <div class="service__info">
                        <h3 class="service__name">Индивидуальная разработка <a href="<?= getCityURL() ?>/info?type=crm" target="_blank">CRM</a><br> для Вашего бизнеса</h3>
                        <div class="content">
                            <p>— Предлагаем индивидуальную разработку CRM-систем, которая полностью соответствует потребностям вашего бизнеса.</p>
                            <p>— Создадим CRM, которая будет оптимизирована под ваши бизнес-процессы, упростит управление клиентской базой, автоматизирует задачи и повысит эффективность вашей работы.</p>
                            <p>— Учитываем все ваши требования и предоставляем гибкое решение, которое легко масштабируется и адаптируется под изменения в вашем бизнесе.</p>
                            <p>— Доверьтесь нашему опыту и получите индивидуальную CRM-систему, которая поможет вам оптимизировать работу и повысить эффективность вашего бизнеса.</p>
                            <p style="font-style:italic;"><b>от 60 000 руб.</b></p>
                        </div>
                    </div>
                </li>
                <li class="service" id="support">
                    <img class="service__img" loading="lazy" src="<?= ASSETS_PATH ?>images/services/support.svg" alt="Техническая поддержка">
                    <div class="service__info">
                        <h3 class="service__name">Техническая поддержка и модернизация</h3>
                        <div class="content">
                            <p>— Предлагаем профессиональную техническую поддержку для вашего веб-сайта или веб-приложения.</p>
                            <p>— Готовы помочь вам с решением любых технических проблем, обновлением и оптимизацией вашего сайта, а также с обеспечением безопасности и стабильной работы.</p>
                            <p>— Возьмёмся за любые доработки вашего сайта, будь то новая страница или форма обратной связи.</p>
                            <p>— Предлагаем гибкие планы поддержки, которые соответствуют вашим потребностям и бюджету.</p>
                            <p>— Доверьтесь нашей команде и сосредоточьтесь на развитии вашего бизнеса, зная, что ваш веб-проект находится под надежной технической поддержкой.</p>
                            <p style="font-style:italic;"><b><u>Модернизация</u> - от 2 000 руб.</b></p>
                            <p style="font-style:italic;"><b><u>Техническая поддержка</u> - от 10 000 руб/мес</b></p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<? getFooter();
