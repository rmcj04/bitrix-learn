<?php

$selectArr = ['NAME'];
$filterArr = ['ID' => $arResult['IBLOCK_SECTION_ID'] ];
$sortArr = ['ASC'];

$getSectionNameQuery = CIBlockSection::GetList($sortArr, $filterArr, false, $selectArr)->GetNext();


$arResult['SECT_NAME'] = $getSectionNameQuery['NAME'];