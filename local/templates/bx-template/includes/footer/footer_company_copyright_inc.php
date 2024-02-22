<?php
// Проверяем, загружен ли Prolog
    (!defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED !== true) ?? die('');

// Определяем тип для $Application, что-бы шторм не срал ошибками, и был автокомплит
/** @var \CMain $APPLICATION */

?>

<div class="footer-content__col left">
    <div class="footer-content__rect">
        <div class="footer-content__rect-logo" href="#"><a class="footer-content__rect-link" href="#"><svg width="143" height="138" viewbox="0 0 143 138" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M54.2471 18.2906C52.308 -3.91021 85.8654 -7.02123 87.9995 15.16C89.9347 37.3568 56.3774 40.4718 54.2471 18.2906Z" fill="#F64653"></path>
                    <path d="M70.6727 69.5419C70.505 57.9923 73.8369 33.3906 104.523 28.7417C106.676 28.4161 108.089 30.9465 106.692 32.6256L74.863 71.0327C73.4545 72.7314 70.7039 71.7546 70.6727 69.5419Z" fill="white"></path>
                    <path d="M65.4174 62.1195C70.1812 35.1325 34.4741 22.6728 35.785 32.1314C35.8943 32.9082 36.2454 33.6339 36.7331 34.2459C40.225 38.6045 60.2985 63.6731 60.2985 63.6731C61.9216 65.6974 65.195 64.7127 65.4174 62.1195Z" fill="white"></path>
                    <path d="M0 99.232L4.2059 98.6278C4.26832 99.2202 4.5024 99.691 4.90036 100.04C5.29832 100.389 5.82893 100.566 6.48049 100.566C7.0072 100.566 7.44809 100.429 7.80703 100.154C8.16597 99.8793 8.34545 99.5184 8.34545 99.0711C8.34545 98.6239 8.13866 98.2669 7.72899 97.9923C7.31933 97.7177 6.79652 97.5804 6.16446 97.5804H5.21639V94.2104H6.16446C7.38565 94.2104 7.9982 93.7239 7.9982 92.7471C7.9982 92.3666 7.84604 92.0606 7.53782 91.8252C7.2335 91.5937 6.82774 91.476 6.32053 91.476C5.85625 91.476 5.4466 91.6133 5.08765 91.8879C4.72871 92.1626 4.50631 92.5431 4.42438 93.0335L0.632051 91.9821C1.0105 90.711 1.68939 89.7145 2.67258 88.9927C3.65188 88.2708 4.91208 87.9099 6.44929 87.9099C8.15818 87.9099 9.52761 88.2905 10.5576 89.0555C11.5915 89.8166 12.1066 90.8052 12.1066 92.0135C12.1066 93.5396 11.4433 94.7361 10.1128 95.6071C10.9361 95.9444 11.6032 96.4427 12.1222 97.1017C12.6372 97.7569 12.8986 98.5219 12.8986 99.3889C12.8986 101.001 12.3133 102.245 11.1429 103.124C9.97239 104.002 8.41956 104.442 6.48049 104.442C4.60384 104.442 3.09393 103.963 1.94297 103.01C0.792009 102.061 0.144358 100.801 0 99.232Z" fill="white"></path>
                    <path d="M13.7996 107.816V99.997H15.6021C16.1483 99.13 16.5072 97.8982 16.6789 96.3094L17.4397 88.1729H30.5295V99.997H32.7416V107.816H28.4421V104.191H18.103V107.816H13.7996ZM20.0616 99.997H25.4691V92.3666H21.392L20.916 97.0077C20.7443 98.3415 20.4595 99.338 20.0616 99.997Z" fill="white"></path>
                    <path d="M35.5898 102.092C34.0916 100.523 33.3464 98.5532 33.3464 96.1798C33.3464 93.8063 34.0955 91.8369 35.5898 90.2677C37.088 88.6984 39.1402 87.9177 41.7543 87.9177C44.3683 87.9177 46.4206 88.7023 47.9188 90.2677C49.417 91.8369 50.1622 93.8063 50.1622 96.1798C50.1622 98.5532 49.4131 100.523 47.9188 102.092C46.4206 103.661 44.3683 104.446 41.7543 104.446C39.1402 104.446 37.0841 103.661 35.5898 102.092ZM44.1576 98.9926C44.7039 98.3257 44.9809 97.3881 44.9809 96.1798C44.9809 94.9715 44.7078 94.0338 44.1576 93.3669C43.6075 92.7 42.8077 92.3665 41.7543 92.3665C40.7009 92.3665 39.8971 92.7 39.3509 93.3669C38.8008 94.0338 38.5277 94.9715 38.5277 96.1798C38.5277 97.3881 38.8008 98.3257 39.3509 98.9926C39.8971 99.6596 40.7009 99.993 41.7543 99.993C42.8077 99.997 43.6075 99.6635 44.1576 98.9926Z" fill="white"></path>
                    <path d="M71.5662 102.092C70.068 100.523 69.3228 98.5532 69.3228 96.1798C69.3228 93.8063 70.0719 91.8369 71.5662 90.2677C73.0644 88.6984 75.1166 87.9177 77.7306 87.9177C80.3447 87.9177 82.3969 88.7023 83.8951 90.2677C85.3933 91.8369 86.1385 93.8063 86.1385 96.1798C86.1385 98.5532 85.3894 100.523 83.8951 102.092C82.3969 103.661 80.3447 104.446 77.7306 104.446C75.1166 104.446 73.0604 103.661 71.5662 102.092ZM80.1301 98.9926C80.6763 98.3257 80.9533 97.3881 80.9533 96.1798C80.9533 94.9715 80.6802 94.0338 80.1301 93.3669C79.58 92.7 78.7802 92.3665 77.7267 92.3665C76.6733 92.3665 75.8696 92.7 75.3234 93.3669C74.7732 94.0338 74.5001 94.9715 74.5001 96.1798C74.5001 97.3881 74.7732 98.3257 75.3234 98.9926C75.8696 99.6596 76.6733 99.993 77.7267 99.993C78.7841 99.997 79.5839 99.6635 80.1301 98.9926Z" fill="white"></path>
                    <path d="M88.1245 104.191V88.1689H95.7131C97.3556 88.1689 98.6626 88.5456 99.6341 89.2988C100.602 90.052 101.089 91.0838 101.089 92.398C101.089 93.6495 100.582 94.6656 99.5717 95.4502C100.414 95.8974 101.027 96.4192 101.405 97.0234C101.784 97.6275 101.975 98.4475 101.975 99.4871C101.975 101.033 101.507 102.206 100.567 102.998C99.6302 103.795 98.2959 104.191 96.5675 104.191H88.1245ZM93.1497 93.9555H95.0147C96.0057 93.9555 96.5012 93.5514 96.5012 92.7472C96.5012 91.943 96.0057 91.5389 95.0147 91.5389H93.1497V93.9555ZM93.1497 100.503H95.3307C96.5753 100.503 97.1956 100.017 97.1956 99.0399C97.1956 98.0669 96.5753 97.5765 95.3307 97.5765H93.1497V100.503Z" fill="white"></path>
                    <path d="M104.156 104.191V88.1689H109.341V93.2533H112.248C114.101 93.2533 115.568 93.7319 116.641 94.6852C117.714 95.6385 118.252 96.9841 118.252 98.7221C118.252 100.46 117.714 101.806 116.641 102.759C115.564 103.712 114.101 104.191 112.248 104.191H104.156ZM109.341 100.378H111.366C112.63 100.378 113.262 99.8284 113.262 98.726C113.262 97.6236 112.63 97.0744 111.366 97.0744H109.341V100.378ZM119.934 88.1689H125.119V104.191H119.934V88.1689Z" fill="white"></path>
                    <path d="M143 95.862V97.7686H132.251C132.715 99.4006 133.769 100.217 135.411 100.217C136.149 100.217 136.765 100.075 137.261 99.789C137.756 99.5027 138.213 99.0083 138.638 98.31L142.746 99.7734C141.334 102.888 138.814 104.446 135.189 104.446C132.618 104.446 130.636 103.626 129.247 101.982C127.854 100.338 127.16 98.4042 127.16 96.1798C127.16 93.9554 127.854 92.0213 129.247 90.3775C130.636 88.7377 132.618 87.9138 135.189 87.9138C136.559 87.9138 137.76 88.1453 138.794 88.6121C139.828 89.079 140.64 89.7027 141.229 90.4874C141.818 91.272 142.263 92.1155 142.555 93.0138C142.856 93.9201 143 94.8656 143 95.862ZM132.318 94.1476H138.104C138.018 93.4258 137.717 92.8373 137.202 92.3822C136.687 91.9272 136.016 91.6996 135.193 91.6996C133.738 91.6996 132.778 92.5156 132.318 94.1476Z" fill="white"></path>
                    <path d="M1.073 131.515V115.493H16.1837V131.515H10.9986V119.691H6.25819V131.515H1.073Z" fill="white"></path>
                    <path d="M38.52 129.416C37.0218 127.847 36.2766 125.878 36.2766 123.504C36.2766 121.131 37.0257 119.161 38.52 117.592C40.0182 116.023 42.0704 115.242 44.6845 115.242C47.2985 115.242 49.3508 116.027 50.849 117.592C52.3472 119.161 53.0924 121.131 53.0924 123.504C53.0924 125.878 52.3433 127.847 50.849 129.416C49.3508 130.986 47.2985 131.77 44.6845 131.77C42.0704 131.77 40.0143 130.986 38.52 129.416ZM47.0878 126.317C47.6341 125.65 47.9111 124.713 47.9111 123.504C47.9111 122.296 47.638 121.358 47.0878 120.691C46.5377 120.024 45.7379 119.691 44.6845 119.691C43.6311 119.691 42.8273 120.024 42.2811 120.691C41.731 121.358 41.4579 122.296 41.4579 123.504C41.4579 124.713 41.731 125.65 42.2811 126.317C42.8273 126.984 43.6311 127.317 44.6845 127.317C45.7379 127.321 46.5377 126.988 47.0878 126.317Z" fill="white"></path>
                    <path d="M53.7009 135.14V127.321H55.5034C56.0497 126.454 56.4086 125.222 56.5803 123.634L57.3411 115.497H70.4308V127.321H72.643V135.14H68.3435V131.515H58.0043V135.14H53.7009ZM59.959 127.321H65.3666V119.691H61.2895L60.8135 124.332C60.6457 125.666 60.3609 126.662 59.959 127.321Z" fill="white"></path>
                    <path d="M89.0725 131.515V115.493H94.2577V120.899L98.1749 115.493H104.374L98.526 122.774L104.784 131.515H98.6196L94.2577 124.999V131.515H89.0725Z" fill="white"></path>
                    <path d="M109.466 131.515V119.691H105.007V115.493H119.107V119.691H114.651V131.515H109.466Z" fill="white"></path>
                    <path d="M120.426 131.515V115.493H125.611V120.578H128.521C130.375 120.578 131.842 121.056 132.914 122.009C133.991 122.963 134.526 124.308 134.526 126.046C134.526 127.784 133.987 129.13 132.914 130.083C131.838 131.036 130.375 131.515 128.521 131.515H120.426ZM125.611 127.702H127.636C128.9 127.702 129.532 127.153 129.532 126.05C129.532 124.948 128.9 124.399 127.636 124.399H125.611V127.702ZM136.2 115.493H141.385V131.515H136.2V115.493Z" fill="white"></path>
                    <path d="M33.2179 117.482C31.9655 115.987 30.3151 115.493 28.2707 115.493H19.1021V138H24.2872V131.515V130.562C25.0246 131.366 26.1834 131.77 27.7635 131.77C29.9133 131.77 31.6729 131.017 33.0423 129.514C34.4118 128.012 35.0985 126.007 35.0985 123.508C35.0985 120.986 34.4703 118.977 33.2179 117.482ZM29.2344 126.348C28.696 126.996 27.9625 127.317 27.0378 127.317C26.1092 127.317 25.3796 126.996 24.8412 126.348C24.3028 125.701 24.0336 124.756 24.0336 123.504C24.0336 123.5 24.0336 123.496 24.0336 123.488V119.687H27.0378C27.9664 119.687 28.696 120.009 29.2344 120.656C29.7728 121.303 30.042 122.253 30.042 123.5C30.042 124.756 29.7728 125.705 29.2344 126.348Z" fill="white"></path>
                    <path d="M66.264 90.0283C65.0116 88.5336 63.3613 88.0393 61.3169 88.0393H52.1482V110.546H57.3334V104.061V103.108C58.0708 103.912 59.2295 104.316 60.8096 104.316C62.9594 104.316 64.719 103.563 66.0885 102.06C67.4579 100.558 68.1446 98.5532 68.1446 96.0542C68.1446 93.5316 67.5164 91.523 66.264 90.0283ZM62.2805 98.8984C61.7421 99.5457 61.0086 99.8675 60.084 99.8675C59.1593 99.8675 58.4258 99.5457 57.8874 98.8984C57.349 98.2511 57.0797 97.3057 57.0797 96.0542C57.0797 96.0503 57.0797 96.0464 57.0797 96.0385V92.237H60.084C61.0125 92.237 61.7421 92.5587 62.2805 93.206C62.819 93.8533 63.0882 94.8027 63.0882 96.0503C63.0882 97.3057 62.819 98.2511 62.2805 98.8984Z" fill="white"></path>
                    <path d="M74.8005 138H79.6696L87.9526 115.493H82.9586L80.1456 123.281L77.235 115.493H71.8938L77.6135 130.244L74.8005 138Z" fill="white"></path>
                </svg></a></div>
        <div class="footer-content__rect-copy">© 2008-2023 «Здоровые продукты»</div>
    </div>
</div>