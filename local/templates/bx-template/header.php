<?php
// Проверяем, загружен ли Prolog
    (!defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED !== true) ?? die('Core not loaded');

    // Определяем тип для $Application, что-бы шторм не срал ошибками, и был автокомплит
    /** @var \CMain $APPLICATION */

    // Подключение стилей и скриптов через D7
    use Bitrix\Main\Page\Asset;

    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/590.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/app.css");

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/app.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/vendor.js");
?>
<!doctype html>
<html lang="en"">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <?php
    $APPLICATION->ShowHead();
    ?>
</head>
<body>
