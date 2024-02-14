<?php
    (!defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED !== true) ?? die('');
// Подключение стилей и скриптов через D7
use Bitrix\Main\Page\Asset;

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/590.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/app.css");

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/app.js" );
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/vendor.js");