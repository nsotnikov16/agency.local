<?

$GLOBALS['SEO_CITIES'] = [
    'surgut' => [
        'Сургут',
        'Сургуте'
    ],
    'tyumen' => [
        'Тюмень',
        'Тюмени'
    ],
    'noyabrsk' => [
        'Ноябрьск',
        'Ноябрьске'
    ],
    'moscow' => [
        'Москва',
        'Москве'
    ],
    'moscow' => [
        'Москва',
        'Москве'
    ],
    'spb' => [
        'Санкт-Петербург',
        'Санкт-Петербурге',
    ]
];

function getCity()
{
    $city = '';
    try {
        if (!isset($GLOBALS['CITY'])) {
            $segment = getFirstURLSegment();

            if ($segment && isset($GLOBALS['SEO_CITIES'][$segment])) {
                $GLOBALS['CITY'] = $segment;
                $city = $segment;
            }
        } else {
            $city = $GLOBALS['CITY'];
        }
    } catch (\Throwable $th) {
        //throw $th;
    }

    return $city;
}

function getCityURL()
{
    if ($city = getCity()) {
        return '/' . $city;
    }
    return '';
}

function getCitySEO()
{
    $city = getCity();
    if ($city && $GLOBALS['SEO_CITIES'][$city]) return $GLOBALS['SEO_CITIES'][$city];
    return [];
}

if (!defined('SEO_TITLE')) {
    $citySEO = getCitySEO();
    $seo_title = 'Купить сайт на заказ, разработка и продвижение сайта ' . (!empty($citySEO) ? ('в ' . $citySEO[1]) : '' ). '| Itrinity Веб-студия';
    define('SEO_TITLE', $seo_title);
}