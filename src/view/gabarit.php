<!DOCTYPE html>
<html lang="en">

<head>
    <title>Wines &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700|Montserrat:400,700|Roboto&display=swap" rel="stylesheet">

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

                                <li class="active"<?php if (@$_GET['action'] == 'home'){ ?>class="active" <?php } ?>>
                                    <a href="index.php?action=home">Home</a></li>

                                <li class="active"<?php if (@$_GET['action'] == 'about'){ ?>class="active" <?php } ?>>
                                    <a href="index.php?action=about">About</a></li>

                                <li class="active"<?php if (@$_GET['action'] == 'shop'){ ?>class="active" <?php } ?>>
                                    <a href="index.php?action=shop">Shop</a></li>

                                <li class="active"<?php if (@$_GET['action'] == 'contact'){ ?>class="active" <?php } ?>>
                                    <a href="index.php?action=contact">Contact</a></li>

                                <li <?php if (@$_GET['action'] == 'panier'){ ?>class="active" <?php } ?>>
                                    <a href="index.php?action=goPanier">Mon Panier</a>

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
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>



                    </div>
                </div>
            </div>
        </div>
    </div>


    <div>
        <table>
            <tr>
                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">
                        <ul class="alt">
                            <li id="personne">Personne</li>
                            <li id="age">Age</li>
                            <li id="addresse">Addresse</li>
                            <li id="ville">Ville</li>
                        </ul>
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <ul class="alt">
                            <li id="abonnement">Type d'abonnement CFF</li>
                            <li id="mail">E-mail</li>
                            <li id="numeroId">No' d'identité</li>
                            <li id="conditions"> Conditions lues</li>
                        </ul>
                    </div>

            </tr>

    </div>

    <div class="inner">
        <FORM class= method="get" action="details.php" class="liste" NAME="Choix">
            <SELECT   style="margin-left:1%;width:95%; " id="maListe" NAME="Liste" onchange="showPersonne()" onload=Lien()>
                <OPTION VALUE="null">Choisir une personne
                    <!--
                                                   <OPTION VALUE="1">John Doe
                                                   <OPTION VALUE="2">Anna Smith
                                                   <OPTION VALUE="3">Peter Jones
                                                   <OPTION VALUE="http://www.google.com">Recherche-->
            </SELECT>
        </FORM>
    </div>
    </table>


    </section>
    <section>

        <span class> <img class="image right" id="photoPersonne" src="Image/photos_personnes/personne0.png"></span>

    </section>
</div>
</section>
<div class="col-10">
    <textarea name="messageUtli" id="messageUtil" placeholder="Entrer vos specification (ex: végétarien, mal de mer)" rows=2-small></textarea>
</div>
</div>

</div>
<!-- .site-wrap -->


<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

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

<?php
$dataDirectory = "model/data";
$dataFileName = 'userCart.json';

$tempsDirPath = 'model/data/data'. session_id()."/userCart.json";
?>
<script>

    // img.src = obj.employees[0].photo;
    function Lien() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                //met le contenu du ficjier json dans un objet javascript
                var myObj = JSON.parse(this.responseText);
                var path = "<?=$tempsDirPath?>"
                for ( i = 0; i < Object.keys(myObj.wine).length; i++) {
                    document.getElementById("maListe").innerHTML += "<OPTION>" + Object(myObj.wine[i]);
                    //document.getElementById("maListe").innerHTML += "<OPTION>" + Object.keys(myObj[0].personnes).length;
                }
            }
        };
        //chemin du fichier json
        xmlhttp.open("GET", "<?=$tempsDirPath?>",true);
        xmlhttp.send();
    }



    /*
            switch (i) {
                case 0 : img8.style.display = "none";
                    break;
                case 1:
                    //va chercher dans le fichier json le nom, prenom,age de la personne
              /!*      document.getElementById("personne").innerHTML =
                        `${obj.employees[0].firstName} ${obj.employees[0].lastName} ${obj.employees[0].age} ans ` ;

            document.getElementById("typeAbonnement").innerHTML =
                `${obj.employees[0].typeAbonnement[0].type1}`;

            //va chercher dans la BD json le chemin de la photo de la persone a afficher
            document.getElementById("photoPersonne").src = obj.employees[0].photo;*!/


                    //requette xml pour extraire le contenu du fichier json

                    break;
                case 2:
                    document.getElementById("personne").innerHTML =
                        obj.employees[1].firstName + " " + obj.employees[1].lastName;
                    document.getElementById("typeAbonnement").innerHTML =
                        `${obj.employees[0].typeAbonnement[1].type2}`;
                    //va chercher dans la BD json le chemin de la photo de la persone a afficher
                    document.getElementById("photoPersonne").src = obj.employees[1].photo;
                    break;
                case 3:
                    document.getElementById("personne").innerHTML =
                        obj.employees[2].firstName + " " + obj.employees[2].lastName;
                    //va chercher dans la BD json le chemin de la photo de la persone a afficher
                    document.getElementById("photoPersonne").src = obj.employees[2].photo;
                    break;
                case 4:
                    url = document.Choix.Liste.options[i].value;
                    window.open("https://www.qwant.com");
                    break;
            }*/




    //  document.getElementById("personne").innerHTML =
    //      obj.employees[1].firstName + " " + obj.employees[1].lastName;









    window.onload = Lien ;
</script>

<script>
function showPersonne(){
    i = document.Choix.Liste.selectedIndex-1;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //met le contenu du ficjier json dans un objet javascript
            var myObj = JSON.parse(this.responseText);
            document.getElementById("personne").innerHTML = myObj[0].personnes[i].firstname+" " + myObj[0].personnes[i].lastname;
            document.getElementById("age").innerHTML = myObj[0].personnes[i].age+" "+"ans";
            // va chercher dans la BD json le chemin de la photo de la persone a afficher
            document.getElementById("photoPersonne").src = myObj[0].personnes[i].photo;

            document.getElementById("addresse").innerHTML= myObj[0].personnes[i].address[0].rue + " " + myObj[0].personnes[i].address[0].numero ;
            document.getElementById("ville").innerHTML= myObj[0].personnes[i].address[1].npa + " " + myObj[0].personnes[i].address[1].city ;
            document.getElementById("numeroId").innerHTML= "No' identité :    "+myObj[0].personnes[i].noIdentite;
            document.getElementById("mail").innerHTML= myObj[0].personnes[i].mail;
            document.getElementById("abonnement").innerHTML= myObj[0].personnes[i].typeAbonnement;
            document.getElementById("conditions").innerHTML= myObj[0].personnes[i].conditions
            document.getElementById("messageUtil").innerHTML= myObj[0].personnes[i].messagePerso;
        }
    };
    //chemin du fichier json
    xmlhttp.open("GET",<?=$tempsDirPath?>, true);
    xmlhttp.send();
}
</script>


<script src="js/main.js"></script>

</body>

</html>