<?php
// Проверяем, загружен ли Prolog
    (!defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED !== true) ?? die('');

// Определяем тип для $Application, что-бы шторм не срал ошибками, и был автокомплит
/** @var \CMain $APPLICATION */

?>


<section class="main-catalog container" data-aos="fade-up" data-aos-duration="1500">
	<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"main_catalog", 
	array(
		"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"COUNT_ELEMENTS" => "N",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "",
		"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "catalogs",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "NAME",
			1 => "PICTURE",
			2 => "",
		),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "LINK",
			2 => "TEXT_COLOR",
			3 => "",
		),
		"SHOW_PARENT_NAME" => "N",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LINE",
		"COMPONENT_TEMPLATE" => "main_catalog"
	),
	false
);?>
</section>

