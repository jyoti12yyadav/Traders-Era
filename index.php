<?php include("includes/header.php") ?>
<!-- header-section start -->
<style>
    .slider {
        margin: 0 auto;
        max-width: auto;
    }

    .slide_viewer {
        height: 760px;
        overflow: hidden;
        position: relative;
        margin-top: -45px;
    }

    .slide_group {
        height: 100%;
        position: relative;
        width: 100%;
    }

    .slide {
        display: none;
        height: 100%;
        position: absolute;
        width: 100%;
    }

    .slide:first-child {
        display: block;
    }

    .slide_buttons {
        left: 0;
        position: absolute;
        right: 0;
        text-align: center;
    }

    a.slide_btn {
        color: #474544;
        font-size: 42px;
        margin: 0 0.175em;
        -webkit-transition: all 0.4s ease-in-out;
        -moz-transition: all 0.4s ease-in-out;
        -ms-transition: all 0.4s ease-in-out;
        -o-transition: all 0.4s ease-in-out;
        transition: all 0.4s ease-in-out;
    }

    .slide_btn.active,
    .slide_btn:hover {
        color: #428CC6;
        cursor: pointer;
    }

    .directional_nav {
        height: 0px;
        margin: 0 auto;
        max-width: 940px;
        position: relative;
        top: -340px;
    }

    .previous_btn {
        bottom: 0;
        left: 100px;
        margin: auto;
        position: absolute;
        top: 0;
    }

    .next_btn {
        bottom: 0;
        margin: auto;
        position: absolute;
        right: 100px;
        top: 0;
    }

    .previous_btn,
    .next_btn {
        cursor: pointer;
        height: 65px;
        opacity: 0.5;
        -webkit-transition: opacity 0.4s ease-in-out;
        -moz-transition: opacity 0.4s ease-in-out;
        -ms-transition: opacity 0.4s ease-in-out;
        -o-transition: opacity 0.4s ease-in-out;
        transition: opacity 0.4s ease-in-out;
        width: 65px;
    }

    .previous_btn:hover,
    .next_btn:hover {
        opacity: 1;
    }

    @media only screen and (max-width: 767px) {
        .previous_btn {
            left: 50px;
        }

        .next_btn {
            right: 50px;
        }
    }

    .fs-three,
    h3,
    h3>a {
        font-size: 22px;
    }

    .company-story__part {
        border: solid 1px white;
        padding: 30px;
        border-radius: 19px;
    }

    .p1-xxl-bg2 {
        background-color: #f5c06d;
    }


    /* > Process Styles */
    .process-wrap {
        width: 55%;
        margin: 100px auto;
        margin-left: -50px
    }

    .process-main {
        width: 100%;
        min-width: 320px;
        display: flex;
    }

    .col-3 {
        width: 50%;
        position: relative;
    }

    .col-3:first-child .process-step:before {
        content: '1';
    }

    .col-3:nth-child(2) .process-step:before {
        content: '2';
    }

    .col-3:nth-child(3) .process-step:before {
        content: '3';
    }

    .col-3:last-child .process-step:before {
        content: '4';
    }

    .process-main .col-3:not(:first-child):before {
        content: "";
        display: block;
        position: absolute;
        width: 100%;
        height: 4px;
        top: 17.5px;
        left: calc(-50% + 17px);
        right: 0;
        background: #ebebeb;
        border: 2px #ebebeb solid;
        -o-transition: .8s;
        -ms-transition: .8s;
        -moz-transition: .8s;
        -webkit-transition: .8s;
        transition: .8s;
    }

    .process-step-cont {
        font-family: sans-serif;
        font-size: 16px;
        text-transform: uppercase;
        text-decoration: none;
        white-space: nowrap;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        align-content: space-between;
    }

    .process-step {
        border: 5px #ebebeb solid;
        border-radius: 100%;
        line-height: 0;
        background: #959595;
        text-align: center;
        align-items: center;
        justify-content: center;
        align-self: center;
        display: flex;
        color: #fff;
        width: 35px;
        height: 35px;
        font-weight: 700;
        margin-bottom: 7px;
        z-index: 4;
        cursor: pointer;
    }

    .process-label {
        color: #959595;
        font-weight: 600;
        width: 100%;
        text-align: center;
    }

    .process-dots {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #ebebeb;
        cursor: pointer;
    }

    .process-dot-cont {
        display: flex;
        justify-content: space-around;
        align-items: stretch;
        width: 60%;
        padding-top: 5px;
    }

    .active-step1 .col-3:first-child .process-step,
    .active-step1 .col-3:first-child .process-dots:first-child,
    .active-step1-mini2 .col-3:first-child .process-step,
    .active-step1-mini2 .col-3:first-child .process-dots:nth-child(-n+2),
    .active-step1-mini3 .col-3:first-child .process-step,
    .active-step1-mini3 .col-3:first-child .process-dots:nth-child(-n+3),
    .active-step1-mini4 .col-3:first-child .process-step,
    .active-step1-mini4 .col-3:first-child .process-dots:nth-child(-n+4) {
        background-color: #f89828;
    }

    .active-step1-mini2 .col-3:first-child .process-dots:first-child,
    .active-step1-mini3 .col-3:first-child .process-dots:nth-child(-n+2),
    .active-step1-mini4 .col-3:first-child .process-dots:nth-child(-n+3) {
        background-color: #fbcb93;
    }

    .active-step1 .col-3:first-child .process-label,
    .active-step1-mini3 .col-3:first-child .process-label,
    .active-step1-mini2 .col-3:first-child .process-label,
    .active-step1-mini4 .col-3:first-child .process-label {
        color: #f89828;
    }

    .active-step2 .col-3:first-child,
    .active-step3 .col-3:nth-child(-n+2),
    .active-step4 .col-3:nth-child(-n+3) {
        opacity: 0.5;
        /*pointer-events: none;*/
    }

    .active-step2 .col-3:first-child .process-step:before,
    .active-step3 .col-3:nth-child(-n+2) .process-step:before,
    .active-step4 .col-3:nth-child(-n+3) .process-step:before {
        content: '\2713';
        padding: 7px;
    }

    .active-step2 .col-3:nth-child(-n+2) .process-step,
    .active-step2 .col-3:nth-child(-n+2) .process-dots,
    .active-step3 .col-3:nth-child(-n+3) .process-step,
    .active-step3 .col-3:nth-child(-n+3) .process-dots,
    .active-step4 .col-3:nth-child(-n+4) .process-step,
    .active-step4 .col-3:nth-child(-n+4) .process-dots {
        background-color: #f89828;
    }

    .active-step2 .col-3:nth-child(-n+2) .process-label,
    .active-step3 .col-3:nth-child(-n+3) .process-label,
    .active-step4 .col-3:nth-child(-n+4) .process-label {
        color: #f89828;
    }

    .active-step2 .col-3:nth-child(-n+2):before,
    .active-step3 .col-3:nth-child(-n+3):before,
    .active-step4 .col-3:nth-child(-n+4):before {
        background: #f89828 !important;
    }

    @media (min-width: 991px) {
        .pb-lg-120 {
            padding-bottom: 180px !important;
        }
    }

    @media screen and (max-width: 640px) {
        .process-main {
            flex-wrap: wrap;
        }

        .col-3 {
            width: 50%;
        }

        .process-main .col-3:nth-of-type(3):not(:first-child):before {
            top: -19.5px;
            left: calc(-50% + 145px);
            transform: rotate(150deg);
        }
    }



    .our-clients .container {
        width: 100%;
        height: 35%;
        display: flex;
        align-items: center;
        overflow: hidden;
    }

    .our-clients .container ul {
        display: flex;
        flex-wrap: nowrap;
        width: 100%;
        transition: 0.3s;
    }

    .our-clients .container ul li {
        list-style: none;
        width: 40%;
        height: 100px;
        flex-shrink: 0;
        box-sizing: border-box;
        padding: 0 8px;
        margin-top: 25px;
    }

    .our-clients .container ul li p {
        background: #58585a;
        text-align: center;
        color: #fff;
        line-height: 100px;
        border-radius: 8px;
    }

    .our-clients {
        margin-top: 10px;
    }

    .get-started::after {
        position: relative;
        content: "\2192";
        display: flex;
        float: right;
        bottom: 111px;
        font-size: 70px;
        left: 80px;
        color: #9ad953;
    }


    .pb-120 {
        padding-bottom: 60px !important;
    }

    .pt-120 {
        padding-top: 60px !important;
    }
