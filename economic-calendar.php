<?php include("includes/header.php"); ?>

<section class="banner-section  pt-120 pb-120">
    <div class="container mt-10 mt-lg-0 pt-15 pt-lg-20 pb-5 pb-lg-0">
        <div class="row">
            <div class="col-12 breadcrumb-area ">
                <h2 class="mb-4">TradersEra</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item ms-2 ps-7 active" aria-current="page"><span>TradersEra</span></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<style>
    .provide-world{
        background-color: #141414;
        margin-top: 120px;
        margin-bottom: 120px;
    }
</style>

<section class="provide-world a2-bg pt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-12">
                <!-- TradingView Widget BEGIN -->
                <h2 class="d-flex justify-content-center" style="margin-bottom: 60px;">Economic Calender</h2>
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/"
                            rel="noopener nofollow" target="_blank"></a></div>
                    <script type="text/javascript"
                        src="https://s3.tradingview.com/external-embedding/embed-widget-events.js" async>
                            {
                                "colorTheme": "light",
                                "isTransparent": false,
                                "width": "1300",
                                "height": "700",
                                "locale": "in",
                                "importanceFilter": "-1,0,1",
                                "countryFilter": "ar,au,br,ca,cn,fr,de,in,id,it,jp,kr,mx,ru,sa,za,tr,gb,us,eu"
                            }
                        </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
        </div>
    </div>
</section>

<?php include("includes/footer.php"); ?>