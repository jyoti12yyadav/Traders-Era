<?php include("includes/header.php"); ?>

<style>
    .pt-120 {
        padding-top: 60px;
    }
    .pb-120 {
        padding-top: 60px;
    }
</style>

<section class="banner-section  pt-120 pb-120">
    <div class="container mt-lg-0 pt-18 pt-xl-20">
        <div class="row">
            <div class="col-12 breadcrumb-area ">
                <h2 class="mb-4">Stocks</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item ms-2 ps-7 active" aria-current="page"><span>Stocks</span></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="company-story position-relative z-0  pt-120 pb-120 ">
    <div class="animation position-absolute w-100 h-100 z-n1">
        <img src="assets/images/star3.png" alt="vector" class="position-absolute top-0 end-0 pt-10 pe-20 me-20 d-none d-xxl-flex previewSkew">
    </div>


    <div class="container">
        <div class="row gy-15 gy-lg-0 justify-content-center align-items-center">
            <div class="container my-5">
            <table id="Record" class="table table-striped table-dark my-3">
                <thead>
                <tr>
                    <th>Platform Name</th>
                <th>Platform</th>
<th>RIC</th>
<th>Currency</th>
<th>Description</th>
<th>Asset Type</th>
<th>Country</th>
<th>Leverage</th>
<th>Limit</th>
</tr>
                    </thead>
<tr>