</style>


<iframe
    src="https://fxpricing.com/fx-widget/ticker-tape-widget.php?id=1,2,3,5,14,20&border=show&speed=50&click_target=blank&theme=dark&tm-cr=212529&hr-cr=FFFFFF13&by-cr=28A745&sl-cr=DC3545&flags=circle&d_mode=regular&column=&lang=en&font=Arial, sans-serif"
    width="100%" height="85" style="border: unset;margin-top:132px"></iframe>
<style type="text/css">
    #fx-pricing-widget-copyright {
        text-align: center;
        font-size: 13px;
        font-family: sans-serif;
        margin-top: 10px;
        margin-bottom: 10px;
        color: #9db2bd;
    }

    #fx-pricing-widget-copyright a {
        text-decoration: unset;
        color: #bb3534;
        font-weight: 600;
    }
</style>
<!-- slider -->
<div class="slider">
    <div class="slide_viewer">
        <div class="slide_group">
            <div class="slide hero-section--secondary hero-section position-relative z-0 ">
                <!-- <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
                    <img src="assets/images/hero_vector.png" alt="hero_vector"
                        class="position-absolute d-none d-xxxl-flex bottom-0 end-0 previewShapeRevX">
                </div> -->
                <div class="container">
                    <div
                        class="row pt-4 pt-lg-10 gy-12 gy-lg-0 justify-content-center justify-content-lg-between align-items-center">
                        <div class="col-lg-6 col-xxl-7">
                            <div class="hero-card p1-xxl-bg pt-xl-20 pb-xl-20 position-relative">
                                <div class="pt-xxl-10 pb-xxl-10">
                                    <div
                                        class="first d-center cus-z1 position-absolute end-0 top-0 d-none d-xxl-flex  me-lg-10 mt-lg-10">


                                    </div>
                                    <span class="heading p1-max-xxl nb4-xxl-color fs-five mb-3">Master the
                                        Markets</span>
                                    <h1 class="display-two nb4-xxl-color mb-5 mb-lg-6"> UTIP Platform, with cutting edge
                                        technology.
                                    </h1>
                                    <p class="fs-six-up fw_500 nb4-xxl-color"> Polish your Trading skills with Zero Risk
                                        Demo Accounts.</p>
                                    <div class="d-flex mt-8">

                                        <img class="mx-4" src="images\icon\UTIP logo black slider.png" alt="openai"
                                            style="height: 35px;">
                                        <!-- <img class="mx-4" src="assets/images/icon/Equinix_logo.svg.png" alt="Equinix_logo" style="height: 40px;"> -->
                                    </div>

                                    <div
                                        class="d-inline-flex flex-wrap gap-4 gap-lg-10 align-items-center mt-8 mt-lg-10">
                                        <a href="https://tradersera.com/prelogin.php"
                                            class="cmn-btn alt-xxl-bg fs-five nb4-xxl-bg gap-2 gap-lg-3 align-items-center py-2 px-5 py-lg-3 px-lg-6">Start
                                            Trading <i class="ti ti-trending-up"></i></a>
                                        <a href="https://trading.tradersera.com/register"
                                            class="cmn-btn link link-xxl-color fs-five  gap-2 gap-lg-3 align-items-center "><i
                                                class="ti ti-arrow-narrow-right fs-four"></i> Try demo account</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-lg-6 col-xxl-5">
                            <div class="hero-section__thumbs pb-xxl-10">
                                <img src="assets/images/fst banner.png" class="max-auto max-xxl-un" alt="banner one">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="slide hero-section--secondary hero-section2 position-relative z-0 ">
                <!-- <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
                    <img src="assets/images/hero_vector.png" alt="hero_vector"
                        class="position-absolute d-none d-xxxl-flex bottom-0 end-0 previewShapeRevX">
                </div> -->
                <div class="container">
                    <div
                        class="row pt-4 pt-lg-10 gy-12 gy-lg-0 justify-content-center justify-content-lg-between align-items-center row-reverse">
                        <div class="col-sm-10 col-lg-6 col-xxl-5">
                            <div class="hero-section__thumbs hero-section-2 pb-xxl-10">
                                <img src="assets/images/scd banner.png" class="max-auto max-xxl-un" alt="banner two">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xxl-7">
                            <div class="hero-card hero-card2 p1-xxl-bg2 pt-xl-20 pb-xl-20 position-relative">
                                <div class="pt-xxl-10 pb-xxl-10">
                                    <div
                                        class=" first d-center cus-z1 position-absolute end-0 top-0 d-none d-xxl-flex  me-lg-10 mt-lg-10">

                                    </div>
                                    <span class="heading p1-max-xxl nb4-xxl-color fs-five mb-3"
                                        style="transform: scaleX(-1);">Empower Your
                                        Trades</span>
                                    <h1 class="display-two nb4-xxl-color mb-5 mb-lg-6" style="transform: scaleX(-1);">
                                        Range of Markets, with Safety & Service Quality.

                                    </h1>
                                    <p class="fs-six-up fw_500 nb4-xxl-color" style="transform: scaleX(-1);">Trade
                                        smarter with personalised support & market insights.</p>
                                    <div class="d-flex mt-8" style="transform: scaleX(-1);">

                                        <img class="mx-4" src="assets\images\icon\logo UTIP logo black.png" alt="openai"
                                            style="height: 35px;"></h3>
                                        <!-- <img class="mx-4" src="assets/images/icon/Equinix_logo.svg.png" alt="Equinix_logo" style="height: 35px;"> -->
                                    </div>
                                    
                                    <div class="d-inline-flex flex-wrap gap-4 gap-lg-10 align-items-center mt-8
                                        mt-lg-10">
                                        <a href="https://tradersera.com/prelogin.php"
                                            class="cmn-btn alt-xxl-bg fs-five nb4-xxl-bg gap-2 gap-lg-3 align-items-center py-2 px-5 py-lg-3 px-lg-6"
                                            style="transform: scaleX(-1);">Start
                                            Trading <i class="ti ti-trending-up"></i></a>
                                        <a href="https://trading.tradersera.com/register"
                                            class="cmn-btn link link-xxl-color fs-five gap-2 gap-lg-3 align-items-center "
                                            style="transform: scaleX(-1);">
                                            <i class="ti ti-arrow-narrow-right fs-four"></i> Try demo account</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- End // .slider -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<div class="client_company_section py-10 p1-bg align-items-center justify-content-center">
    <!-- Swiper -->
    <div class="swiper client_company swiper-initialized swiper-horizontal swiper-pointer-events">
        <div class="swiper-wrapper align-items-center" id="swiper-wrapper-103fd5d41f551ce67" aria-live="off"
            style="transition-duration: 6000ms; transform: translate3d(-1964px, 0px, 0px);">
            <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="0" role="group"
                aria-label="1 / 7" style="width: 230.571px; margin-right: 50px;">
                <img src="assets/images/icon/logo equinix logo black.png" alt="logo equinix logo black">
            </div>
            <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="1" role="group"
                aria-label="2 / 7" style="width: 230.571px; margin-right: 50px;">
                <img src="assets/images/icon/logo UTIP logo black.png" alt="logo UTIP logo black">
            </div>
            <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-prev"
                data-swiper-slide-index="2" role="group" aria-label="3 / 7"
                style="width: 230.571px; margin-right: 50px;">
                <img src="assets/images/icon/logo marketcheese logo black.png" alt="logo marketcheese logo black">
            </div>
            <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-active"
                data-swiper-slide-index="3" role="group" aria-label="4 / 7"
                style="width: 230.571px; margin-right: 50px;">
                <img src="assets/images/icon/logo SSL secured logo black.png" alt="logo SSL secured logo black">
            </div>
            <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-next"
                data-swiper-slide-index="4" role="group" aria-label="5 / 7"
                style="width: 230.571px; margin-right: 50px;">
                <img src="assets/images/icon/logo trading view logo black.png" alt="logo trading view logo black">
            </div>
            <div class="swiper-slide text-center" data-swiper-slide-index="0" role="group" aria-label="1 / 7"
                style="width: 230.571px; margin-right: 50px;">
                <img src="assets/images/icon/logo equinix logo black.png" alt="logo equinix logo black">
            </div>
            <div class="swiper-slide text-center" data-swiper-slide-index="1" role="group" aria-label="2 / 7"
                style="width: 230.571px; margin-right: 50px;">
                <img src="assets/images/icon/logo UTIP logo black.png" alt="logo UTIP logo black">
            </div>
            <div class="swiper-slide text-center swiper-slide-prev" data-swiper-slide-index="2" role="group"
                aria-label="3 / 7" style="width: 230.571px; margin-right: 50px;">
                <img src="assets/images/icon/logo marketcheese logo black.png" alt="logo marketcheese  logo black">
            </div>
            <div class="swiper-slide text-center swiper-slide-active" data-swiper-slide-index="3" role="group"
                aria-label="4 / 7" style="width: 230.571px; margin-right: 50px;">
                <img src="assets/images/icon/logo investor in people logo black.png"
                    alt="logo investor in people logo black">
            </div>
            <div class="swiper-slide text-center swiper-slide-next" data-swiper-slide-index="4" role="group"
                aria-label="5 / 7" style="width: 230.571px; margin-right: 50px;">
                <img src="assets/images/icon/logo trading view logo black.png" alt="logo trading view logo black">
            </div>
            <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="0" role="group"
                aria-label="1 / 7" style="width: 230.571px; margin-right: 50px;">
                <img src="assets/images/icon/logo equinix logo black.png" alt="logo equinix logo black">
            </div>
            <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="1" role="group"
                aria-label="2 / 7" style="width: 230.571px; margin-right: 50px;">
                <img src="assets/images/icon/logo UTIP logo black.png" alt="logo UTIP logo black">
            </div>
            <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-prev"
                data-swiper-slide-index="2" role="group" aria-label="3 / 7"
                style="width: 230.571px; margin-right: 50px;">
                <img src="assets/images/icon/logo marketcheese logo black.png" alt="logo marketcheese  logo black">
            </div>
            <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-active"
                data-swiper-slide-index="3" role="group" aria-label="4 / 7"
                style="width: 230.571px; margin-right: 50px;">
                <img src="assets/images/icon/logo investor in people logo black.png" alt="people logo black">
            </div>
            <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-next"
                data-swiper-slide-index="4" role="group" aria-label="5 / 7"
                style="width: 230.571px; margin-right: 50px;">
                <img src="assets/images/icon/logo trading view logo black.png" alt="view logo black">
            </div>
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
</div>



