<?php
/**
 * @file      gabarit.php
 * @brief     This view is designed to centralize all common graphical component like header and footer (will be call by all views)
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Html5TemplatesDreamweaver.com">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW"> <!-- Remove this Robots Meta Tag, to allow indexing of site -->

    <link href="view/content/scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="view/content/scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="view/content/scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet"
          type="text/css"/>
    <link href="view/content/scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet"
          type="text/css"/>
    <!--[if lt IE 8]>
    <link href="view/content/scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen"
          rel="stylesheet"
          type="text/css"/>
    <link href="view/content/scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet"
          type="text/css"/>
    <![endif]-->
    <link rel="stylesheet" href="view/content/scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
    <link rel="stylesheet" href="view/content/scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="view/content/scripts/carousel/style.css" rel="stylesheet" type="text/css"/>
    <link href="view/content/scripts/camera/css/camera.css" rel="stylesheet" type="text/css"/>

    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">

    <link href="view/content/styles/custom.css" rel="stylesheet" type="text/css"/>
</head>
<body id="pageBody">

<div id="divBoxed" class="container">

    <div class="transparent-bg"
         style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divPanel notop nobottom">
        <div class="row-fluid">
            <div class="span12">
                <div id="divLogo" class="pull-left">
                    <a href="index.php" id="divSiteTitle">Rent A Snow</a><br/>
                    <a href="index.php" id="divTagLine">La glisse à moindre coût</a>
                </div>
                <div id="divMenuRight" class="pull-right">
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary"
                                data-toggle="collapse" data-target=".nav-collapse">
                            NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                                <!-- Display the button which must be always (available for all type of users)-->
                                <li><a href="index.php?action=home">Accueil</a></li>
                                <li><a href="index.php?action=displayArticles">Snows</a></li>
                                <!-- Display the button useful for login and register-->
                                <?php if (!isset($_SESSION['userEmailAddress']) || (!isset($_GET['action'])) || ((@$_GET['action'] == "logout"))) : ?>
                                    <li><a href="index.php?action=login">Login</a></li>
                                    <li><a href="index.php?action=register" style="color:#FC05CB">S'inscrire</a></li>
                                <?php else : ?>
                                    <!-- Display the button useful for logout-->
                                    <li><a href="index.php?action=logout">Se déconnecter</a></li>
                                <?php endif; ?>
                            </ul>
                            <!-- after login, we display the user name-->
                            <?php if (isset($_SESSION['userEmailAddress'])) : ?>
                                <h6>Vous êtes connecté : <?= $_SESSION['userEmailAddress']; ?></h6>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span12">
                <!-- ________ SLIDER_____________-->
                <?php if ((@$_GET['action'] == "home") || (!isset($_GET['action']))) : ?>
                    <div id="headerSeparator"></div>
                    <div class="camera_full_width">
                        <div id="camera_wrap">
                            <div data-src="view/content/slider-images/5.jpg">
                                <div class="camera_caption fadeFromBottom cap1">Les derniers modèles toujours à
                                    disposition.
                                </div>
                            </div>
                            <div data-src="view/content/slider-images/1.jpg">
                                <div class="camera_caption fadeFromBottom cap2">Découvrez des paysages fabuleux avec des
                                    sensations.
                                </div>
                            </div>
                            <div data-src="view/content/slider-images/2.jpg"></div>
                        </div>
                        <br style="clear:both"/>
                        <div style="margin-bottom:40px"></div>
                    </div>
                    <div id="headerSeparator2"></div>
                    <!-- ________ SLIDER_____________-->
                <?php endif; ?>
            </div>
        </div>

        <div class="contentArea">

            <div class="divPanel notop page-content">
                <div class="row-fluid">

                    <!--__________CONTENU__________-->

                    <div class="span12" id="divMain">
                        <?= $content; ?>
                    </div>

                    <!--________FIN CONTENU________-->

                </div>

                <div id="footerInnerSeparator"></div>
            </div>
        </div>

        <div id="footerOuterSeparator"></div>

        <div id="divFooter" class="footerArea">
            <div class="divPanel">
                <div class="row-fluid">
                    <div class="span3" id="footerArea1">
                        <h3>Notre magasin</h3>
                        <p>Nous sommes une équipe de jeunes snowboardeurs qui souhaitons faire découvrir cette
                            discipline à tous les publics.</p>
                        <p>
                            <a href="#" title="Terms of Use">Terms of Use</a><br/>
                            <a href="#" title="Privacy Policy">Privacy Policy</a><br/>
                            <a href="#" title="FAQ">FAQ</a><br/>
                            <a href="#" title="Sitemap">Sitemap</a>
                        </p>
                    </div>

                    <div class="span3" id="footerArea2">
                        <h3>Dernière nouveautés</h3>
                        <p>
                            <a href="#" title="">Le Burton B221 est à disposition</a><br/>
                            <span style="text-transform:none;">15/05/2019</span>
                        </p>
                        <p>
                            <a href="#" title="">Les horaires ont été étendus</a><br/>
                            <span style="text-transform:none;">02/01/2019</span>
                        </p>
                        <p>
                            <a href="#" title="">Paul champion suisse !</a><br/>
                            <span style="text-transform:none;">19/03/2019</span>
                        </p>
                        <p>
                            <a href="#" title="">VIEW ALL POSTS</a>
                        </p>
                    </div>

                    <div class="span3" id="footerArea3">
                        <h3>Horaires de location</h3>
                        <p>Les locations peuvent s'effectuer tous les jours de la semaine en haute saison de 07h à 19h
                            et en basse saison, les jours ouvrables de 8h à 18h.<br>
                            Vous pouvez aussi passer par le site. Pour le retrait et le dépot, vous devrez passer au
                            guichet automatique à l'arrière du magasin</p>
                    </div>

                    <div class="span3" id="footerArea4">
                        <h3>Contacts</h3>

                        <ul id="contact-info">
                            <li>
                                <i class="general foundicon-phone icon"></i>
                                <span class="field">Téléphone :</span>
                                <br/>
                                +41 27 890 12 34
                            </li>
                            <li>
                                <i class="general foundicon-mail icon"></i>
                                <span class="field">Email :</span>
                                <br/>
                                <a href="mailto:info@rentasnow.com" title="Email">info@rentasnow.com</a>
                            </li>
                            <li>
                                <i class="general foundicon-home icon" style="margin-bottom:50px"></i>
                                <span class="field">Addresse :</span>
                                <br/>
                                12 Rue de la Glisse<br/>
                                2704 Sautons, Valais<br/>
                                Suisse
                            </li>
                        </ul>
                    </div>

                </div>
                <br/><br/>

                <div class="row-fluid">
                    <div class="span12">
                        <p class="copyright">Copyright © 2019 Rent A Snow. All Rights Reserved.</p>
                        <p class="social_bookmarks">
                            <a href="#"><i class="social foundicon-facebook"></i> Facebook</a>
                            <a href=""><i class="social foundicon-twitter"></i> Twitter</a>
                            <a href="#"><i class="social foundicon-pinterest"></i> Pinterest</a>
                            <a href="#"><i class="social foundicon-rss"></i> Rss</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/><br/>

    <script src="view/content/scripts/jquery.min.js" type="text/javascript"></script>
    <script src="view/content/scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="view/content/scripts/default.js" type="text/javascript"></script>


    <script src="view/content/scripts/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
    <script type="text/javascript">$('#list_photos').carouFredSel({
            responsive: true,
            width: '100%',
            scroll: 2,
            items: {width: 320, visible: {min: 2, max: 6}}
        });</script>
    <script src="view/content/scripts/camera/scripts/camera.min.js" type="text/javascript"></script>
    <script src="view/content/scripts/easing/jquery.easing.1.3.js" type="text/javascript"></script>

    <script type="text/javascript">function startCamera() {
            $('#camera_wrap').camera({
                fx: 'scrollLeft',
                time: 2000,
                loader: 'none',
                playPause: false,
                navigation: true,
                height: '35%',
                pagination: true
            });
        }

        $(function () {
            startCamera()
        });</script>

    <!-- scripts added to standard template-->
    <script src="view/content/scripts/custo/userScript.js"></script>

</body>
</html>