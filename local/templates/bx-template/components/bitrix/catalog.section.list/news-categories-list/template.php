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

$strTitle = "";
?>


<div class="news-content__categories" data-aos="fade-up">
    <div class="news-content__categories-wrapper">
        <?php
            if(count($arResult['SECTIONS']) > 1): ?>
                <a
                        class="news-content__categories-item active btn-hover_parent no-scale"
                        href="/news/"
                >
                    <div class="btn-hover_circle white"></div>
                    <span>Все</span>
                </a>
            <?php endif; ?>

            <?php foreach($arResult['SECTIONS'] as $arSection):

                $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
                $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));
        ?>

            <?php if($_REQUEST['SECTION_ID']==$arSection['ID']): ?>

                <a
                  id="<?=$this->GetEditAreaId($arSection['ID']);?>"
                  class="news-content__categories-item active btn-hover_parent no-scale"
                  href="/news/<?= $arSection['CODE'] ?>/"
                >
                    <div class="btn-hover_circle white"></div>
                    <span><?= $arSection['NAME']; ?></span>
                </a>
            <?php endif; ?>

                <a
                  id="<?=$this->GetEditAreaId($arSection['ID']);?>"
                  class="news-content__categories-item active btn-hover_parent no-scale"
                  href="/news/<?= $arSection['CODE'] ?>/"
                >

                  <div class="btn-hover_circle white"></div>
                  <span><?= $arSection['NAME']; ?></span>

                </a>

        <?php
            endforeach;
        ?>
    </div>
</div>

