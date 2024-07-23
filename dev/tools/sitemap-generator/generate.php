<?php
if (isset($_GET['admin']) && $_GET['admin'] !== 'da') die;
require $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php';
require __DIR__ . '/sitemap-generator.php';
$smg = new SitemapGenerator(include(__DIR__ . "/sitemap-config.php"));
// Run the generator
$smg->GenerateSitemap();
