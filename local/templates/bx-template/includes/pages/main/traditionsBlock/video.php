<?php
// Проверяем, загружен ли Prolog
    (!defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED !== true) ?? die('');

// Определяем тип для $Application, что-бы шторм не срал ошибками, и был автокомплит
/** @var \CMain $APPLICATION */

?>

<div class="main-traditions__video" data-button-fade="main-video">
    <div class="main-traditions__video-bg"><svg width="1840" height="700" viewbox="0 0 1840 700" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g style="mix-blend-mode:soft-light" opacity="0.7">
                <path d="M812.647 942.126C853.357 444.751 1100.1 -600.977 2444.96 -688.77C2539.48 -694.788 2589.74 -581.153 2522.48 -513.892L987.522 1021.42C919.554 1089.75 804.858 1037.35 812.647 942.126Z" fill="black"></path>
                <path d="M-613.638 -687.707C-116.262 -646.643 929.464 -400.256 1017.26 944.605C1023.27 1039.12 909.641 1089.39 842.381 1022.13L-692.935 -512.829C-761.257 -580.798 -708.865 -695.495 -613.638 -687.707Z" fill="black"></path>
            </g>
        </svg></div>
    <div class="main-traditions__video-video"><video src="<?= SITE_TEMPLATE_PATH; ?>/assets/videos/zp_preview.mp4" loop muted playsinline autoplay preload="none"></video></div>
    <div class="main-traditions__video-button"><svg width="576" height="202" viewbox="0 0 576 202" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M36.408 72.16C26.568 72.16 18.04 68.9347 10.824 62.484C3.608 56.0333 0 47.1773 0 35.916C0 25.2013 3.49866 16.564 10.496 10.004C17.6027 3.33467 26.404 0 36.9 0C47.5053 0 56.3067 3.06134 63.304 9.18401L53.628 23.288C49.5827 19.8987 44.8813 18.204 39.524 18.204C34.604 18.204 30.504 19.844 27.224 23.124C23.944 26.2947 22.304 30.6133 22.304 36.08C22.304 41.5467 23.8893 45.8653 27.06 49.036C30.34 52.0973 34.3307 53.628 39.032 53.628C44.8267 53.628 49.9653 51.6053 54.448 47.56L65.272 61.008C60.8987 65.0533 56.5253 67.9507 52.152 69.7C47.888 71.34 42.64 72.16 36.408 72.16Z" fill="white"></path>
            <path d="M148.792 1.968L154.368 69.864H129.112L127.964 49.856C127.854 49.2 127.745 48.1067 127.636 46.576C127.636 45.0453 127.636 43.8973 127.636 43.132C125.777 45.6467 123.973 47.9427 122.224 50.02L114.352 58.876H109.104L101.396 49.856C100.958 49.3093 100.138 48.3253 98.9356 46.904C97.7329 45.3733 96.8036 44.1707 96.1476 43.296L95.6556 49.692L94.1796 69.864H69.0876L75.4836 1.968H84.5036L105.004 24.436C107.081 26.732 109.322 29.3013 111.728 32.144C113.149 30.3947 115.39 27.88 118.452 24.6L139.772 1.968H148.792Z" fill="white"></path>
            <path d="M195.888 72.16C184.736 72.16 175.606 68.8253 168.5 62.156C161.502 55.3773 158.004 46.6853 158.004 36.08C158.004 25.4747 161.502 16.8373 168.5 10.168C175.606 3.38934 184.736 0 195.888 0C206.93 0 216.005 3.38934 223.112 10.168C230.218 16.8373 233.772 25.4747 233.772 36.08C233.772 46.6853 230.218 55.3773 223.112 62.156C216.005 68.8253 206.93 72.16 195.888 72.16Z" fill="white"></path>
            <path d="M252.273 69.864V20.5H234.069V2.132H292.945V20.5H274.577V69.864H252.273Z" fill="white"></path>
            <path d="M341.771 0.328003C351.064 0.328003 358.718 3.66267 364.731 10.332C370.744 17.0013 373.751 25.3653 373.751 35.424C373.751 46.248 370.799 55.0493 364.895 61.828C358.991 68.4973 351.338 71.832 341.935 71.832C333.407 71.832 326.355 69.044 320.779 63.468C321.107 68.8253 321.271 74.456 321.271 80.36V105.944H299.295V2.132H313.563L317.827 12.464C323.84 4.37333 331.822 0.328003 341.771 0.328003ZM336.359 53.464C340.842 53.464 344.45 51.8787 347.183 48.708C350.026 45.5373 351.447 41.3827 351.447 36.244C351.447 30.8867 350.08 26.6227 347.347 23.452C344.614 20.2813 340.951 18.696 336.359 18.696C331.548 18.696 327.667 20.2267 324.715 23.288C321.872 26.3493 320.451 30.504 320.451 35.752C320.451 41.1093 321.872 45.428 324.715 48.708C327.667 51.8787 331.548 53.464 336.359 53.464Z" fill="white"></path>
            <path d="M414.917 0C424.539 0 432.137 3.00667 437.713 9.02C443.399 15.0333 446.241 23.2333 446.241 33.62C446.241 36.9 446.023 39.9067 445.585 42.64H400.321C402.727 51.2773 409.177 55.596 419.673 55.596C426.561 55.596 432.028 53.8467 436.073 50.348L443.617 64.124C435.417 69.4813 426.452 72.16 416.721 72.16C405.351 72.16 396.167 68.8253 389.169 62.156C382.172 55.4867 378.673 46.7947 378.673 36.08C378.673 25.6933 382.063 17.1107 388.841 10.332C395.729 3.444 404.421 0 414.917 0ZM423.117 19.68C420.821 17.384 417.869 16.236 414.261 16.236C410.653 16.236 407.537 17.4387 404.913 19.844C402.399 22.14 400.759 25.4747 399.993 29.848H426.725C426.616 25.3653 425.413 21.976 423.117 19.68Z" fill="white"></path>
            <path d="M465.576 69.864V20.5H447.372V2.132H506.248V20.5H487.88V69.864H465.576Z" fill="white"></path>
            <path d="M550.481 22.304C558.244 22.304 564.421 24.4907 569.013 28.864C573.605 33.128 575.901 38.868 575.901 46.084C575.901 53.5187 573.605 59.368 569.013 63.632C564.421 67.7867 558.244 69.864 550.481 69.864H512.597V2.132H534.901V22.304H550.481ZM544.085 54.94C547.365 54.94 549.935 54.1747 551.793 52.644C553.652 51.004 554.581 48.8173 554.581 46.084C554.581 40.18 551.083 37.228 544.085 37.228H534.901V54.94H544.085Z" fill="white"></path>
            <path d="M153.145 150.096C160.361 152.939 163.969 158.241 163.969 166.004C163.969 171.908 161.946 176.555 157.901 179.944C153.855 183.224 148.334 184.864 141.337 184.864H101.813V117.132H139.041C145.71 117.132 151.013 118.772 154.949 122.052C158.994 125.332 161.017 129.76 161.017 135.336C161.017 142.005 158.393 146.925 153.145 150.096ZM132.645 130.908H122.969V144.684H132.645C137.893 144.684 140.517 142.333 140.517 137.632C140.517 133.149 137.893 130.908 132.645 130.908ZM134.121 171.088C139.587 171.088 142.321 168.737 142.321 164.036C142.321 159.335 139.587 156.984 134.121 156.984H122.969V171.088H134.121Z" fill="white"></path>
            <path d="M227.586 116.968H235.622V184.864H214.302V159.936C214.302 156.437 214.357 153.813 214.466 152.064C213.373 153.376 211.569 155.289 209.055 157.804L180.682 185.028H172.646V117.132H193.966V141.404C193.966 144.684 193.912 147.144 193.802 148.784C195.114 147.253 197.192 145.176 200.034 142.552L227.586 116.968Z" fill="white"></path>
            <path d="M312.234 167.644H322.238V201.92H302.722V184.864H261.394V201.92H241.878V167.644H250.734C253.467 163.052 255.162 156.765 255.818 148.784L258.606 117.132H312.234V167.644ZM277.302 133.696L275.498 152.064C274.842 158.952 273.639 164.255 271.89 167.972H292.062V133.696H277.302Z" fill="white"></path>
            <path d="M360.865 115C370.486 115 378.085 118.007 383.661 124.02C389.346 130.033 392.189 138.233 392.189 148.62C392.189 151.9 391.97 154.907 391.533 157.64H346.269C348.674 166.277 355.125 170.596 365.621 170.596C372.509 170.596 377.975 168.847 382.021 165.348L389.565 179.124C381.365 184.481 372.399 187.16 362.669 187.16C351.298 187.16 342.114 183.825 335.117 177.156C328.119 170.487 324.621 161.795 324.621 151.08C324.621 140.693 328.01 132.111 334.789 125.332C341.677 118.444 350.369 115 360.865 115ZM369.065 134.68C366.769 132.384 363.817 131.236 360.209 131.236C356.601 131.236 353.485 132.439 350.861 134.844C348.346 137.14 346.706 140.475 345.941 144.848H372.673C372.563 140.365 371.361 136.976 369.065 134.68Z" fill="white"></path>
            <path d="M434.3 187.16C423.148 187.16 414.018 183.825 406.912 177.156C399.914 170.377 396.416 161.685 396.416 151.08C396.416 140.475 399.914 131.837 406.912 125.168C414.018 118.389 423.148 115 434.3 115C445.342 115 454.417 118.389 461.524 125.168C468.63 131.837 472.184 140.475 472.184 151.08C472.184 161.685 468.63 170.377 461.524 177.156C454.417 183.825 445.342 187.16 434.3 187.16ZM422.984 163.872C425.826 167.043 429.598 168.628 434.3 168.628C439.001 168.628 442.773 167.043 445.616 163.872C448.458 160.592 449.88 156.328 449.88 151.08C449.88 145.832 448.458 141.623 445.616 138.452C442.773 135.172 439.001 133.532 434.3 133.532C429.598 133.532 425.826 135.172 422.984 138.452C420.141 141.623 418.72 145.832 418.72 151.08C418.72 156.328 420.141 160.592 422.984 163.872Z" fill="white"></path>
            <path d="M186 34.4569L186 29.6989C186 24.5643 191.893 21.6638 195.962 24.7959L204.335 31.2413C207.552 33.7182 207.552 38.5705 204.335 41.0473L195.962 47.4928C191.893 50.6249 186 47.7244 186 42.5898L186 37.8319L186 34.4569Z" fill="#0068FF"></path>
        </svg></div>
</div>