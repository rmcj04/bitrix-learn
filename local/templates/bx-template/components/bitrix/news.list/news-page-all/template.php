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
    <div class="news-content__listing" data-aos="fade-up">
    <?foreach($arResult['ITEMS'] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

    <a class="news-card" href="<?= $arItem['DETAIL_PAGE_URL'] ?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="news-card__top">
            <div class="news-card__plug"><?= $arResult['SECT_INFO'][$arItem['IBLOCK_SECTION_ID']]['NAME'] ?></div>
            <div class="news-card__bg">
                <picture class="picture">
                    <source type="image/webp" srcset="<?=$arItem['PREVIEW_PICTURE']['SRC']?>"><img class="picture__img" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>">
                </picture>
            </div>
        </div>
        <div class="news-card__bot">
            <div class="news-card__date"><?= $arItem['DISPLAY_ACTIVE_FROM'];?></div>
            <div class="news-card__title"><?=$arItem['NAME'];?></div>
        </div>
    </a>
    <? endforeach; ?>
    </div>
