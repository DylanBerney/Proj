<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Wines &mdash; Website Template by Colorlib</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700|Montserrat:400,700|Roboto&display=swap"
              rel="stylesheet">

        <link rel="stylesheet" href="fonts/icomoon/style.css">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

        <link rel="stylesheet" href="css/jquery.fancybox.min.css">

        <link rel="stylesheet" href="css/bootstrap-datepicker.css">

        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

        <link rel="stylesheet" href="css/aos.css">
        <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="css/style.css">


    </head>

    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <img src="img_5terre_wide.jpg" alt="Cinque Terre" width="1000" height="300">
        <style>
            .container {
                position: relative;
            }

            .topright {
                position: absolute;
                top: 8px;
                right: 16px;
                font-size: 18px;
            }


        </style>
    </head>
<body>


    <div class="container">
        <?php
        $dataDirectory = "model/data";
        $dataFileName = 'userCart.json';

        $tempsDirPath = 'model/data/data' . session_id() . "/userCart.json";
        ?>

        <?php 
      
        if(isset($_GET['action'])){
        if ($_GET['action'] != 'goPanier' && $_GET['action'] != 'addPanier'  ) { ?>
            <div class="topright"><?php include 'json/jsonCart.php'; ?></div>
        <?php }} ?>
            
    </div>

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <a href="index.php?action=home" class="site-logo">
                            <img src="images/logo.png" alt="Image" class="img-fluid">
                        </a>
                    </div>
                    <a href="#" class="mx-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                            class="icon-menu h3"></span></a>
                </div>
            </div>


            <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

                <div class="container">
                    <div class="d-flex align-items-center">

                        <div class="mx-auto">
                            <nav class="site-navigation position-relative text-left" role="navigation">
                                <ul class="site-menu main-menu js-clone-nav mx-auto d-none pl-0 d-lg-block border-none">
                                    <li class="active" <?php if (@$_GET['action'] == 'home') { ?>class="active" <?php } ?>>
                                        <a href="index.php?action=home">Home</a></li>

                                    <li class="active" <?php if (@$_GET['action'] == 'about') { ?>class="active" <?php } ?>>
                                        <a href="index.php?action=about">About</a></li>

                                    <li class="active" <?php if (@$_GET['action'] == 'shop') { ?>class="active" <?php } ?>>
                                        <a href="index.php?action=shop">Shop</a></li>

                                    <?php if (isset($_SESSION['userEmailAddress'])) :?>
                                        <a>Connecté en tant que :</a> <?php echo $_SESSION['userEmailAddress']?>
                                    <li class="active" <?php if (@$_GET['action'] == 'logout') { ?>class="active" <?php } ?>>
                                        <a href="index.php?action=logout">Logout</a></li>
                                    <?php else:?>
                                        <li class="active" <?php if (@$_GET['action'] == 'login') { ?>class="active" <?php } ?>>
                                            <a href="index.php?action=login">Login</a></li>
                                    <?php endif;?>
                                    <li class="active"
                                        <?php if (@$_GET['action'] == 'contact') { ?>class="active" <?php } ?>>
                                        <a href="index.php?action=contact">Contact</a></li>

                                    <li <?php if (@$_GET['action'] == 'panier') { ?>class="active" <?php } ?>>
                                        <a href="index.php?action=goPanier">Mon Panier</a>

                                        </td>
                                </ul>
                            </nav> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $content; ?>
        <div class="footer">
            <div class="container">

                <div class="row">
                    <div class="col-12 text-center">
                        <div class="social-icons">
                            <a href="#"><span class="icon-facebook"></span></a>
                            <a href="#"><span class="icon-twitter"></span></a>
                            <a href="#"><span class="icon-youtube"></span></a>
                            <a href="#"><span class="icon-instagram"></span></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="copyright">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                All rights reserved | This template is made with <i class="icon-heart text-danger"
                                                                                    aria-hidden="true"></i> by <a
                                                                                    href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>


                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="col-10">
        <textarea name="messageUtli" id="messageUtil" placeholder="Entrer vos specification (ex: végétarien, mal de mer)"
                  rows=2-small></textarea>
    </div>









    <div id="loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#ff5e15"/>
        </svg>
    </div>
    <p><a href="<?= $tempsDirPath ?>" target="_blank">Jetez un coup d'oeil au -> fichier json brut</a></p>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.mb.YTPlayer.min.js"></script>


    <script src="js/main.js"></script>

</body>

</html>
<?php
?>