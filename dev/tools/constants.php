<?
define('TEMPLATE_PATH', '/dev/template/');
define('ASSETS_PATH', '/dev/assets/');
define('FULL_ASSETS_PATH', $_SERVER['DOCUMENT_ROOT'] . ASSETS_PATH);
define('VIEWS_PATH', TEMPLATE_PATH . 'views/');
define('TELEGRAM_TOKEN', '6460105098:AAE5oaPLQCet4RAxp21ihAWdABItBxBeyuQ');
define('TELEGRAM_CHATID', '6754753153');
define('CURRENT_URL', (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']);
define('PHONE', '8 (982) 207-90-55');
define('EMAIL', 'itrinityagency@yandex.ru');
define('TELEGRAM', 'https://t.me/itrinityagency');