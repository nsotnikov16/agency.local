<?php
date_default_timezone_set('Asia/Ekaterinburg');
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php';

$name = trim(htmlspecialchars($_REQUEST['name']));
$phone = trim(htmlspecialchars($_REQUEST['phone']));
$email = trim(htmlspecialchars($_REQUEST['email']));
$description = trim(htmlspecialchars($_REQUEST['description']));

try {
    $result = ['status' => false];
    if (!$name) throw new \Exception("Имя обязательно к заполнению");
    if (!$phone) throw new \Exception("Номер телефона обязателен к заполнению");
    if (!preg_match('/^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$/', $phone)) {
        throw new \Exception('Номер телефона не соответствует формату: +7 (800) 555-35-35');
    }

    $html = date('Y-m-d H:i') . PHP_EOL;
    $html .= 'Имя: ' . $name . PHP_EOL;
    $html .= 'Телефон: ' . $phone . PHP_EOL;
    if ($email) $html .= 'Email: ' . $email . PHP_EOL;
    if ($description) $html .= 'Описание проекта: ' . $description . PHP_EOL;
    $html .= 'Откуда: ' . $_SERVER['HTTP_REFERER']; 

    $sendResult = json_decode(message_to_telegram($html), true);

    if (!$sendResult['ok']) {
        throw new \Exception($sendResult['description'] ?? 'Ошибка отправки сообщения');
    }

    $result['status'] = true;
} catch (\Throwable $th) {
    $result = ['status' => false, 'error' => $th->getMessage()];
}

header('Content-Type: application/json');
echo json_encode($result);
