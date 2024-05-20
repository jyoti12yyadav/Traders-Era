<?php include("dynamic-data.php"); ?>

<!doctype html>
<html lang="en">
<!-- Mirrored from pixner.net/tradez/main/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 07:19:13 GMT -->

<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- #keywords -->
    <title>
        <?php echo $title ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?php echo $description ?> " />
    <meta name="keywords" content="<?php echo $keywords ?> " />
    <!-- #favicon -->
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <!-- ==== css dependencies start ==== -->
    <link rel="stylesheet" href="assets/cdn.jsdelivr.net/npm/%40tabler/icons-webfont%402.36.0/tabler-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <!--  Preloader  -->
    <div class="preloader">
        <span class="loader"></span>
    </div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <button class="scrollToTop d-none d-md-flex d-center rounded" aria-label="scroll Bar Button"><i
            class="mat-icon fs-four nb4-color ti ti-arrow-up"></i></button>
    <!-- Scroll To Top End -->

    <!-- Start Custom Cursor -->
    <div class="mouse-follower">
        <span class="cursor-outline"></span>
        <span class="cursor-dot"></span>
    </div>
    <!-- End Custom Cursor -->

    <!-- header-section start -->



    <header class="header-section a2-bg header-menu w-100">


        <div class="container-fluid bg-upper-header upper-header">
            <div class="container">
                <div class="upper-header-content">
                    <div class="col col-lg-8 col-md-12 d-none d-lg-block">
                        <div class="contact-details ">
                            <ul class="contact" style="display: flex;position: absolute;margin-top: 4px;">
                                <li><img class="mx-2" src="assets/images/icon/mail icon png.png" alt=""><a
                                        href="mailto:support@tradersera.com">support@tradersera.com</a></li>
                                <li><img class="mx-2" src="assets/images/icon/call icon png.png" alt=""><a
                                        href="tel:+ 44203758865">+44203758865</a></li>
                            </ul>

                        </div>
                    </div>
                </div>



                <div class="right-area position-relative  ms-0 d-end gap-1 gap-xl-4 d-none d-lg-flex">

                    <div class="single-item" style="  margin-right: 10px; ">
                        <a href="javascript:void(Tawk_API.toggle())"
                            class="rotate_eff flex-nowrap py-1 px-2 px-xl-3 d-end gap-1 fw-bold nw-button"> Support </a>
                    </div>
                    <div class="single-item" style="  margin-right: 10px; ">
                        <a href="https://trading.tradersera.com/register"
                            class="rotate_eff flex-nowrap py-1 px-2 px-xl-3 d-end gap-1 fw-bold nw-button" target="new">
                            Open an Account </a>
                    </div>
                    <div class="single-item">
                        <a href="prelogin.php"
                            class="rotate_eff flex-nowrap py-1 px-2 px-xl-3 d-end gap-1 fw-bold nw-button" target="new">
                            Login</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container  d-center ">
            <nav class="navbar rounded-3 navbar-expand-lg w-100 justify-content-between ">
                <div class="d-flex align-items-center py-3">
                    <button class="navbar-toggler ms-4" type="button" data-bs-toggle="collapse"
                        aria-label="Navbar Toggler" data-bs-target="#navbar-content" aria-expanded="true"
                        id="nav-icon3">
                        <span></span><span></span><span></span><span></span>
                    </button>
                    <a href="index.php" class="navbar-brand m-0 p-0 d-flex align-items-center gap-5 gap-xl-5 me-2">
                        <img src="assets/images/fav.png" class="logo small_logo d-sm-none" alt="logo">
                        <img src="assets/images/logo.png" class="logo d-none d-sm-flex" alt="logo">
                    </a>
                </div>
                <div class="nav_alt">
                    <div class="right-area position-relative ms-0 d-center gap-1 gap-xl-4 d-lg-none">
                        <!-- <div class="single-item">
                            <a href="signin.html" class="rotate_eff flex-nowrap py-1 px-2 px-xl-3 d-center gap-1 fw-bold nw1-color"> Login <i class="ti ti-arrow-right fs-six-up"></i></a>
                        </div> -->
                        <div class="single-item">
                            <a href="contact-us.php"
                                class="cmn-btn fw-bold py-2 px-2 px-sm-3 px-lg-4 align-items-center gap-1"> Contact Us
                                <i class="ti ti-arrow-right fw-semibold fs-six-up"></i></a>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse justify-content-center" id="navbar-content">
                    <ul class="navbar-nav gap-2 gap-lg-3 gap-xxl-8  align-self-center mx-auto mt-4 mt-lg-0">
                        <li class="">
                            <a class="dropdown-item" href="index.php">Home</a>


                        </li>
                        <li class="dropdown show-dropdown">
                            <button type="button" aria-label="Navbar Dropdown Button"
                                class="dropdown-toggle dropdown-nav">Products</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="fx-cfd.php">FX CFDs</a></li>
                                <li><a class="dropdown-item" href="crypto-cfd.php">Crypto CFD </a></li>
                                <li><a class="dropdown-item" href="binary.php">Binary </a></li>
                                <li><a class="dropdown-item" href="ai-Invest.php">AI Invest </a></li>
                            </ul>
                        </li>
                     
                        <li class="dropdown show-dropdown">
                            <mark>
                                <button type="button" aria-label="Navbar Dropdown Button" class="dropdown-toggle dropdown-nav" onmouseover="this.style.color='black'" onmouseout="this.style.color=''">
                                    Trading 
                                </button>
                            </mark>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="binary-options-Crypto.php">Binary Options-Crypto</a></li>
                                <li><a class="dropdown-item" href="account-types.php">Account Types-CFD</a></li>
                                <li><a class="dropdown-item" href="market-hours.php">Market Hours</a></li>
                                <li><a class="dropdown-item" href="refer-a-friend.php">Refer a Friend</a></li>
                                <li><a class="dropdown-item" href="bonus.php">50% Bonus</a></li>
                            </ul>
                        </li>
                        
             
                        <li class="dropdown show-dropdown">
                            <button type="button" aria-label="Navbar Dropdown Button"
                                class="dropdown-toggle dropdown-nav">Markets</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="crypto.php">Crypto</a></li>
                                <li><a class="dropdown-item" href="indices.php">Indices</a></li>
                                <li><a class="dropdown-item" href="stocks.php">Stocks</a></li>
                                <li><a class="dropdown-item" href="forex.php">Forex</a></li>
                                <li><a class="dropdown-item" href="commodity.php">Commodity</a></li>
                                <li><a class="dropdown-item" href="faq.php">FAQ</a></li>
                            </ul>
                        </li>

                        <li class="dropdown show-dropdown">
                            <button type="button" aria-label="Navbar Dropdown Button"
                                class="dropdown-toggle dropdown-nav">Tools</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="economic-calendar.php">Economic Calender</a></li>
                                <li><a class="dropdown-item" href="news-research.php">News & Research</a></li>
                                <li><a class="dropdown-item" href="glossary.php">Glossary</a></li>
                                <li><a class="dropdown-item " href="learn.php">Learn</a></li>
                                <li><a class="dropdown-item " href="interest-rate.php">Interest Rate</a></li>
                            </ul>
                        </li>



                        <li class="dropdown show-dropdown">
                            <button type="button" aria-label="Navbar Dropdown Button"
                                class="dropdown-toggle dropdown-nav">Partners</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="cfd-partner.php">CFD Partner</a></li>
                                <!-- <li><a class="dropdown-item" href="referral-binary.php">Binary Referral</a></li>
                                <li><a class="dropdown-item" href="become-an-iB.php">CFD Referral</a></li> -->
                            </ul>
                        </li>

                        <li class="dropdown show-dropdown">
                            <button type="button" aria-label="Navbar Dropdown Button"
                                class="dropdown-toggle dropdown-nav">About Us</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="tradersera.php">TradersEra</a></li>
                                <li><a class="dropdown-item" href="safety-of-funds.php">Safety of Funds</a></li>
                                <li><a class="dropdown-item" href="regulatory.php">Regulatory</a></li>
                                <li><a class="dropdown-item" target="_blank" href="https://tradersera.tawk.help/">Help
                                        Center</a></li>
                                <li><a class="dropdown-item" href="our-servers.php">Our Servers</a></li>
                                <li><a class="dropdown-item" href="kyc-checks.php">KYC Checks</a></li>
                            </ul>
                        </li>
                        <!-- <li class="dropdown show-dropdown">
                            <button type="button" aria-label="Navbar Dropdown Button"
                                class="dropdown-toggle dropdown-nav"><a class="dropdown-item" href="contact-us.php">Contact</a></button>
                        </li> -->
                        <li class="dropdown show-dropdown">
                            <button type="button" aria-label="Navbar Dropdown Button" class="dropdown-nav"><a
                                    class="dropdown-item" href="https://tradersera.com/blogs">Blog</a></button>
                        </li>

                    </ul>
                </div>
                <div class="right-area position-relative  ms-0 d-center gap-1 gap-xl-4 d-none d-lg-flex">
                    <!-- <div class="single-item">
                        <a href="signin.html" class="rotate_eff flex-nowrap py-1 px-2 px-xl-3 d-center gap-1 fw-bold nw1-color"> Login <i class="ti ti-arrow-right fs-six-up"></i></a>
                    </div> -->
                    <div class="single-item">
                        <a href="contact-us.php"
                            class="cmn-btn fw-bold py-2 px-2 px-sm-3 px-lg-4 align-items-center gap-1">Contact Us<i
                                class="ti ti-arrow-right fw-semibold fs-six-up"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- header-section end -->

    <style>
        .contact img {
            height: 25px;
            width: 25px;
            max-width: 100%;

        }

        /* .contact-details{
    padding-top: 10px;
} */



        .contact li {
            margin-right: 25px;
            /* Adjust the value as per your design */
        }
    </style>


    <style>
        .dropbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #ffffff;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
        mark {
            background-color: #9AD953;
            border-radius: 7px;
            /* padding: 7px 30px 7px 7px; */
            
            color:black;
            text-size-adjust: 30%;

        }
        
    </style>