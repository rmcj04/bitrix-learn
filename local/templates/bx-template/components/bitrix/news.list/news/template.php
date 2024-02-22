<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$this->setFrameMode(true);
?>
<div class="swiper-wrapper">
    <?foreach($arResult['ITEMS'] as $arItem):?>

        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <a href="#" id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="swiper-slide main-news__card">
            <div class="main-news__card-img">
                <picture class="picture">
                    <source type="image/webp" srcset="<?=$arItem['PREVIEW_PICTURE']['SRC']?>"><img class="picture__img" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>">
                </picture><span class="main-news__card-plug">выставки и конференции</span>
            </div>
            <p class="main-news__card-date"><?= $arItem['DISPLAY_ACTIVE_FROM'];?></p>
            <p class="main-news__card-title"><?=$arItem['NAME'];?></p>
        </a>
    <? endforeach; ?>
</div>