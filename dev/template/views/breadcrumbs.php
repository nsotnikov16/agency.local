<? if (!empty($GLOBALS['breadcrumbs'])) : ?>
    <?
    $cnt = 1;
    $schema = '<script  type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement":
        [
         {
          "@type": "ListItem",
          "position": 1,
          "item":
          {
           "@id": "' . CURRENT_URL . '",
           "name": "ITRinity"
           }
         },
    ' ?>
    <div class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a href="/" class="breadcrumbs__link not-effect">ITRinity</a>
                </li>
                <? foreach ($GLOBALS['breadcrumbs'] as $link => $title) : ?>
                    <li class="breadcrumbs__item">
                        <? if ($cnt === count($GLOBALS['breadcrumbs'])) : ?>
                            <span class="breadcrumbs__link"><?= $title ?></span>
                        <? else : ?>
                            <a href="<?= $link ?>" class="breadcrumbs__link not-effect"><?= $title ?></a>

                        <? endif; ?>
                    </li>
                    <? $schema .= '
                        {
                            "@type": "ListItem",
                            "position": ' . $cnt + 1 . ',
                            "item":
                            {
                             "@id": "' . CURRENT_URL . $link . '",
                             "name": "' . $title . '"
                             }
                        }' ?>
                    <? $cnt !== count($GLOBALS['breadcrumbs']) ? ($schema .= ',') : '' ?>
                    <? $cnt++; ?>
                <? endforeach ?>
            </ul>
        </div>
    </div>
    <? $schema .= ']}</script>' ?>
    <?= $schema ?>
<? endif; ?>