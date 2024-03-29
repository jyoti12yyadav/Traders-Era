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


    * {
  box-sizing: border-box;
}

body {
  font-size: 16px;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  height: 100vh;
  margin: 0;

  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  background-color: #ccc;
}

h1 {
  margin-bottom: 50px;
}

.container {
  text-align: center;
}

.progress-wrap {
  max-width: 100%;
  width: 500px;
  margin-bottom: 40px;
  position: relative;

  display: flex;
  justify-content: space-between;
}

.progress-wrap::before {
  content: "";
  width: 100%;
  height: 4px;

  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  z-index: -1;
  transition: 0.3s ease-in-out;
  background-color: #e6e6e6;
}

.progress {
  width: 0;
  height: 4px;

  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  z-index: -1;
  transition: 0.3s ease-in-out;
  background-color: #4717a7;
}

.step {
  width: 40px;
  height: 40px;
  font-weight: bold;

  display: flex;
  align-items: center;
  justify-content: center;
  color: #333;
  background-color: #fff;
  border: 3px solid #e6e6e6;
  border-radius: 50%;
  transition: 0.3s ease-in-out;
}

.step.active {
  border-color: #4717a7;
}

.btn {
  margin: 10px;
  padding: 8px 30px;

  font-size: 14px;
  color: #fff;
  background-color: #4717a7;
  border-radius: 10px;
  border: 0;
  cursor: pointer;
  transition: transform 0.2s ease-in-out;
  outline: none;
}

.btn:active {
  transform: scale(0.96);
}

