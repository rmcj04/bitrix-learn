<?php
// Проверяем, загружен ли Prolog
    (!defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED !== true) ?? die('');

// Определяем тип для $Application, что-бы шторм не срал ошибками, и был автокомплит
/** @var \CMain $APPLICATION */

?>


<section class="main-filials container" data-aos="fade-up" data-aos-duration="1500">
    <div class="main-filials__landscape" data-aos="fade-up" data-aos-duration="1500">
        <div class="main-filials__landscape-bg desktop">
            <picture class="picture">
                <source type="image/webp" srcset="<?= SITE_TEMPLATE_PATH; ?>/assets/images/main-filials-bg.webp"><img class="picture__img" src="<?= SITE_TEMPLATE_PATH; ?>/assets/images/main-filials-bg.png">
            </picture>
        </div>
        <div class="main-filials__landscape-bg devices">
            <picture class="picture">
                <source type="image/webp" srcset="<?= SITE_TEMPLATE_PATH; ?>/assets/images/main-filials-bg-device.webp"><img class="picture__img" src="<?= SITE_TEMPLATE_PATH; ?>/assets/images/main-filials-bg-device.png">
            </picture>
        </div>
        <div class="main-filials__landscape-bg mobile-mob">
            <picture class="picture">
                <source type="image/webp" srcset="<?= SITE_TEMPLATE_PATH; ?>/assets/images/main-filials-bg-mobile.webp"><img class="picture__img" src="<?= SITE_TEMPLATE_PATH; ?>/assets/images/main-filials-bg-mobile.png">
            </picture>
        </div>
        <div class="main-filials__landscape-top">
            <div class="title-rombs">
                <div class="title-rombs__item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
                        <path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z" fill="#F64653"></path>
                        <path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z" fill="#F64653"></path>
                        <path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z" fill="#F64653"></path>
                        <path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z" fill="#F64653"></path>
                    </svg></div>
                <div class="title-rombs__item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
                        <path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z" fill="#F64653"></path>
                        <path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z" fill="#F64653"></path>
                        <path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z" fill="#F64653"></path>
                        <path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z" fill="#F64653"></path>
                    </svg></div>
            </div>
        </div>
        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            ".default",
            array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => SITE_TEMPLATE_PATH."/includes/pages/main/filials/filials_title_inc.php",
                "COMPONENT_TEMPLATE" => ".default"
            ),
            false
        );?>
        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            ".default",
            array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => SITE_TEMPLATE_PATH."/includes/pages/main/filials/filials_landscape_text_inc.php",
                "COMPONENT_TEMPLATE" => ".default"
            ),
            false
        );?>
    </div>


    <div class="main-filials__bottom" data-aos="fade-up" data-aos-duration="1500"><a class="main-filials__card where-buy btn-hover_parent" href="#">
            <div class="main-filials__card-top">
                <div class="main-filials__card-title">где купить</div>
                <div class="main-filials__card-text">Локальные, федеральные сети и&nbsp;маркетплейсы</div>
            </div>
            <div class="main-filials__card-bot">
                <div class="main-filials__card-row">
                    <div class="main-filials__card-icons">
                        <picture class="picture">
                            <source type="image/webp" srcset="<?= SITE_TEMPLATE_PATH; ?>/assets/images/main-filials-card-icons1.webp"><img class="picture__img" src="<?= SITE_TEMPLATE_PATH; ?>/assets/images/main-filials-card-icons1.png">
                        </picture>
                    </div>
                    <div class="button button-arrow_right btn-hover_parent">
                        <div class="btn-hover_circle total-white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                            <path d="M1.77881 11.6197C1.77881 11.2055 2.1146 10.8697 2.52881 10.8697L12.7788 10.8697L12.7788 8.75503C12.7788 6.47297 15.398 5.18387 17.2063 6.57591L20.9276 9.44056C22.3576 10.5414 22.3576 12.698 20.9276 13.7988L17.2063 16.6634C15.398 18.0555 12.7788 16.7664 12.7788 14.4843L12.7788 12.3697L2.52881 12.3697C2.1146 12.3697 1.77881 12.0339 1.77881 11.6197Z" fill="#0068FF"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </a><a class="main-filials__card game btn-hover_parent" href="#" target="blank">
            <div class="main-filials__card-bg">
                <picture class="picture">
                    <source type="image/webp" srcset="<?= SITE_TEMPLATE_PATH; ?>/assets/images/main-filials-game.webp"><img class="picture__img" src="<?= SITE_TEMPLATE_PATH; ?>/assets/images/main-filials-game.png">
                </picture>
            </div>
            <div class="main-filials__card-top">
                <div class="main-filials__card-title">мобильная игра</div>
                <div class="main-filials__card-text">Сёмыч и Ладушка спасают Снежландию</div>
            </div>
            <div class="main-filials__card-bot">
                <div class="main-filials__card-row">
                    <div class="main-filials__card-icons short">
                        <picture class="picture">
                            <source type="image/webp" srcset="<?= SITE_TEMPLATE_PATH; ?>/assets/images/main-filials-card-icons2.webp"><img class="picture__img" src="<?= SITE_TEMPLATE_PATH; ?>/assets/images/main-filials-card-icons2.png">
                        </picture>
                    </div>
                    <div class="button button-arrow_right btn-hover_parent">
                        <div class="btn-hover_circle total-white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                            <path d="M1.77881 11.6197C1.77881 11.2055 2.1146 10.8697 2.52881 10.8697L12.7788 10.8697L12.7788 8.75503C12.7788 6.47297 15.398 5.18387 17.2063 6.57591L20.9276 9.44056C22.3576 10.5414 22.3576 12.698 20.9276 13.7988L17.2063 16.6634C15.398 18.0555 12.7788 16.7664 12.7788 14.4843L12.7788 12.3697L2.52881 12.3697C2.1146 12.3697 1.77881 12.0339 1.77881 11.6197Z" fill="#0068FF"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </a></div>
</section>