</tr>
</thead>
<tbody>
    <td>AADIBIO</td><td>TT </td>
    <td>AADI.O</td>
    <td>USD</td>
    <td>Aadi Bioscience Inc</td>
    <td>Equity</td>
    <td>US</td>
    <td>1:1</td>
    
    <td>10000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>AAON</td><td>TT </td>
    <td>AAON.N</td>
    <td>USD</td>
    <td>Aaon Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>2500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>AAP</td><td>TT &amp; MT5</td>
    <td>AAP.N</td>
    <td>USD</td>
    <td>Advance Auto Parts Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>6.66:1</td>
    
    <td>1000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>AARONS</td><td>TT &amp; MT5</td>
    <td>AAN.N</td>
    <td>USD</td>
    <td>Aaron's Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>2500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>AAXJ</td><td>TT </td>
    <td>AAXJ.N</td>
    <td>USD</td>
    <td>iShares MSCI All Country Asia ex Japan ETF</td>
    <td>ETF</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>2500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ABBOTT</td><td>TT &amp; MT5</td>
    <td>ABT.N</td>
    <td>USD</td>
    <td>Abbott Laboratories</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>10:1</td>
    
    <td>1000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ABBVIE</td><td>TT &amp; MT5</td>
    <td>ABBV.N</td>
    <td>USD</td>
    <td>AbbVie Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>10:1</td>
    
    <td>2500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ABERCROMBIEFITCH</td><td>TT </td>
    <td>ANF.N</td>
    <td>USD</td>
    <td>Abercrombie &amp; Fitch Co</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>5000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ABIOMED</td><td>TT &amp; MT5</td>
    <td>ABMD.O</td>
    <td>USD</td>
    <td>Abiomed Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>3.33:1</td>
    
    <td>1000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ABMINDUSTRIES</td><td>TT </td>
    <td>ABM.N</td>
    <td>USD</td>
    <td>ABM Industries Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>2500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ACACIARESEARCH</td><td>TT </td>
    <td>ACTG.N</td>
    <td>USD</td>
    <td>Acacia Research Corp</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>50000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ACADIAREALTY</td><td>TT </td>
    <td>AKR.N</td>
    <td>USD</td>
    <td>Acadia Realty Trust</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>5000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ACCELENT</td><td>TT </td>
    <td>ACEL.N</td>
    <td>USD</td>
    <td>Accel Entertainment Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>10000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ACCELERATEDIAGNOSTICS</td><td>TT </td>
    <td>AXDX.N</td>
    <td>USD</td>
    <td>Accelerate Diagnostics Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>50000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ACCENTURE</td><td>TT &amp; MT5</td>
    <td>ACN.N</td>
    <td>USD</td>
    <td>Accenture PLC</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>1000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ACCOBRANDS</td><td>TT </td>
    <td>ACCO.N</td>
    <td>USD</td>
    <td>ACCO Brands Corp</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>20000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ACCURAY</td><td>TT </td>
    <td>ARAY.N</td>
    <td>USD</td>
    <td>Accuray Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>50000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ACIMMUNE</td><td>TT </td>
    <td>ACIU.N</td>
    <td>USD</td>
    <td>AC Immune SA</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>50000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ACIWORLDWIDE</td><td>TT </td>
    <td>ACIW.N</td>
    <td>USD</td>
    <td>ACI Worldwide Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>5000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ACMEUNITED</td><td>TT </td>
    <td>ACU.N</td>
    <td>USD</td>
    <td>Acme United Corp</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>5000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ACMRESEARCH</td><td>TT </td>
    <td>ACMR.N</td>
    <td>USD</td>
    <td>ACM Research Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>1000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ACNBCORP</td><td>TT </td>
    <td>ACNB.N</td>
    <td>USD</td>
    <td>ACNB Corp</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>5000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ACRESCOMM</td><td>TT </td>
    <td>ACR</td>
    <td>USD</td>
    <td>Acres Commercial Realty Corp</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>10000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ACTIVISION</td><td>TT &amp; MT5</td>
    <td>ATVI.O</td>
    <td>USD</td>
    <td>Activision Blizzard Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>3.33:1</td>
    
    <td>2500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ACUITY</td><td>TT &amp; MT5</td>
    <td>AYI.N</td>
    <td>USD</td>
    <td>Acuity Brands Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>3.33:1</td>
    
    <td>1000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ACUSHNETHOLDING</td><td>TT </td>
    <td>GOLF.N</td>
    <td>USD</td>
    <td>Acushnet Holdings Corp</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>2500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ACWI</td><td>TT &amp; MT5</td>
    <td>ACWI.O</td>
    <td>USD</td>
    <td>iShares MSCI ACWI ETF</td>
    <td>ETF</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>10:1</td>
    
    <td>2500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ACWV</td><td>TT &amp; MT5</td>
    <td>ACWV.P</td>
    <td>USD</td>
    <td>iShares Edge MSCI Min Vol Global ETF</td>
    <td>ETF</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>10:1</td>
    
    <td>1000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ACWX</td><td>TT &amp; MT5</td>
    <td>ACWX.O</td>
    <td>USD</td>
    <td>iShares MSCI ACWI ex US ETF</td>
    <td>ETF</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>6.66:1</td>
    
    <td>5000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ADAMRESOURCES</td><td>TT </td>
    <td>AE.N</td>
    <td>USD</td>
    <td>Adams Resources &amp; Energy Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>5000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ADAPTHEALTHCORP</td><td>TT </td>
    <td>AHCO.N</td>
    <td>USD</td>
    <td>Adapthealth Corp</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>10000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ADDUSHOMECARE</td><td>TT </td>
    <td>ADUS.N</td>
    <td>USD</td>
    <td>Addus Homecare Corp</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>1000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ADECOAGRO</td><td>TT </td>
    <td>AGRO.N</td>
    <td>USD</td>
    <td>Adecoagro SA</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>10000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ADI</td><td>TT &amp; MT5</td>
    <td>ADI.O</td>
    <td>USD</td>
    <td>Analog Devices Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>10:1</td>
    
    <td>1000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ADIENT</td><td>TT </td>
    <td>ADNT.N</td>
    <td>USD</td>
    <td>Adient PLC</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>5000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ADM</td><td>TT &amp; MT5</td>
    <td>ADM.N</td>
    <td>USD</td>
    <td>Archer-Daniels-Midland Company</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>3.33:1</td>
    
    <td>5000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ADOBE</td><td>TT &amp; MT5</td>
    <td>ADBE.O</td>
    <td>USD</td>
    <td>Adobe Systems Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>10:1</td>
    
    <td>500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ADP</td><td>TT &amp; MT5</td>
    <td>ADP.O</td>
    <td>USD</td>
    <td>Automatic Data Processing Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>10:1</td>
    
    <td>1000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ADT</td><td>TT </td>
    <td>ADT.N</td>
    <td>USD</td>
    <td>ADT Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>20000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ADTALEMGLOBAL</td><td>TT </td>
    <td>ATGE.N</td>
    <td>USD</td>
    <td>Adtalem Global Education Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>5000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ADTRAN</td><td>TT </td>
    <td>ADTN.N</td>
    <td>USD</td>
    <td>ADTRAN Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>10000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ADVANCEDDRAINAGE</td><td>TT </td>
    <td>WMS.N</td>
    <td>USD</td>
    <td>Advanced Drainage Systems Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>1000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ADVANCEDEMISSIONS</td><td>TT </td>
    <td>ADES.N</td>
    <td>USD</td>
    <td>Advanced Emissions Solutions Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>20000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ADVANCEDENERGY</td><td>TT </td>
    <td>AEIS.N</td>
    <td>USD</td>
    <td>Advanced Energy Industries Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>1000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ADVANSIX</td><td>TT </td>
    <td>ASIX.N</td>
    <td>USD</td>
    <td>AdvanSix Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>2500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>AECOM</td><td>TT &amp; MT5</td>
    <td>ACM.N</td>
    <td>USD</td>
    <td>AECOM Engineering</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>3.33:1</td>
    
    <td>5000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>AEHRTEST</td><td>TT </td>
    <td>AEHR.N</td>
    <td>USD</td>
    <td>Aehr Test Systems</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>10000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>AEMETIS</td><td>TT </td>
    <td>AMTX.N</td>
    <td>USD</td>
    <td>Aemetis Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>10000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>AERCAPHOLDING</td><td>TT </td>
    <td>AER.N</td>
    <td>USD</td>
    <td>AerCap Holdings NV</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>2500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>AEROJETROCKETDYNE</td><td>TT </td>
    <td>AJRD.N</td>
    <td>USD</td>
    <td>Aerojet Rocketdyne Holdings Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>5000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>AEROVIRONMENT</td><td>TT </td>
    <td>AVAV.N</td>
    <td>USD</td>
    <td>AeroVironment Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>2500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>AERSALE</td><td>TT </td>
    <td>ASLE.O</td>
    <td>USD</td>
    <td>AerSale Corp</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>10000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>AES</td><td>TT &amp; MT5</td>
    <td>AES.N</td>
    <td>USD</td>
    <td>The AES Corporation</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>3.33:1</td>
    
    <td>10000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>AEVATECH</td><td>TT </td>
    <td>AEVA.K</td>
    <td>USD</td>
    <td>Aeva Technologies Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>20000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>AFFINITYBANC</td><td>TT </td>
    <td>AFBI.O</td>
    <td>USD</td>
    <td>Affinity Bancshares Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>10000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>AFLAC</td><td>TT &amp; MT5</td>
    <td>AFL.N</td>
    <td>USD</td>
    <td>Aflac Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>5000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>AFYA</td><td>TT </td>
    <td>AFYA.N</td>
    <td>USD</td>
    <td>Afya Ltd</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>10000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>AGCOCORP</td><td>TT &amp; MT5</td>
    <td>AGCO.N</td>
    <td>USD</td>
    <td>AGCO Corp</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>3.33:1</td>
    
    <td>2500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>AGG</td><td>TT &amp; MT5</td>
    <td>AGG.P</td>
    <td>USD</td>
    <td>iShares Core US Aggregate Bond ETF</td>
    <td>ETF</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>3.33:1</td>
    
    <td>1000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>AGILENT</td><td>TT &amp; MT5</td>
    <td>A.N</td>
    <td>USD</td>
    <td>Agilent Technologies Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>10:1</td>
    
    <td>2500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>AGILETHUOGHT</td><td>TT </td>
    <td>AGIL.O</td>
    <td>USD</td>
    <td>AgileThought Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>20000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>AGILYSYS</td><td>TT </td>
    <td>AGYS.N</td>
    <td>USD</td>
    <td>Agilysys Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>2500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>AGMGROUPHOLDNGS</td><td>TT </td>
    <td>AGMH.N</td>
    <td>USD</td>
    <td>AGM Group Holdings Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>50000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>AGMORTAGEINVEST</td><td>TT </td>
    <td>MITT.N</td>
    <td>USD</td>
    <td>AG Mortgage Investment Trust Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>20000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>AGNC</td><td>TT &amp; MT5</td>
    <td>AGNC.O</td>
    <td>USD</td>
    <td>AGNC Investment Corp</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>10:1</td>
    
    <td>10000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>AGNICOEAGLE</td><td>TT &amp; MT5</td>
    <td>AEM.N</td>
    <td>USD</td>
    <td>Agnico Eagle Mines Limited</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>6.66:1</td>
    
    <td>2500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>AGREEREALTY</td><td>TT </td>
    <td>ADC.N</td>
    <td>USD</td>
    <td>Agree Realty Corp</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>2500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>AGROGROUP</td><td>TT </td>
    <td>ARGO.N</td>
    <td>USD</td>
    <td>Argo Group International Holdings Ltd</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>2500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>AIA</td><td>TT </td>
    <td>AIA.N</td>
    <td>USD</td>
    <td>iShares Asia 50 ETF</td>
    <td>ETF</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>2500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>AIG</td><td>TT &amp; MT5</td>
    <td>AIG.N</td>
    <td>USD</td>
    <td>American International Group Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>3.33:1</td>
    
    <td>5000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>AIMCO</td><td>TT &amp; MT5</td>
    <td>AIV.N</td>
    <td>USD</td>
    <td>Apartment Investment and Management Company</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>5000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>AIRBNB</td><td>TT &amp; MT5</td>
    <td>ABNB.O</td>
    <td>USD</td>
    <td>Airbnb Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>10:1</td>
    
    <td>20000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>AIRLEASE</td><td>TT &amp; MT5</td>
    <td>AL.N</td>
    <td>USD</td>
    <td>Air Lease Corp</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>10:1</td>
    
    <td>5000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>AIRPRODUCTS</td><td>TT &amp; MT5</td>
    <td>APD.N</td>
    <td>USD</td>
    <td>Air Products and Chemicals Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>6.66:1</td>
    
    <td>500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>AIRTRANSPORT</td><td>TT </td>
    <td>ATSG.N</td>
    <td>USD</td>
    <td>Air Transport Services Group Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>5000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>AJGALLAGHER</td><td>TT &amp; MT5</td>
    <td>AJG.N</td>
    <td>USD</td>
    <td>Arthur J. Gallagher &amp; Company</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>10:1</td>
    
    <td>1000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>AKAMAI</td><td>TT &amp; MT5</td>
    <td>AKAM.O</td>
    <td>USD</td>
    <td>Akamai Technologies Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>6.66:1</td>
    
    <td>1000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>AKOUSTISTECH</td><td>TT </td>
    <td>AKTS.N</td>
    <td>USD</td>
    <td>Akoustis Technologies Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>20000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ALAMOGROUP</td><td>TT </td>
    <td>ALG.N</td>
    <td>USD</td>
    <td>Alamo Group Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>1000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ALAMOSGOLD</td><td>TT </td>
    <td>AGI.N</td>
    <td>USD</td>
    <td>Alamos Gold Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>20000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ALARMCOM</td><td>TT </td>
    <td>ALRM.N</td>
    <td>USD</td>
    <td>Alarm.com Holdings Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>2500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ALASKAAIR</td><td>TT &amp; MT5</td>
    <td>ALK.N</td>
    <td>USD</td>
    <td>Alaska Air Group Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>5000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ALBANY</td><td>TT </td>
    <td>AIN.N</td>
    <td>USD</td>
    <td>Albany International Corp</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>1000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ALBEMARLE</td><td>TT &amp; MT5</td>
    <td>ALB.N</td>
    <td>USD</td>
    <td>Albemarle Corporation</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>2500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ALBIREOPHARMA</td><td>TT </td>
    <td>ALBO.N</td>
    <td>USD</td>
    <td>Albireo Pharma Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>5000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ALCOA</td><td>TT &amp; MT5</td>
    <td>AA.N</td>
    <td>USD</td>
    <td>Alcoa</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>3.33:1</td>
    
    <td>20000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ALCON</td><td>TT </td>
    <td>ALC.N</td>
    <td>USD</td>
    <td>Alcon Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>2500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ALERUSFINANCIAL</td><td>TT </td>
    <td>ALRS.N</td>
    <td>USD</td>
    <td>Alerus Financial Corp</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>5000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ALEXANDRIA</td><td>TT &amp; MT5</td>
    <td>ARE.N</td>
    <td>USD</td>
    <td>Alexandria Real Estate Equity Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>10:1</td>
    
    <td>1000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ALEXCANDERBALDWIN</td><td>TT </td>
    <td>ALEX.N</td>
    <td>USD</td>
    <td>Alexander &amp; Baldwin Inc (Hawaii)</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>5000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ALGONQUINPOWER</td><td>TT </td>
    <td>AQN.N</td>
    <td>USD</td>
    <td>Algonquin Power &amp; Utilities Corp</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>10000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ALICO</td><td>TT </td>
    <td>ALCO.N</td>
    <td>USD</td>
    <td>Alico Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>5000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ALIGN</td><td>TT &amp; MT5</td>
    <td>ALGN.O</td>
    <td>USD</td>
    <td>Align Technology Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>3.33:1</td>
    
    <td>1000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ALLEGHANY</td><td>TT &amp; MT5</td>
    <td>Y.N</td>
    <td>USD</td>
    <td>Alleghany Corp</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>10:1</td>
    
    <td>250</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ALLEGHENYTECH</td><td>TT </td>
    <td>ATI.N</td>
    <td>USD</td>
    <td>Allegheny Technologies Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>5000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ALLEGIANCBANSHARES</td><td>TT </td>
    <td>ABTX.N</td>
    <td>USD</td>
    <td>Allegiance Bancshares Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>2500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ALLEGIANTTRAVEL</td><td>TT </td>
    <td>ALGT.N</td>
    <td>USD</td>
    <td>Allegiant Travel Co</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>5:1</td>
    
    <td>1000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ALLEGION</td><td>TT &amp; MT5</td>
    <td>ALLE.N</td>
    <td>USD</td>
    <td>Allegion PLC</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>10:1</td>
    
    <td>1000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="tm-table-even-entry">
    <td>ALLETE</td><td>TT &amp; MT5</td>
    <td>ALE.N</td>
    <td>USD</td>
    <td>ALLETE Inc</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>3.33:1</td>
    
    <td>2500</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' --><tr ng-class="{'tm-table-even-entry': 0 === $index % 2 }" ng-repeat="entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' " class="">
    <td>ALLIANCEDATA</td><td>TT &amp; MT5</td>
    <td>ADS.N</td>
    <td>USD</td>
    <td>Alliance Data Systems Corporation</td>
    <td>Equity</td>
    <td>US</td>
    <!-- ngIf: -1 === ['en', 'za', 'pt', 'id', 'th', 'ar', 'latam', 'my', 'cn', 'tw', 'vn'].indexOf( tableCtrl.model.cultureData.cultureId ) -->
    <td>10:1</td>
    
    <td>5000</td>
    </tr><!-- end ngRepeat: entry in tableCtrl.model.data.entriesToShow | orderBy : 'name' -->
    </tbody>
