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
                <h1 class="mb-4">Compare-Accounts</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item ms-2 ps-7 active" aria-current="page"><span>Compare-Accounts</span></li>
                    </ol>
                </nav>
            </div>
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
                    <h3 class="mt-5 mb-5">Spreads from 0.4 pips
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
                    <h3 class="mt-5 mb-5">Zero commission
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
                    <p>Begin trading by opening your account with just $10.
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
                            <td>Islamic Count</td>
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
                                        <a href="https://trading.tradersera.com/register"
                                            class="cmn-btn alt-xxl-bg fs-five nb4-xxl-bg gap-2 gap-lg-3 align-items-center  py-lg-1 px-lg-2 "
                                            style="transform: scaleX(1); background-color: #9ad953; color: #000000;">Open an account
                                        </a>
                                </div>
                            </td>

                            <td><div class="d-inline-flex flex-wrap gap-4 gap-lg-10 align-items-center mt-2
                                        mt-lg-1">
                                        <a href="https://trading.tradersera.com/register"
                                            class="cmn-btn alt-xxl-bg fs-five nb4-xxl-bg gap-2 gap-lg-3 align-items-center  py-lg-1 px-lg-2"
                                            style="transform: scaleX(1); background-color: #9ad953; color: #000000;">Open an account
                                        </a>
                                </div>
                            </td>
                            <td><div class="d-inline-flex flex-wrap gap-4 gap-lg-10 align-items-center mt-2
                                        mt-lg-1">
                                        <a href="https://trading.tradersera.com/register"
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
                    <p>Begin trading from just $0.10 per pip, perfect for smaller accounts and improved risk management.
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
<?php include("includes/footer.php"); ?>