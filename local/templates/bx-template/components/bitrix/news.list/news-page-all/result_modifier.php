<?php


if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$sections = [];

foreach ($arResult['ITEMS'] as $key => $item) {
    if (!in_array($item['IBLOCK_SECTION_ID'], $sections)) {
        $sections[] = $item['IBLOCK_SECTION_ID'];
    }
}


$selectArray = ["NAME", "ID"];
$sortArray = ["ASC"];
$filterArray = [
    'ID' => $sections
];

$sectionsQuery = CIBlockSection::GetList($sortArray, $filterArray, false, $selectArray);


while ($row = $sectionsQuery->GetNext()) {
    $arResult['SECT_INFO'][$row['ID']] = $row;
}


