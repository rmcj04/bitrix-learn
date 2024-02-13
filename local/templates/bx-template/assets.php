<?php

    (!defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED !== true) ?? die('Core not loaded');
// Подключение стилей и скриптов через D7
use Bitrix\Main\Page\Asset;

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/590.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/app.css");

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/app.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/vendor.js");