<!--Trade On start-->
<section class="pt-120 pb-120" style="background-color: #000;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-7">
                <div class="heading__content mb-10 mb-lg-15 text-center">
                    <!-- <span class="heading p1-color fs-five mb-5">Global Trust, Unbeatable Rates</span> -->
                    <h2 class="mb-5 mb-lg-6">Benefits with TradersEra
                    </h2>
                </div>
            </div>
        </div>
        <div class="row gy-15 gy-lg-0 justify-content-center align-items-center">
            <div class="col-sm-10 col-lg-6 col-xxl-6">
                <div class="row d-flex justify-content-end">
                    <div class="col-xxl-12">
                        <div class="company-story__part">
                            <div class="row">
                                <div class="col-lg-2 d-flex align-items-center">
                                    <img src="assets/images/icon/seesaw.png" alt="seesaw">
                                </div>
                                <div class="col-lg-10 d-flex align-items-center">
                                    <div class="row">
                                        <h3 class="">Forex, Crypto Trading</h3>
                                        <span>Multiple Assets and Trading type under one Roof.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12 mt-8 mt-md-10 mt-xxl-13">
                        <div class="company-story__part d-flex align-items-sm-center flex-column flex-sm-row">
                            <div class="row">
                                <div class="col-lg-2 d-flex align-items-center">
                                    <img src="assets/images/icon/candlestick-chart.png" alt="candlestick-chart">
                                </div>
                                <div class="col-lg-10 d-flex align-items-center">
                                    <div class="row">
                                        <h3 class="">Trading Across Many Platforms</h3>
                                        <span>Trading using simple options on several platforms like MT5 & UTIP.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12 mt-8 mt-md-10 mt-xxl-13">
                        <div class="company-story__part d-flex align-items-sm-center flex-column flex-sm-row">
                            <div class="row">
                                <div class="col-lg-2 d-flex align-items-center">
                                    <img src="assets/images/icon/Web-Platform.png" alt="Web-Platform">
                                </div>
                                <div class="col-lg-10 d-flex align-items-center">
                                    <div class="row">
                                        <h3 class="">Web Platform for All</h3>
                                        <span>No download, No setup, No fuss Trade on the go.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-lg-6 col-xxl-6 ">
                <div class="row d-flex justify-content-end">
                    <div class="col-xxl-12 ">
                        <div class="company-story__part">
                            <div class="row">
                                <div class="col-lg-2 d-flex align-items-center">
                                    <img src="assets/images/icon/Multiple Funding.png" alt="Multiple Funding">
                                </div>
                                <div class="col-lg-10 d-flex align-items-center">
                                    <div class="row">
                                        <h3 class="">Multiple Funding Options</h3>
                                        <span>Pay via cards,banks,local transfer and cryptose.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12 mt-md-10 mt-xxl-13">
                        <div class="company-story__part d-flex align-items-sm-center flex-column flex-sm-row">
                            <div class="row">
                                <div class="col-lg-2 d-flex align-items-center">
                                    <img src="assets/images/icon/active-user.png" alt="active-user">
                                </div>
                                <div class="col-lg-10 d-flex align-items-center">
                                    <div class="row">
                                        <h3 class="">Safety of Funds Assured</h3>
                                        <span>Safeguarding you and all peers with top security and regulatory frameworks
                                            practices.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12 mt-8 mt-md-10 mt-xxl-13">
                        <div class="company-story__part d-flex align-items-sm-center flex-column flex-sm-row">
                            <div class="row">
                                <div class="col-lg-2 d-flex align-items-center">
                                    <img src="assets/images/icon/24-hours-support.png" alt="24-hours-support">
                                </div>
                                <div class="col-lg-10 d-flex align-items-center">
                                    <div class="row">
                                        <h3 class="">24/7 Customer Support</h3>
                                        <span>Speak to us and resolve your questions round the clock.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- <section class="provide-world bg nb4-bg pt-120 pb-120  position-relative z-0">
    <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1 d-none d-md-flex">
        <img src="assets/images/button.png" alt="vector" class="position-absolute pt-6 pt-xl-15 previewShapeRevX">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-7">
                <div class="heading__content mb-10 mb-lg-15 text-center">
                    <span class="heading p1-color fs-five mb-5">How to Start Trading</span>
                    <h2 class="mb-5 mb-lg-6">Take a few simple steps</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xxl-12" style="margin-top: -30px;">
            <div class="process-wrap active-step1">
                <div class="process-main">
                    <div class="col-3 ">
                        <div class="process-step-cont">
                            <div class="process-step step-1"></div>
                            <h4 class="process-label">Sign Up </h4>
                        </div>
                    </div>
                    <div class="col-3 ">
                        <div class="process-step-cont">
                            <div class="process-step step-2"></div>
                            <h4 class="process-label">Do Your KYC</h4>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="process-step-cont">
                            <div class="process-step step-3"></div>
                            <h4 class="process-label">Deposit With Multiple Payment Option </h4>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="process-step-cont">
                            <div class="process-step step-4"></div>
                            <h4 class="process-label">Start Your Trading</h4>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- <section class="trade_on trade_on--secondary pt-120 pb-120 position-relative z-0">
    <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
        <img src="assets/images/star3.png" alt="star3"
            class="position-absolute push_animat d-none d-xxxl-flex top-0 start-0 pt-lg-16 ps-20 ms-lg-8">
    </div>
    <div class="container">
        <div class="row gy-10 gy-xxl-0 justify-content-center justify-content-xxl-between align-items-center">
            <div class="col-10 col-sm-8 col-md-7 col-lg-6 order-2 order-lg-0">
                <div class="trade_on__thumbs d-flex justify-content-end">
                    <img src="assets/images/tradersera.png" alt="Web Based Tradersera Platform ">
                </div>
            </div>
            <div class="col-md-10 col-lg-6 col-xxl-5">
                <div class="trade_on__content">
                    <h2 class="mb-4 mb-lg-5" style="font-size:35px;">TradersEra - Trading Platform
                    </h2>
                    <p class="mx-ch">Web trading platforms are safer since they use a remote server or cloud for
                        calculations. Users only need to focus on their internet connection and routing speed. No need
                        to download or install anything.</p>
                </div>
                <h5 class="mt-4 mb-lg-5">
                    Benefits of Web Based Trading Platforms:
                </h5>
                <ul class="d-flex gap-4 flex-column mt-6">
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>Accessible anytime and anywhere, no need for
                        installation.
                    </li>
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>Cross-Device Compatibility, Works across
                        multiple devices.
                    </li>
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>Platform updates are hassle-free.
                    </li>
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>No need for high-end hardware, suitable for
                        various devices.</li>
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>Compatible across various operating systems.
                    </li>
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>Requires minimal disk space as data is
                        stored in the cloud.
                    </li>
                    <br>
                    <h3>Platforms Supported:</h3>
                    <ul class=" d-flex  gap-md-3 ">
                        <li><img style=" height:35px;" src="assets/images/icon/icon IE.webp" alt="IE"></li>
                        <li><img style=" height:35px;" src="assets/images/icon/icon opera.webp" alt="opera"></li>
                        <li><img style=" height:35px;" src="assets/images/icon/icon safari.webp" alt="safari"></li>
                        <li><img style=" height:35px;" src="assets/images/icon/icon fire fox.webp" alt="fire fox"></li>
                        <li><img style=" height:35px;" src="assets/images/icon/icon CROME.webp" alt="CROME"></li>
                    </ul>
                </ul>
            </div>
        </div>
