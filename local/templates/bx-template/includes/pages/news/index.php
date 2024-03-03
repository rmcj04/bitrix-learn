<?php
// Проверяем, загружен ли Prolog
    (!defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED !== true) ?? die('');

// Определяем тип для $Application, что-бы шторм не срал ошибками, и был автокомплит
/** @var \CMain $APPLICATION */

?>


<section class="top-section">
    <section class="news-content container">
        <?php require_once 'breadcrumbs.php'; ?>
        <?php require_once 'title.php'; ?>
        <?php require_once 'categories.php';?>
        <?php require_once 'listing.php'; ?>
    </section>
</section>



