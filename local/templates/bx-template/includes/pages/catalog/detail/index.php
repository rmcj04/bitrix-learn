<?php
// Проверяем, загружен ли Prolog
    (!defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED !== true) ?? die('');

// Определяем тип для $Application, что-бы шторм не срал ошибками, и был автокомплит
/** @var \CMain $APPLICATION */


?>

<section class="catalog-detail top-section container">
    <div class="catalog-detail__breadcrumbs mobile">
        <div class="breadcrumbs">
            <div class="breadcrumbs-wrapper">
                <div class="breadcrumbs-wrapper__row"><a class="breadcrumbs__item" href="#">главная</a>
                    <div class="breadcrumbs__arrow"><svg width="9" height="14" viewbox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.501732 0.71693C0.688798 2.76241 1.82258 7.06302 8.00226 7.42407C8.43495 7.44882 8.66756 6.9815 8.3585 6.70488L1.3053 0.390819C0.992979 0.109838 0.465946 0.325304 0.501732 0.71693Z" fill="#F64653"></path>
                            <path d="M0.501732 13.2839C0.688798 11.2384 1.82258 6.9378 8.00226 6.57675C8.43495 6.552 8.66756 7.01934 8.3585 7.29595L1.3053 13.61C0.992979 13.8895 0.465946 13.6755 0.501732 13.2839Z" fill="#F64653"></path>
                        </svg></div><a class="breadcrumbs__item" href="#">каталог</a>
                    <div class="breadcrumbs__arrow"><svg width="9" height="14" viewbox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.501732 0.71693C0.688798 2.76241 1.82258 7.06302 8.00226 7.42407C8.43495 7.44882 8.66756 6.9815 8.3585 6.70488L1.3053 0.390819C0.992979 0.109838 0.465946 0.325304 0.501732 0.71693Z" fill="#F64653"></path>
                            <path d="M0.501732 13.2839C0.688798 11.2384 1.82258 6.9378 8.00226 6.57675C8.43495 6.552 8.66756 7.01934 8.3585 7.29595L1.3053 13.61C0.992979 13.8895 0.465946 13.6755 0.501732 13.2839Z" fill="#F64653"></path>
                        </svg></div><a class="breadcrumbs__item" href="#">мороженое</a>
                    <div class="breadcrumbs__arrow"><svg width="9" height="14" viewbox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.501732 0.71693C0.688798 2.76241 1.82258 7.06302 8.00226 7.42407C8.43495 7.44882 8.66756 6.9815 8.3585 6.70488L1.3053 0.390819C0.992979 0.109838 0.465946 0.325304 0.501732 0.71693Z" fill="#F64653"></path>
                            <path d="M0.501732 13.2839C0.688798 11.2384 1.82258 6.9378 8.00226 6.57675C8.43495 6.552 8.66756 7.01934 8.3585 7.29595L1.3053 13.61C0.992979 13.8895 0.465946 13.6755 0.501732 13.2839Z" fill="#F64653"></path>
                        </svg></div>
                    <div class="breadcrumbs__current active">Варежка</div>
                </div>
            </div>
        </div>
    </div>
    <div class="catalog-detail__inner">
        <div class="catalog-detail__col slider">
            <div class="recipes-detail__gallery">
                <div class="recipes-detail__gallery-left">
                    <div class="swiper gallery-thumbs-catalog">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="catalog-detail__thumb-img">
                                    <picture class="picture">
                                        <source type="image/webp" srcset="assets/images/catalog-detail1.webp"><img class="picture__img" src="assets/images/catalog-detail1.png">
                                    </picture>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="catalog-detail__thumb-img">
                                    <picture class="picture">
                                        <source type="image/webp" srcset="assets/images/catalog-detail1.webp"><img class="picture__img" src="assets/images/catalog-detail1.png">
                                    </picture>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="catalog-detail__thumb-img">
                                    <picture class="picture">
                                        <source type="image/webp" srcset="assets/images/catalog-detail1.webp"><img class="picture__img" src="assets/images/catalog-detail1.png">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="recipes-detail__gallery-right">
                    <div class="recipes-detail__gallery-btns">
                        <div class="slider-btn btn-hover_parent recipes-detail__gallery-left-btn">
                            <div class="white-circle">
                                <div class="btn-hover_circle total-white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                    <path d="M16 10.8698L16 8.75515C16 6.47309 13.3808 5.18399 11.5725 6.57603L7.85123 9.44068C6.42121 10.5415 6.42121 12.6981 7.85124 13.7989L11.5725 16.6636C13.3808 18.0556 16 16.7665 16 14.4844L16 12.3698L16 10.8698Z" fill="#4F627D"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="slider-btn btn-hover_parent recipes-detail__gallery-right-btn">
                            <div class="white-circle right">
                                <div class="btn-hover_circle total-white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                    <path d="M16 10.8698L16 8.75515C16 6.47309 13.3808 5.18399 11.5725 6.57603L7.85123 9.44068C6.42121 10.5415 6.42121 12.6981 7.85124 13.7989L11.5725 16.6636C13.3808 18.0556 16 16.7665 16 14.4844L16 12.3698L16 10.8698Z" fill="#4F627D"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="swiper swiper-gallery-catalog">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="catalog-detail__img">
                                    <picture class="picture">
                                        <source type="image/webp" srcset="assets/images/catalog-detail1.webp"><img class="picture__img" src="assets/images/catalog-detail1.png">
                                    </picture>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="catalog-detail__img">
                                    <picture class="picture">
                                        <source type="image/webp" srcset="assets/images/catalog-detail1.webp"><img class="picture__img" src="assets/images/catalog-detail1.png">
                                    </picture>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="catalog-detail__img">
                                    <picture class="picture">
                                        <source type="image/webp" srcset="assets/images/catalog-detail1.webp"><img class="picture__img" src="assets/images/catalog-detail1.png">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="catalog-detail__col info" data-aos="fade-up">
            <div class="catalog-detail__breadcrumbs desktop">
                <div class="breadcrumbs">
                    <div class="breadcrumbs-wrapper">
                        <div class="breadcrumbs-wrapper__row"><a class="breadcrumbs__item" href="#">главная</a>
                            <div class="breadcrumbs__arrow"><svg width="9" height="14" viewbox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.501732 0.71693C0.688798 2.76241 1.82258 7.06302 8.00226 7.42407C8.43495 7.44882 8.66756 6.9815 8.3585 6.70488L1.3053 0.390819C0.992979 0.109838 0.465946 0.325304 0.501732 0.71693Z" fill="#F64653"></path>
                                    <path d="M0.501732 13.2839C0.688798 11.2384 1.82258 6.9378 8.00226 6.57675C8.43495 6.552 8.66756 7.01934 8.3585 7.29595L1.3053 13.61C0.992979 13.8895 0.465946 13.6755 0.501732 13.2839Z" fill="#F64653"></path>
                                </svg></div><a class="breadcrumbs__item" href="#">каталог</a>
                            <div class="breadcrumbs__arrow"><svg width="9" height="14" viewbox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.501732 0.71693C0.688798 2.76241 1.82258 7.06302 8.00226 7.42407C8.43495 7.44882 8.66756 6.9815 8.3585 6.70488L1.3053 0.390819C0.992979 0.109838 0.465946 0.325304 0.501732 0.71693Z" fill="#F64653"></path>
                                    <path d="M0.501732 13.2839C0.688798 11.2384 1.82258 6.9378 8.00226 6.57675C8.43495 6.552 8.66756 7.01934 8.3585 7.29595L1.3053 13.61C0.992979 13.8895 0.465946 13.6755 0.501732 13.2839Z" fill="#F64653"></path>
                                </svg></div><a class="breadcrumbs__item" href="#">мороженое</a>
                            <div class="breadcrumbs__arrow"><svg width="9" height="14" viewbox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.501732 0.71693C0.688798 2.76241 1.82258 7.06302 8.00226 7.42407C8.43495 7.44882 8.66756 6.9815 8.3585 6.70488L1.3053 0.390819C0.992979 0.109838 0.465946 0.325304 0.501732 0.71693Z" fill="#F64653"></path>
                                    <path d="M0.501732 13.2839C0.688798 11.2384 1.82258 6.9378 8.00226 6.57675C8.43495 6.552 8.66756 7.01934 8.3585 7.29595L1.3053 13.61C0.992979 13.8895 0.465946 13.6755 0.501732 13.2839Z" fill="#F64653"></path>
                                </svg></div>
                            <div class="breadcrumbs__current active">Варежка</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog-detail__title">Варежка</div>
            <div class="catalog-detail__desk">Пломбир в шоколадной глазури с арахисом в вафельном стаканчике</div>
            <div class="catalog-detail__thumbs" data-aos="fade-up">
                <div class="catalog-detail__thumbs-top"><a class="catalog-hero__rec blue btn-hover_parent" href="#">
                        <div class="catalog-hero__rec-title">где купить</div>
                        <div class="catalog-hero__rec-text">Локальные, федеральные сети и маркетплейсы</div>
                        <div class="catalog-hero__rec-circle">
                            <div class="button button-arrow_right btn-hover_parent">
                                <div class="btn-hover_circle total-white"></div>
                                <div class="button button-arrow_right btn-hover_parent">
                                    <div class="btn-hover_circle total-white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                        <path d="M1.77881 11.6197C1.77881 11.2055 2.1146 10.8697 2.52881 10.8697L12.7788 10.8697L12.7788 8.75503C12.7788 6.47297 15.398 5.18387 17.2063 6.57591L20.9276 9.44056C22.3576 10.5414 22.3576 12.698 20.9276 13.7988L17.2063 16.6634C15.398 18.0555 12.7788 16.7664 12.7788 14.4843L12.7788 12.3697L2.52881 12.3697C2.1146 12.3697 1.77881 12.0339 1.77881 11.6197Z" fill="#0068FF"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a></div>
                <div class="catalog-detail__thumbs-row">
                    <div class="catalog-hero__recomendations details"><a class="catalog-hero__rec blue btn-hover_parent" href="./assets/images/fabricat.pdf" download>
                            <div class="catalog-hero__rec-title">Рекомендации по выпеканию</div>
                            <div class="catalog-hero__rec-text">Файл PDF</div>
                            <div class="catalog-hero__rec-circle">
                                <div class="button button-arrow_right btn-hover_parent">
                                    <div class="btn-hover_circle total-white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.75 3C12.75 2.58579 12.4142 2.25 12 2.25C11.5858 2.25 11.25 2.58579 11.25 3V9H9C8.07099 9 7.60649 9 7.21783 9.06156C5.07837 9.40042 3.40042 11.0784 3.06156 13.2178C3 13.6065 3 14.071 3 15C3 15.929 3 16.3935 3.06156 16.7822C3.40042 18.9216 5.07837 20.5996 7.21783 20.9384C7.60649 21 8.07099 21 9 21H15C15.929 21 16.3935 21 16.7822 20.9384C18.9216 20.5996 20.5996 18.9216 20.9384 16.7822C21 16.3935 21 15.929 21 15C21 14.071 21 13.6065 20.9384 13.2178C20.5996 11.0784 18.9216 9.40042 16.7822 9.06156C16.3935 9 15.929 9 15 9H12.75V3ZM12.75 9H11.25V15.8105C10.9273 15.483 10.5437 15.001 9.98553 14.297L8.58768 12.534C8.33034 12.2095 7.8586 12.155 7.53403 12.4123C7.20946 12.6697 7.15497 13.1414 7.41232 13.466L8.83857 15.2648C9.37175 15.9373 9.81172 16.4922 10.2055 16.8875C10.6096 17.2932 11.0582 17.6294 11.6313 17.7208C11.7534 17.7402 11.8766 17.75 12 17.75C12.1234 17.75 12.2466 17.7402 12.3687 17.7208C12.9418 17.6294 13.3904 17.2932 13.7945 16.8875C14.1883 16.4922 14.6283 15.9372 15.1614 15.2648L16.5877 13.466C16.845 13.1414 16.7905 12.6697 16.466 12.4123C16.1414 12.155 15.6697 12.2095 15.4123 12.534L14.0145 14.297C13.4563 15.001 13.0727 15.483 12.75 15.8105V9Z" fill="#0068FF"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="catalog-hero__rec white btn-hover_parent" data-button-fade="recipec-video">
                            <div class="catalog-hero__rec-title">Рекомендации по выпеканию</div>
                            <div class="catalog-hero__rec-text">Видео</div>
                            <div class="catalog-hero__rec-circle">
                                <div class="button button-arrow_right btn-hover_parent">
                                    <div class="btn-hover_circle total-white"></div><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 10.8696L8 8.7549C8 6.47285 10.6192 5.18375 12.4275 6.57579L16.1488 9.44043C17.5788 10.5413 17.5788 12.6978 16.1488 13.7987L12.4275 16.6633C10.6192 18.0554 8 16.7662 8 14.4842L8 12.3696L8 10.8696Z" fill="#0068FF"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog-detail__accordeons accordion-container" data-aos="fade-up">
                <div class="ac ac-vacancies ac-catalog">
                    <div class="ac-header ac-vacancies__top ac-trigger">
                        <h3 class="ac-vacancies__title">фасовка</h3>
                        <div class="ac-vacancies__btn">
                            <div class="ac-vacancies__btn-plus"><span></span><span></span></div>
                        </div>
                    </div>
                    <div class="ac-panel ac-catalog__bot">
                        <div class="ac-catalog__links">
                            <div class="ac-catalog__links-item active">Индивидуальная упаковка</div>
                            <div class="ac-catalog__links-item">Весовое</div>
                        </div>
                        <div class="ac-catalog__chars">
                            <div class="catalog-card__plugs">
                                <div class="catalog-card__plug">
                                    <div class="catalog-card__plug-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                            <path d="M4.58505 10.9704C5.00547 9.17667 5.21568 8.27978 5.71035 7.61412C6.12854 7.0514 6.68728 6.60847 7.33058 6.32973C8.09156 6 9.01275 6 10.8551 6H13.1449C14.9872 6 15.9084 6 16.6694 6.32973C17.3127 6.60847 17.8715 7.0514 18.2896 7.61412C18.7843 8.27978 18.9945 9.17667 19.4149 10.9704L20.1462 14.0905C20.7859 16.8199 21.1058 18.1846 20.7522 19.2548C20.4553 20.1533 19.8496 20.9175 19.0425 21.4115C18.0812 22 16.6795 22 13.8761 22H10.1239C7.32049 22 5.91879 22 4.9575 21.4115C4.15044 20.9175 3.54466 20.1533 3.24781 19.2548C2.89423 18.1846 3.21409 16.8199 3.8538 14.0904L4.58505 10.9704Z" fill="#0068FF"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 6.5C12.8284 6.5 13.5 5.82843 13.5 5C13.5 4.17157 12.8284 3.5 12 3.5C11.1716 3.5 10.5 4.17157 10.5 5C10.5 5.82843 11.1716 6.5 12 6.5ZM12 8C13.6569 8 15 6.65685 15 5C15 3.34315 13.6569 2 12 2C10.3431 2 9 3.34315 9 5C9 6.65685 10.3431 8 12 8Z" fill="#0068FF"></path>
                                        </svg></div>
                                    <div class="catalog-card__plug-text">90 г</div>
                                    <div class="catalog-card__plug-info"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                            <rect x="0.5" y="0.5" width="23" height="23" rx="5.5" fill="white"></rect>
                                            <path d="M12.75 11C12.75 10.5858 12.4142 10.25 12 10.25C11.5858 10.25 11.25 10.5858 11.25 11V17C11.25 17.4142 11.5858 17.75 12 17.75C12.4142 17.75 12.75 17.4142 12.75 17V11Z" fill="#0068FF"></path>
                                            <path d="M13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z" fill="#0068FF"></path>
                                            <rect x="0.5" y="0.5" width="23" height="23" rx="5.5" stroke="#CEDFF5"></rect>
                                        </svg></div>
                                </div>
                                <div class="catalog-card__plug">
                                    <div class="catalog-card__plug-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                            <path d="M9.92963 2.48L4.58963 5.45003C3.37963 6.12003 2.38965 7.80001 2.38965 9.18001V14.83C2.38965 16.21 3.37963 17.89 4.58963 18.56L9.92963 21.53C11.0696 22.16 12.9396 22.16 14.0796 21.53L19.4196 18.56C20.6296 17.89 21.6196 16.21 21.6196 14.83V9.18001C21.6196 7.80001 20.6296 6.12003 19.4196 5.45003L14.0796 2.48C12.9296 1.84 11.0696 1.84 9.92963 2.48Z" fill="#0068FF"></path>
                                            <path d="M3.16992 7.43994L11.9999 12.5499L20.7699 7.46991" stroke="#EAF3FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M12 21.61V12.54" stroke="#EAF3FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M16.9998 13.2401V9.58014L7.50977 4.1001" stroke="#EAF3FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></div>
                                    <div class="catalog-card__plug-text">28 шт</div>
                                    <div class="catalog-card__plug-info"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                            <rect x="0.5" y="0.5" width="23" height="23" rx="5.5" fill="white"></rect>
                                            <path d="M12.75 11C12.75 10.5858 12.4142 10.25 12 10.25C11.5858 10.25 11.25 10.5858 11.25 11V17C11.25 17.4142 11.5858 17.75 12 17.75C12.4142 17.75 12.75 17.4142 12.75 17V11Z" fill="#0068FF"></path>
                                            <path d="M13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z" fill="#0068FF"></path>
                                            <rect x="0.5" y="0.5" width="23" height="23" rx="5.5" stroke="#CEDFF5"></rect>
                                        </svg></div>
                                </div>
                                <div class="catalog-card__plug">
                                    <div class="catalog-card__plug-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_758_8108)">
                                                <path d="M2.99999 18.9995C2.446 18.9995 2 19.4455 2 19.9995V21.9995C2 22.5535 2.446 22.9995 2.99999 22.9995H4.99997C5.55397 22.9995 5.99996 22.5535 5.99996 21.9995V20.9995H9.99993V21.9995C9.99993 22.5535 10.4459 22.9995 10.9999 22.9995H12.9999C13.5539 22.9995 13.9999 22.5535 13.9999 21.9995V20.9995H17.9999V21.9995C17.9999 22.5535 18.4459 22.9995 18.9998 22.9995H20.9998C21.5538 22.9995 21.9998 22.5535 21.9998 21.9995V19.9995C21.9998 19.4455 21.5538 18.9995 20.9998 18.9995H2.99999Z" fill="#0068FF"></path>
                                                <rect x="3.00098" y="10" width="7.99993" height="7.99993" rx="1" fill="#0068FF"></rect>
                                                <path d="M6.5 13C6.5 13.2761 6.72386 13.5 7 13.5C7.27614 13.5 7.5 13.2761 7.5 13H6.5ZM6.5 10V13H7.5V10H6.5Z" fill="#EAF3FF"></path>
                                                <rect x="13" y="10" width="7.99993" height="7.99993" rx="1" fill="#0068FF"></rect>
                                                <path d="M16.5 13C16.5 13.2761 16.7239 13.5 17 13.5C17.2761 13.5 17.5 13.2761 17.5 13H16.5ZM16.5 10V13H17.5V10H16.5Z" fill="#EAF3FF"></path>
                                                <rect x="8" y="1" width="7.99993" height="7.99993" rx="1" fill="#0068FF"></rect>
                                                <path d="M11.5 3.99997C11.5 4.27612 11.7239 4.49997 12 4.49997C12.2761 4.49997 12.5 4.27612 12.5 3.99997H11.5ZM11.5 1V3.99997H12.5V1H11.5Z" fill="#EAF3FF"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_758_8108">
                                                    <rect width="24" height="24" fill="white"></rect>
                                                </clippath>
                                            </defs>
                                        </svg></div>
                                    <div class="catalog-card__plug-text">50 шт</div>
                                    <div class="catalog-card__plug-info"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                            <rect x="0.5" y="0.5" width="23" height="23" rx="5.5" fill="white"></rect>
                                            <path d="M12.75 11C12.75 10.5858 12.4142 10.25 12 10.25C11.5858 10.25 11.25 10.5858 11.25 11V17C11.25 17.4142 11.5858 17.75 12 17.75C12.4142 17.75 12.75 17.4142 12.75 17V11Z" fill="#0068FF"></path>
                                            <path d="M13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z" fill="#0068FF"></path>
                                            <rect x="0.5" y="0.5" width="23" height="23" rx="5.5" stroke="#CEDFF5"></rect>
                                        </svg></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ac ac-vacancies ac-catalog">
                    <div class="ac-header ac-vacancies__top ac-trigger">
                        <h3 class="ac-vacancies__title">условия хранения</h3>
                        <div class="ac-vacancies__btn">
                            <div class="ac-vacancies__btn-plus"><span></span><span></span></div>
                        </div>
                    </div>
                    <div class="ac-panel ac-catalog__bot">
                        <div class="ac-catalog__save">
                            <div class="ac-catalog__save-item">
                                <div class="ac-catalog__save-title">Срок годности</div>
                                <div class="ac-catalog__save-text">120 суток</div>
                            </div>
                            <div class="ac-catalog__save-item">
                                <div class="ac-catalog__save-title">Температура не выше</div>
                                <div class="ac-catalog__save-text">-18 °C</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ac ac-vacancies ac-catalog">
                    <div class="ac-header ac-vacancies__top ac-trigger">
                        <h3 class="ac-vacancies__title">состав</h3>
                        <div class="ac-vacancies__btn">
                            <div class="ac-vacancies__btn-plus"><span></span><span></span></div>
                        </div>
                    </div>
                    <div class="ac-panel ac-catalog__bot">
                        <div class="ac-catalog__text">Вода питьевая, сливки пастеризованные, молоко цельное сгущенное с сахаром, сахар, вафельный стаканчик, сухое цельное молоко, глазурь «Шоколадная» с растительным жиром, сливочное масло, ядра арахиса обжаренные (дробленые), сухое обезжиренное молоко, патока, комплексная пищевая добавка, ароматизатор ванилин.<br>Массовая доля жира 12 %.</div>
                    </div>
                </div>
                <div class="ac ac-vacancies ac-catalog">
                    <div class="ac-header ac-vacancies__top ac-trigger">
                        <h3 class="ac-vacancies__title">пищевая ценность</h3>
                        <div class="ac-vacancies__btn">
                            <div class="ac-vacancies__btn-plus"><span></span><span></span></div>
                        </div>
                    </div>
                    <div class="ac-panel ac-catalog__bot">
                        <div class="ac-catalog__goods">
                            <div class="ac-catalog__goods-item">
                                <div class="ac-catalog__goods-title">Белки</div>
                                <div class="ac-catalog__goods-text">4,5 г</div>
                            </div>
                            <div class="ac-catalog__goods-item">
                                <div class="ac-catalog__goods-title">Жиры</div>
                                <div class="ac-catalog__goods-text">16,5 г</div>
                            </div>
                            <div class="ac-catalog__goods-item">
                                <div class="ac-catalog__goods-title">Углеводы</div>
                                <div class="ac-catalog__goods-text">24,5 г</div>
                            </div>
                            <div class="ac-catalog__goods-item">
                                <div class="ac-catalog__goods-title">Энергетическая ценность</div>
                                <div class="ac-catalog__goods-text">1100 кДж/ 264 ккал</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog-detail__form" data-aos="fade-up">
                <div class="catalog-detail__form-title">задать вопрос по продукту или&nbsp;оставить заявку на закупку</div>
                <div class="catalog-detail__form-content">
                    <form class="partners-requisites__form" data-form="catalog-detail">
                        <div class="partners-requisites__form-top">
                            <div class="input-wrapper" data-input-parent="">
                                <div class="input-wrapper__placeholder">Имя</div><input class="input" data-input="" required data-mask-text="" data-parsley-pattern="^[А-Яа-яЁёs]+$" placeholder="Имя">
                            </div>
                            <div class="input-wrapper" data-input-parent="">
                                <div class="input-wrapper__placeholder">Телефон</div><input class="input" data-input="" required type="tel" placeholder="Телефон" data-mask-phone="">
                            </div>
                            <div class="input-wrapper" data-input-parent="">
                                <div class="input-wrapper__placeholder">E-mail</div><input class="input" data-input="" required type="email" placeholder="E-mail">
                            </div>
                        </div>
                        <div class="partners-requisites__form-area">
                            <div class="input-wrapper input-wrapper_textarea" data-input-parent="">
                                <div class="input-wrapper__placeholder placeholder_background">Комментраий к заявке</div><textarea class="textarea" data-input="" type="text" placeholder="Комментраий к заявке"></textarea>
                            </div>
                        </div>
                        <div class="partners-requisites__form-bot">
                            <div class="partners-requisites__form-policy">Нажимая на кнопку «Отправить», вы даете согласие с<a class="partners-requisites__form-link" href="#"> политикой в отношении обработки персональных данных</a></div><button class="partners-requisites__form-btn btn-hover_parent" type="submit">
                                <div class="btn-hover_circle"></div><span>Отправить</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div><a class="catalog-detail__rect btn-hover_parent" href="#">
                <div class="catalog-detail__rect-circle">
                    <div class="catalog-hero__rec-circle">
                        <div class="button button-arrow_right btn-hover_parent">
                            <div class="btn-hover_circle total-white"></div>
                            <div class="button button-arrow_right btn-hover_parent">
                                <div class="btn-hover_circle total-white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                    <path d="M1.77881 11.6197C1.77881 11.2055 2.1146 10.8697 2.52881 10.8697L12.7788 10.8697L12.7788 8.75503C12.7788 6.47297 15.398 5.18387 17.2063 6.57591L20.9276 9.44056C22.3576 10.5414 22.3576 12.698 20.9276 13.7988L17.2063 16.6634C15.398 18.0555 12.7788 16.7664 12.7788 14.4843L12.7788 12.3697L2.52881 12.3697C2.1146 12.3697 1.77881 12.0339 1.77881 11.6197Z" fill="#0068FF"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="catalog-detail__rect-inner">
                    <div class="catalog-detail__rect-texts">
                        <div class="catalog-detail__rect-title">следующий продукт</div>
                        <div class="catalog-detail__rect-desk">Сёмыч</div>
                    </div>
                    <div class="catalog-detail__rect-box">
                        <div class="catalog-detail__rect-img">
                            <picture class="picture">
                                <source type="image/webp" srcset="assets/images/catalog-detail-next1.webp"><img class="picture__img" src="assets/images/catalog-detail-next1.png">
                            </picture>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
