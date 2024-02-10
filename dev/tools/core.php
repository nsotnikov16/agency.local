<?php
require_once __DIR__ . '/constants.php';

function getHeader()
{
    require_once $_SERVER['DOCUMENT_ROOT'] . TEMPLATE_PATH . 'header.php';
}

function getFooter()
{
    require_once $_SERVER['DOCUMENT_ROOT'] . TEMPLATE_PATH . 'footer.php';
}

function view(string $view, array $vars = [])
{
    include $_SERVER['DOCUMENT_ROOT'] . VIEWS_PATH . $view . '.php';
}
