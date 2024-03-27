<?php include("includes/header.php"); ?>

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