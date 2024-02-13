<script>
    try {
        <? if (defined('BG_2') && BG_2) : ?>
            window.noChangeBackround = true;
        <? endif; ?>
    } catch (error) {

    }
</script>
<script src="<?= ASSETS_PATH ?>/js/svgimage.js"></script>
<script src="<?= ASSETS_PATH ?>/js/aos.js"></script>
<script src="<?= ASSETS_PATH ?>/js/swiper-bundle.min.js"></script>
<script src="<?= ASSETS_PATH ?>/js/app.js"></script>