</section> -->





<!-- section 3-->

<section class="pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-7">
                <div class="heading__content mb-10 mb-lg-15 text-center">
                    <h2 class="mb-5 mb-lg-6">Features Of TradersEra</h2>
                </div>
            </div>
        </div>

        <div class="row gy-15 gy-lg-0 justify-content-center align-items-center">
            <div class="col-sm-6 col-lg-3 col-xxl-3 text-center">
                <div class="company-story__part1 mb-lg-6">
                    <img src="images/icon/withdrawal.png" class="img-fluid medium-image" alt="Quick Withdrawals">
                    <div class="mt-4">
                        <h3 class="mb-3">Quick Withdrawals</h3>
                        <span>Simple access to your money at all times and places</span>
                    </div>
                </div>

                <div class="company-story__part1 mt-15">
                    <img src="images/icon/compatibility.png" class="img-fluid medium-image" alt="High Compatibility">
                    <div class="mt-4">
                        <h3 class="mb-3">High Compatibility</h3>
                        <span>Cross-Device Compatibility, Works across multiple devices.</span>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-lg-6 col-xxl-6 text-center">
                <img src="images/icon/featuresoftradersera.png" class="img-fluid medium-image" style="border: none;"
                    alt="Middle Image">
            </div>


            <div class="col-sm-6 col-lg-3 col-xxl-3 text-center">
                <div class="company-story__part1 mb-lg-6">
                    <img src="images/icon/stable.png" class="img-fluid medium-image" alt="Low and stable spreads">
                    <div class="mt-4">
                        <h3 class="mb-3">Low and stable spreads</h3>
                        <span>Stable trading with tight spreads starting from 0 pips.</span>
                    </div>
                </div>

                <div class="company-story__part1 mt-15">
                    <img src="images/icon/fundingoptions.png" class="img-fluid medium-image"
                        alt="Multiple Funding Options">
                    <div class="mt-4">
                        <h3 class="mb-3">Multiple Funding Options</h3>
                        <span>Choose a method that works for you and start trading.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .medium-image {
        max-width: 350px;
    }
