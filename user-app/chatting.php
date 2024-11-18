<?php 
include('./db.php');
include('./includes/sessions.php');

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/pwa/taxify/user-app/chatting by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Sep 2024 04:37:01 GMT -->
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
                <div class="d-flex align-items-center gap-2">
                    <a href="home">
                        <i class="iconsax icon-btn" data-icon="chevron-left"> </i>
                    </a>
                    <div class="d-block">
                        <h5 class="fw-semibold title-color">Templeton Peck</h5>
                        <h6 class="fw-medium success-color">Online</h6>
                    </div>
                </div>

                <div class="dropdown more-options dropdown-menu-end">
                    <a class="btn dropdown-toggle mt-0 p-0" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="iconsax icon-btn" data-icon="menu-meatballs"> </i>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item"> Call Now</a> </li>
                        <li><a href="#" class="dropdown-item">Clear Chat</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- chatting section start -->
    <section class="msger pt-0 section-b-space">
        <div class="custom-container">
            <h6 class="fw-normal text-center content-color heading pb-3">Today 12:15 AM</h6>
            <div class="msger-chat">
                <div class="msg left-msg">
                    <div class="msg-img">
                        <img class="icon" src="../assets/images/profile/p5.png" alt="profile" />
                    </div>

                    <div class="msg-bubble">
                        <div class="msg-text">Hi, welcome to Ludopaisa</div>
                    </div>
                </div>

                <div class="msg right-msg">
                    <div class="msg-img">
                        <img class="icon" src="../assets/images/profile/p2.png" alt="profile" />
                    </div>

                    <div class="msg-bubble">
                        <div class="msg-text">Hi!</div>
                    </div>
                </div>
            </div>

            <form class="msger-inputarea">
                <input type="text" class="msger-input" placeholder="Enter your message..." />
                <img class="img-fluid smile" src="https://themes.pixelstrap.com/pwa/taxify/assets/images/svg/smile.svg" alt="">
                <i class="iconsax mic" data-icon="mic-2"> </i>

                <button type="submit" class="msger-send-btn">
                    <i class="iconsax icon-btn" data-icon="send-2"> </i>
                </button>
            </form>
        </div>
    </section>
    <!-- chatting section end -->

    <!-- panel-space start -->
    <section class="panel-space"></section>
    <!-- panel-space end -->

    <!-- iconsax js -->
    <script src="../assets/js/iconsax.js"></script>

    <!-- bootstrap js -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!-- sticky-header js -->
    <script src="../assets/js/sticky-header.js"></script>

    <!-- chatting js -->
    <script src="../assets/js/chatting-chat.js"></script>

    <!-- template-setting js -->
    <script src="../assets/js/template-setting.js"></script>

    <!-- script js -->
    <script src="../assets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.com/pwa/taxify/user-app/chatting by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Sep 2024 04:37:01 GMT -->
</html>