.btn:disabled {
  color: #666;
  background-color: #e6e6e6;
  cursor: not-allowed;
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
                                    <h1 class="display-two nb4-xxl-color mb-5 mb-lg-6">Trade Smart with TradersEra</h1>
                                    <p class="fs-six-up fw_500 nb4-xxl-color">TradersEra helps you trade smarter with
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
                                        TradersEra</h1>
                                    <p class="fs-six-up fw_500 nb4-xxl-color">Trade smarter with TradersEra's insights,
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
                    <!-- <span class="heading s1-color fs-five mb-5">Trade On Our</span> -->
                    <h2 class="mb-4 mb-lg-5">Why Choose us</h2>
                    <!-- <p class="fs-six mx-ch">Trading in financial markets involves a wide range of strategies that traders employ to make informed decisions. From trading to swing trading and long-term investing, each strategy has its own set of principles and risk factors.</p>    -->
                    <ul class="d-flex gap-4 flex-column mt-6">
                        <li class="d-flex align-items-center gap-3 fs-six-up"><i
                                class="ti ti-circle-check s1-color fs-four"></i>Trading with a global broker-dealer that
                            operates under regulatory control in multiple jurisdictions.
                        </li>
                        <li class="d-flex align-items-center gap-3 fs-six-up"><i
                                class="ti ti-circle-check s1-color fs-four"></i>More than 1250 instruments to choose
                            from, Forex, cryptocurrencies, stocks, commodities, and indices.
                        </li>
                        <li class="d-flex align-items-center gap-3 fs-six-up"><i
                                class="ti ti-circle-check s1-color fs-four"></i>Web-based trading Forex trading
                            platforms for Desktop, tablet, mobile.
                        </li>
                        <li class="d-flex align-items-center gap-3 fs-six-up"><i
                                class="ti ti-circle-check s1-color fs-four"></i>
                            Enjoy perks such as automated risk management solutions and get helpful in platform trading
                            signals

                        </li>
                        <li class="d-flex align-items-center gap-3 fs-six-up"><i
                                class="ti ti-circle-check s1-color fs-four"></i>Start trading with zero risk by signing
                            up for a Free Demo Account to practice.

                        </li>
                    </ul>
                    <!-- <a href="signup.html" class="cmn-btn secondary-alt fs-six-up nb4-xxl-bg gap-2 gap-lg-3 align-items-center py-2 px-5 py-lg-3 px-lg-6 mt-7 mt-xxl-8">Sign up Now <i class="ti ti-arrow-right fs-four"></i></a> -->
                </div>
            </div>
            <div class="col-md-8 col-lg-6">
                <div class="trade_on__thumbs d-flex justify-content-end">
                    <img src="assets/images/trade_on.png" alt="Imgae">
                </div>
            </div>
        </div>
    </div>
</section>



<!--provide-world start-->
<!-- <section class="provide-world pt-120 position-relative z-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-xxl-6">
                <div class="heading__content mb-10 mb-lg-15 text-center">
                    <h2 class="mb-5 mb-lg-6">How to Start Trading</h2>
                    <span class="heading p1-color fs-five mb-5">Take a few simple steps</span>

                </div>
            </div>
        </div>
        <div class="row gy-6 gy-xxl-0">
            <div class="col-md-6 col-xxl-4">
                <div class="provide-world__card secondary nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <i class="ti ti-file fs-three p1-color"></i>
                    </span>
                    <h4 class="mt-5 mb-5">Terms of Service</h4>
                    <p>Trading is not without its challenges, as markets can be highly volatile and unpredictable. It
                        requires discipline</p>
                    <a href="terms-conditions.html"
                        class="cmn-btn link third-link fs-five  gap-2 gap-lg-3 align-items-center mt-5">Learn More<i
                            class="ti ti-arrow-narrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-xxl-4">
                <div class="provide-world__card secondary nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <i class="ti ti-file fs-three p1-color"></i>
                    </span>
                    <h4 class="mt-5 mb-5">Terms of Service</h4>
                    <p>Trading is not without its challenges, as markets can be highly volatile and unpredictable. It
                        requires discipline</p>
                    <a href="terms-conditions.html"
                        class="cmn-btn link third-link fs-five  gap-2 gap-lg-3 align-items-center mt-5">Learn More<i
                            class="ti ti-arrow-narrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-xxl-4">
                <div class="provide-world__card secondary nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <i class="ti ti-world fs-three p1-color"></i>
                    </span>
                    <h4 class="mt-5 mb-5">Policies</h4>
                    <p>Trading is not without its challenges, as markets can be highly volatile and unpredictable. It
                        requires discipline</p>
                    <a href="privacy-policy.html"
                        class="cmn-btn link third-link fs-five  gap-2 gap-lg-3 align-items-center mt-5">Learn More<i
                            class="ti ti-arrow-narrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-xxl-4">
                <div class="provide-world__card secondary nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <i class="ti ti-shield-lock-filled fs-three p1-color"></i>
                    </span>
                    <h4 class="mt-5 mb-5">Security</h4>
                    <p>Trading is not without its challenges, as markets can be highly volatile and unpredictable. It
                        requires discipline</p>
                    <a href="terms-conditions.html"
                        class="cmn-btn link third-link fs-five  gap-2 gap-lg-3 align-items-center mt-5">Learn More<i
                            class="ti ti-arrow-narrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- provide-world end -->
 <section class="provide-world bg nb4-bg pt-120 pb-120  position-relative z-0">
    <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1 d-none d-md-flex">
        <img src="assets/images/button.png" alt="vector" class="position-absolute pt-6 pt-xl-15 previewShapeRevX">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-7">
                <div class="heading__content mb-10 mb-lg-15 text-center">
                    <span class="heading p1-color fs-five mb-5">Quick and Seamless Trading Setup</span>
                    <h2 class="mb-5 mb-lg-6">Start Trading in 3 Easy Steps</h2>
                </div>
            </div>
        </div>
        <div class="row gy-6 gy-xxl-0">
            <div class="col-md-6 col-xxl-4">
                <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <i class="ti ti-users fs-three p1-color"></i>
                    </span>
                    <h4 class="mt-5 mb-5">Sign Up</h4>
                    <p>Create your account quickly and securely.</p>
                    <br>
                </div>
            </div>
            <div class="col-md-6 col-xxl-4">
                <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <i class="ti ti-tools fs-three p1-color"></i>
                    </span>
                    <h4 class="mt-5 mb-5">Fund Your Account</h4>
                    <p>Deposit funds using our secure payment methods.</p>
                </div>
            </div>
            <div class="col-md-6 col-xxl-4">
                <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <i class="ti ti-trending-up fs-three p1-color"></i>
                    </span>
                    <h4 class="mt-5 mb-5">Trade</h4>
                    <p>Explore markets, place trades, and watch your investments grow.</p>
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
                    <h2 class="mb-4">Your Go-To for Crypto Trading</h2>
                    <p class="mx-ch">At TradersEra, we specialize in what we do best – Crypto trading. Our platform is
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
                    <img src="assets/images/HOME three.png" class="w-100 max-xxl-un cus-rounded-2" alt="video">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trade On end -->

<!--People Trust start-->
<!-- <section class="people_trust pt-120 pb-120 position-relative z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
            <img src="assets/images/vector.png" alt="vector" class="position-absolute jello d-none d-xl-flex">
            <img src="assets/images/star3.png" alt="vector" class="position-absolute push_animat d-none d-xxxl-flex">
            <img src="assets/images/vector3.png" alt="vector" class="position-absolute bottom-0 end-0 d-none d-xxxl-flex">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-xxl-7">
                    <div class="heading__content mb-8 mb-lg-10 text-center">
                        <span class="heading p1-color fs-five mb-5">People Trust Us</span>
                        <h3 class="mb-4 mb-lg-6">Millions of Users Worldwide</h3>
                        <p class="fs-six-up mx-ch mx-auto">The rise of cryptocurrencies has opened up new trading this beginner's guide to cryptocurrency trading,</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="singletab">
                        <ul class="tablinks d-center flex-wrap gap-3 gap-lg-4  mb-10 mb-xxl-15">
                            <li class="nav-links active">
                                <button class="tablink cmn-btn outline_btn align-items-center fs-six-up py-2 py-lg-3 px-6  px-md-3 px-xxl-10 d-flex gap-3 align-items-center"><i class="ti ti-video fs-four s1-color"></i>Test Your Knowledge</button>
                            </li>
                            <li class="nav-links">
                                <button class="tablink cmn-btn outline_btn align-items-center fs-six-up py-2 py-lg-3 px-6  px-md-3 px-xxl-10 d-flex gap-3 align-items-center"><i class="ti ti-video fs-four s1-color"></i>Tutorial Videos</button>
                            </li>
                            <li class="nav-links">
                                <button class="tablink cmn-btn outline_btn align-items-center fs-six-up py-2 py-lg-3 px-6  px-md-3 px-xxl-10 d-flex gap-3 align-items-center"><i class="ti ti-video fs-four s1-color"></i>Live Commentary</button>
                            </li>
                        </ul>
                        <div class="tabcontents">
                            <div class="tabitem active">
                                <div class="row gy-10 gy-xl-0 justify-content-center justify-content-lg-between align-items-center">
                                    <div class="col-xl-6 col-xxl-7 ">
                                        <div class="people_trust_thumb d-center p-2 p-lg-5 pseudo_element_after overflow-hidden">
                                            <img src="assets/images/people_trust_video.png" class="w-100 max-xxl-un cus-rounded-2" alt="video">
                                            <a href="https://www.youtube.com/watch?v=BHACKCNDMW8" class="popup-video box_10 btn-popup-animation position-absolute d-center rounded-circle">
                                                <i class="fa-solid fa-play fs-four"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-xxl-5">
                                        <div class="trade_on__content">
                                            <h4 class="mb-4">What you will learn</h4>
                                            <p class="mx-ch">The rise of cryptocurrencies has opened up new trading In this beginner's guide to cryptocurrency trading we demystify the world of digital currencies</p>   
                                            <ul class="list_divided d-flex flex-wrap gap-5 mt-5 mt-xxl-6">
                                                <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Charts trading</li>
                                                <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Supreme Authority</li>
                                                <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Worldly Power</li>
                                                <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Global Dominance</li>
                                            </ul>
                                            <div class="mt-8 mt-xxl-10">
                                                <div class="counter-area d-flex gap-8 gap-xxl-10 ">
                                                    <div class="counter-part">
                                                        <div class="counters d-flex">
                                                            <span class="odometer display-four s1-color" data-odometer-final="12">0</span>
                                                            <span class="display-four symbol s1-color">K</span>
                                                        </div>
                                                        <span class="mt-4">Users Joined</span>
                                                    </div>
                                                    <div class="counter-part">
                                                        <div class="counters d-flex">
                                                            <span class="odometer display-four s1-color" data-odometer-final="5.5">0</span>
                                                            <span class="display-four symbol s1-color">M</span>
                                                        </div>
                                                        <span class="mt-4">Monthly Voulme (In USD)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabitem">
                                <div class="row gy-10 gy-xl-0 justify-content-center justify-content-lg-between align-items-center">
                                    <div class="col-xl-6 col-xxl-5">
                                        <div class="trade_on__content">
                                            <h4 class="mb-4">What you will learn</h4>
                                            <p class="mx-ch">The rise of cryptocurrencies has opened up new trading In this beginner's guide to cryptocurrency trading we demystify the world of digital currencies</p>   
                                            <ul class="list_divided d-flex flex-wrap gap-5 mt-5 mt-xxl-6">
                                                <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color"></i>Charts trading</li>
                                                <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color"></i>Supreme Authority</li>
                                                <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color"></i>Worldly Power</li>
                                                <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color"></i>Global Dominance</li>
                                            </ul>
                                            <div class="mt-8 mt-xxl-10">
                                                <div class="counter-area d-flex gap-8 gap-xxl-10 ">
                                                    <div class="counter-part">
                                                        <div class="counters d-flex">
                                                            <span class="odometer display-four s1-color" data-odometer-final="12">0</span>
                                                            <span class="display-four symbol s1-color">K</span>
                                                        </div>
                                                        <span class="mt-4">Users Joined</span>
                                                    </div>
                                                    <div class="counter-part">
                                                        <div class="counters d-flex">
                                                            <span class="odometer display-four s1-color" data-odometer-final="5.5">0</span>
                                                            <span class="display-four symbol s1-color">M</span>
                                                        </div>
                                                        <span class="mt-4">Monthly Voulme (In USD)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-xxl-7 ">
                                        <div class="people_trust_thumb d-center p-2 p-lg-5 pseudo_element_after overflow-hidden">
                                            <img src="assets/images/people_trust_video.png" class="w-100 max-xxl-un cus-rounded-2" alt="video">
                                            <a href="https://www.youtube.com/watch?v=BHACKCNDMW8" class="popup-video box_10 btn-popup-animation position-absolute d-center rounded-circle">
                                                <i class="fa-solid fa-play fs-four"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabitem">
                                <div class="row gy-10 gy-xl-0 justify-content-center justify-content-lg-between align-items-center">
                                    <div class="col-xl-6 col-xxl-7 ">
                                        <div class="people_trust_thumb d-center p-2 p-lg-5 pseudo_element_after overflow-hidden">
                                            <img src="assets/images/people_trust_video.png" class="w-100 max-xxl-un cus-rounded-2" alt="video">
                                            <a href="https://www.youtube.com/watch?v=BHACKCNDMW8" class="popup-video box_10 btn-popup-animation position-absolute d-center rounded-circle">
                                                <i class="fa-solid fa-play fs-four"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-xxl-5">
                                        <div class="trade_on__content">
                                            <h4 class="mb-4">What you will learn</h4>
                                            <p class="mx-ch">The rise of cryptocurrencies has opened up new trading In this beginner's guide to cryptocurrency trading we demystify the world of digital currencies</p>   
                                            <ul class="list_divided d-flex flex-wrap gap-5 mt-5 mt-xxl-6">
                                                <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Charts trading</li>
                                                <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Supreme Authority</li>
                                                <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Worldly Power</li>
                                                <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Global Dominance</li>
                                            </ul>
                                            <div class="mt-8 mt-xxl-10">
                                                <div class="counter-area d-flex gap-8 gap-xxl-10 ">
                                                    <div class="counter-part">
                                                        <div class="counters d-flex">
                                                            <span class="odometer display-four s1-color" data-odometer-final="12">0</span>
                                                            <span class="display-four symbol s1-color">K</span>
                                                        </div>
                                                        <span class="mt-4">Users Joined</span>
                                                    </div>
                                                    <div class="counter-part">
                                                        <div class="counters d-flex">
                                                            <span class="odometer display-four s1-color" data-odometer-final="5.5">0</span>
                                                            <span class="display-four symbol s1-color">M</span>
                                                        </div>
                                                        <span class="mt-4">Monthly Voulme (In USD)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
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

</script>
<?php include("includes/footer.php") ?>

<!-- 

<section _ngcontent-c4="" class="start-steps">
    <div _ngcontent-c4="" class="container">
        <h2 _ngcontent-c4="" class="steps-title bold col-md-9 text-center mx-auto"> Ready to get started </h2>
        <p _ngcontent-c4="" class="steps-description text-center">Start trading in 3 easy steps</p>
        <div _ngcontent-c4=""
            class="steps d-flex flex-column flex-md-row justify-content-center justify-content-md-between">
            <div _ngcontent-c4=""
                class="step col-12 col-md-4 d-flex mx-md-auto align-items-center flex-md-column ng-star-inserted">
                <div _ngcontent-c4="" class="img-wrapper"><img _ngcontent-c4="" class="ng-tns-c4-1" loading="lazy"
                        src="/assets/img/svg/step-register.svg" alt="Register">
                    <div _ngcontent-c4="" class="counter"> 1 </div>
                </div>
                <div _ngcontent-c4="" class="ml-32">
                    <p _ngcontent-c4="" class="step-title text-left text-md-center"> Register </p>
                    <p _ngcontent-c4="" class="step-description text-left text-md-center">Create a profile<br>in less
                        than 2 minutes.</p>
                </div>
            </div>
            <div _ngcontent-c4=""
                class="step col-12 col-md-4 d-flex mx-md-auto align-items-center flex-md-column ng-star-inserted">
                <div _ngcontent-c4="" class="img-wrapper"><img _ngcontent-c4="" class="ng-tns-c4-1" loading="lazy"
                        src="/assets/img/svg/step-deposit.svg" alt="Deposit funds">
                    <div _ngcontent-c4="" class="counter"> 2 </div>
                </div>
                <div _ngcontent-c4="" class="ml-32">
                    <p _ngcontent-c4="" class="step-title text-left text-md-center"> Deposit funds </p>
                    <p _ngcontent-c4="" class="step-description text-left text-md-center">Fund your account<br>via your
                        chosen method</p>
                </div>
            </div>
            <div _ngcontent-c4=""
                class="step col-12 col-md-4 d-flex mx-md-auto align-items-center flex-md-column ng-star-inserted">
                <div _ngcontent-c4="" class="img-wrapper"><img _ngcontent-c4="" class="ng-tns-c4-1" loading="lazy"
                        src="/assets/img/svg/step-trade.svg" alt="Trade">
                    <div _ngcontent-c4="" class="counter"> 3 </div>
                </div>
                <div _ngcontent-c4="" class="ml-32">
                    <p _ngcontent-c4="" class="step-title text-left text-md-center"> Trade </p>
                    <p _ngcontent-c4="" class="step-description text-left text-md-center">Start trading with<br>a
                        reliable broker</p>
                </div>
            </div>
        </div><a _ngcontent-c4="" class="btn button red mx-auto mt-40" href="https://my.hycm.com/en/register"> Get
            started </a>
    </div>
</section> -->