</style>



<section class="provide-world pt-120 position-relative z-0 mb-10 pb-120" style="background-color: #000;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xxl-10">
                <div class="heading__content mb-10 mb-lg-15 text-center">
                    <h2 class="mb-5 mb-lg-6">Open an account in 4 simple steps</h2>
                </div>
            </div>
        </div>
        <div class="row gy-6 gy-xxl-0">
            <div class="col-md-6 col-xxl-3">
                <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/number-1.png" alt="number-1">
                    </span>
                    <h3 class="mt-5 mb-5">Register</h3>
                    <h4>Sign up using your bank details and login to dashboard.</h4>
                    <br>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3">
                <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/two.png" alt="two">
                    </span>
                    <h3 class="mt-5 mb-5">Verify</h3>
                    <h4>Use our online verification tool and submit your details and document.</h4>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3">
                <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/number-3.png" alt="number-3">
                    </span>
                    <h3 class="mt-5 mb-5">Fund</h3>
                    <h4>Fund your trading account using a wide range of funding methods.</h4>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3">
                <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/number-4.png" alt="number-4">
                    </span>
                    <h3 class="mt-5 mb-5">Trade</h3>
                    <h4>Start trading with binary,spot and AI trading platform.</h4>
                    <br>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container ">
            <div
                class="start-earning nb3-bg cus-rounded-2 d-flex align-items-center p-4 p-sm-6 p-md-10 p-lg-15 p-xl-20 pe-lg-6 pe-xl-16 overflow-hidden position-relative">
                <div class="vector_effect position-absolute d-center justify-content-end end-0  d-flex gap-20">
                    <img src="assets/images/star2.png" alt="star2" class="d-none d-xxl-flex push_animat">
                    <img src="assets/images/star_focus.png" alt="star_focus"
                        class="d-none d-sm-flex rotate time_dur ms-auto ms-lg-0 me-md-5">
                </div>
                <div class="row gy-6 w-100 text-center text-sm-start align-items-center justify-content-sm-between">
                    <div class="col-sm-8">
                        <h4>Start Trading today with TradersEra with $10</h4>
                        <!-- <p class="fs-six-up fw_500 mt-5">Trade crypto, binary, forex and use AI for Investments.
                        </p> -->
                    </div>
                    <div class="col-sm-4 text-sm-end">
                        <a href="https://trading.tradersera.com/register"
                            class="cmn-btn secondary-alt ms-auto fs-five nb4-xxl-bg gap-2 align-items-center  py-2 px-4 py-lg-3 px-lg-5">Open
                            An
                            Account <i class="ti ti-arrow-right fs-four"></i></a>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- 
