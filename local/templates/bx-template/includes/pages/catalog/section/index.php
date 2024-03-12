<?php
// Проверяем, загружен ли Prolog
    (!defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED !== true) ?? die('');

// Определяем тип для $Application, что-бы шторм не срал ошибками, и был автокомплит
/** @var \CMain $APPLICATION */


?>

<section class="catalog-hero top-section container">
    <div class="catalog-hero__breadcrumbs">
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
                        </svg></div>
                    <div class="breadcrumbs__current active">мороженое</div>
                </div>
            </div>
        </div>
    </div>
    <div class="catalog-hero__top">
        <h1 class="catalog-hero__title">мороженое</h1>
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
    <div class="catalog-hero__thumbs">
        <div class="catalog-hero__thumbs-item btn-hover_parent active">
            <div class="btn-hover_circle"></div><span>Все</span>
        </div>
        <div class="catalog-hero__thumbs-item btn-hover_parent">
            <div class="btn-hover_circle"></div><span>Вафельный стаканчик</span>
        </div>
        <div class="catalog-hero__thumbs-item btn-hover_parent">
            <div class="btn-hover_circle"></div><span>Эскимо</span>
        </div>
        <div class="catalog-hero__thumbs-item btn-hover_parent">
            <div class="btn-hover_circle"></div><span>Рожок</span>
        </div>
        <div class="catalog-hero__thumbs-item btn-hover_parent">
            <div class="btn-hover_circle"></div><span>Брикет на вафлях</span>
        </div>
        <div class="catalog-hero__thumbs-item btn-hover_parent">
            <div class="btn-hover_circle"></div><span>Фруктовый и пищевой лёд</span>
        </div>
        <div class="catalog-hero__thumbs-item btn-hover_parent">
            <div class="btn-hover_circle"></div><span>Картонный стакан</span>
        </div>
        <div class="catalog-hero__thumbs-item btn-hover_parent">
            <div class="btn-hover_circle"></div><span>Пластиковый стакан</span>
        </div>
        <div class="catalog-hero__thumbs-item btn-hover_parent">
            <div class="btn-hover_circle"></div><span>Сэндвич</span>
        </div>
        <div class="catalog-hero__thumbs-item btn-hover_parent">
            <div class="btn-hover_circle"></div><span>Семейное и ванночки</span>
        </div>
        <div class="catalog-hero__thumbs-item btn-hover_parent">
            <div class="btn-hover_circle"></div><span>Весовое</span>
        </div>
        <div class="catalog-hero__thumbs-item btn-hover_parent">
            <div class="btn-hover_circle"></div><span>Лакомка</span>
        </div>
    </div>
    <div class="catalog-hero__activity" data-aos="fade-up"><label class="catalog-hero__tops desktop" for="top"><input class="catalog-hero__tops-input catalog-check-desktop" type="checkbox" name="top" id="top">
            <div class="catalog-hero__tops-box"><svg class="mark-svg" xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewbox="0 0 14 10" fill="none">
                    <path d="M1 5L5 9L13 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></div>
            <div class="catalog-hero__tops-logo"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewbox="0 0 40 40" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.0352 32.0114C34.8196 30.4615 38.0229 24.5546 36.7054 18.7079C36.328 17.0257 35.6001 14.7694 34.2192 12.6513C33.3501 11.3181 31.3371 11.9619 30.2985 13.1679C30.1156 13.3803 29.9184 13.5817 29.7078 13.7707C29.7078 13.7707 28.4058 6.42285 22.8099 4.53231C21.5426 4.10416 20.5184 5.42557 20.3386 6.7511C20.0819 8.6437 19.1272 10.5482 18.1194 12.5587C17.7197 13.3562 17.3115 14.1705 16.9353 15.0073C16.1245 12.687 14.3017 9.05297 10.6028 7.80333C9.33548 7.37518 8.31126 8.6966 8.13148 10.0221C7.87478 11.9147 6.92014 13.8192 5.91234 15.8297C4.18186 19.282 2.29463 23.0469 3.51499 27.6014C3.88442 28.9801 4.52189 30.2725 5.39098 31.4048C6.26007 32.5371 7.34375 33.487 8.58009 34.2003C9.81644 34.9136 11.1812 35.3763 12.5964 35.562C14.0117 35.7477 15.4496 35.6527 16.8281 35.2824C19.1146 34.6698 20.9978 33.3763 22.3579 31.6749C23.1446 31.9738 23.9652 32.181 24.8035 32.291C26.2188 32.4767 27.6567 32.3817 29.0352 32.0114Z" fill="#F64653"></path>
                    <path d="M13.511 19.3543L14.0555 21.3864L11.8746 21.9708L13.5878 28.3646L11.3822 28.9556L9.66901 22.5618L7.50056 23.1428L6.95605 21.1107L13.511 19.3543Z" fill="#FFE979"></path>
                    <path d="M23.4804 24.585C22.8591 25.6369 21.8794 26.3421 20.5412 26.7007C19.2029 27.0593 18.0018 26.9384 16.9379 26.3381C15.8739 25.7378 15.1704 24.7974 14.8273 23.517C14.482 22.2284 14.6211 21.0622 15.2446 20.0186C15.8658 18.9668 16.8456 18.2616 18.1838 17.903C19.5303 17.5422 20.7314 17.6631 21.7871 18.2656C22.8488 18.8576 23.5523 19.798 23.8976 21.0866C24.2407 22.3671 24.1016 23.5332 23.4804 24.585ZM20.0066 24.7057C20.7088 24.5176 21.2014 24.1421 21.4844 23.5793C21.7674 23.0165 21.816 22.3881 21.6301 21.6942C21.4419 20.9921 21.0857 20.4722 20.5614 20.1346C20.0349 19.7887 19.4205 19.7098 18.7184 19.898C18.0162 20.0861 17.5236 20.4616 17.2406 21.0244C16.9553 21.5789 16.9068 22.2073 17.0949 22.9094C17.2808 23.6033 17.6371 24.1232 18.1636 24.4691C18.6984 24.8128 19.3127 24.8916 20.0066 24.7057Z" fill="#FFE979"></path>
                    <path d="M26.1021 25.0114L23.8444 16.5855L27.2643 15.6691C28.1482 15.4322 28.9411 15.5164 29.6428 15.9216C30.3424 16.3185 30.8039 16.9341 31.0275 17.7684C31.2489 18.5945 31.1547 19.3502 30.7451 20.0354C30.3333 20.7124 29.6813 21.1704 28.7892 21.4095L27.5872 21.7316L28.3077 24.4204L26.1021 25.0114ZM27.0992 19.9101L27.9542 19.681C28.3259 19.5814 28.5824 19.4152 28.7237 19.1826C28.8711 18.9395 28.9027 18.661 28.8186 18.347C28.7345 18.0331 28.5689 17.8119 28.322 17.6833C28.0728 17.5464 27.7665 17.5266 27.403 17.624L26.548 17.8531L27.0992 19.9101Z" fill="#FFE979"></path>
                </svg></div>
            <div class="catalog-hero__tops-text">Топ продаж</div>
        </label>
        <div class="catalog-hero__selects">
            <div class="catalog-hero__select desktop">
                <div class="select-wrapper">
                    <div class="select"><select class="select__select" style="width: 100%" data-select-placeholder="Бренд">
                            <option value="" selected="selected" disabled="disabled"></option>
                            <option value="Сёмыч">Сёмыч</option>
                            <option value="Ладушка">Ладушка</option>
                        </select></div>
                </div>
            </div>
            <div class="catalog-hero__select desktop">
                <div class="select-wrapper">
                    <div class="select"><select class="select__select" style="width: 100%" data-select-placeholder="Жирность">
                            <option value="" selected="selected" disabled="disabled"></option>
                            <option value="Жирность1">Жирность1</option>
                            <option value="Жирность2">Жирность2</option>
                        </select></div>
                </div>
            </div>
            <div class="catalog-hero__filters mobile" data-popup="catalog-filters">
                <div class="catalog-hero__filters-icon"><svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.375 9H14.625" stroke="#0068FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M9 14.625V3.375" stroke="#0068FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg></div>
                <div class="catalog-hero__filters-text">Фильтры</div>
                <div class="catalog-hero__filters-circle"><span class="catalog-hero__filters-num">2</span></div>
            </div>
            <div class="catalog-hero__select">
                <div class="select-wrapper">
                    <div class="select cstm-arrows"><select class="select__select" style="width: 100%" data-select-placeholder="Сначала новинки">
                            <option value="" selected="selected" disabled="disabled"></option>
                            <option value="Сначала новинки">Сначала новинки</option>
                            <option value="Сначала популярные">Сначала популярные</option>
                        </select></div>
                </div>
            </div>
            <div class="catalog-hero__select"></div>
        </div>
        <div class="catalog-hero__reset desktop">
            <div class="catalog-hero__reset-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                    <path d="M4.01269 1.00335C4.01454 0.589137 3.68025 0.251856 3.26604 0.250008C2.85183 0.24816 2.51455 0.582445 2.5127 0.996654L2.50365 3.02568C2.50026 3.78054 2.49744 4.41017 2.55271 4.91635C2.61069 5.44728 2.74029 5.93661 3.06926 6.36169C3.15834 6.4768 3.25638 6.58449 3.36242 6.68379C3.42487 6.74227 3.49008 6.79784 3.55786 6.85029C3.98294 7.17926 4.47227 7.30886 5.0032 7.36684C5.50939 7.42211 6.13896 7.41929 6.89383 7.4159H6.89384L8.9229 7.40685C9.3371 7.405 9.67139 7.06772 9.66954 6.65351C9.66769 6.2393 9.33041 5.90501 8.9162 5.90686L6.93049 5.91572C6.12107 5.91933 5.57738 5.92062 5.16604 5.8757C5.13511 5.87232 5.10551 5.86873 5.07717 5.86494C5.49067 5.39871 5.95055 4.97451 6.44953 4.59962C7.99559 3.43804 9.91636 2.75 12 2.75C17.1086 2.75 21.25 6.89137 21.25 12C21.25 17.1086 17.1086 21.25 12 21.25C6.89137 21.25 2.75 17.1086 2.75 12C2.75 11.5858 2.41421 11.25 2 11.25C1.58579 11.25 1.25 11.5858 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06294 17.9371 1.25 12 1.25C9.58034 1.25 7.34544 2.05032 5.54852 3.40038C5.00526 3.80854 4.50198 4.26696 4.04555 4.76877L4.04385 4.75351C3.99893 4.34217 4.00022 3.79848 4.00383 2.98906L4.01269 1.00335Z" fill="#0068FF"></path>
                </svg></div>
            <div class="catalog-hero__reset-text">Сбросить</div>
        </div>
    </div>
