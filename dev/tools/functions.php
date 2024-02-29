<?

function message_to_telegram(string $text)
{
    if (!defined('TELEGRAM_TOKEN') || !defined('TELEGRAM_CHATID')) return;
    $ch = curl_init();
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_POSTFIELDS => array(
                'chat_id' => TELEGRAM_CHATID,
                'text' => $text,
            ),
        )
    );
    return curl_exec($ch);
}

function checkUrl(string $url)
{
    return strpos($_SERVER['REQUEST_URI'], $url) !== false;
}
