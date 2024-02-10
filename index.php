<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php'; ?>
<? getHeader(); ?>
<? view('hero', [
    'title' => 'We craft holistic, people- friendly digital experiences.',
    'subtitle' => 'BB Agency is a strategic partner for fast-growing tech companies in need of a scalable <a data-type="page" data-id="385" href="https://bb.agency/services/saas-websites/">website with modular CMS</a>, a <a data-type="page" data-id="105" href="https://bb.agency/services/">design system</a>, and future-proof <a data-type="page" data-id="105" href="https://bb.agency/services/">brand identity</a>'
]); ?>
<? getFooter();