<section class="trade_on trade_on--secondary pt-120 pb-120 position-relative z-0">
    <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
        <img src="assets/images/star3.png" alt="vector"
            class="position-absolute push_animat d-none d-xxxl-flex top-0 start-0 pt-lg-16 ps-20 ms-lg-8">
        <img src="assets/images/sun2.png" alt="vector"
            class="sun2 position-absolute push_animat d-none d-xxl-flex bottom-0 pb-120">
    </div>
    <div class="container">
        <div class="row gy-10 gy-xxl-0 justify-content-center justify-content-xxl-between align-items-center">
            <div class="col-md-10 col-lg-6 col-xxl-5">
                <div class="trade_on__content">
                    <span class="heading p1-color fs-six mb-5"></span>
                    <h4 class="mb-4 mb-lg-5" style="font-size: 32px;">Trade Anywhere, Anytime with TradersEra App</h4>
                    <p class="mx-ch">Don't let trading opportunities slip away.</p>
                    <br>
                    <p class="mx-ch">Download the TradersEra Trader app for commission-free trading and ultra-low
                        spreads on major FX pairs and gold.</p>
                    <br>
                    <p class="mx-ch">All you require in a single app.</p>
                    <br>
                    <div class="col-4 mt-4" style="display: flex; justify-content: space-evenly; ">
                        <img style="border:1px solid white; border-radius:10px;" src="assets/images/_app store.png">
                        <img style="border:1px solid white; border-radius:10px; margin-left:20px;"
                            src="assets/images/_google play store.png">
                        <img style="border:1px solid white; border-radius:10px; margin-left:20px;"
                            src="assets/images/_download APK.png">
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-md-7 col-lg-6 order-2 order-lg-0">
                <div class="trade_on__thumbs d-flex justify-content-end">
                    <img src="assets/images/education.png" alt="Imgae">
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Trade On end -->
<section class="provide-world pt-120 pb-120  position-relative z-0">
    <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
        <img src="assets/images/vector.png" alt="vector"
            class="position-absolute top-0 pt-120 ms-20 ps-xxl-20 jello d-none d-xl-flex">
        <img src="assets/images/vector9.png" alt="vector9"
            class="position-absolute rotate top-0 end-0 p-20 mt-5 me-7 d-none d-xxxl-flex">
        <img src="assets/images/vector_rocket1.png" alt="vector_rocket1"
            class="position-absolute bottom-0 start-0 d-none d-xxxl-flex pb-120 mb-10 ms-20 fadeInTopRight">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-7">
                <div class="heading__content mb-10 mb-lg-15 text-center">
                    <h2 class="">Markets Data</h2>
                    <br>
                    <span class="heading p1-color fs-six mb-5 mt-2">
                        <h3>Learn and understand markets with our available
                            market table.</h3>
                    </span>
                </div>
            </div>
        </div>
        <div class="row gy-6 gy-xxl-0">
            <div class="col-12">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container" style="margin-top: 0px;">
                    <div class="tradingview-widget-container__widget"></div>
                    <script type="text/javascript"
                        src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                            {
                                "width": "100%",
                                    "height": 800,
                                        "symbolsGroups": [
                                            {
                                                "name": "Forex",
                                                "originalName": "Forex",
                                                "symbols": [
                                                    {
                                                        "name": "FX:EURUSD",
                                                        "displayName": "EUR to USD"
                                                    },
                                                    {
                                                        "name": "FX:GBPUSD",
                                                        "displayName": "GBP to USD"
                                                    },
                                                    {
                                                        "name": "FX:USDJPY",
                                                        "displayName": "USD to JPY"
                                                    },
                                                    {
                                                        "name": "FX:USDCHF",
                                                        "displayName": "USD to CHF"
                                                    },
                                                    {
                                                        "name": "FX:AUDUSD",
                                                        "displayName": "AUD to USD"
                                                    },
                                                    {
                                                        "name": "FX:USDCAD",
                                                        "displayName": "USD to CAD"
                                                    },
                                                    {
                                                        "name": "FX:USDCHF",
                                                        "displayName": "USD to CHF"
                                                    }
                                                ]
                                            },
                                            {
                                                "name": "Commodity",
                                                "symbols": [
                                                    {
                                                        "name": "OANDA:XAUUSD",
                                                        "displayName": "GOLD"
                                                    },
                                                    {
                                                        "name": "OANDA:XAGUSD",
                                                        "displayName": "SILVER"
                                                    },
                                                    {
                                                        "name": "TVC:USOIL",
                                                        "displayName": "USOIL"
                                                    },
                                                    {
                                                        "name": "TVC:UKOIL",
                                                        "displayName": "UKOIL"
                                                    },
                                                    {
                                                        "name": "FOREXCOM:NATURALGAS",
                                                        "displayName": "NGAS"
                                                    },
                                                    {
                                                        "name": "ACTIVTRADES:COCOAK2024",
                                                        "displayName": "COCOA"
                                                    },
                                                    {
                                                        "name": "ACTIVTRADES:COTTONK2024",
                                                        "displayName": "COTTON"
                                                    }
                                                ]
                                            },
                                            {
                                                "name": "Indices",
                                                "symbols": [
                                                    {
                                                        "name": "CAPITALCOM:US100",
                                                        "displayName": "US100"
                                                    },
                                                    {
                                                        "name": "PEPPERSTONE:US500",
                                                        "displayName": "US500"
                                                    },
                                                    {
                                                        "name": "TVC:UKX",
                                                        "displayName": "UK 100"
                                                    },
                                                    {
                                                        "name": "PEPPERSTONE:JPN225",
                                                        "displayName": "JPN225"
                                                    },
                                                    {
                                                        "name": "PEPPERSTONE:HK50",
                                                        "displayName": "HONGKONG"
                                                    },
                                                    {
                                                        "name": "NSE:NIFTY",
                                                        "displayName": "INDIA NSE"
                                                    },
                                                    {
                                                        "name": "PEPPERSTONE:US30",
                                                        "displayName": "US30"
                                                    },
                                                    {
                                                        "name": "TVC:VIX",
                                                        "displayName": "GLOBAL VIX"
                                                    }
                                                ]
                                            },
                                            {
                                                "name": "Stocks",
                                                "symbols": [
                                                    {
                                                        "name": "NASDAQ:AAPL",
                                                        "displayName": "APPLE"
                                                    },
                                                    {
                                                        "name": "NASDAQ:GOOGL",
                                                        "displayName": "GOOGLE"
                                                    },
                                                    {
                                                        "name": "NASDAQ:TSLA",
                                                        "displayName": "TESLA"
                                                    },
                                                    {
                                                        "name": "NASDAQ:AMZN",
                                                        "displayName": "AMAZON"
                                                    },
                                                    {
                                                        "name": "NASDAQ:MSFT",
                                                        "displayName": "MICROSOFT"
                                                    },
                                                    {
                                                        "name": "NASDAQ:NFLX",
                                                        "displayName": "NETFLIX"
                                                    }
                                                ]
                                            },
                                            {
                                                "name": "Crypto",
                                                "symbols": [
                                                    {
                                                        "name": "BINANCE:BTCUSDT"
                                                    },
                                                    {
                                                        "name": "BITSTAMP:BTCUSD"
                                                    },
                                                    {
                                                        "name": "BINANCE:DOGEUSDT"
                                                    },
                                                    {
                                                        "name": "BITSTAMP:ETHUSD"
                                                    },
                                                    {
                                                        "name": "COINBASE:SOLUSD"
                                                    },
                                                    {
                                                        "name": "BINANCE:XRPUSDT"
                                                    },
                                                    {
                                                        "name": "BINANCE:NEARUSDT"
                                                    }
                                                ]
                                            }
                                        ],
                                            "showSymbolLogo": true,
                                                "isTransparent": false,
                                                    "colorTheme": "dark",
                                                        "locale": "en",
                                                            "backgroundColor": "#131722"
                            }
                        </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
        </div>
    </div>
