<?php include("includes/header.php"); ?>
<style>
    .main-table {
        display: flex;
    }
    .table-content {
        display: flex;
    }
    .sub-table-content {
        width: 100%;
        padding: 20px 50px;
        background-color: #000000;
        border-right: 1px solid #3e3d3d;
        text-align: center;
        justify-content: center;
        align-items: center;
        font-size: 20px;
    }
    .table-content2>.sub-table-content {
        background-color: #9ad953;
        border: 1px solid black;
        border-radius: 2px;
        color: black;
        font-weight: 700;
        border-radius: 10px 10px 0px 0px;
    }
    .sub-table-content>span {
        display: flex;
        text-align: center;
        justify-content: center;
        align-items: center;
        font-size: 18px;
        font-weight: 700;
        padding-bottom: 4px;
    }
    .sub-table-content>h4 {
        color: #000000;
    }
    .cus-rounded-3 {
        border-radius: 0px 0px 10px 10px;
    }
    .packages {
        background: #9ad953;
        padding: 25px;
        border-radius: 10px 10px 0px 0px;
    }
    .packages>h3 {
        color: #000000;
        text-align: center;
    }
    .package-para {
        font-size: 20px;
    }
    .pb-120 {
        padding-bottom: 60px !important;
    }
    .pt-120 {
        padding-top: 60px !important;
    }
    .table-para-2 {
        background-color: #292929;
        padding: 35px;
        border: 1px solid #838383;
        border-radius: 14px;
        margin: 10px 0px;
    }
</style>
<section class="banner-section pt-2 pb-1">
    <div class="container mt-10 mt-lg-0 pt-15 pt-lg-20 pb-5 pb-lg-0">
        <div class="row">
            <div class="col-12 breadcrumb-area ">
                <h1 class="mb-4">Compare Accounts</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item ms-2 ps-7 active" aria-current="page"><span>Compare Accounts</span></li>
                    </ol>
                </nav>
            </div>
    </div>
</section>


