<?php
// Проверяем, загружен ли Prolog
    (!defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED !== true) ?? die('');

// Определяем тип для $Application, что-бы шторм не срал ошибками, и был автокомплит
/** @var \CMain $APPLICATION */




    if(isset($_REQUEST['SECTION_CODE']))
    {
        require_once 'section/index.php';
    }
    else if(isset($_REQUEST['CODE']))
    {
        require_once 'detail/index.php';
    }
    else
    {
        require_once 'main/index.php';
    }


?>
