<?php
// Проверяем, загружен ли Prolog
    (!defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED !== true) ?? die('Core not loaded');
    $language = \Bitrix\Landing\Manager::getLangISO();

    // Определяем тип для $Application, что-бы шторм не срал ошибками, и был автокомплит
    /** @var \CMain $APPLICATION */


?>
<!doctype html>
<html lang="<?= $language; ?>" class="<?php $APPLICATION->ShowProperty('HtmlClass') ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <?php
    $APPLICATION->ShowHead();
    $APPLICATION->ShowProperty('MetaOG');
    $APPLICATION->ShowProperty('BeforeHeadClose');
    ?>
</head>
<body>
