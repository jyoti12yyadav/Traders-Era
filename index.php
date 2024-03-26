

<?php include("includes/header.php") ?>
    <!-- header-section start -->
<style>
.slider {
  margin: 0 auto;
  max-width: auto;
}

.slide_viewer {
  height: 800px;
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

.slide_btn.active, .slide_btn:hover {
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

.previous_btn, .next_btn {
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

.previous_btn:hover, .next_btn:hover {
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


</style>
<div class="slider">
    <div class="slide_viewer">
      <div class="slide_group">
        <div class="slide hero-section--secondary">
            <div class="container" style="position: relative;
            top: 434px;display: flex;justify-content: center;">
            <div class="row banner-content">
                <div class="col-lg-6">
                    <h1>hello</h1>
                </div>
                <div class="col-lg-6">
                    
                </div>
                
            </div>
               
            </div>
        </div>
        <div class="slide hero-section--secondary">
        </div>
      </div>
    </div>
  </div><!-- End // .slider -->
  
  <div class="slide_buttons">
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Why Trade start-->
    <section class="why-trade s1-bg alt-color position-relative z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
            <img src="assets/images/sun.png" alt="vector" class="position-absolute push_animat">
            <img src="assets/images/star.png" alt="vector" class="position-absolute  d-xxxl-flex previewSkew">
        </div>
        <div class="container">
            <div class="row gy-3 gy-lg-0 justify-content-center">
                <div class="col-sm-7 col-lg-6 col-xxl-5 order-2 order-lg-0">
                    <div class="why-trade__thumbs h-100 d-flex align-items-end ps-20 ps-sm-5 ps-lg-0">
                        <img src="assets/images/why_trade.png" alt="Imgae">
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-7">
                    <div class="row pt-120 pb-120">
                        <div class="col-xxl-6 offset-xxl-2">
                            <div class="why-trade__part">
                                <span class="heading fs-five">Why Trade With</span>
                                <h3 class="mb-3 mt-5">Trade Genius</h3>
                                <p>Trading is the art and science of buying and selling financial instruments, such as stocks bonds currencies. </p>
                                <a href="about.html" class="cmn-btn link secondary-link fs-six-up  gap-2 gap-lg-3 align-items-center mt-5"> Learn more <i class="ti ti-arrow-narrow-right fs-four"></i></a>
                            </div>  
                        </div>  
                        <div class="col-xxl-12 mt-7 mt-md-8 mt-xxl-3">
                            <div class="why-trade__part d-flex align-items-center">
                                <div class="vector d-none d-xxl-flex px-xxl-15">
                                    <img src="assets/images/trade_vector.png" alt="Image" class="max-xxl-un">
                                </div>
                                <div class="content">
                                    <h3 class="mb-3">Trade Apex</h3>
                                    <p>Trading is the art and science of buying and selling financial instruments, suc stocks, bonds, currencies commodities, and cryptocurrencies, with the aim of making a profit. It's a dynamic and multifaceted professionals from around the world.</p>
                                    <a href="about.html" class="cmn-btn link secondary-link fs-six-up  gap-2 gap-lg-3 align-items-center mt-5"> Learn more <i class="ti ti-arrow-narrow-right fs-four"></i></a>    
                                </div>
                            </div>  
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!-- Why Trade end -->   

    <!--provide-world start-->
    <section class="provide-world bg nb4-bg pt-120 pb-120  position-relative z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1 d-none d-md-flex">
            <img src="assets/images/button.png" alt="vector" class="position-absolute pt-6 pt-xl-15 previewShapeRevX">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-7">
                    <div class="heading__content mb-10 mb-lg-15 text-center">
                        <span class="heading p1-color fs-five mb-5">We Provide World’s</span>
                        <h3 class="mb-5 mb-lg-6">Join a club of more than <span class="s1-color">480,000</span> traders</h3>
                        <p class="fs-six-up mx-ch mx-auto">Trading is the art and science of buying and selling financial instruments, such as stocks bonds currencies commodities</p>
                    </div>
                </div>
            </div>
            <div class="row gy-6 gy-xxl-0">
                <div class="col-md-6 col-xxl-4">
                    <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <i class="ti ti-award-filled fs-three p1-color"></i>
                        </span>
                       <h4 class="mt-5 mb-5">Best Reputation</h4>
                       <p>transformed the trading landscape. Online trading platforms and mobile apps have made it easier than ever for individuals</p>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4">
                    <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <i class="ti ti-users fs-three p1-color"></i>
                        </span>
                       <h4 class="mt-5 mb-5">480,000+ Clients</h4>
                       <p>One of the fundamental principles of trading is risk management. Successful traders carefully manage their capital,</p>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4">
                    <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <i class="ti ti-shield-check-filled fs-three p1-color"></i>
                        </span>
                       <h4 class="mt-5 mb-5">Trusted and Secure</h4>
                       <p>Trading is not without its challenges, as markets can be highly volatile and unpredictable. It requires discipline</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- provide-world end -->   

    <!--Trade On start-->
    <section class="trade_on a2-bg pt-120 pb-120 position-relative z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
            <img src="assets/images/coin.png" alt="vector" class="position-absolute d-none d-md-flex previewShapeRevX">
            <img src="assets/images/star2.png" alt="vector" class="position-absolute d-none d-xl-flex push_animat">
            <img src="assets/images/coin_vector.png" alt="vector" class="position-absolute d-none d-xxxl-flex bottom-0 end-0 previewShapeRevX opacity-50">
        </div>
        <div class="container">
            <div class="row gy-10 gy-xxl-0 justify-content-center justify-content-xxl-between align-items-center">
                <div class="col-lg-6 col-xxl-5">
                    <div class="trade_on__content">
                        <span class="heading s1-color fs-five mb-5">Trade On Our</span>
                        <h3 class="mb-4 mb-lg-5">World Class Platform</h3>
                        <p class="fs-six mx-ch">Trading in financial markets involves a wide range of strategies that traders employ to make informed decisions. From trading to swing trading and long-term investing, each strategy has its own set of principles and risk factors.</p>   
                        <ul class="d-flex gap-4 flex-column mt-6">
                            <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Charts trading</li>
                            <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Understanding Trading Strategies </li>
                            <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Risk Management in Trading </li>
                            <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Technical vs. Fundamental Analysis </li>
                        </ul>
                        <a href="signup.html" class="cmn-btn secondary-alt fs-six-up nb4-xxl-bg gap-2 gap-lg-3 align-items-center py-2 px-5 py-lg-3 px-lg-6 mt-7 mt-xxl-8">Sign up Now <i class="ti ti-arrow-right fs-four"></i></a>
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
    <!-- Trade On end -->
    
    <!--People Trust start-->
    <section class="people_trust pt-120 pb-120 position-relative z-0">
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
    </section>
    <!-- People Trust end -->   
    
    <!--Testimonial start-->
    <section class="testimonial p1-bg pt-120 pb-120 position-relative z-0">
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
    </section>
    <!-- Testimonial end -->   
   
    <!--blog_news start-->
    <section class="blog_news pt-120 pb-120 position-relative z-0">
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
    </section>
     <!-- blog_news end -->  
<script>

$('.slider').each(function() {
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
    }, function() {
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
    timeout = setTimeout(function() {
      if (currentIndex < ($slides.length - 1)) {
        move(currentIndex + 1);
      } else {
        move(0);
      }
    }, 4000);
  }
  
  $('.next_btn').on('click', function() {
    if (currentIndex < ($slides.length - 1)) {
      move(currentIndex + 1);
    } else {
      move(0);
    }
  });
  
  $('.previous_btn').on('click', function() {
    if (currentIndex !== 0) {
      move(currentIndex - 1);
    } else {
      move(3);
    }
  });
  
  $.each($slides, function(index) {
    var $button = $('<a class="slide_btn">&bull;</a>');
    
    if (index === currentIndex) {
      $button.addClass('active');
    }
    $button.on('click', function() {
      move(index);
    }).appendTo('.slide_buttons');
    bulletArray.push($button);
  });
  
  advance();
});

</script>
<?php include("includes/footer.php") ?>