</section>
<section class="catalog-list container section-animation" data-aos="fade-up">
    <div class="catalog-list__inner"><a class="catalog-card" href="#">
            <div class="catalog-card__icons">
                <div class="catalog-card__icons-item"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="70" viewbox="0 0 100 70" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M88.0226 26.7151C91.8593 23.4577 93.7641 20.2092 93.0947 17.3613C91.2302 9.42969 70.1042 7.60901 45.9085 13.2947C21.7129 18.9804 3.60983 30.0193 5.4743 37.9509C6.13886 40.778 9.25045 42.8287 14.0759 44.0399C10.2391 47.2974 8.33433 50.5459 9.00378 53.3938C10.8683 61.3254 31.9942 63.146 56.1899 57.4604C80.3856 51.7747 98.4886 40.7357 96.6241 32.8041C95.9596 29.977 92.848 27.9263 88.0226 26.7151Z" fill="#3FFFDC"></path>
                        <mask id="mask0_301_203" style="mask-type:alpha" maskunits="userSpaceOnUse" x="5" y="9" width="92" height="52">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M88.0226 26.7154C91.8593 23.4579 93.7641 20.2094 93.0947 17.3615C91.2302 9.42993 70.1042 7.60925 45.9085 13.2949C21.7129 18.9806 3.60983 30.0196 5.4743 37.9512C6.13886 40.7783 9.25045 42.829 14.0759 44.0402C10.2391 47.2976 8.33433 50.5461 9.00378 53.394C10.8683 61.3256 31.9942 63.1463 56.1899 57.4606C80.3856 51.7749 98.4886 40.7359 96.6241 32.8043C95.9596 29.9773 92.848 27.9266 88.0226 26.7154Z" fill="#3FFFDC"></path>
                        </mask>
                        <g mask="url(#mask0_301_203)">
                            <path d="M74.2711 37.3783C71.5013 38.1205 68.6368 36.5575 67.762 33.8267L61.1884 13.3058C60.0708 9.81676 62.0977 6.102 65.6365 5.15377C69.1754 4.20555 72.7881 6.40915 73.5647 9.98956L78.1323 31.048C78.7401 33.8503 77.0408 36.6362 74.2711 37.3783ZM83.1476 51.2843C82.1315 52.7685 80.7047 53.7567 78.8673 54.249C77.03 54.7414 75.2767 54.6052 73.6075 53.8406C71.9727 53.0163 70.8713 51.5441 70.3033 49.4241C69.7226 47.2569 69.9403 45.4313 70.9565 43.9471C72.0072 42.4032 73.4512 41.3851 75.2885 40.8928C77.1259 40.4005 78.8619 40.5665 80.4967 41.3908C82.1659 42.1554 83.2908 43.6213 83.8715 45.7885C84.4396 47.9085 84.1983 49.7405 83.1476 51.2843Z" fill="white"></path>
                        </g>
                        <path d="M37.2087 30.8761L40.5895 29.9702L44.1249 43.1647L42.9079 43.4909L35.3714 39.3193C34.8918 39.0751 34.3938 38.7875 33.8772 38.4566C34.1151 39.1383 34.2737 39.6272 34.3531 39.9234L35.8024 45.3326L32.4217 46.2385L28.8862 33.0439L30.084 32.723L37.0429 36.5938C37.6076 36.898 38.3033 37.3052 39.1302 37.8152C38.8845 37.0528 38.6771 36.3561 38.508 35.725L37.2087 30.8761Z" fill="#03856D"></path>
                        <path d="M49.0057 38.6269L54.4535 37.1671L55.2455 40.1229L46.359 42.504L42.839 29.3674L51.5517 27.0329L52.3436 29.9886L47.0697 31.4018L47.6443 33.5461L52.2228 32.3193L52.9889 35.1785L48.4104 36.4053L49.0057 38.6269Z" fill="#03856D"></path>
                        <path d="M67.2875 22.8165L70.8807 21.8537L70.8963 21.9116L69.6832 36.3164L68.6786 36.5856L64.2231 31.8577C63.8843 31.5205 63.5889 31.1649 63.3368 30.7907C63.2952 31.2022 63.2171 31.6579 63.1026 32.1579L61.608 38.4802L60.6035 38.7493L52.3312 26.8861L52.3157 26.8282L55.9669 25.8498L59.098 30.5806C59.5695 31.3101 59.872 31.795 60.0054 32.0353C60.0725 31.41 60.1821 30.8147 60.3343 30.2494L61.4506 25.3743L62.2427 25.1621L65.6262 28.7486C66.107 29.2547 66.5125 29.712 66.8428 30.1205C66.8423 29.7065 66.8717 29.1465 66.9309 28.4404L67.2875 22.8165Z" fill="#03856D"></path>
                    </svg></div>
            </div>
            <div class="catalog-card__inner">
                <div class="catalog-card__top">
                    <div class="catalog-card__img">
                        <picture class="picture">
                            <source type="image/webp" srcset="assets/images/catalog-card-img1.webp"><img class="picture__img" src="assets/images/catalog-card-img1.png">
                        </picture>
                    </div>
                    <div class="catalog-card__title">Варежка</div>
                </div>
                <div class="catalog-card__bot">
                    <div class="catalog-card__text">Мороженое эскимо пломбир в шоколадной сливочной глазури</div>
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
        </a><a class="catalog-card" href="#">
            <div class="catalog-card__icons">
                <div class="catalog-card__icons-item"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewbox="0 0 40 40" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M29.0352 32.0114C34.8196 30.4615 38.0229 24.5546 36.7054 18.7079C36.328 17.0257 35.6001 14.7694 34.2192 12.6513C33.3501 11.3181 31.3371 11.9619 30.2985 13.1679C30.1156 13.3803 29.9184 13.5817 29.7078 13.7707C29.7078 13.7707 28.4058 6.42285 22.8099 4.53231C21.5426 4.10416 20.5184 5.42557 20.3386 6.7511C20.0819 8.6437 19.1272 10.5482 18.1194 12.5587C17.7197 13.3562 17.3115 14.1705 16.9353 15.0073C16.1245 12.687 14.3017 9.05297 10.6028 7.80333C9.33548 7.37518 8.31126 8.6966 8.13148 10.0221C7.87478 11.9147 6.92014 13.8192 5.91234 15.8297C4.18186 19.282 2.29463 23.0469 3.51499 27.6014C3.88442 28.9801 4.52189 30.2725 5.39098 31.4048C6.26007 32.5371 7.34375 33.487 8.58009 34.2003C9.81644 34.9136 11.1812 35.3763 12.5964 35.562C14.0117 35.7477 15.4496 35.6527 16.8281 35.2824C19.1146 34.6698 20.9978 33.3763 22.3579 31.6749C23.1446 31.9738 23.9652 32.181 24.8035 32.291C26.2188 32.4767 27.6567 32.3817 29.0352 32.0114Z" fill="#F64653"></path>
                        <path d="M13.511 19.3543L14.0555 21.3864L11.8746 21.9708L13.5878 28.3646L11.3822 28.9556L9.66901 22.5618L7.50056 23.1428L6.95605 21.1107L13.511 19.3543Z" fill="#FFE979"></path>
                        <path d="M23.4804 24.585C22.8591 25.6369 21.8794 26.3421 20.5412 26.7007C19.2029 27.0593 18.0018 26.9384 16.9379 26.3381C15.8739 25.7378 15.1704 24.7974 14.8273 23.517C14.482 22.2284 14.6211 21.0622 15.2446 20.0186C15.8658 18.9668 16.8456 18.2616 18.1838 17.903C19.5303 17.5422 20.7314 17.6631 21.7871 18.2656C22.8488 18.8576 23.5523 19.798 23.8976 21.0866C24.2407 22.3671 24.1016 23.5332 23.4804 24.585ZM20.0066 24.7057C20.7088 24.5176 21.2014 24.1421 21.4844 23.5793C21.7674 23.0165 21.816 22.3881 21.6301 21.6942C21.4419 20.9921 21.0857 20.4722 20.5614 20.1346C20.0349 19.7887 19.4205 19.7098 18.7184 19.898C18.0162 20.0861 17.5236 20.4616 17.2406 21.0244C16.9553 21.5789 16.9068 22.2073 17.0949 22.9094C17.2808 23.6033 17.6371 24.1232 18.1636 24.4691C18.6984 24.8128 19.3127 24.8916 20.0066 24.7057Z" fill="#FFE979"></path>
                        <path d="M26.1021 25.0114L23.8444 16.5855L27.2643 15.6691C28.1482 15.4322 28.9411 15.5164 29.6428 15.9216C30.3424 16.3185 30.8039 16.9341 31.0275 17.7684C31.2489 18.5945 31.1547 19.3502 30.7451 20.0354C30.3333 20.7124 29.6813 21.1704 28.7892 21.4095L27.5872 21.7316L28.3077 24.4204L26.1021 25.0114ZM27.0992 19.9101L27.9542 19.681C28.3259 19.5814 28.5824 19.4152 28.7237 19.1826C28.8711 18.9395 28.9027 18.661 28.8186 18.347C28.7345 18.0331 28.5689 17.8119 28.322 17.6833C28.0728 17.5464 27.7665 17.5266 27.403 17.624L26.548 17.8531L27.0992 19.9101Z" fill="#FFE979"></path>
                    </svg></div>
            </div>
            <div class="catalog-card__inner">
                <div class="catalog-card__top">
                    <div class="catalog-card__img">
                        <picture class="picture">
                            <source type="image/webp" srcset="assets/images/catalog-card-img2.webp"><img class="picture__img" src="assets/images/catalog-card-img2.png">
                        </picture>
                    </div>
                    <div class="catalog-card__title">22 копейки</div>
                </div>
                <div class="catalog-card__bot">
                    <div class="catalog-card__text">Пломбир в шоколадной глазури с арахисом в вафельном стаканчике</div>
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
        </a><a class="catalog-card" href="#">
            <div class="catalog-card__inner">
                <div class="catalog-card__top">
                    <div class="catalog-card__img">
                        <picture class="picture">
                            <source type="image/webp" srcset="assets/images/catalog-card-img3.webp"><img class="picture__img" src="assets/images/catalog-card-img3.png">
                        </picture>
                    </div>
                    <div class="catalog-card__title">Сёмыч</div>
                </div>
                <div class="catalog-card__bot">
                    <div class="catalog-card__text">Сливочное эскимо в шоколадной глазури</div>
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
        </a><a class="catalog-card" href="#">
            <div class="catalog-card__icons">
                <div class="catalog-card__icons-item"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="70" viewbox="0 0 100 70" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M88.0226 26.7151C91.8593 23.4577 93.7641 20.2092 93.0947 17.3613C91.2302 9.42969 70.1042 7.60901 45.9085 13.2947C21.7129 18.9804 3.60983 30.0193 5.4743 37.9509C6.13886 40.778 9.25045 42.8287 14.0759 44.0399C10.2391 47.2974 8.33433 50.5459 9.00378 53.3938C10.8683 61.3254 31.9942 63.146 56.1899 57.4604C80.3856 51.7747 98.4886 40.7357 96.6241 32.8041C95.9596 29.977 92.848 27.9263 88.0226 26.7151Z" fill="#3FFFDC"></path>
                        <mask id="mask0_301_203" style="mask-type:alpha" maskunits="userSpaceOnUse" x="5" y="9" width="92" height="52">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M88.0226 26.7154C91.8593 23.4579 93.7641 20.2094 93.0947 17.3615C91.2302 9.42993 70.1042 7.60925 45.9085 13.2949C21.7129 18.9806 3.60983 30.0196 5.4743 37.9512C6.13886 40.7783 9.25045 42.829 14.0759 44.0402C10.2391 47.2976 8.33433 50.5461 9.00378 53.394C10.8683 61.3256 31.9942 63.1463 56.1899 57.4606C80.3856 51.7749 98.4886 40.7359 96.6241 32.8043C95.9596 29.9773 92.848 27.9266 88.0226 26.7154Z" fill="#3FFFDC"></path>
                        </mask>
                        <g mask="url(#mask0_301_203)">
                            <path d="M74.2711 37.3783C71.5013 38.1205 68.6368 36.5575 67.762 33.8267L61.1884 13.3058C60.0708 9.81676 62.0977 6.102 65.6365 5.15377C69.1754 4.20555 72.7881 6.40915 73.5647 9.98956L78.1323 31.048C78.7401 33.8503 77.0408 36.6362 74.2711 37.3783ZM83.1476 51.2843C82.1315 52.7685 80.7047 53.7567 78.8673 54.249C77.03 54.7414 75.2767 54.6052 73.6075 53.8406C71.9727 53.0163 70.8713 51.5441 70.3033 49.4241C69.7226 47.2569 69.9403 45.4313 70.9565 43.9471C72.0072 42.4032 73.4512 41.3851 75.2885 40.8928C77.1259 40.4005 78.8619 40.5665 80.4967 41.3908C82.1659 42.1554 83.2908 43.6213 83.8715 45.7885C84.4396 47.9085 84.1983 49.7405 83.1476 51.2843Z" fill="white"></path>
                        </g>
                        <path d="M37.2087 30.8761L40.5895 29.9702L44.1249 43.1647L42.9079 43.4909L35.3714 39.3193C34.8918 39.0751 34.3938 38.7875 33.8772 38.4566C34.1151 39.1383 34.2737 39.6272 34.3531 39.9234L35.8024 45.3326L32.4217 46.2385L28.8862 33.0439L30.084 32.723L37.0429 36.5938C37.6076 36.898 38.3033 37.3052 39.1302 37.8152C38.8845 37.0528 38.6771 36.3561 38.508 35.725L37.2087 30.8761Z" fill="#03856D"></path>
                        <path d="M49.0057 38.6269L54.4535 37.1671L55.2455 40.1229L46.359 42.504L42.839 29.3674L51.5517 27.0329L52.3436 29.9886L47.0697 31.4018L47.6443 33.5461L52.2228 32.3193L52.9889 35.1785L48.4104 36.4053L49.0057 38.6269Z" fill="#03856D"></path>
                        <path d="M67.2875 22.8165L70.8807 21.8537L70.8963 21.9116L69.6832 36.3164L68.6786 36.5856L64.2231 31.8577C63.8843 31.5205 63.5889 31.1649 63.3368 30.7907C63.2952 31.2022 63.2171 31.6579 63.1026 32.1579L61.608 38.4802L60.6035 38.7493L52.3312 26.8861L52.3157 26.8282L55.9669 25.8498L59.098 30.5806C59.5695 31.3101 59.872 31.795 60.0054 32.0353C60.0725 31.41 60.1821 30.8147 60.3343 30.2494L61.4506 25.3743L62.2427 25.1621L65.6262 28.7486C66.107 29.2547 66.5125 29.712 66.8428 30.1205C66.8423 29.7065 66.8717 29.1465 66.9309 28.4404L67.2875 22.8165Z" fill="#03856D"></path>
                    </svg></div>
                <div class="catalog-card__icons-item"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewbox="0 0 40 40" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M29.0352 32.0114C34.8196 30.4615 38.0229 24.5546 36.7054 18.7079C36.328 17.0257 35.6001 14.7694 34.2192 12.6513C33.3501 11.3181 31.3371 11.9619 30.2985 13.1679C30.1156 13.3803 29.9184 13.5817 29.7078 13.7707C29.7078 13.7707 28.4058 6.42285 22.8099 4.53231C21.5426 4.10416 20.5184 5.42557 20.3386 6.7511C20.0819 8.6437 19.1272 10.5482 18.1194 12.5587C17.7197 13.3562 17.3115 14.1705 16.9353 15.0073C16.1245 12.687 14.3017 9.05297 10.6028 7.80333C9.33548 7.37518 8.31126 8.6966 8.13148 10.0221C7.87478 11.9147 6.92014 13.8192 5.91234 15.8297C4.18186 19.282 2.29463 23.0469 3.51499 27.6014C3.88442 28.9801 4.52189 30.2725 5.39098 31.4048C6.26007 32.5371 7.34375 33.487 8.58009 34.2003C9.81644 34.9136 11.1812 35.3763 12.5964 35.562C14.0117 35.7477 15.4496 35.6527 16.8281 35.2824C19.1146 34.6698 20.9978 33.3763 22.3579 31.6749C23.1446 31.9738 23.9652 32.181 24.8035 32.291C26.2188 32.4767 27.6567 32.3817 29.0352 32.0114Z" fill="#F64653"></path>
                        <path d="M13.511 19.3543L14.0555 21.3864L11.8746 21.9708L13.5878 28.3646L11.3822 28.9556L9.66901 22.5618L7.50056 23.1428L6.95605 21.1107L13.511 19.3543Z" fill="#FFE979"></path>
                        <path d="M23.4804 24.585C22.8591 25.6369 21.8794 26.3421 20.5412 26.7007C19.2029 27.0593 18.0018 26.9384 16.9379 26.3381C15.8739 25.7378 15.1704 24.7974 14.8273 23.517C14.482 22.2284 14.6211 21.0622 15.2446 20.0186C15.8658 18.9668 16.8456 18.2616 18.1838 17.903C19.5303 17.5422 20.7314 17.6631 21.7871 18.2656C22.8488 18.8576 23.5523 19.798 23.8976 21.0866C24.2407 22.3671 24.1016 23.5332 23.4804 24.585ZM20.0066 24.7057C20.7088 24.5176 21.2014 24.1421 21.4844 23.5793C21.7674 23.0165 21.816 22.3881 21.6301 21.6942C21.4419 20.9921 21.0857 20.4722 20.5614 20.1346C20.0349 19.7887 19.4205 19.7098 18.7184 19.898C18.0162 20.0861 17.5236 20.4616 17.2406 21.0244C16.9553 21.5789 16.9068 22.2073 17.0949 22.9094C17.2808 23.6033 17.6371 24.1232 18.1636 24.4691C18.6984 24.8128 19.3127 24.8916 20.0066 24.7057Z" fill="#FFE979"></path>
                        <path d="M26.1021 25.0114L23.8444 16.5855L27.2643 15.6691C28.1482 15.4322 28.9411 15.5164 29.6428 15.9216C30.3424 16.3185 30.8039 16.9341 31.0275 17.7684C31.2489 18.5945 31.1547 19.3502 30.7451 20.0354C30.3333 20.7124 29.6813 21.1704 28.7892 21.4095L27.5872 21.7316L28.3077 24.4204L26.1021 25.0114ZM27.0992 19.9101L27.9542 19.681C28.3259 19.5814 28.5824 19.4152 28.7237 19.1826C28.8711 18.9395 28.9027 18.661 28.8186 18.347C28.7345 18.0331 28.5689 17.8119 28.322 17.6833C28.0728 17.5464 27.7665 17.5266 27.403 17.624L26.548 17.8531L27.0992 19.9101Z" fill="#FFE979"></path>
                    </svg></div>
            </div>
            <div class="catalog-card__inner">
                <div class="catalog-card__top">
                    <div class="catalog-card__img">
                        <picture class="picture">
                            <source type="image/webp" srcset="assets/images/catalog-card-img4.webp"><img class="picture__img" src="assets/images/catalog-card-img4.png">
                        </picture>
                    </div>
                    <div class="catalog-card__title">Сёмыч за Сочи</div>
                </div>
                <div class="catalog-card__bot">
                    <div class="catalog-card__text">Мороженое пломбир с фруктовым наполнителем «Клубника» в вафельном сахарном рожке с &quot;Шоколадной&quot; глазурью.</div>
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
        </a><a class="catalog-card" href="#">
            <div class="catalog-card__inner">
                <div class="catalog-card__top">
                    <div class="catalog-card__img">
                        <picture class="picture">
                            <source type="image/webp" srcset="assets/images/catalog-card-img5.webp"><img class="picture__img" src="assets/images/catalog-card-img5.png">
                        </picture>
                    </div>
                    <div class="catalog-card__title">Пломбир на сливках</div>
                </div>
                <div class="catalog-card__bot">
                    <div class="catalog-card__text">Мороженое пломбир на сливках в бумажном стаканчике</div>
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
        </a><a class="catalog-card" href="#">
            <div class="catalog-card__icons">
                <div class="catalog-card__icons-item"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="70" viewbox="0 0 100 70" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M88.0226 26.7151C91.8593 23.4577 93.7641 20.2092 93.0947 17.3613C91.2302 9.42969 70.1042 7.60901 45.9085 13.2947C21.7129 18.9804 3.60983 30.0193 5.4743 37.9509C6.13886 40.778 9.25045 42.8287 14.0759 44.0399C10.2391 47.2974 8.33433 50.5459 9.00378 53.3938C10.8683 61.3254 31.9942 63.146 56.1899 57.4604C80.3856 51.7747 98.4886 40.7357 96.6241 32.8041C95.9596 29.977 92.848 27.9263 88.0226 26.7151Z" fill="#3FFFDC"></path>
                        <mask id="mask0_301_203" style="mask-type:alpha" maskunits="userSpaceOnUse" x="5" y="9" width="92" height="52">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M88.0226 26.7154C91.8593 23.4579 93.7641 20.2094 93.0947 17.3615C91.2302 9.42993 70.1042 7.60925 45.9085 13.2949C21.7129 18.9806 3.60983 30.0196 5.4743 37.9512C6.13886 40.7783 9.25045 42.829 14.0759 44.0402C10.2391 47.2976 8.33433 50.5461 9.00378 53.394C10.8683 61.3256 31.9942 63.1463 56.1899 57.4606C80.3856 51.7749 98.4886 40.7359 96.6241 32.8043C95.9596 29.9773 92.848 27.9266 88.0226 26.7154Z" fill="#3FFFDC"></path>
                        </mask>
                        <g mask="url(#mask0_301_203)">
                            <path d="M74.2711 37.3783C71.5013 38.1205 68.6368 36.5575 67.762 33.8267L61.1884 13.3058C60.0708 9.81676 62.0977 6.102 65.6365 5.15377C69.1754 4.20555 72.7881 6.40915 73.5647 9.98956L78.1323 31.048C78.7401 33.8503 77.0408 36.6362 74.2711 37.3783ZM83.1476 51.2843C82.1315 52.7685 80.7047 53.7567 78.8673 54.249C77.03 54.7414 75.2767 54.6052 73.6075 53.8406C71.9727 53.0163 70.8713 51.5441 70.3033 49.4241C69.7226 47.2569 69.9403 45.4313 70.9565 43.9471C72.0072 42.4032 73.4512 41.3851 75.2885 40.8928C77.1259 40.4005 78.8619 40.5665 80.4967 41.3908C82.1659 42.1554 83.2908 43.6213 83.8715 45.7885C84.4396 47.9085 84.1983 49.7405 83.1476 51.2843Z" fill="white"></path>
                        </g>
                        <path d="M37.2087 30.8761L40.5895 29.9702L44.1249 43.1647L42.9079 43.4909L35.3714 39.3193C34.8918 39.0751 34.3938 38.7875 33.8772 38.4566C34.1151 39.1383 34.2737 39.6272 34.3531 39.9234L35.8024 45.3326L32.4217 46.2385L28.8862 33.0439L30.084 32.723L37.0429 36.5938C37.6076 36.898 38.3033 37.3052 39.1302 37.8152C38.8845 37.0528 38.6771 36.3561 38.508 35.725L37.2087 30.8761Z" fill="#03856D"></path>
                        <path d="M49.0057 38.6269L54.4535 37.1671L55.2455 40.1229L46.359 42.504L42.839 29.3674L51.5517 27.0329L52.3436 29.9886L47.0697 31.4018L47.6443 33.5461L52.2228 32.3193L52.9889 35.1785L48.4104 36.4053L49.0057 38.6269Z" fill="#03856D"></path>
                        <path d="M67.2875 22.8165L70.8807 21.8537L70.8963 21.9116L69.6832 36.3164L68.6786 36.5856L64.2231 31.8577C63.8843 31.5205 63.5889 31.1649 63.3368 30.7907C63.2952 31.2022 63.2171 31.6579 63.1026 32.1579L61.608 38.4802L60.6035 38.7493L52.3312 26.8861L52.3157 26.8282L55.9669 25.8498L59.098 30.5806C59.5695 31.3101 59.872 31.795 60.0054 32.0353C60.0725 31.41 60.1821 30.8147 60.3343 30.2494L61.4506 25.3743L62.2427 25.1621L65.6262 28.7486C66.107 29.2547 66.5125 29.712 66.8428 30.1205C66.8423 29.7065 66.8717 29.1465 66.9309 28.4404L67.2875 22.8165Z" fill="#03856D"></path>
                    </svg></div>
                <div class="catalog-card__icons-item"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewbox="0 0 40 40" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M29.0352 32.0114C34.8196 30.4615 38.0229 24.5546 36.7054 18.7079C36.328 17.0257 35.6001 14.7694 34.2192 12.6513C33.3501 11.3181 31.3371 11.9619 30.2985 13.1679C30.1156 13.3803 29.9184 13.5817 29.7078 13.7707C29.7078 13.7707 28.4058 6.42285 22.8099 4.53231C21.5426 4.10416 20.5184 5.42557 20.3386 6.7511C20.0819 8.6437 19.1272 10.5482 18.1194 12.5587C17.7197 13.3562 17.3115 14.1705 16.9353 15.0073C16.1245 12.687 14.3017 9.05297 10.6028 7.80333C9.33548 7.37518 8.31126 8.6966 8.13148 10.0221C7.87478 11.9147 6.92014 13.8192 5.91234 15.8297C4.18186 19.282 2.29463 23.0469 3.51499 27.6014C3.88442 28.9801 4.52189 30.2725 5.39098 31.4048C6.26007 32.5371 7.34375 33.487 8.58009 34.2003C9.81644 34.9136 11.1812 35.3763 12.5964 35.562C14.0117 35.7477 15.4496 35.6527 16.8281 35.2824C19.1146 34.6698 20.9978 33.3763 22.3579 31.6749C23.1446 31.9738 23.9652 32.181 24.8035 32.291C26.2188 32.4767 27.6567 32.3817 29.0352 32.0114Z" fill="#F64653"></path>
                        <path d="M13.511 19.3543L14.0555 21.3864L11.8746 21.9708L13.5878 28.3646L11.3822 28.9556L9.66901 22.5618L7.50056 23.1428L6.95605 21.1107L13.511 19.3543Z" fill="#FFE979"></path>
                        <path d="M23.4804 24.585C22.8591 25.6369 21.8794 26.3421 20.5412 26.7007C19.2029 27.0593 18.0018 26.9384 16.9379 26.3381C15.8739 25.7378 15.1704 24.7974 14.8273 23.517C14.482 22.2284 14.6211 21.0622 15.2446 20.0186C15.8658 18.9668 16.8456 18.2616 18.1838 17.903C19.5303 17.5422 20.7314 17.6631 21.7871 18.2656C22.8488 18.8576 23.5523 19.798 23.8976 21.0866C24.2407 22.3671 24.1016 23.5332 23.4804 24.585ZM20.0066 24.7057C20.7088 24.5176 21.2014 24.1421 21.4844 23.5793C21.7674 23.0165 21.816 22.3881 21.6301 21.6942C21.4419 20.9921 21.0857 20.4722 20.5614 20.1346C20.0349 19.7887 19.4205 19.7098 18.7184 19.898C18.0162 20.0861 17.5236 20.4616 17.2406 21.0244C16.9553 21.5789 16.9068 22.2073 17.0949 22.9094C17.2808 23.6033 17.6371 24.1232 18.1636 24.4691C18.6984 24.8128 19.3127 24.8916 20.0066 24.7057Z" fill="#FFE979"></path>
                        <path d="M26.1021 25.0114L23.8444 16.5855L27.2643 15.6691C28.1482 15.4322 28.9411 15.5164 29.6428 15.9216C30.3424 16.3185 30.8039 16.9341 31.0275 17.7684C31.2489 18.5945 31.1547 19.3502 30.7451 20.0354C30.3333 20.7124 29.6813 21.1704 28.7892 21.4095L27.5872 21.7316L28.3077 24.4204L26.1021 25.0114ZM27.0992 19.9101L27.9542 19.681C28.3259 19.5814 28.5824 19.4152 28.7237 19.1826C28.8711 18.9395 28.9027 18.661 28.8186 18.347C28.7345 18.0331 28.5689 17.8119 28.322 17.6833C28.0728 17.5464 27.7665 17.5266 27.403 17.624L26.548 17.8531L27.0992 19.9101Z" fill="#FFE979"></path>
                    </svg></div>
            </div>
            <div class="catalog-card__inner">
                <div class="catalog-card__top">
                    <div class="catalog-card__img">
                        <picture class="picture">
                            <source type="image/webp" srcset="assets/images/catalog-card-img6.webp"><img class="picture__img" src="assets/images/catalog-card-img6.png">
                        </picture>
                    </div>
                    <div class="catalog-card__title">Карамельная косичка</div>
                </div>
                <div class="catalog-card__bot">
                    <div class="catalog-card__text">Мороженое с заменителем молочного жира двухслойное с ароматом ванили и вкусом карамели с мягкой карамелью</div>
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
        </a><a class="catalog-card" href="#">
            <div class="catalog-card__inner">
                <div class="catalog-card__top">
                    <div class="catalog-card__img">
                        <picture class="picture">
                            <source type="image/webp" srcset="assets/images/catalog-card-img7.webp"><img class="picture__img" src="assets/images/catalog-card-img7.png">
                        </picture>
                    </div>
                    <div class="catalog-card__title">Сливочное лакомство</div>
                </div>
                <div class="catalog-card__bot">
                    <div class="catalog-card__text">Мороженое сливочное во взбитой шоколадной сливочной глазури</div>
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
        </a><a class="catalog-card" href="#">
            <div class="catalog-card__inner">
                <div class="catalog-card__top">
                    <div class="catalog-card__img">
                        <picture class="picture">
                            <source type="image/webp" srcset="assets/images/catalog-card-img8.webp"><img class="picture__img" src="assets/images/catalog-card-img8.png">
                        </picture>
                    </div>
                    <div class="catalog-card__title">Варежка</div>
                </div>
                <div class="catalog-card__bot">
                    <div class="catalog-card__text">Мороженое эскимо пломбир ванильный в шоколадной глазури с арахисом</div>
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
        </a><a class="catalog-card" href="#">
            <div class="catalog-card__icons">
                <div class="catalog-card__icons-item"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="70" viewbox="0 0 100 70" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M88.0226 26.7151C91.8593 23.4577 93.7641 20.2092 93.0947 17.3613C91.2302 9.42969 70.1042 7.60901 45.9085 13.2947C21.7129 18.9804 3.60983 30.0193 5.4743 37.9509C6.13886 40.778 9.25045 42.8287 14.0759 44.0399C10.2391 47.2974 8.33433 50.5459 9.00378 53.3938C10.8683 61.3254 31.9942 63.146 56.1899 57.4604C80.3856 51.7747 98.4886 40.7357 96.6241 32.8041C95.9596 29.977 92.848 27.9263 88.0226 26.7151Z" fill="#3FFFDC"></path>
                        <mask id="mask0_301_203" style="mask-type:alpha" maskunits="userSpaceOnUse" x="5" y="9" width="92" height="52">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M88.0226 26.7154C91.8593 23.4579 93.7641 20.2094 93.0947 17.3615C91.2302 9.42993 70.1042 7.60925 45.9085 13.2949C21.7129 18.9806 3.60983 30.0196 5.4743 37.9512C6.13886 40.7783 9.25045 42.829 14.0759 44.0402C10.2391 47.2976 8.33433 50.5461 9.00378 53.394C10.8683 61.3256 31.9942 63.1463 56.1899 57.4606C80.3856 51.7749 98.4886 40.7359 96.6241 32.8043C95.9596 29.9773 92.848 27.9266 88.0226 26.7154Z" fill="#3FFFDC"></path>
                        </mask>
                        <g mask="url(#mask0_301_203)">
                            <path d="M74.2711 37.3783C71.5013 38.1205 68.6368 36.5575 67.762 33.8267L61.1884 13.3058C60.0708 9.81676 62.0977 6.102 65.6365 5.15377C69.1754 4.20555 72.7881 6.40915 73.5647 9.98956L78.1323 31.048C78.7401 33.8503 77.0408 36.6362 74.2711 37.3783ZM83.1476 51.2843C82.1315 52.7685 80.7047 53.7567 78.8673 54.249C77.03 54.7414 75.2767 54.6052 73.6075 53.8406C71.9727 53.0163 70.8713 51.5441 70.3033 49.4241C69.7226 47.2569 69.9403 45.4313 70.9565 43.9471C72.0072 42.4032 73.4512 41.3851 75.2885 40.8928C77.1259 40.4005 78.8619 40.5665 80.4967 41.3908C82.1659 42.1554 83.2908 43.6213 83.8715 45.7885C84.4396 47.9085 84.1983 49.7405 83.1476 51.2843Z" fill="white"></path>
                        </g>
                        <path d="M37.2087 30.8761L40.5895 29.9702L44.1249 43.1647L42.9079 43.4909L35.3714 39.3193C34.8918 39.0751 34.3938 38.7875 33.8772 38.4566C34.1151 39.1383 34.2737 39.6272 34.3531 39.9234L35.8024 45.3326L32.4217 46.2385L28.8862 33.0439L30.084 32.723L37.0429 36.5938C37.6076 36.898 38.3033 37.3052 39.1302 37.8152C38.8845 37.0528 38.6771 36.3561 38.508 35.725L37.2087 30.8761Z" fill="#03856D"></path>
                        <path d="M49.0057 38.6269L54.4535 37.1671L55.2455 40.1229L46.359 42.504L42.839 29.3674L51.5517 27.0329L52.3436 29.9886L47.0697 31.4018L47.6443 33.5461L52.2228 32.3193L52.9889 35.1785L48.4104 36.4053L49.0057 38.6269Z" fill="#03856D"></path>
                        <path d="M67.2875 22.8165L70.8807 21.8537L70.8963 21.9116L69.6832 36.3164L68.6786 36.5856L64.2231 31.8577C63.8843 31.5205 63.5889 31.1649 63.3368 30.7907C63.2952 31.2022 63.2171 31.6579 63.1026 32.1579L61.608 38.4802L60.6035 38.7493L52.3312 26.8861L52.3157 26.8282L55.9669 25.8498L59.098 30.5806C59.5695 31.3101 59.872 31.795 60.0054 32.0353C60.0725 31.41 60.1821 30.8147 60.3343 30.2494L61.4506 25.3743L62.2427 25.1621L65.6262 28.7486C66.107 29.2547 66.5125 29.712 66.8428 30.1205C66.8423 29.7065 66.8717 29.1465 66.9309 28.4404L67.2875 22.8165Z" fill="#03856D"></path>
                    </svg></div>
            </div>
            <div class="catalog-card__inner">
                <div class="catalog-card__top">
                    <div class="catalog-card__img">
                        <picture class="picture">
                            <source type="image/webp" srcset="assets/images/catalog-card-img1.webp"><img class="picture__img" src="assets/images/catalog-card-img1.png">
                        </picture>
                    </div>
                    <div class="catalog-card__title">Варежка</div>
                </div>
                <div class="catalog-card__bot">
                    <div class="catalog-card__text">Мороженое эскимо пломбир в шоколадной сливочной глазури</div>
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
        </a><a class="catalog-card" href="#">
            <div class="catalog-card__icons">
                <div class="catalog-card__icons-item"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewbox="0 0 40 40" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M29.0352 32.0114C34.8196 30.4615 38.0229 24.5546 36.7054 18.7079C36.328 17.0257 35.6001 14.7694 34.2192 12.6513C33.3501 11.3181 31.3371 11.9619 30.2985 13.1679C30.1156 13.3803 29.9184 13.5817 29.7078 13.7707C29.7078 13.7707 28.4058 6.42285 22.8099 4.53231C21.5426 4.10416 20.5184 5.42557 20.3386 6.7511C20.0819 8.6437 19.1272 10.5482 18.1194 12.5587C17.7197 13.3562 17.3115 14.1705 16.9353 15.0073C16.1245 12.687 14.3017 9.05297 10.6028 7.80333C9.33548 7.37518 8.31126 8.6966 8.13148 10.0221C7.87478 11.9147 6.92014 13.8192 5.91234 15.8297C4.18186 19.282 2.29463 23.0469 3.51499 27.6014C3.88442 28.9801 4.52189 30.2725 5.39098 31.4048C6.26007 32.5371 7.34375 33.487 8.58009 34.2003C9.81644 34.9136 11.1812 35.3763 12.5964 35.562C14.0117 35.7477 15.4496 35.6527 16.8281 35.2824C19.1146 34.6698 20.9978 33.3763 22.3579 31.6749C23.1446 31.9738 23.9652 32.181 24.8035 32.291C26.2188 32.4767 27.6567 32.3817 29.0352 32.0114Z" fill="#F64653"></path>
                        <path d="M13.511 19.3543L14.0555 21.3864L11.8746 21.9708L13.5878 28.3646L11.3822 28.9556L9.66901 22.5618L7.50056 23.1428L6.95605 21.1107L13.511 19.3543Z" fill="#FFE979"></path>
                        <path d="M23.4804 24.585C22.8591 25.6369 21.8794 26.3421 20.5412 26.7007C19.2029 27.0593 18.0018 26.9384 16.9379 26.3381C15.8739 25.7378 15.1704 24.7974 14.8273 23.517C14.482 22.2284 14.6211 21.0622 15.2446 20.0186C15.8658 18.9668 16.8456 18.2616 18.1838 17.903C19.5303 17.5422 20.7314 17.6631 21.7871 18.2656C22.8488 18.8576 23.5523 19.798 23.8976 21.0866C24.2407 22.3671 24.1016 23.5332 23.4804 24.585ZM20.0066 24.7057C20.7088 24.5176 21.2014 24.1421 21.4844 23.5793C21.7674 23.0165 21.816 22.3881 21.6301 21.6942C21.4419 20.9921 21.0857 20.4722 20.5614 20.1346C20.0349 19.7887 19.4205 19.7098 18.7184 19.898C18.0162 20.0861 17.5236 20.4616 17.2406 21.0244C16.9553 21.5789 16.9068 22.2073 17.0949 22.9094C17.2808 23.6033 17.6371 24.1232 18.1636 24.4691C18.6984 24.8128 19.3127 24.8916 20.0066 24.7057Z" fill="#FFE979"></path>
                        <path d="M26.1021 25.0114L23.8444 16.5855L27.2643 15.6691C28.1482 15.4322 28.9411 15.5164 29.6428 15.9216C30.3424 16.3185 30.8039 16.9341 31.0275 17.7684C31.2489 18.5945 31.1547 19.3502 30.7451 20.0354C30.3333 20.7124 29.6813 21.1704 28.7892 21.4095L27.5872 21.7316L28.3077 24.4204L26.1021 25.0114ZM27.0992 19.9101L27.9542 19.681C28.3259 19.5814 28.5824 19.4152 28.7237 19.1826C28.8711 18.9395 28.9027 18.661 28.8186 18.347C28.7345 18.0331 28.5689 17.8119 28.322 17.6833C28.0728 17.5464 27.7665 17.5266 27.403 17.624L26.548 17.8531L27.0992 19.9101Z" fill="#FFE979"></path>
                    </svg></div>
            </div>
            <div class="catalog-card__inner">
                <div class="catalog-card__top">
                    <div class="catalog-card__img">
                        <picture class="picture">
                            <source type="image/webp" srcset="assets/images/catalog-card-img2.webp"><img class="picture__img" src="assets/images/catalog-card-img2.png">
                        </picture>
                    </div>
                    <div class="catalog-card__title">22 копейки</div>
                </div>
                <div class="catalog-card__bot">
                    <div class="catalog-card__text">Пломбир в шоколадной глазури с арахисом в вафельном стаканчике</div>
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
        </a><a class="catalog-card" href="#">
            <div class="catalog-card__inner">
                <div class="catalog-card__top">
                    <div class="catalog-card__img">
                        <picture class="picture">
                            <source type="image/webp" srcset="assets/images/catalog-card-img3.webp"><img class="picture__img" src="assets/images/catalog-card-img3.png">
                        </picture>
                    </div>
                    <div class="catalog-card__title">Сёмыч</div>
                </div>
                <div class="catalog-card__bot">
                    <div class="catalog-card__text">Сливочное эскимо в шоколадной глазури</div>
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
        </a><a class="catalog-card" href="#">
            <div class="catalog-card__icons">
                <div class="catalog-card__icons-item"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="70" viewbox="0 0 100 70" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M88.0226 26.7151C91.8593 23.4577 93.7641 20.2092 93.0947 17.3613C91.2302 9.42969 70.1042 7.60901 45.9085 13.2947C21.7129 18.9804 3.60983 30.0193 5.4743 37.9509C6.13886 40.778 9.25045 42.8287 14.0759 44.0399C10.2391 47.2974 8.33433 50.5459 9.00378 53.3938C10.8683 61.3254 31.9942 63.146 56.1899 57.4604C80.3856 51.7747 98.4886 40.7357 96.6241 32.8041C95.9596 29.977 92.848 27.9263 88.0226 26.7151Z" fill="#3FFFDC"></path>
                        <mask id="mask0_301_203" style="mask-type:alpha" maskunits="userSpaceOnUse" x="5" y="9" width="92" height="52">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M88.0226 26.7154C91.8593 23.4579 93.7641 20.2094 93.0947 17.3615C91.2302 9.42993 70.1042 7.60925 45.9085 13.2949C21.7129 18.9806 3.60983 30.0196 5.4743 37.9512C6.13886 40.7783 9.25045 42.829 14.0759 44.0402C10.2391 47.2976 8.33433 50.5461 9.00378 53.394C10.8683 61.3256 31.9942 63.1463 56.1899 57.4606C80.3856 51.7749 98.4886 40.7359 96.6241 32.8043C95.9596 29.9773 92.848 27.9266 88.0226 26.7154Z" fill="#3FFFDC"></path>
                        </mask>
                        <g mask="url(#mask0_301_203)">
                            <path d="M74.2711 37.3783C71.5013 38.1205 68.6368 36.5575 67.762 33.8267L61.1884 13.3058C60.0708 9.81676 62.0977 6.102 65.6365 5.15377C69.1754 4.20555 72.7881 6.40915 73.5647 9.98956L78.1323 31.048C78.7401 33.8503 77.0408 36.6362 74.2711 37.3783ZM83.1476 51.2843C82.1315 52.7685 80.7047 53.7567 78.8673 54.249C77.03 54.7414 75.2767 54.6052 73.6075 53.8406C71.9727 53.0163 70.8713 51.5441 70.3033 49.4241C69.7226 47.2569 69.9403 45.4313 70.9565 43.9471C72.0072 42.4032 73.4512 41.3851 75.2885 40.8928C77.1259 40.4005 78.8619 40.5665 80.4967 41.3908C82.1659 42.1554 83.2908 43.6213 83.8715 45.7885C84.4396 47.9085 84.1983 49.7405 83.1476 51.2843Z" fill="white"></path>
                        </g>
                        <path d="M37.2087 30.8761L40.5895 29.9702L44.1249 43.1647L42.9079 43.4909L35.3714 39.3193C34.8918 39.0751 34.3938 38.7875 33.8772 38.4566C34.1151 39.1383 34.2737 39.6272 34.3531 39.9234L35.8024 45.3326L32.4217 46.2385L28.8862 33.0439L30.084 32.723L37.0429 36.5938C37.6076 36.898 38.3033 37.3052 39.1302 37.8152C38.8845 37.0528 38.6771 36.3561 38.508 35.725L37.2087 30.8761Z" fill="#03856D"></path>
                        <path d="M49.0057 38.6269L54.4535 37.1671L55.2455 40.1229L46.359 42.504L42.839 29.3674L51.5517 27.0329L52.3436 29.9886L47.0697 31.4018L47.6443 33.5461L52.2228 32.3193L52.9889 35.1785L48.4104 36.4053L49.0057 38.6269Z" fill="#03856D"></path>
                        <path d="M67.2875 22.8165L70.8807 21.8537L70.8963 21.9116L69.6832 36.3164L68.6786 36.5856L64.2231 31.8577C63.8843 31.5205 63.5889 31.1649 63.3368 30.7907C63.2952 31.2022 63.2171 31.6579 63.1026 32.1579L61.608 38.4802L60.6035 38.7493L52.3312 26.8861L52.3157 26.8282L55.9669 25.8498L59.098 30.5806C59.5695 31.3101 59.872 31.795 60.0054 32.0353C60.0725 31.41 60.1821 30.8147 60.3343 30.2494L61.4506 25.3743L62.2427 25.1621L65.6262 28.7486C66.107 29.2547 66.5125 29.712 66.8428 30.1205C66.8423 29.7065 66.8717 29.1465 66.9309 28.4404L67.2875 22.8165Z" fill="#03856D"></path>
                    </svg></div>
                <div class="catalog-card__icons-item"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewbox="0 0 40 40" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M29.0352 32.0114C34.8196 30.4615 38.0229 24.5546 36.7054 18.7079C36.328 17.0257 35.6001 14.7694 34.2192 12.6513C33.3501 11.3181 31.3371 11.9619 30.2985 13.1679C30.1156 13.3803 29.9184 13.5817 29.7078 13.7707C29.7078 13.7707 28.4058 6.42285 22.8099 4.53231C21.5426 4.10416 20.5184 5.42557 20.3386 6.7511C20.0819 8.6437 19.1272 10.5482 18.1194 12.5587C17.7197 13.3562 17.3115 14.1705 16.9353 15.0073C16.1245 12.687 14.3017 9.05297 10.6028 7.80333C9.33548 7.37518 8.31126 8.6966 8.13148 10.0221C7.87478 11.9147 6.92014 13.8192 5.91234 15.8297C4.18186 19.282 2.29463 23.0469 3.51499 27.6014C3.88442 28.9801 4.52189 30.2725 5.39098 31.4048C6.26007 32.5371 7.34375 33.487 8.58009 34.2003C9.81644 34.9136 11.1812 35.3763 12.5964 35.562C14.0117 35.7477 15.4496 35.6527 16.8281 35.2824C19.1146 34.6698 20.9978 33.3763 22.3579 31.6749C23.1446 31.9738 23.9652 32.181 24.8035 32.291C26.2188 32.4767 27.6567 32.3817 29.0352 32.0114Z" fill="#F64653"></path>
                        <path d="M13.511 19.3543L14.0555 21.3864L11.8746 21.9708L13.5878 28.3646L11.3822 28.9556L9.66901 22.5618L7.50056 23.1428L6.95605 21.1107L13.511 19.3543Z" fill="#FFE979"></path>
                        <path d="M23.4804 24.585C22.8591 25.6369 21.8794 26.3421 20.5412 26.7007C19.2029 27.0593 18.0018 26.9384 16.9379 26.3381C15.8739 25.7378 15.1704 24.7974 14.8273 23.517C14.482 22.2284 14.6211 21.0622 15.2446 20.0186C15.8658 18.9668 16.8456 18.2616 18.1838 17.903C19.5303 17.5422 20.7314 17.6631 21.7871 18.2656C22.8488 18.8576 23.5523 19.798 23.8976 21.0866C24.2407 22.3671 24.1016 23.5332 23.4804 24.585ZM20.0066 24.7057C20.7088 24.5176 21.2014 24.1421 21.4844 23.5793C21.7674 23.0165 21.816 22.3881 21.6301 21.6942C21.4419 20.9921 21.0857 20.4722 20.5614 20.1346C20.0349 19.7887 19.4205 19.7098 18.7184 19.898C18.0162 20.0861 17.5236 20.4616 17.2406 21.0244C16.9553 21.5789 16.9068 22.2073 17.0949 22.9094C17.2808 23.6033 17.6371 24.1232 18.1636 24.4691C18.6984 24.8128 19.3127 24.8916 20.0066 24.7057Z" fill="#FFE979"></path>
                        <path d="M26.1021 25.0114L23.8444 16.5855L27.2643 15.6691C28.1482 15.4322 28.9411 15.5164 29.6428 15.9216C30.3424 16.3185 30.8039 16.9341 31.0275 17.7684C31.2489 18.5945 31.1547 19.3502 30.7451 20.0354C30.3333 20.7124 29.6813 21.1704 28.7892 21.4095L27.5872 21.7316L28.3077 24.4204L26.1021 25.0114ZM27.0992 19.9101L27.9542 19.681C28.3259 19.5814 28.5824 19.4152 28.7237 19.1826C28.8711 18.9395 28.9027 18.661 28.8186 18.347C28.7345 18.0331 28.5689 17.8119 28.322 17.6833C28.0728 17.5464 27.7665 17.5266 27.403 17.624L26.548 17.8531L27.0992 19.9101Z" fill="#FFE979"></path>
                    </svg></div>
            </div>
            <div class="catalog-card__inner">
                <div class="catalog-card__top">
                    <div class="catalog-card__img">
                        <picture class="picture">
                            <source type="image/webp" srcset="assets/images/catalog-card-img4.webp"><img class="picture__img" src="assets/images/catalog-card-img4.png">
                        </picture>
                    </div>
                    <div class="catalog-card__title">Сёмыч за Сочи</div>
                </div>
                <div class="catalog-card__bot">
                    <div class="catalog-card__text">Мороженое пломбир с фруктовым наполнителем «Клубника» в вафельном сахарном рожке с &quot;Шоколадной&quot; глазурью.</div>
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
        </a><a class="catalog-card" href="#">
            <div class="catalog-card__inner">
                <div class="catalog-card__top">
                    <div class="catalog-card__img">
                        <picture class="picture">
                            <source type="image/webp" srcset="assets/images/catalog-card-img5.webp"><img class="picture__img" src="assets/images/catalog-card-img5.png">
                        </picture>
                    </div>
                    <div class="catalog-card__title">Пломбир на сливках</div>
                </div>
                <div class="catalog-card__bot">
                    <div class="catalog-card__text">Мороженое пломбир на сливках в бумажном стаканчике</div>
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
        </a><a class="catalog-card" href="#">
            <div class="catalog-card__icons">
                <div class="catalog-card__icons-item"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="70" viewbox="0 0 100 70" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M88.0226 26.7151C91.8593 23.4577 93.7641 20.2092 93.0947 17.3613C91.2302 9.42969 70.1042 7.60901 45.9085 13.2947C21.7129 18.9804 3.60983 30.0193 5.4743 37.9509C6.13886 40.778 9.25045 42.8287 14.0759 44.0399C10.2391 47.2974 8.33433 50.5459 9.00378 53.3938C10.8683 61.3254 31.9942 63.146 56.1899 57.4604C80.3856 51.7747 98.4886 40.7357 96.6241 32.8041C95.9596 29.977 92.848 27.9263 88.0226 26.7151Z" fill="#3FFFDC"></path>
                        <mask id="mask0_301_203" style="mask-type:alpha" maskunits="userSpaceOnUse" x="5" y="9" width="92" height="52">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M88.0226 26.7154C91.8593 23.4579 93.7641 20.2094 93.0947 17.3615C91.2302 9.42993 70.1042 7.60925 45.9085 13.2949C21.7129 18.9806 3.60983 30.0196 5.4743 37.9512C6.13886 40.7783 9.25045 42.829 14.0759 44.0402C10.2391 47.2976 8.33433 50.5461 9.00378 53.394C10.8683 61.3256 31.9942 63.1463 56.1899 57.4606C80.3856 51.7749 98.4886 40.7359 96.6241 32.8043C95.9596 29.9773 92.848 27.9266 88.0226 26.7154Z" fill="#3FFFDC"></path>
                        </mask>
                        <g mask="url(#mask0_301_203)">
                            <path d="M74.2711 37.3783C71.5013 38.1205 68.6368 36.5575 67.762 33.8267L61.1884 13.3058C60.0708 9.81676 62.0977 6.102 65.6365 5.15377C69.1754 4.20555 72.7881 6.40915 73.5647 9.98956L78.1323 31.048C78.7401 33.8503 77.0408 36.6362 74.2711 37.3783ZM83.1476 51.2843C82.1315 52.7685 80.7047 53.7567 78.8673 54.249C77.03 54.7414 75.2767 54.6052 73.6075 53.8406C71.9727 53.0163 70.8713 51.5441 70.3033 49.4241C69.7226 47.2569 69.9403 45.4313 70.9565 43.9471C72.0072 42.4032 73.4512 41.3851 75.2885 40.8928C77.1259 40.4005 78.8619 40.5665 80.4967 41.3908C82.1659 42.1554 83.2908 43.6213 83.8715 45.7885C84.4396 47.9085 84.1983 49.7405 83.1476 51.2843Z" fill="white"></path>
                        </g>
                        <path d="M37.2087 30.8761L40.5895 29.9702L44.1249 43.1647L42.9079 43.4909L35.3714 39.3193C34.8918 39.0751 34.3938 38.7875 33.8772 38.4566C34.1151 39.1383 34.2737 39.6272 34.3531 39.9234L35.8024 45.3326L32.4217 46.2385L28.8862 33.0439L30.084 32.723L37.0429 36.5938C37.6076 36.898 38.3033 37.3052 39.1302 37.8152C38.8845 37.0528 38.6771 36.3561 38.508 35.725L37.2087 30.8761Z" fill="#03856D"></path>
                        <path d="M49.0057 38.6269L54.4535 37.1671L55.2455 40.1229L46.359 42.504L42.839 29.3674L51.5517 27.0329L52.3436 29.9886L47.0697 31.4018L47.6443 33.5461L52.2228 32.3193L52.9889 35.1785L48.4104 36.4053L49.0057 38.6269Z" fill="#03856D"></path>
                        <path d="M67.2875 22.8165L70.8807 21.8537L70.8963 21.9116L69.6832 36.3164L68.6786 36.5856L64.2231 31.8577C63.8843 31.5205 63.5889 31.1649 63.3368 30.7907C63.2952 31.2022 63.2171 31.6579 63.1026 32.1579L61.608 38.4802L60.6035 38.7493L52.3312 26.8861L52.3157 26.8282L55.9669 25.8498L59.098 30.5806C59.5695 31.3101 59.872 31.795 60.0054 32.0353C60.0725 31.41 60.1821 30.8147 60.3343 30.2494L61.4506 25.3743L62.2427 25.1621L65.6262 28.7486C66.107 29.2547 66.5125 29.712 66.8428 30.1205C66.8423 29.7065 66.8717 29.1465 66.9309 28.4404L67.2875 22.8165Z" fill="#03856D"></path>
                    </svg></div>
                <div class="catalog-card__icons-item"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewbox="0 0 40 40" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M29.0352 32.0114C34.8196 30.4615 38.0229 24.5546 36.7054 18.7079C36.328 17.0257 35.6001 14.7694 34.2192 12.6513C33.3501 11.3181 31.3371 11.9619 30.2985 13.1679C30.1156 13.3803 29.9184 13.5817 29.7078 13.7707C29.7078 13.7707 28.4058 6.42285 22.8099 4.53231C21.5426 4.10416 20.5184 5.42557 20.3386 6.7511C20.0819 8.6437 19.1272 10.5482 18.1194 12.5587C17.7197 13.3562 17.3115 14.1705 16.9353 15.0073C16.1245 12.687 14.3017 9.05297 10.6028 7.80333C9.33548 7.37518 8.31126 8.6966 8.13148 10.0221C7.87478 11.9147 6.92014 13.8192 5.91234 15.8297C4.18186 19.282 2.29463 23.0469 3.51499 27.6014C3.88442 28.9801 4.52189 30.2725 5.39098 31.4048C6.26007 32.5371 7.34375 33.487 8.58009 34.2003C9.81644 34.9136 11.1812 35.3763 12.5964 35.562C14.0117 35.7477 15.4496 35.6527 16.8281 35.2824C19.1146 34.6698 20.9978 33.3763 22.3579 31.6749C23.1446 31.9738 23.9652 32.181 24.8035 32.291C26.2188 32.4767 27.6567 32.3817 29.0352 32.0114Z" fill="#F64653"></path>
                        <path d="M13.511 19.3543L14.0555 21.3864L11.8746 21.9708L13.5878 28.3646L11.3822 28.9556L9.66901 22.5618L7.50056 23.1428L6.95605 21.1107L13.511 19.3543Z" fill="#FFE979"></path>
                        <path d="M23.4804 24.585C22.8591 25.6369 21.8794 26.3421 20.5412 26.7007C19.2029 27.0593 18.0018 26.9384 16.9379 26.3381C15.8739 25.7378 15.1704 24.7974 14.8273 23.517C14.482 22.2284 14.6211 21.0622 15.2446 20.0186C15.8658 18.9668 16.8456 18.2616 18.1838 17.903C19.5303 17.5422 20.7314 17.6631 21.7871 18.2656C22.8488 18.8576 23.5523 19.798 23.8976 21.0866C24.2407 22.3671 24.1016 23.5332 23.4804 24.585ZM20.0066 24.7057C20.7088 24.5176 21.2014 24.1421 21.4844 23.5793C21.7674 23.0165 21.816 22.3881 21.6301 21.6942C21.4419 20.9921 21.0857 20.4722 20.5614 20.1346C20.0349 19.7887 19.4205 19.7098 18.7184 19.898C18.0162 20.0861 17.5236 20.4616 17.2406 21.0244C16.9553 21.5789 16.9068 22.2073 17.0949 22.9094C17.2808 23.6033 17.6371 24.1232 18.1636 24.4691C18.6984 24.8128 19.3127 24.8916 20.0066 24.7057Z" fill="#FFE979"></path>
                        <path d="M26.1021 25.0114L23.8444 16.5855L27.2643 15.6691C28.1482 15.4322 28.9411 15.5164 29.6428 15.9216C30.3424 16.3185 30.8039 16.9341 31.0275 17.7684C31.2489 18.5945 31.1547 19.3502 30.7451 20.0354C30.3333 20.7124 29.6813 21.1704 28.7892 21.4095L27.5872 21.7316L28.3077 24.4204L26.1021 25.0114ZM27.0992 19.9101L27.9542 19.681C28.3259 19.5814 28.5824 19.4152 28.7237 19.1826C28.8711 18.9395 28.9027 18.661 28.8186 18.347C28.7345 18.0331 28.5689 17.8119 28.322 17.6833C28.0728 17.5464 27.7665 17.5266 27.403 17.624L26.548 17.8531L27.0992 19.9101Z" fill="#FFE979"></path>
                    </svg></div>
            </div>
            <div class="catalog-card__inner">
                <div class="catalog-card__top">
                    <div class="catalog-card__img">
                        <picture class="picture">
                            <source type="image/webp" srcset="assets/images/catalog-card-img6.webp"><img class="picture__img" src="assets/images/catalog-card-img6.png">
                        </picture>
                    </div>
                    <div class="catalog-card__title">Карамельная косичка</div>
                </div>
                <div class="catalog-card__bot">
                    <div class="catalog-card__text">Мороженое с заменителем молочного жира двухслойное с ароматом ванили и вкусом карамели с мягкой карамелью</div>
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
        </a><a class="catalog-card" href="#">
            <div class="catalog-card__inner">
                <div class="catalog-card__top">
                    <div class="catalog-card__img">
                        <picture class="picture">
                            <source type="image/webp" srcset="assets/images/catalog-card-img7.webp"><img class="picture__img" src="assets/images/catalog-card-img7.png">
                        </picture>
                    </div>
                    <div class="catalog-card__title">Сливочное лакомство</div>
                </div>
                <div class="catalog-card__bot">
                    <div class="catalog-card__text">Мороженое сливочное во взбитой шоколадной сливочной глазури</div>
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
        </a><a class="catalog-card" href="#">
            <div class="catalog-card__inner">
                <div class="catalog-card__top">
                    <div class="catalog-card__img">
                        <picture class="picture">
                            <source type="image/webp" srcset="assets/images/catalog-card-img8.webp"><img class="picture__img" src="assets/images/catalog-card-img8.png">
                        </picture>
                    </div>
                    <div class="catalog-card__title">Варежка</div>
                </div>
                <div class="catalog-card__bot">
                    <div class="catalog-card__text">Мороженое эскимо пломбир ванильный в шоколадной глазури с арахисом</div>
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
        </a></div>
    <div class="catalog-list__more btn-hover_parent">
        <div class="btn-hover_circle"></div><span>Показать еще</span>
    </div>
</section>
