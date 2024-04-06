<!DOCTYPE html>
<html lang="ru" class="<?= defined('BG_2') && BG_2 ? 'bg-2' : '' ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="<?= $GLOBALS['SEO_DESCRIPTION'] ?>">
    <title><?= $GLOBALS['SEO_TITLE'] ?></title>
    <link rel="stylesheet" href="<?= ASSETS_PATH ?>css/style.css?<?=filemtime(FULL_ASSETS_PATH . 'css/style.css');?>">
    <link rel="shortcut icon" href="<?= ASSETS_PATH ?>images/favicon.ico" type="image/x-icon">
    <link rel="canonical" href="<?= getCanonical() ?>" >
</head>
<body>
<!-- Yandex.Metrika counter -->
<script>
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(96955718, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/96955718" style="position:absolute; left:-9999px;" alt="" ></div></noscript>
<!-- /Yandex.Metrika counter -->