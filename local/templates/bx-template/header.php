<?php
// Проверяем, загружен ли Prolog
    (!defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED !== true) ?? die('');

    // Определяем тип для $Application, что-бы шторм не срал ошибками, и был автокомплит
    /** @var \CMain $APPLICATION */

?>
<!doctype html>
<html lang="<?=LANGUAGE_ID; ?>">

<head>
    <title><? $APPLICATION->ShowTitle();?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <?php require_once __DIR__."/assets.php"; ?>
    <? $APPLICATION->ShowHead(); ?>
</head>

<body class="body">
<div class="wrapper">

    <div> <?$APPLICATION->ShowPanel()?></div>
    <? require __DIR__."/includes/header.php"; ?>
    <main class="main">
        <? require __DIR__ . "/includes/header/header_main_menus.php"; ?>
		