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

    .our-clients{
        margin-top: 10px    ;
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
                                    <h1 class="display-two nb4-xxl-color mb-5 mb-lg-6">Trade Smart With AI Trading And
                                        Make Profit
                                    </h1>
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
                                <img src="assets/images/banner one.png" class="max-auto max-xxl-un" alt="img">
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
                                    <h1 class="display-two nb4-xxl-color mb-5 mb-lg-6">Binary Trading Is Now Possible
                                        with TradersEra

                                    </h1>
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
                                <img src="assets/images/banner two.png" class="max-auto max-xxl-un" alt="img">
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
                    <!-- <span class="heading p1-color fs-five mb-5">Global Trust, Unbeatable Rates</span> -->
                    <h2 class="mb-5 mb-lg-6">What Makes TradersEra Different
                    </h2>
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
                                        <h3 class="">Binary Trading</h3>

                                        <span>High returns on investment within short timeframes.


                                        </span>
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
                                        <h3 class="">Secure Funding</h3>

                                        <span>We offer secure funding options.


                                        </span>
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
                                       
                                        <h3 class="">AI Trading Available
                                        </h3>

                                        <span>AI for trades based on algorithms and market conditions.

                                        </span>
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
                                        <h3 class="">Advantage Of Forex And Crypto</h3>

                                        <span> Investment opportunities across digital financial
                                            markets.
                                        </span>
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
                                        <h3 class="">No Download Required</h3>

                                        <span>Our web-based platform supports all operating systems.

                                        </span>
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
                                        <h3 class="">Customer Centric Approach </h3>

                                        <span>Raise a Ticket and resolve problem real quick.</span>
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
                            <h4 class="process-label">Sign Up </h4>
                            <!-- <p class="process-label-P">Simply click on the "Register Now" button</p> -->
                        </div>
                    </div>
                    <div class="col-3 ">
                        <div class="process-step-cont">
                            <div class="process-step step-2"></div>
                            <h4 class="process-label">Do Your KYC</h4>
                            <!-- <p class="process-label-P text-center">Enter your email address and choose a password</p> -->
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="process-step-cont">
                            <div class="process-step step-3"></div>
                            <h4 class="process-label">Deposit With Multiple Payment Option </h4>
                            <!-- <p class="process-label-P text-center">Take a moment to answer a few important questions to enhance your trading experience</p> -->
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="process-step-cont">
                            <div class="process-step step-4"></div>
                            <h4 class="process-label">Start Your Trading</h4>
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
                    <h2 class="mb-4 mb-lg-5" style="font-size:35px;">A Web Based Trading Platform
                    </h2>
                    <p class="mx-ch">Web trading platforms are safer since they use a remote server or cloud for
                        calculations. Users only need to focus on their internet connection and routing speed to receive
                        pricing data quickly and execute orders smoothly. No need to download or install anything.</p>

                </div>


                <h5 class="mt-4 mb-lg-5">
                    Advantages of Web-Based Trading Platforms
                </h5>
                <ul class="d-flex gap-4 flex-column mt-6">
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>Accessible anytime and anywhere, without the
                        need for installation.

                    </li>
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>Cross-Device Compatibility, Works seamlessly
                        across multiple devices.
                    </li>
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>Platform updates are hassle-free, ensuring
                        easy access to the latest features.

                    </li>
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>Doesn't need high-end hardware, suitable for
                        various devices.</li>
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>Compatible across various operating systems
                        without requiring specific versions.
                    </li>
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>Requires minimal disk space as data is
                        stored in the cloud or on servers.

                    </li>
                </ul>
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

<!-- Trade On end -->


<!--People Trust start-->
<section>
    <div class="container" style="margin-top: 70px;">
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