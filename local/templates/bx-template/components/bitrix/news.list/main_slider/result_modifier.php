<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var array $arParams */
/** @var array $arResult */



function getResizedPhoto($arItem) : array
{
    $mobileImage = CFile::ResizeImageGet(
        $arItem["PREVIEW_PICTURE"],
        array("width" => 670, "height" => 1000),
        BX_RESIZE_IMAGE_EXACT,
        false,
        false,
        false,
        false
    );

    return [
        "MOBILE" => [
            "SRC" => $mobileImage['src'],
            "HEIGHT" => $mobileImage['height'],
            "WIDTH" => $mobileImage['width']
        ]
    ];
}

foreach($arResult["ITEMS"] as $key=>$item) {
    $arResult["ITEMS"][$key] = array_merge(
        $arResult["ITEMS"][$key],
        getResizedPhoto($item)
    );
}

