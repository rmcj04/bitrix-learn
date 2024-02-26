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
//$this->setFrameMode(true);
?>

<div class="main-slider container desktop-t">
    <div class="main-slider__wrapper">
        <div class="swiper main-swiper">
            <div class="swiper-wrapper">
                <?php //dd($arResult['ITEMS']); ?>
                <? foreach($arResult['ITEMS'] as $arItem): ?>


                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>

                <div class="swiper-slide main-slider__slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

                    <div class="main-slider__slide-bg desktop" data-swiper-parallax="1440" data-bg-parallax>
                        <picture class="picture">
                            <source type="image/webp" srcset="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"><img class="picture__img" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
                        </picture>
                    </div>
                    <div class="main-slider__slide-bg devices">
                        <picture class="picture">
                            <source type="image/webp" srcset="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"><img class="picture__img" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
                        </picture>
                    </div>
                    <div class="main-slider__content">
                        <div class="main-slider__content-icon" data-swiper-parallax="-500">
                        <?php if(strlen($arItem["PROPERTIES"]["IS_TOP"]["VALUE"]) > 0):?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="70" viewbox="0 0 100 70" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M64.9611 55.5543C74.8868 52.8948 80.3835 42.7588 78.1227 32.7263C77.3455 29.2617 75.7017 24.3778 72.2942 20.1885C71.29 18.9538 69.3371 19.6082 68.6091 21.0235C67.9862 22.2343 67.1442 23.3313 66.1153 24.2542C66.1153 24.2542 63.5984 10.0504 52.4261 7.91525C51.1122 7.66415 50.1206 8.95836 50.1507 10.2957C50.2379 14.1793 48.2994 18.0467 46.2302 22.1745C45.5441 23.5433 44.8437 24.9407 44.198 26.3768C42.6776 22.0257 39.0831 14.9813 31.4788 13.5281C30.1649 13.277 29.1734 14.5712 29.2034 15.9085C29.2907 19.7921 27.3521 23.6595 25.283 27.7874C22.3135 33.7112 19.0752 40.1717 21.1692 47.9869C21.8032 50.3527 22.897 52.5704 24.3883 54.5134C25.8796 56.4563 27.7392 58.0863 29.8607 59.3103C31.9822 60.5343 34.3241 61.3283 36.7525 61.6469C39.181 61.9655 41.6484 61.8025 44.0139 61.1671C47.9374 60.1158 51.1689 57.8963 53.5027 54.9767C54.8528 55.4897 56.2611 55.8453 57.6998 56.0341C60.1282 56.3527 62.5957 56.1897 64.9611 55.5543Z" fill="#F64653"></path>
                                <path d="M38.3211 33.8358L39.2555 37.3229L35.5133 38.3256L38.4531 49.2971L34.6683 50.3112L31.7285 39.3397L28.0076 40.3367L27.0733 36.8497L38.3211 33.8358Z" fill="#FFE979"></path>
                                <path d="M55.4281 42.8115C54.3621 44.6164 52.6809 45.8266 50.3845 46.4419C48.0882 47.0572 46.0272 46.8498 44.2015 45.8197C42.3758 44.7896 41.1687 43.176 40.5799 40.9789C39.9874 38.7676 40.2261 36.7666 41.2959 34.9758C42.3619 33.1709 44.0431 31.9608 46.3395 31.3455C48.65 30.7264 50.711 30.9338 52.5225 31.9677C54.3444 32.9836 55.5516 34.5972 56.1441 36.8085C56.7328 39.0056 56.4941 41.0066 55.4281 42.8115ZM49.4673 43.0186C50.6722 42.6958 51.5174 42.0515 52.0031 41.0857C52.4888 40.12 52.5721 39.0418 52.253 37.8511C51.9302 36.6462 51.3189 35.7541 50.4193 35.1748C49.5158 34.5812 48.4616 34.4459 47.2567 34.7688C46.0519 35.0916 45.2066 35.7359 44.7209 36.7016C44.2314 37.6532 44.1481 38.7314 44.471 39.9363C44.79 41.127 45.4013 42.0191 46.3048 42.6126C47.2224 43.2023 48.2766 43.3376 49.4673 43.0186Z" fill="#FFE979"></path>
                                <path d="M59.9268 43.5432L56.0527 29.0847L61.9211 27.5122C63.4379 27.1058 64.7983 27.2503 66.0025 27.9455C67.2029 28.6266 67.9949 29.6829 68.3786 31.1146C68.7584 32.5321 68.5969 33.8288 67.894 35.0046C67.1874 36.1663 66.0686 36.9523 64.5377 37.3625L62.4753 37.9151L63.7116 42.5291L59.9268 43.5432ZM61.6378 34.7895L63.1049 34.3964C63.7427 34.2255 64.1829 33.9404 64.4254 33.5412C64.6782 33.124 64.7325 32.6461 64.5881 32.1075C64.4438 31.5688 64.1598 31.1891 63.736 30.9685C63.3084 30.7336 62.7828 30.6997 62.1591 30.8668L60.692 31.2599L61.6378 34.7895Z" fill="#FFE979"></path>
                            </svg>
                        <?php endif; ?>

                            <?php if(strlen($arItem["PROPERTIES"]["IS_NEW"]["VALUE"]) > 0):?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="70" viewBox="0 0 100 70" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M88.0226 26.7151C91.8593 23.4577 93.7641 20.2092 93.0947 17.3613C91.2302 9.42969 70.1042 7.60901 45.9085 13.2947C21.7129 18.9804 3.60983 30.0193 5.4743 37.9509C6.13886 40.778 9.25045 42.8287 14.0759 44.0399C10.2391 47.2974 8.33433 50.5459 9.00378 53.3938C10.8683 61.3254 31.9942 63.146 56.1899 57.4604C80.3856 51.7747 98.4886 40.7357 96.6241 32.8041C95.9596 29.977 92.848 27.9263 88.0226 26.7151Z" fill="#3FFFDC"></path>
                                <mask id="mask0_301_203" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="5" y="9" width="92" height="52">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M88.0226 26.7154C91.8593 23.4579 93.7641 20.2094 93.0947 17.3615C91.2302 9.42993 70.1042 7.60925 45.9085 13.2949C21.7129 18.9806 3.60983 30.0196 5.4743 37.9512C6.13886 40.7783 9.25045 42.829 14.0759 44.0402C10.2391 47.2976 8.33433 50.5461 9.00378 53.394C10.8683 61.3256 31.9942 63.1463 56.1899 57.4606C80.3856 51.7749 98.4886 40.7359 96.6241 32.8043C95.9596 29.9773 92.848 27.9266 88.0226 26.7154Z" fill="#3FFFDC"></path>
                                </mask>
                                <g mask="url(#mask0_301_203)">
                                    <path d="M74.2711 37.3783C71.5013 38.1205 68.6368 36.5575 67.762 33.8267L61.1884 13.3058C60.0708 9.81676 62.0977 6.102 65.6365 5.15377C69.1754 4.20555 72.7881 6.40915 73.5647 9.98956L78.1323 31.048C78.7401 33.8503 77.0408 36.6362 74.2711 37.3783ZM83.1476 51.2843C82.1315 52.7685 80.7047 53.7567 78.8673 54.249C77.03 54.7414 75.2767 54.6052 73.6075 53.8406C71.9727 53.0163 70.8713 51.5441 70.3033 49.4241C69.7226 47.2569 69.9403 45.4313 70.9565 43.9471C72.0072 42.4032 73.4512 41.3851 75.2885 40.8928C77.1259 40.4005 78.8619 40.5665 80.4967 41.3908C82.1659 42.1554 83.2908 43.6213 83.8715 45.7885C84.4396 47.9085 84.1983 49.7405 83.1476 51.2843Z" fill="white"></path>
                                </g>
                                <path d="M37.2087 30.8761L40.5895 29.9702L44.1249 43.1647L42.9079 43.4909L35.3714 39.3193C34.8918 39.0751 34.3938 38.7875 33.8772 38.4566C34.1151 39.1383 34.2737 39.6272 34.3531 39.9234L35.8024 45.3326L32.4217 46.2385L28.8862 33.0439L30.084 32.723L37.0429 36.5938C37.6076 36.898 38.3033 37.3052 39.1302 37.8152C38.8845 37.0528 38.6771 36.3561 38.508 35.725L37.2087 30.8761Z" fill="#03856D"></path>
                                <path d="M49.0057 38.6269L54.4535 37.1671L55.2455 40.1229L46.359 42.504L42.839 29.3674L51.5517 27.0329L52.3436 29.9886L47.0697 31.4018L47.6443 33.5461L52.2228 32.3193L52.9889 35.1785L48.4104 36.4053L49.0057 38.6269Z" fill="#03856D"></path>
                                <path d="M67.2875 22.8165L70.8807 21.8537L70.8963 21.9116L69.6832 36.3164L68.6786 36.5856L64.2231 31.8577C63.8843 31.5205 63.5889 31.1649 63.3368 30.7907C63.2952 31.2022 63.2171 31.6579 63.1026 32.1579L61.608 38.4802L60.6035 38.7493L52.3312 26.8861L52.3157 26.8282L55.9669 25.8498L59.098 30.5806C59.5695 31.3101 59.872 31.795 60.0054 32.0353C60.0725 31.41 60.1821 30.8147 60.3343 30.2494L61.4506 25.3743L62.2427 25.1621L65.6262 28.7486C66.107 29.2547 66.5125 29.712 66.8428 30.1205C66.8423 29.7065 66.8717 29.1465 66.9309 28.4404L67.2875 22.8165Z" fill="#03856D"></path>
                            </svg>
                        <?php endif; ?>
                        </div>

                        <div class="main-slider__content-title" data-swiper-parallax="-1000"><? echo $arItem["NAME"]; ?></div>
                        <div class="main-slider__content-desk" data-swiper-parallax="-2000"><? echo $arItem["PREVIEW_TEXT"]; ?></div>
                        <?php if(strlen($arItem['PROPERTIES']['LINK']['VALUE']) > 0) : ?>
                        <div class="main-slider__content-bot" data-swiper-parallax="-2500">
                            <a class="main-slider__content-button btn-hover_parent" href="<?= $arItem['PROPERTIES']['LINK']['VALUE']; ?>">
                                <div class="btn-hover_circle white"></div>
                                <p>Подробнее</p>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <? endforeach; ?>
            </div>
            <div class="main-slider__buttons">
                <div class="slider-btn btn-hover_parent main-slider__button-left">
                    <div class="white-circle">
                        <div class="btn-hover_circle total-white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                            <path d="M16 10.8698L16 8.75515C16 6.47309 13.3808 5.18399 11.5725 6.57603L7.85123 9.44068C6.42121 10.5415 6.42121 12.6981 7.85124 13.7989L11.5725 16.6636C13.3808 18.0556 16 16.7665 16 14.4844L16 12.3698L16 10.8698Z" fill="#4F627D"></path>
                        </svg>
                    </div>
                </div>
                <div class="slider-btn btn-hover_parent main-slider__button-right">
                    <div class="white-circle right">
                        <div class="btn-hover_circle total-white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                            <path d="M16 10.8698L16 8.75515C16 6.47309 13.3808 5.18399 11.5725 6.57603L7.85123 9.44068C6.42121 10.5415 6.42121 12.6981 7.85124 13.7989L11.5725 16.6636C13.3808 18.0556 16 16.7665 16 14.4844L16 12.3698L16 10.8698Z" fill="#4F627D"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="main-slider__pagination"></div>
        </div>
    </div>
</div>