<?php
    (!defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED !== true) ?? die('');
// Подключение стилей и скриптов через D7
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addString('<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">');
//Asset::getInstance()->addString('<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<ваш API-ключ>"></script>');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/assets/590.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/assets/app.css');

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/assets/js/app.js' );
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/assets/js/vendor.js');