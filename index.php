<?php include("includes/header.php") ?>
<!-- header-section start -->
<style>
    .slider {
        margin: 0 auto;
        max-width: auto;
    }

    .slide_viewer {
        height: 900px;
        overflow: hidden;
        position: relative;
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
        -o-transition: .4s;
        -ms-transition: .4s;
        -moz-transition: .4s;
        -webkit-transition: .4s;
        transition: .4s;
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
</style>
<div class="slider">
    <div class="slide_viewer">
        <div class="slide_group">
            <div class="slide hero-section--secondary hero-section position-relative z-0 ">
                <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
                    <img src="assets/images/hero_vector.png" alt="vector"
                        class="position-absolute d-none d-xxxl-flex bottom-0 end-0 previewShapeRevX">
                </div>
                <div class="container pt-20 mt-12 mt-lg-20">
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
                                    <h1 class="display-two nb4-xxl-color mb-5 mb-lg-6">Trade Smart with TradingEra</h1>
                                    <p class="fs-six-up fw_500 nb4-xxl-color">TradingEra helps you trade smarter with
                                        tools and insights, making navigating financial markets easier.</p>
                                    <div
                                        class="d-inline-flex flex-wrap gap-4 gap-lg-10 align-items-center mt-8 mt-lg-10">
                                        <a href="signup.html"
                                            class="cmn-btn alt-xxl-bg fs-five nb4-xxl-bg gap-2 gap-lg-3 align-items-center py-2 px-5 py-lg-3 px-lg-6">Start
                                            Trading <i class="ti ti-trending-up"></i></a>
                                        <a href="signin.html"
                                            class="cmn-btn link link-xxl-color fs-five  gap-2 gap-lg-3 align-items-center "><i
                                                class="ti ti-arrow-narrow-right fs-four"></i> Try demo account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-lg-6 col-xxl-5">
                            <div class="hero-section__thumbs pb-xxl-10">
                                <img src="assets/images/hero_thumb.png" class="max-auto max-xxl-un" alt="img">
                            </div>
                        </div>
                        <ul
                            class="list_items col-12 d-flex row-gap-6 gap-lg-15 justify-content-between flex-wrap pt-2 pt-lg-15 pt-xl-2 pt-xxl-15 pb-15">
                            <li class="d-flex gap-3 align-items-center">
                                <span class="d-center s1-bg p-3 p-lg-4 rounded-circle"><i
                                        class="ti ti-tools fs-three nb4-color"></i></span>
                                <h4 class="nw1-color">Enhanced Tools</h4>
                            </li>
                            <li class="d-flex gap-3 align-items-center">
                                <span class="d-center s1-bg p-3 p-lg-4 rounded-circle"><i
                                        class="ti ti-trending-up fs-three nb4-color"></i></span>
                                <h4 class="nw1-color">Trading Guides</h4>
                            </li>
                            <li class="d-flex gap-3 align-items-center">
                                <span class="d-center s1-bg p-3 p-lg-4 rounded-circle"><i
                                        class="ti ti-broadcast fs-three nb4-color"></i></span>
                                <h4 class="nw1-color">Fast Execution</h4>
                            </li>
                            <li class="d-flex gap-3 align-items-center">
                                <span class="d-center s1-bg p-3 p-lg-4 rounded-circle"><i
                                        class="ti ti-percentage fs-three nb4-color"></i></span>
                                <h4 class="nw1-color">0% Commission</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="slide hero-section--secondary hero-section2 position-relative z-0 ">
                <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
                    <img src="assets/images/hero_vector.png" alt="vector"
                        class="position-absolute d-none d-xxxl-flex bottom-0 end-0 previewShapeRevX">
                </div>
                <div class="container pt-20 mt-12 mt-lg-20">
                    <div
                        class="row pt-4 pt-lg-10 gy-12 gy-lg-0 justify-content-center justify-content-lg-between align-items-center">
                        <div class="col-lg-6 col-xxl-7">
                            <div class="hero-card p1-xxl-bg2 pt-xl-20 pb-xl-20 position-relative">
                                <div class="pt-xxl-10 pb-xxl-10">
                                    <div
                                        class=" first d-center cus-z1 position-absolute end-0 top-0 d-none d-xxl-flex  me-lg-10 mt-lg-10">

                                    </div>
                                    <span class="heading p1-max-xxl nb4-xxl-color fs-five mb-3">Empower Your
                                        Trades</span>
                                    <h1 class="display-two nb4-xxl-color mb-5 mb-lg-6">Maximize Your Potential with
                                        TradingEra</h1>
                                    <p class="fs-six-up fw_500 nb4-xxl-color">Trade smarter with TradingEra's insights,
                                        maximizing your financial potential.</p>
                                    <div
                                        class="d-inline-flex flex-wrap gap-4 gap-lg-10 align-items-center mt-8 mt-lg-10">
                                        <a href="signup.html"
                                            class="cmn-btn alt-xxl-bg fs-five nb4-xxl-bg gap-2 gap-lg-3 align-items-center py-2 px-5 py-lg-3 px-lg-6">Start
                                            Trading <i class="ti ti-trending-up"></i></a>
                                        <a href="signin.html"
                                            class="cmn-btn link link-xxl-color fs-five  gap-2 gap-lg-3 align-items-center "><i
                                                class="ti ti-arrow-narrow-right fs-four"></i> Try demo account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-lg-6 col-xxl-5">
                            <div class="hero-section__thumbs pb-xxl-10">
                                <img src="assets/images/hero_thumb.png" class="max-auto max-xxl-un" alt="img">
                            </div>
                        </div>
                        <ul
                            class="list_items col-12 d-flex row-gap-6 gap-lg-15 justify-content-between flex-wrap pt-2 pt-lg-15 pt-xl-2 pt-xxl-15 pb-15">
                            <li class="d-flex gap-3 align-items-center">
                                <span class="d-center s1-bg p-3 p-lg-4 rounded-circle"><i
                                        class="ti ti-tools fs-three nb4-color"></i></span>
                                <h4 class="nw1-color">Enhanced Tools</h4>
                            </li>
                            <li class="d-flex gap-3 align-items-center">
                                <span class="d-center s1-bg p-3 p-lg-4 rounded-circle"><i
                                        class="ti ti-trending-up fs-three nb4-color"></i></span>
                                <h4 class="nw1-color">Trading Guides</h4>
                            </li>
                            <li class="d-flex gap-3 align-items-center">
                                <span class="d-center s1-bg p-3 p-lg-4 rounded-circle"><i
                                        class="ti ti-broadcast fs-three nb4-color"></i></span>
                                <h4 class="nw1-color">Fast Execution</h4>
                            </li>
                            <li class="d-flex gap-3 align-items-center">
                                <span class="d-center s1-bg p-3 p-lg-4 rounded-circle"><i
                                        class="ti ti-percentage fs-three nb4-color"></i></span>
                                <h4 class="nw1-color">0% Commission</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- End // .slider -->

<div class="slide_buttons">
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- Why Trade start-->

<!-- Why Trade end -->

<!--provide-world start-->

<!-- provide-world end -->

<!--Trade On start-->
<section class="company-story position-relative z-0  pt-120 pb-120 ">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-7">
                <div class="heading__content mb-10 mb-lg-15 text-center">
                    <span class="heading p1-color fs-five mb-5">Global Trust, Unbeatable Rates</span>
                    <h2 class="mb-5 mb-lg-6">Why Traders Choose TradersEra</h2>
                </div>
            </div>
        </div>
        <div class="row gy-15 gy-lg-0 justify-content-center align-items-center">

            <div class="col-sm-10 col-lg-6 col-xxl-5  order-2 order-lg-0">
                <div class="row d-flex justify-content-end">
                    <div class="col-xxl-12">
                        <div class="company-story__part">
                            <div class="row">
                                <div class="col-lg-2 d-flex align-items-center">
                                    <img src="assets/images/icon/seesaw.png" alt="">
                                </div>
                                <div class="col-lg-10 d-flex align-items-center">
                                    <div class="row">
                                        <h3 class="">CRYPTO AND FX LEVERAGE</h3>

                                        <span>1:500</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12 mt-8 mt-md-10 mt-xxl-13">
                        <div class="company-story__part d-flex align-items-sm-center flex-column flex-sm-row">
                            <div class="row">
                                <div class="col-lg-2 d-flex align-items-center">
                                    <img src="assets/images/icon/download.png" alt="">
                                </div>
                                <div class="col-lg-10 d-flex align-items-center">
                                    <div class="row">
                                        <h3 class="">NO DOWNLOADS REQUIRED</h3>

                                        <span>Our web-based platform supports all operating systems.</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12 mt-8 mt-md-10 mt-xxl-13">
                        <div class="company-story__part d-flex align-items-sm-center flex-column flex-sm-row">
                            <div class="row">
                                <div class="col-lg-2 d-flex align-items-center">
                                    <img src="assets/images/icon/candlestick-chart.png" alt="">
                                </div>
                                <div class="col-lg-10 d-flex align-items-center">
                                    <div class="row">
                                        <h3 class="">LOWEST TRADING FEES</h3>

                                        <span>Guaranteed</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-6">
                <div class="row ms-xl-3 ms-xxl-10">
                    <div class="col-xxl-12 ">
                        <div class="company-story__part">

                            <div class="row">
                                <div class="col-lg-2 d-flex align-items-center">
                                    <img src="assets/images/icon/active-user.png" alt="">
                                </div>
                                <div class="col-lg-10 d-flex align-items-center">
                                    <div class="row">
                                        <h3 class="">INSTANT ACCOUNT OPENING</h3>

                                        <span>No KYC</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12 mt-md-10 mt-xxl-13">
                        <div class="company-story__part d-flex align-items-sm-center flex-column flex-sm-row">
                            <div class="row">
                                <div class="col-lg-2 d-flex align-items-center">
                                    <img src="assets/images/icon/insurance.png" alt="">
                                </div>
                                <div class="col-lg-10 d-flex align-items-center">
                                    <div class="row">
                                        <h3 class="">SECURE FUNDING</h3>

                                        <span>Direct from your crypto wallet</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12 mt-8 mt-md-10 mt-xxl-13">
                        <div class="company-story__part d-flex align-items-sm-center flex-column flex-sm-row">
                            <div class="row">
                                <div class="col-lg-2 d-flex align-items-center">
                                    <img src="assets/images/icon/withdrawal.png" alt="">
                                </div>
                                <div class="col-lg-10 d-flex align-items-center">
                                    <div class="row">
                                        <h3 class="">FAST WITHDRAWALS</h3>

                                        <span>Twenty-four hours a day, seven days a week</span>
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
<section class="trade_on a2-bg pt-120 pb-120 position-relative z-0">
    <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
        <img src="assets/images/coin.png" alt="vector" class="position-absolute d-none d-md-flex previewShapeRevX">
        <img src="assets/images/star2.png" alt="vector" class="position-absolute d-none d-xl-flex push_animat">
        <img src="assets/images/coin_vector.png" alt="vector"
            class="position-absolute d-none d-xxxl-flex bottom-0 end-0 previewShapeRevX opacity-50">
    </div>
    <div class="container">
        <div class="row gy-10 gy-xxl-0 justify-content-center justify-content-xxl-between align-items-center">
            <div class="col-lg-6 col-xxl-5">
                <div class="trade_on__content">

                    <h2 class="mb-4 mb-lg-5">Why Choose us</h2>
                    <ul class="d-flex gap-4 flex-column mt-6">
                        <li class="d-flex align-items-center gap-3 fs-six-up"><i
                                class="ti ti-circle-check s1-color fs-four"></i>Trading with a global broker-dealer that
                            operates under regulatory control in multiple jurisdictions. </li>
                        <li class="d-flex align-items-center gap-3 fs-six-up"><i
                                class="ti ti-circle-check s1-color fs-four"></i>More than 1250 instruments to choose
                            from, Forex, cryptocurrencies, stocks, commodities, and indices.</li>
                        <li class="d-flex align-items-center gap-3 fs-six-up"><i
                                class="ti ti-circle-check s1-color fs-four"></i>Enjoy perks such as automated risk
                            management solutions and get helpful in platform trading signals.
                        </li>
                        <li class="d-flex align-items-center gap-3 fs-six-up"><i
                                class="ti ti-circle-check s1-color fs-four"></i>Start trading with zero risk by signing
                            up for a Free Demo Account to practice.</li>
                    </ul>
                    <!-- <a href="signup.html" class="cmn-btn secondary-alt fs-six-up nb4-xxl-bg gap-2 gap-lg-3 align-items-center py-2 px-5 py-lg-3 px-lg-6 mt-7 mt-xxl-8">Sign up Now <i class="ti ti-arrow-right fs-four"></i></a> -->
                </div>
            </div>
            <div class="col-md-8 col-lg-6">
                <div class="trade_on__thumbs d-flex justify-content-end">
                    <img src="assets/images/why choose.png" alt="Imgae">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="provide-world bg nb4-bg pt-120 pb-120  position-relative z-0">
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
                            <h4 class="process-label">Get Started </h4>
                            <!-- <p class="process-label-P">Simply click on the "Register Now" button</p> -->
                        </div>
                    </div>
                    <div class="col-3 ">
                        <div class="process-step-cont">
                            <div class="process-step step-2"></div>
                            <h4 class="process-label">Add Credentials</h4>
                            <!-- <p class="process-label-P text-center">Enter your email address and choose a password</p> -->
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="process-step-cont">
                            <div class="process-step step-3"></div>
                            <h4 class="process-label">Trading Experience</h4>
                            <!-- <p class="process-label-P text-center">Take a moment to answer a few important questions to enhance your trading experience</p> -->
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="process-step-cont">
                            <div class="process-step step-4"></div>
                            <h4 class="process-label">Fund Your Account</h4>
                            <!-- <span class="process-label-P text-center">Once completed, the next step is to fund your account</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="trade_on trade_on--secondary pt-120 pb-120 position-relative z-0">
    <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
        <img src="assets/images/star3.png" alt="vector"
            class="position-absolute push_animat d-none d-xxxl-flex top-0 start-0 pt-lg-16 ps-20 ms-lg-8">
        <img src="assets/images/sun2.png" alt="vector"
            class="sun2 position-absolute push_animat d-none d-xxl-flex bottom-0 pb-120">
    </div>
    <div class="container">
        <div class="row gy-10 gy-xxl-0 justify-content-center justify-content-xxl-between align-items-center">
            <div class="col-10 col-sm-8 col-md-7 col-lg-6 order-2 order-lg-0">
                <div class="trade_on__thumbs d-flex justify-content-end">
                    <img src="assets/images/tradersera.png" alt="Imgae">
                </div>
            </div>

            <div class="col-md-10 col-lg-6 col-xxl-5">
                <div class="trade_on__content">
                    <h2 class="mb-4 mb-lg-5" style="font-size:35px;">Trading Platform Web Based</h2>
                    <p class="mx-ch">If a computer or laptop doesn't meet the requirements of a desktop trading app,
                        it's more likely to crash during a trading session. Web trading platforms are safer since they
                        use a remote server or cloud for calculations. Users only need to focus on their internet
                        connection and routing speed to receive pricing data quickly and execute orders smoothly.</p>

                </div>


                <h5 class="mt-4 mb-lg-5">
                    Advantages of Web-Based Trading Platforms
                </h5>
                <ul class="d-flex gap-4 flex-column mt-6">
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>Trading with a global broker-dealer that
                        operates under regulatory control in multiple jurisdictions. </li>
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>More than 1250 instruments to choose
                        from, Forex, cryptocurrencies, stocks, commodities, and indices.</li>
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>Enjoy perks such as automated risk
                        management solutions and get helpful in platform trading signals.
                    </li>
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>Start trading with zero risk by signing
                        up for a Free Demo Account to practice.</li>
                </ul>
                <!-- <a href="signup.html" class="cmn-btn secondary-alt fs-six-up nb4-xxl-bg gap-2 gap-lg-3 align-items-center py-2 px-5 py-lg-3 px-lg-6 mt-7 mt-xxl-8">Sign up Now <i class="ti ti-arrow-right fs-four"></i></a> -->

            </div>
        </div>
</section>

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
                    <h4 class="mb-4 mb-lg-5">Trade Anywhere, Anytime with TradersEra App</h4>
                    <p class="mx-ch">Don't let trading opportunities slip away.</p>
                    <br>
                    <p class="mx-ch">Download the TradersEra Trader app for commission-free trading and ultra-low
                        spreads on major FX pairs and gold.</p>
                    <br>
                    <p class="mx-ch">All you require in a single app.</p>

                    <div class="col-10" style="display: flex; justify-content: space-evenly;">
                        <a href="signup.html"
                            class="cmn-btn fs-six-up nb4-xxl-bg gap-2 gap-lg-3 align-items-center py-2 px-4 py-lg-3 px-lg-5 mt-7 mt-xxl-8">Android</a>
                        <a href="signup.html"
                            class="cmn-btn fs-six-up nb4-xxl-bg gap-2 gap-lg-3 align-items-center py-2 px-4 py-lg-3 px-lg-5 mt-7 mt-xxl-8">Apple</a>
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
</section>

<section class="customers position-relative z-0">
    <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
        <img src="assets/images/vector6.png" alt="vector"
            class="position-absolute rotate d-none d-xxxl-flex start-0 top-0 pt-20 mt-5 ps-20 ms-5">
        <img src="assets/images/vector8.png" alt="vector"
            class="position-absolute bottom-0 pb-20 mb-4 d-none d-xxl-flex">
        <img src="assets/images/earth.png" alt="vector"
            class="position-absolute d-none d-xl-flex bottom-0 end-0 rotate">
    </div>
    <div class="container">
        <div
            class="row gy-10 gy-xl-0 justify-content-center justify-content-lg-between align-items-center align-items-xxl-end">
            <div class="col-lg-6 col-xxl-5 pb-0 pt-120 pb-lg-120">
                <div class="customers__content me-xxl-18">
                    <h3 class="mb-4">Your Go-To for Crypto Trading</h3>
                    <p class="mx-ch">At TradingEra, we specialize in what we do best – Crypto trading. Our platform is
                        designed to provide you with a simple, secure, and seamless experience, ensuring you can trade
                        cryptocurrencies with confidence.</p>
                    <ul class="list_divided d-flex flex-wrap gap-5 mt-5 mt-xxl-6">
                        <li class="d-flex align-items-center gap-3 fs-six-up"><i
                                class="ti ti-circle-check s1-color fs-four"></i>Expertise</li>
                        <li class="d-flex align-items-center gap-3 fs-six-up"><i
                                class="ti ti-circle-check s1-color fs-four"></i>Security</li>
                        <li class="d-flex align-items-center gap-3 fs-six-up"><i
                                class="ti ti-circle-check s1-color fs-four"></i>User-Friendly Interface</li>
                        <li class="d-flex align-items-center gap-3 fs-six-up"><i
                                class="ti ti-circle-check s1-color fs-four"></i>24/7 Support</li>
                    </ul>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-lg-6 col-xxl-6 ">
                <div class="customers__thumb">
                    <img src="assets/images/customers.png" class="w-100 max-xxl-un cus-rounded-2" alt="video">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trade On end -->

<!--People Trust start-->
<section>
    <div class="container">
        <div class="row gy-15 gy-lg-0 justify-content-center align-items-center">
            <div class="col-sm-10 col-lg-6 col-xxl-5 order-2 order-lg-0">
                <div class="company-story__thumbs d-center">
                    <img src="assets/images/deposite.png" class="cus-rounded-1 w-100" alt="Imgae">
                </div>
            </div>
            <div class="col-lg-6 col-xxl-7">
                <div class="row ms-xl-3 ms-xxl-10">
                    <div class="col-xxl-12">
                        <div class="">
                            <h3 class="mb-3 mt-5">Friendly Funding Options</h3>
                            <p>
                                At TradersEra we've got all your account funding needs sorted. Whether you fancy the
                                ease of Visa or Mastercard, the trustworthiness of a wire transfer or the modern touch
                                of cryptocurrency we offer a range of options to kick off smoothly. Pick the approach
                                that suits you and dive into trading
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="client_company_section py-10 p1-bg align-items-center justify-content-center"
            style="border-radius: 10px;">
            <!-- Swiper -->
            <div class="swiper client_company swiper-initialized swiper-horizontal swiper-pointer-events">
                <div class="swiper-wrapper align-items-center" id="swiper-wrapper-38fe1326c9563c95" aria-live="off"
                    style="transition-duration: 0ms; transform: translate3d(-561.143px, 0px, 0px);">
                    <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="0"
                        role="group" aria-label="1 / 7" style="width: 230.571px; margin-right: 50px;">
                        <img src="assets/images/company_logo.png" alt="Client Logo">
                    </div>
                    <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="1"
                        role="group" aria-label="2 / 7" style="width: 230.571px; margin-right: 50px;">
                        <img src="assets/images/company_logo2.png" alt="Client Logo">
                    </div>
                    <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="2"
                        role="group" aria-label="3 / 7" style="width: 230.571px; margin-right: 50px;">
                        <img src="assets/images/company_logo3.png" alt="Client Logo">
                    </div>
                    <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="3"
                        role="group" aria-label="4 / 7" style="width: 230.571px; margin-right: 50px;">
                        <img src="assets/images/company_logo4.png" alt="Client Logo">
                    </div>
                    <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-prev"
                        data-swiper-slide-index="4" role="group" aria-label="5 / 7"
                        style="width: 230.571px; margin-right: 50px;">
                        <img src="assets/images/company_logo5.png" alt="Client Logo">
                    </div>
                    <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-active"
                        data-swiper-slide-index="5" role="group" aria-label="6 / 7"
                        style="width: 230.571px; margin-right: 50px;">
                        <img src="assets/images/company_logo6.png" alt="Client Logo">
                    </div>
                    <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-next"
                        data-swiper-slide-index="6" role="group" aria-label="7 / 7"
                        style="width: 230.571px; margin-right: 50px;">
                        <img src="assets/images/company_logo7.png" alt="Client Logo">
                    </div>
                    <div class="swiper-slide text-center" data-swiper-slide-index="0" role="group" aria-label="1 / 7"
                        style="width: 230.571px; margin-right: 50px;">
                        <img src="assets/images/company_logo.png" alt="Client Logo">
                    </div>
                    <div class="swiper-slide text-center" data-swiper-slide-index="1" role="group" aria-label="2 / 7"
                        style="width: 230.571px; margin-right: 50px;">
                        <img src="assets/images/company_logo2.png" alt="Client Logo">
                    </div>
                    <div class="swiper-slide text-center" data-swiper-slide-index="2" role="group" aria-label="3 / 7"
                        style="width: 230.571px; margin-right: 50px;">
                        <img src="assets/images/company_logo3.png" alt="Client Logo">
                    </div>
                    <div class="swiper-slide text-center" data-swiper-slide-index="3" role="group" aria-label="4 / 7"
                        style="width: 230.571px; margin-right: 50px;">
                        <img src="assets/images/company_logo4.png" alt="Client Logo">
                    </div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </div>
</section>
<!-- People Trust end -->

<!--Testimonial start-->
<!-- <section class="testimonial p1-bg pt-120 pb-120 position-relative z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
            <img src="assets/images/star.png" alt="vector" class="position-absolute push_animat">
            <img src="assets/images/vector2.png" alt="vector" class="position-absolute bottom-0 start-0 d-none d-xxxl-flex">
            <img src="assets/images/sun.png" alt="vector" class="position-absolute push_animat d-none d-xxl-flex">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-7">
                    <div class="heading__content alt-color mb-10 mb-lg-15 text-center">
                        <span class="heading fs-five mb-5">Testimonial</span>
                        <h3>What people say</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="swiper common-slider1 cus-rounded-1 d-center align-items-end align-items-xxl-center ">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide cus-rounded-1 overflow-hidden cus-rounded-1 overflow-hidden">
                                <div class="testimonial__part a2-bg d-flex flex-column flex-sm-row  align-items-center">
                                    <div class="testimonial__author d-none d-sm-flex">
                                        <img src="assets/images/author.png" class="max-xxl-un " alt="Image">
                                    </div>
                                    <div class="testimonial__content p-4 px-lg-7 px-xxl-8 py-lg-6 py-xxl-7">
                                        <div class="content__part">
                                            <img src="assets/images/icon/quote_left.png" alt="icon">
                                            <p class=" fs-six-up mt-5 mt-xxl-6">"Trading has always been a passion, but it wasn't management that began to see consistent profits. The journey was not without its ups and downs, but the lessons I learned along the way have been embraced riskinvaluable.</p>
                                            <h5 class="heading p1-color mt-4">Brooklyn Simmons</h5>
                                            <span class="fs-seven fw_500 mt-2">Marketing Director</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide cus-rounded-1 overflow-hidden">
                                <div class="testimonial__part a2-bg d-flex flex-column flex-sm-row  align-items-center">
                                    <div class="testimonial__author d-none d-sm-flex">
                                        <img src="assets/images/author2.png" class="max-xxl-un " alt="Image">
                                    </div>
                                    <div class="testimonial__content p-4 p-lg-7 p-xxl-8">
                                        <div class="content__part">
                                            <img src="assets/images/icon/quote_left.png" alt="icon">
                                            <p class=" fs-six-up mt-5 mt-xxl-6">"Trading has always been a passion, but it wasn't management that began to see consistent profits. The journey was not without its ups and downs, but the lessons I learned along the way have been embraced riskinvaluable.</p>
                                            <h5 class="heading p1-color mt-4">Chris Moore</h5>
                                            <span class="fs-seven fw_500 mt-2">President of Sales</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide cus-rounded-1 overflow-hidden">
                                <div class="testimonial__part a2-bg d-flex flex-column flex-sm-row  align-items-center">
                                    <div class="testimonial__author d-none d-sm-flex">
                                        <img src="assets/images/author3.png" class="max-xxl-un" alt="Image">
                                    </div>
                                    <div class="testimonial__content p-4 p-lg-7 p-xxl-8">
                                        <div class="content__part">
                                            <img src="assets/images/icon/quote_left.png" alt="icon">
                                            <p class=" fs-six-up mt-5 mt-xxl-6">"Trading has always been a passion, but it wasn't management that began to see consistent profits. The journey was not without its ups and downs, but the lessons I learned along the way have been embraced riskinvaluable.</p>
                                            <h5 class="heading p1-color mt-4">Balogh Imre</h5>
                                            <span class="fs-seven fw_500 mt-2">Account Executive</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-btn position-absolute justify-content-end d-center justify-content-xxl-between gap-2 w-100 pb-3 pb-sm-5 pb-xxl-0 px-8 px-sm-18 px-xl-12 px-xxl-18">
                            <button type="button" aria-label="Slide Prev" class="ara-prev slide-button cmn-btn2 d-center">
                                <i class="ti ti-arrow-narrow-right"></i>
                            </button>
                            <button type="button" aria-label="Slide Next" class="ara-next slide-button cmn-btn2 d-center">
                                <i class="ti ti-arrow-narrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<!-- Testimonial end -->

<!--blog_news start-->
<!-- <section class="blog_news pt-120 pb-120 position-relative z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
            <img src="assets/images/star.png" alt="vector" class="position-absolute">
            <img src="assets/images/vector2.png" alt="vector" class="position-absolute bottom-0 start-0">
            <img src="assets/images/sun.png" alt="vector" class="position-absolute">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="heading__content d-flex row-gap-7 gap-20 flex-wrap justify-content-between align-items-center mb-10 mb-lg-15 ">
                    <div class="heading__part">
                        <span class="heading s1-color fs-five mb-5">Blog</span>
                        <h3>News & Analysis</h3>
                    </div>
                    <a href="blog.html" class="cmn-btn link fs-six-up  gap-2 gap-lg-3 align-items-center"> See All <i class="ti ti-arrow-right fs-four"></i></a>
                </div>
            </div>
            <div class="row gy-6">
                <div class="col-md-6 col-xxl-4">
                    <div class="blog_news__card nb3-bg cus-rounded-1 overflow-hidden">
                        <div class="blog_news__thumbs position-relative">
                            <img src="assets/images/blog_news.png" alt="Image" class="w-100">
                            <a href="#" class="border border-color second nw1-color fs-seven rounded-3 position-absolute top-0 end-0 py-1 px-3 mt-5 me-5">News</a>
                        </div>
                        <div class="blog_news__content py-6 py-lg-7 py-xxl-8 px-4 px-lg-5 px-xxl-6">
                           <a href="blog-details.html"><h5 class="mb-4 mb-lg-5">Trading Psychology: Mastering Your Mind for Profit</h5></a>
                           <div class="fs-seven fw_500 d-flex row-gap-0 flex-wrap gap-3 mb-4 mb-lg-5">August 17,2023 <span>|</span> Written by jason Turner</div>
                           <p>Trading in financial markets involves a wide 
                            employ to make informed decisions.</p>
                            <a href="blog-details.html" class="link fs-five fw-semibold d-flex gap-2 gap-lg-3 align-items-center mt-6  mt-lg-8"> Continue Reading <i class="ti ti-arrow-right"></i></a>
                       </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4">
                    <div class="blog_news__card nb3-bg cus-rounded-1 overflow-hidden">
                        <div class="blog_news__thumbs position-relative">
                            <img src="assets/images/blog_news2.png" alt="Image" class="w-100">
                            <a href="#" class="border border-color second nw1-color fs-seven rounded-3 position-absolute top-0 end-0 py-1 px-3 mt-5 me-5">Features</a>
                        </div>
                        <div class="blog_news__content py-6 py-lg-7 py-xxl-8 px-4 px-lg-5 px-xxl-6">
                           <a href="blog-details.html"><h5 class="mb-4 mb-lg-5">Trading Pitfalls Common Mistakes and How to Avoid Them...</h5></a>
                           <div class="fs-seven fw_500 d-flex flex-wrap row-gap-0 gap-3 mb-4 mb-lg-5">August 17,2023 <span>|</span> Written by jason Turner</div>
                           <p>Trading in financial markets involves a wide 
                            employ to make informed decisions.</p>
                            <a href="blog-details.html" class="link fs-five fw-semibold d-flex gap-2 gap-lg-3 align-items-center mt-6  mt-lg-8"> Continue Reading <i class="ti ti-arrow-right"></i></a>
                       </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4">
                    <div class="blog_news__card nb3-bg cus-rounded-1 overflow-hidden">
                        <div class="blog_news__thumbs position-relative">
                            <img src="assets/images/blog_news3.png" alt="Image" class="w-100">
                            <a href="#" class="border border-color second nw1-color fs-seven rounded-3 position-absolute top-0 end-0 py-1 px-3 mt-5 me-5">News</a>
                        </div>
                        <div class="blog_news__content py-6 py-lg-7 py-xxl-8 px-4 px-lg-5 px-xxl-6">
                           <a href="blog-details.html"><h5 class="mb-4 mb-lg-5">Trading Platforms: Tools for Success in Financial Markets</h5></a>
                           <div class="fs-seven fw_500 d-flex flex-wrap row-gap-0 gap-3 mb-4 mb-lg-5">August 17,2023 <span>|</span> Written by jason Turner</div>
                           <p>Trading in financial markets involves a wide 
                            employ to make informed decisions.</p>
                            <a href="blog-details.html" class="link fs-five fw-semibold d-flex gap-2 gap-lg-3 align-items-center mt-6  mt-lg-8"> Continue Reading <i class="ti ti-arrow-right"></i></a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<!-- blog_news end -->
<script>

    $('.slider').each(function () {
        var $this = $(this);
        var $group = $this.find('.slide_group');
        var $slides = $this.find('.slide');
        var bulletArray = [];
        var currentIndex = 0;
        var timeout;

        function move(newIndex) {
            var animateLeft, slideLeft;

            advance();

            if ($group.is(':animated') || currentIndex === newIndex) {
                return;
            }

            bulletArray[currentIndex].removeClass('active');
            bulletArray[newIndex].addClass('active');

            if (newIndex > currentIndex) {
                slideLeft = '100%';
                animateLeft = '-100%';
            } else {
                slideLeft = '-100%';
                animateLeft = '100%';
            }

            $slides.eq(newIndex).css({
                display: 'block',
                left: slideLeft
            });
            $group.animate({
                left: animateLeft
            }, function () {
                $slides.eq(currentIndex).css({
                    display: 'none'
                });
                $slides.eq(newIndex).css({
                    left: 0
                });
                $group.css({
                    left: 0
                });
                currentIndex = newIndex;
            });
        }

        function advance() {
            clearTimeout(timeout);
            timeout = setTimeout(function () {
                if (currentIndex < ($slides.length - 1)) {
                    move(currentIndex + 1);
                } else {
                    move(0);
                }
            }, 4000);
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
                move(3);
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


</script>
<?php include("includes/footer.php") ?>