</section>
<!--People Trust start-->
<section class="worldwide alt-color p1-bg pseudo_element_after">
    <div class="animation vector position-absolute top-0 left-0 w-100 h-100 z-n1">
        <img src="assets/images/cross.png" alt="cross"
            class="position-absolute push_animat ms-lg-20 ps-4 top-0 pt-120 mt-20 start-0 d-none d-xxxl-flex">
        <img src="assets/images/star.png" alt="star"
            class="position-absolute push_animat end-0 top-0 mt-20 pt-xl-15 me-xl-20 pe-10 d-none d-md-flex">
        <img src="assets/images/vector2.png" alt="vector2"
            class="position-absolute bottom-0 start-0 d-none d-xxxl-flex">
        <img src="assets/images/vector_rocket2.png" alt="vector_rocket2"
            class="position-absolute d-none d-xxxl-flex bottom-0 end-0  pe-12 pb-10 fadeInTopLeft">
        <img src="assets/images/cross2.png" alt="cross2"
            class="position-absolute push_animat ms-lg-20 ps-4 top-0 start-50 pt-120 mt-20 d-none d-xxxl-flex">
    </div>
    <div class="container position-relative">
        <div class="row gy-10 gy-lg-0 justify-content-center justify-content-lg-between align-items-end">
            <div class="col-lg-6 col-xxl-5 pt-xl-20">
                <div class="trade_on__content me-xl-10 pt-120 pb-0 pb-lg-120">
                    <span class="heading p1-color fs-six mb-5"></span>
                    <h2 class="mb-4 mb-lg-5" style="font-size: 32px;">Trade Anywhere, Anytime with TradersEra App</h2>
                    <p class="mx-ch">Don't let trading opportunities slip away.</p>
                    <br>
                    <p class="mx-ch">Download the TradersEra Trader app for commission-free trading and ultra-low
                        spreads on major FX pairs and gold.</p>
                    <br>
                    <p class="mx-ch">All you require in a single app.</p>
                    <br>
                    <div class="col-4 mt-4" style="display: flex; justify-content: space-evenly; ">
                        <img style="border-radius:10px;" src="assets/images/_app store.png" alt="_app store">
                        <img style="border-radius:10px; margin-left:20px;" src="assets/images/_google play store.png"
                            alt="_google play store">
                        <img style="border-radius:10px; margin-left:20px;" src="assets/images/_download APK.png"
                            alt="_download APK">
                    </div>
                </div>
            </div>
            <div class="col-8 col-sm-7 col-lg-6 col-xxl-5">
                <div class="worldwide_thumb d-flex ms-lg-15 ms-xl-0">
                    <img src="assets/images/tradersera logo on phone.png" class="max-xl-un"
                        alt="TradersEra Trading app ">
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container pb-120" style="margin-top: 70px; ">
        <div class="row gy-15 gy-lg-0 justify-content-center align-items-center">
            <div class="col-sm-10 col-lg-6 col-xxl-5 order-2 order-lg-0">
                <div class="company-story__thumbs d-center">
                    <img src="assets/images/deposite.png" class="cus-rounded-1 w-100"
                        alt="TradersEra's Visa, Mastercard, wire transfer, or crypto  your funding ">
                </div>
            </div>
            <div class="col-lg-6 col-xxl-7">
                <div class="row ms-xl-3 ms-xxl-10">
                    <div class="col-xxl-12">
                        <div class="">
                            <h2 class="mb-3 mt-5" style="font-size: 32px;">Multiple Funding Options</h2>
                            <br>
                            <p>
                                At TradersEra we've got all your account funding needs sorted. Whether you fancy the
                                ease of Visa or Mastercard, the trustworthiness of a wire transfer or the modern touch
                                of cryptocurrency we offer a range of options to kick off smoothly. Pick the approach
                                that suits you and dive into trading
                            </p>
                            <br>
                        </div>
                    </div>
                    <ul class=" d-flex   gap-md-3 mt-4">
                        <li><img style=" height:35px;" src="assets/images/icon/a. visa white _logo.png" alt="visa"></li>
                        <li><img style=" height:35px;" src="assets/images/icon/a. mastercard.png" alt=" mastercard">
                        </li>
                        <li><img style=" height:35px;" src="assets/images/icon/a.bitcoin-logo.png" alt="bitcoin"></li>
                        <li><img style=" height:35px;" src="assets/images/icon/Tether.png" alt="Tether"></li>
                        <li><img style=" height:35px;" src="assets/images/icon/Perfect-Money- white logo.png"
                                alt="Perfect"></li>
                        <li><img style=" height:35px;" src="assets/images/icon/a. Wire Transfer white logo.png"
                                alt="Wire"></li>
                        <li><img style=" height:35px;" src="assets/images/icon/Upi-Payment.png" alt="Payment"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section style="background-color: white;" class="our-clients">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul id="client-slider">
                    <li>
                        <img src="assets/images/icon/crypto-logo.png" alt="crypto">
                    </li>
                    <li>
                        <img src="assets/images/icon/mastercard.png" alt="crypto">
                    </li>
                    <li>
                        <img src="assets/images/icon/visa-logo.png" alt="crypto">
                    </li>
                    <li>
                        <img src="assets/images/icon/Wire-Transfer.png" alt="crypto">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section> -->