</table>
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
                    <h3 class="mb-4 mb-lg-5">What is Stock Trading?</h3>
                    <p class="fs-six mx-ch">Simply put, stock trading is the act of buying and selling of a company’s
                        shares with an aim to make profits. When you buy a company’s shares, you legally own a part of
                        that company, and the value of your investment will fluctuate as per the company’s share prices.
                    </p>
                    <br>
                    <p class="fs-six mx-ch">For making such an informed decision, traders use a variety of information
                        sources like company results or earnings, company announcements, and technical analysis. These
                        factors help decide which shares to buy and when.</p>
                    <br>
                    <p class="fs-six mx-ch">With stock trading, there’s no limit on how long you can hold your shares
                        and can sell them anytime you want.</p>
                </div>
            </div>
            <div class="col-md-8 col-lg-6">
                <div class="trade_on__thumbs d-flex justify-content-end">
                    <img src="assets/images/what is stock section 1.png" alt="Imgae">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="provide-world a2-bg pt-120 pb-120  position-relative z-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-6">
                <div class="heading__content mb-10 mb-lg-15 text-center">
                    <h3 class="mb-5 mb-lg-6">Why traders choose us ?</h3>
                </div>
            </div>
        </div>
        <div class="row gy-6 gy-xxl-0">
            <div class="col-md-6 col-xxl-3">
                <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/time.png" alt="stock-market">
                    </span>
                    <h4 class="mt-5 mb-5">Quick Deposits & Withdrawals</h4>
                    <p>Become an TradersEra client within minutes! Register yourself, fund your chosen account, and start stock trading trouble-free.</p>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3">
                <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/customer-service.png" alt="stock-market">
                    </span>
                    <h4 class="mt-5 mb-5">Unparalleled Customer Support</h4>
                    <p>With an experienced team backing you up at every difficulty, TradersEra strives to offer you the best possible customer support 24×5.</p>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3">
                <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/investment-insurance.png" alt="stock-market">
                    </span>
                    <h4 class="mt-5 mb-5">Secure & Safe Funds</h4>
                    <p>Trade across all our assets with confidence and quit worrying about your funds’ safety.</p>
                    <br>
                    <br>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3">
                <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/discount.png" alt="stock-market">
                    </span>
                    <h4 class="mt-5 mb-5">Low Commissions</h4>
                    <p>Get raw pricing with no markups with TradersEra. Start stock trading with us at lowest commissions possible.</p>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include("includes/footer.php"); ?>