<section class="provide-world position-relative z-0 pb-120 pt-120" style="background-color: #000000;">
    <div class="container">
        <div class="row gy-6 gy-xxl-0">
            <h2 class="mb-10 text-center">Tailored trading account for Forex, indices, stocks, commodities </h2>
            <div class="col-md-6 col-xxl-4">
                <div class="provide-world__card secondary nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/Spreads.png" alt="stock-market">
                    </span>
                    <h3 class="mt-5 mb-5">Spreads from 0 pips
                    </h3>
                    <p>Our consolidated liquidity helps maintain low spreads, typically throughout trading periods.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-xxl-4">
                <div class="provide-world__card secondary nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/commission.png" alt="stock-market">
                    </span>
                    <h3 class="mt-5 mb-5">Multiple Funding Options
                    </h3>
                    <p>Start trading from as low as $0 per lot on our VIP or spread-only trading accounts.
                    </p>
                    <br>
                </div>
            </div>
            <div class="col-md-6 col-xxl-4">
                <div class="provide-world__card secondary nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/Low-starting-amount.png" alt="stock-market">
                    </span>
                    <h3 class="mt-5 mb-5">Low starting amount
                    </h3>
                    <p>Begin trading by opening your account with just $50.
                    </p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="company-story position-relative z-0  pt-120 pb-120 ">
    <div class="animation position-absolute w-100 h-100 z-n1">
        <img src="assets/images/star3.png" alt="null"
            class="position-absolute top-0 end-0 pt-10 pe-20 me-20 d-none d-xxl-flex previewSkew">
    </div>
    <div class="container">
        <div class="row gy-15 gy-lg-0 justify-content-center align-items-center">
            <div class="container my-5 table-div" >
                <table id="Record" class="table table-striped table-dark my-3">
                    <thead>
                        <tr>
                            <th scope="col"
                                style="background-color: #9ad953;color: black;text-align: center;font-size: 16px;padding:20px;display: table-cell;">
                                </th>
                            <th scope="col"
                                style="background-color: #F5C06D;color: black;font-size: 16px;padding:20px;display: table-cell;">
                                Standard</th>
                            <th scope="col"
                                style="background-color: #F5C06D;color: black;font-size: 16px;padding:20px;display: table-cell;">
                                Pro </th>
                            <th scope="col"
                                style="background-color: #F5C06D;color: black;font-size: 16px;padding:20px;display: table-cell;">
                                VIP</th>
                        </tr>
                    </thead>
                    <tbody class="justify-content-center text-start">
                        <tr>
                            <td>Platform</td>
                            <td>UTIP</td>
                            <td>UTIP</td>
                            <td>MT5</td>
                            
                        </tr>
                        <tr>
                            <td>Minimum Deposit</td>
                            <td>$50</td>
                            <td>$500</td>
                            <td>$2500</td>
                            
                        </tr>
                        <tr>
                            <td>Spread Pips</td>
                            <td> 1.5 Pip</td>
                            <td>1 Pip</td>
                            <td>0 Pip</td>
                           
                           
                        </tr>
                        <tr>
                            <td>Comissions</td>
                            <td>USD 0 Per Side</td>
                            <td>USD 3.5 Per Side</td>
                            <td>USD 5 Per Side</td>
                            
                            
                        </tr>
                        <tr>
                            <td>Leverage</td>
                            <td>Upto 400</td>
                            <td>Upto 200</td>
                            <td>Upto 100</td>
                            
                            
                        </tr>
                        <tr>
                            <td>Margin Call</td>
                            <td>70%</td>
                            <td>70%</td>
                            <td>70%</td>
                            
                            
                        </tr>
                        <tr>
                            <td>Stop Out</td>
                            <td>30%</td>
                            <td>20%</td>
                            <td>10%</td>
                           
                            
                        </tr>
                        <tr>
                            <td>Execution</td>
                            <td>Market</td>
                            <td>Market</td>
                            <td>Market</td>
                          
                            
                        </tr>
                        <tr>
                            <td>Islamic Account</td>
                            <td>NA</td>
                            <td>NA</td>
                            <td>Available**</td>
                            
                           
                        </tr>
                        <tr>
                            <td>Suitable for</td>
                            <td>Beginners</td>
                            <td>Intermediate</td>
                            <td>Professionals</td>
                            
                            
                        </tr>
                        <tr>
                            <td>Personalized News</td>
                            <td>X</td>
                            <td>X</td>
                            <td>Yes</td>                 
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <div class="d-inline-flex flex-wrap gap-4 gap-lg-10 align-items-center mt-2
                                        mt-lg-1">
                                        <a href="https://private.tradersera.xyz/signup"
                                            class="cmn-btn alt-xxl-bg fs-five nb4-xxl-bg gap-2 gap-lg-3 align-items-center  py-lg-1 px-lg-2 "
                                            style="transform: scaleX(1); background-color: #9ad953; color: #000000;">Open an account
                                        </a>
                                </div>
                            </td>

                            <td><div class="d-inline-flex flex-wrap gap-4 gap-lg-10 align-items-center mt-2
                                        mt-lg-1">
                                        <a href="https://private.tradersera.xyz/signup"
                                            class="cmn-btn alt-xxl-bg fs-five nb4-xxl-bg gap-2 gap-lg-3 align-items-center  py-lg-1 px-lg-2"
                                            style="transform: scaleX(1); background-color: #9ad953; color: #000000;">Open an account
                                        </a>
                                </div>
                            </td>
                            <td><div class="d-inline-flex flex-wrap gap-4 gap-lg-10 align-items-center mt-2
                                        mt-lg-1">
                                        <a href="https://private.tradersera.xyz/signup"
                                            class="cmn-btn alt-xxl-bg fs-five nb4-xxl-bg gap-2 gap-lg-3 align-items-center  py-lg-1 px-lg-2"
                                            style="transform: scaleX(1); background-color: #9ad953; color: #000000;">Open an Account
                                        </a>
                                </div>
                            </td>                 
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


<section class="provide-world position-relative z-0 pb-120">
    <div class="container">
        <div class="row gy-6 gy-xxl-0">
            <div class="col-md-6 col-xxl-4">
                <div class="provide-world__card secondary nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/profits.png" alt="stock-market">
                    </span>
                    <h3 class="mt-5 mb-5">High Leverage
                    </h3>
                    <p>Utilize leverage of up to 1:1000 for trading
                    </p>
                    <br>
                    <br>
                </div>
            </div>
            <div class="col-md-6 col-xxl-4">
                <div class="provide-world__card secondary nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/sales-marketing.png" alt="stock-market">
                    </span>
                    <h3 class="mt-5 mb-5">Fast order execution
                    </h3>
                    <p>Trades are typically executed within milliseconds, with minimal slippage
                    </p>
                    <br>
                </div>
            </div>

            <div class="col-md-6 col-xxl-4">
                <div class="provide-world__card secondary nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/growth.png" alt="stock-market">
                    </span>
                    <h3 class="mt-5 mb-5">
                        Micro lot trading
                    </h3>
                    <p>Begin trading from just 0.01 lots per pip, perfect for smaller accounts and improved risk management.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>





<section>
    <div class="container">
    <div class="table-para-2">       
         <p>Your all-in-one online platform for Forex trading. Say goodbye to cumbersome downloads and installations. With our user interface and wide range of tools you'll have all the support to make informed decisions and maximize your profits. Trade Smarter, Not Harder
</p>
        </div>
    </div>
</section>




<br>







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
                    <h2 class="mb-4 mb-lg-5" style="font-size: 32px;">Trade Anywhere, Anytime with Web Trader</h2>
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
                    <img src="assets/images/trade anyware home page.png" class="max-xl-un"
                        alt="TradersEra Trading app ">
                </div>
            </div>
        </div>
    </div>
</section>




<br><br>

<?php include("includes/footer.php"); ?>