<script>
    $('.slider').each(function () {
        var $this = $(this);
        var $group = $this.find('.slide_group');
        var $slides = $this.find('.slide');
        var bulletArray = [];
        var currentIndex = 0;
        var timeout;
        var animationDuration = 1200; // Adjust this value to control the animation speed
        function move(newIndex) {
            var animateLeftFirst, slideLeftFirst, animateLeftSecond, slideLeftSecond;
            advance();
            if ($group.is(':animated') || currentIndex === newIndex) {
                return;
            }
            bulletArray[currentIndex].removeClass('active');
            bulletArray[newIndex].addClass('active');
            if (newIndex > currentIndex) {
                slideLeftFirst = '50%';
                animateLeftFirst = '0%';
                slideLeftSecond = '50%';
                animateLeftSecond = '0%';
            } else {
                slideLeftFirst = '-100%';
                animateLeftFirst = '0%';
                slideLeftSecond = '-50%';
                animateLeftSecond = '0%';
            }
            $slides.eq(newIndex).css({
                display: 'block',
                left: slideLeftSecond
            });
            $group.animate({
                left: animateLeftFirst
            }, animationDuration);
            $slides.eq(newIndex).animate({
                left: 0
            }, animationDuration);
            $slides.eq(currentIndex).css({
                display: 'none',
                left: 0
            });
            currentIndex = newIndex;
        }
        function advance() {
            clearTimeout(timeout);
            timeout = setTimeout(function () {
                if (currentIndex < ($slides.length - 1)) {
                    move(currentIndex + 1);
                } else {
                    move(0);
                }
            }, 7000); // Timeout between slides
        }
        $('.next_btn').on('click', function () {
            if (currentIndex < ($slides.length - 1)) {
                move(currentIndex + 1);
            } else {
                move(0);
            }
        });
        $('.previous_btn').on('click', function () {
            if (currentIndex !== 0) {
                move(currentIndex - 1);
            } else {
                move($slides.length - 1);
            }
        });
        $.each($slides, function (index) {
            var $button = $('<a class="slide_btn">&bull;</a>');

            if (index === currentIndex) {
                $button.addClass('active');
            }
            $button.on('click', function () {
                move(index);
            }).appendTo('.slide_buttons');
            bulletArray.push($button);
        });
        advance();
    });
    /**This is just a demo to add the process classes**/
    $(document).ready(function ($) {
        $(".process-step").click(function () {
            var theClass = $(this).attr("class").match(/(^|\s)step-\S+/g);
            var bute = $.trim(theClass);
            switch (bute) {
                case "step-1":
                    $(".process-wrap").addClass("active-step1")
                    break;
                case 'step-2':
                    $(".process-wrap").attr('class', 'process-wrap');
                    $(this).parents(".process-wrap").addClass("active-step2")
                    break;
                case 'step-3':
                    $(".process-wrap").attr('class', 'process-wrap');
                    $(this).parents(".process-wrap").addClass("active-step3")
                    break;
                case 'step-4':
                    $(".process-wrap").attr('class', 'process-wrap');
                    $(this).parents(".process-wrap").addClass("active-step4 ")
                    break;
                default:
                    $(".process-wrap").attr('class', 'process-wrap');
            }
        })
        $(".process-dots").click(function () {
            if ($(this).hasClass("ship-process-dot-1")) {
                $(".process-wrap").attr('class', 'process-wrap active-step1')
                $(this).parents().find(".process-wrap").addClass("active-step1")

            }
            if ($(this).hasClass("ship-process-dot-2")) {
                $(".process-wrap").attr('class', 'process-wrap active-step1')
                $(this).parents().find(".process-wrap").addClass("active-step1-mini2")

            }
            if ($(this).hasClass("ship-process-dot-3")) {
                $(".process-wrap").attr('class', 'process-wrap active-step1')
                $(this).parents().find(".process-wrap").addClass("active-step1-mini3")

            }
            if ($(this).hasClass("ship-process-dot-4")) {
                $(".process-wrap").attr('class', 'process-wrap active-step1')
                $(this).parents().find(".process-wrap").addClass("active-step1-mini4")
            }
        });
    });
    //  script our partners start slider
    var clientSlider = document.getElementById('client-slider');
    var clientList = clientSlider.getElementsByTagName('li');
    setInterval(() => {
        clientSlider.style.transform = "translateX(-20%)";
    }, 3000);
    clientSlider.addEventListener('transitionend', function () {
        clientSlider.appendChild(clientSlider.firstElementChild);
        clientSlider.style.transition = "none";
        clientSlider.style.transform = "translateX(0)";
        setTimeout(() => {
            clientSlider.style.transition = "0.3s";
        });
    })
    // script our partners end slider
</script>
<?php include("includes/footer.php") ?>