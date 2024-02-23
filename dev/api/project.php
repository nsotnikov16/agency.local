<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php';

$name = trim(htmlspecialchars($_REQUEST['name']));
$phone = trim(htmlspecialchars($_REQUEST['phone']));
$email = trim(htmlspecialchars($_REQUEST['email']));
$description = trim(htmlspecialchars($_REQUEST['description']));

try {
    if (!$name) throw new \Exception("Имя обязательно к заполнению");
    if (!$phone) throw new \Exception("Номер телефона обязателен к заполнению");
    if (!preg_match('/^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$/', $phone)) {
        throw new \Exception('Номер телефона не соответствует формату: +7 (800) 555-35-35');
    }
    
} catch (\Throwable $th) {
    echo json_encode(['status' => false, 'error' => $th->getMessage()]);
}