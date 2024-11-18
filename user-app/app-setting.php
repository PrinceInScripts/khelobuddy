<?php 
include('db.php');
include('includes/sessions.php');
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/pwa/taxify/user-app/app-setting by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Sep 2024 04:37:14 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ludopaisa">
    <meta name="keywords" content="ludopaisa">
    <meta name="author" content="ludopaisa">
    <link rel="manifest" href="manifest.json">
    <link rel="icon" href="../assets/images/logo/favicon.png" type="image/x-icon">
    <title>Ludopaisa </title>

    <link rel="apple-touch-icon" href="../assets/images/logo/favicon.png">
    <meta name="title-color" content="#01AA85">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="ludopaisa">
    <meta name="msapplication-TileImage" content="../assets/images/logo/favicon.png">

    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- iconsax css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/iconsax.css">

    <!-- bootstrap css -->
    <link rel="stylesheet" id="rtl-link" type="text/css" href="../assets/css/vendors/bootstrap.css">


    <!-- Theme css -->
    <link rel="stylesheet" id="change-link" type="text/css" href="../assets/css/style.css">
</head>

<body>
    <!-- header starts -->
    <header id="header" class="main-header inner-page-header">
        <div class="custom-container">
            <div class="header-panel">
                <a onclick="history.back()">
                    <i class="iconsax icon-btn" data-icon="chevron-left"> </i>
                </a>
                <h3>App setting</h3>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- profile section starts -->
    <section class="section-b-space">
        <div class="custom-container">
            <div class="profile-list">
                <ul class="setting-listing">
                    <li class="w-100">
                        <a href="#" class="setting-box">
                            <div class="setting-icon">
                                <i class="iconsax icon" data-icon="bell-1"> </i>
                            </div>
                            <div class="setting-content">
                                <h5>Notification</h5>
                                <div class="switch-btn">
                                    <input id="" type="checkbox" checked>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="w-100">
                        <a href="#currency" data-bs-toggle="offcanvas" class="setting-box">
                            <div class="setting-icon">
                                <i class="iconsax icon" data-icon="cash"> </i>
                            </div>
                            <div class="setting-content">
                                <div>
                                    <h5>Change Currency</h5>
                                    <h6>INR</h6>
                                </div>
                                <i class="iconsax icon" data-icon="chevron-right"> </i>
                            </div>
                        </a>
                    </li>
                    <li class="w-100">
                        <a href="#language" data-bs-toggle="offcanvas" class="setting-box">
                            <div class="setting-icon">
                                <i class="iconsax icon" data-icon="translate"> </i>
                            </div>
                            <div class="setting-content">
                                <div>
                                    <h5>Change Language</h5>
                                    <h6>English</h6>
                                </div> <i class="iconsax icon" data-icon="chevron-right"> </i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- profile section starts -->

    <!-- Change currency offcanvas starts -->
    <div class="offcanvas ride-offcanvas p-0" tabindex="-1" id="currency">
        <div class="offcanvas-header pb-0">
            <h3>Change Currency</h3>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="option-listing">
                <!-- <li class="w-100">
                    <div class="form-check mt-0 pb-3">
                        <label class="form-check-label" for="fixed01"><img class="flag"
                                src="https://themes.pixelstrap.com/pwa/taxify/assets/images/icons/flag8.svg" alt=""> US dollar</label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="fixed01" checked>
                    </div>
                </li> -->

                <li class="w-100">
                    <div class="form-check mt-3 pb-3">
                        <label class="form-check-label" for="fixed02"><img class="flag"
                                src="https://themes.pixelstrap.com/pwa/taxify/assets/images/icons/flag5.svg" alt=""> INR</label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="fixed02">
                    </div>
                </li>

                <!-- <li class="w-100">
                    <div class="form-check mt-3 pb-3">
                        <label class="form-check-label" for="fixed03"><img class="flag"
                                src="https://themes.pixelstrap.com/pwa/taxify/assets/images/icons/flag3.svg" alt=""> Euro</label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="fixed03">
                    </div>
                </li>

                <li class="w-100">
                    <div class="form-check mt-3 pb-3 border-0">
                        <label class="form-check-label" for="fixed04"><img class="flag"
                                src="https://themes.pixelstrap.com/pwa/taxify/assets/images/icons/flag7.svg" alt=""> Pound</label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="fixed04">
                    </div>
                </li> -->
            </ul>
        </div>
        <div class="offcanvas-footer border-0">
            <button data-bs-dismiss="offcanvas" class="btn theme-btn w-100 mt-0">Update</button>
        </div>
    </div>
    <!-- Change currency offcanvas end -->

    <!-- Change language offcanvas starts -->
    <div class="offcanvas ride-offcanvas p-0" tabindex="-1" id="language">
        <div class="offcanvas-header pb-0">
            <h3>Change language</h3>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="option-listing">
                <li class="w-100">
                    <div class="form-check mt-0 pb-3">
                        <label class="form-check-label" for="fixed1"><img class="flag"
                                src="https://themes.pixelstrap.com/pwa/taxify/assets/images/icons/flag2.svg" alt="">English</label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="fixed1" checked>
                    </div>
                </li>
                <!-- <li class="w-100">
                    <div class="form-check mt-3 pb-3">
                        <label class="form-check-label" for="fixed2"><img class="flag"
                                src="https://themes.pixelstrap.com/pwa/taxify/assets/images/icons/flag1.svg" alt="">Arabic</label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="fixed2">
                    </div>
                </li>

                <li class="w-100">
                    <div class="form-check mt-3 pb-3">
                        <label class="form-check-label" for="fixed3"><img class="flag"
                                src="https://themes.pixelstrap.com/pwa/taxify/assets/images/icons/flag4.svg" alt=""> French</label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="fixed3">
                    </div>
                </li>

                <li class="w-100">
                    <div class="form-check mt-3 pb-3 border-0">
                        <label class="form-check-label" for="fixed4"><img class="flag"
                                src="https://themes.pixelstrap.com/pwa/taxify/assets/images/icons/flag6.svg" alt=""> Spanish</label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="fixed4">
                    </div>
                </li> -->
            </ul>
        </div>
        <div class="offcanvas-footer border-0">
            <button data-bs-dismiss="offcanvas" class="btn theme-btn w-100 mt-0">Update</button>
        </div>
    </div>
    <!-- Change language offcanvas end -->

    <!-- iconsax js -->
    <script src="../assets/js/iconsax.js"></script>

    <!-- bootstrap js -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!-- sticky-header js -->
    <script src="../assets/js/sticky-header.js"></script>

    <!-- template-setting js -->
    <script src="../assets/js/template-setting.js"></script>

    <!-- script js -->
    <script src="../assets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.com/pwa/taxify/user-app/app-setting by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Sep 2024 04:37:14 GMT -->
</html>