<?php

/**
 * @file      articles.php
 * @brief     this controller is designed to manage articles actions
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

/**
 * @brief This function is designed to put all extracetd of the databes and put them into the variable "allWines"
 */

function getWines() {
    require_once "model/winesManager.php";
    try {
        $allWines = extractWines();
//  require 'view/shop.php';
    } catch (ModelDataBaseException $ex) {
        $msgErreurForUsers = "Nous rencontrons temporairement un problème technique pour afficher nos produits. Désolé du dérangement !";
        require 'model/logError.php';
        logError($msgErreurForUsers, $ex);
//  require "vueErreur.php";
    } finally {
        require 'view/shop.php';
    }
}

function anArticle($details) {

    require_once "model/winesManager.php";
    try {
        $aWine = extractAWine($details);
        require 'view/wine.php';
    } catch (ModelDataBaseException $ex) {
        $msgErreurForUsers = "Nous rencontrons temporairement un problème technique pour afficher nos produits. Désolé du dérangement !";
        require "vueErreur.php";
    }
}

function addPanier() {

    function chargerClasse($classe) {

        require "model/" . $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
    }

    spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.


    if (isset($_POST["qtySelect"])) {
        $qty = $_POST["qtySelect"];
    } else {
        $qty = 1;
    }

//    $id = 1;
//    $test = new CartItem($id, $qty);
//    $cart = new Cart();


    $id = $_POST["id"];
//    $test = $cart;
    require_once "model/winesManager.php";
    try {

        $aWine = extractAWine($id);

        $index = 0;
        if (isset($_SESSION['wine'])) {

            $existIncart = false;

            foreach ($_SESSION['wine'] as $session) {

                if ($_SESSION['wine'][$index]['id'] == $id) {

                    $existIncart = true;
                    break;
                } else {

                    $existIncart = false;
                }
                $index++;
            }

            if ($existIncart == false) {

                $arrayPos = count($_SESSION['wine']);

                $_SESSION['wine'][$arrayPos]['qty'] = null;
                $_SESSION['wine'][$arrayPos]['qty'] = $_SESSION['wine'][$arrayPos]['qty'] + $qty;
                $_SESSION['wine'][$arrayPos]['totalQty'] = $aWine[0]["qtyAvailable"];
                $_SESSION['wine'][$arrayPos]['id'] = $aWine[0]["code"];
                $_SESSION['wine'][$arrayPos]['marque'] = $aWine[0]["brand"];
                $_SESSION['wine'][$arrayPos]['modele'] = $aWine[0]["model"];
                $_SESSION['wine'][$arrayPos]['photo'] = $aWine[0]["photo"];
                $_SESSION['wine'][$arrayPos]['price'] = $aWine[0]["price"];
                $_SESSION['wine'][$arrayPos]['totalWinePrice'] = $_SESSION['wine'][$arrayPos]['price'] * $_SESSION['wine'][$arrayPos]['qty'];
                $_SESSION['wine'][$arrayPos]['aWineSubTotal'] = $_SESSION['wine'][$arrayPos]['price'] * $_SESSION['wine'][$arrayPos]['qty'];
            }

            if ($existIncart == true) {
                $index = 0;
                foreach ($_SESSION['wine'] as $item) {

                    if ($_SESSION['wine'][$index]['id'] == $id) {
                        $subTotalInCart = $_SESSION['wine'][$index]['aWineSubTotal'];
                        $newSubTotalInCart = $_SESSION['wine'][$index]['price'] * $_SESSION['wine'][$index]['qty'];
                        $_SESSION['wine'][$index]['aWineSubTotal'] = $newSubTotalInCart + $subTotalInCart;
                        $_SESSION['wine'][$index]['qty'] = $_SESSION['wine'][$index]['qty'] + $qty;
                        $_SESSION['wine'][$index]['totalWinePrice'] = $_SESSION['wine'][$index]['price'] * $_SESSION['wine'][$index]['qty'];
                    }
                    $index++;
                }

                $existIncart = false;
            }
        } else {

            $_SESSION['wine'][0]['qty'] = $qty;
            $_SESSION['wine'][0]['totalQty'] = $aWine[0]["qtyAvailable"];
            $_SESSION['wine'][0]['id'] = $aWine[0]["code"];
            $_SESSION['wine'][0]['marque'] = $aWine[0]["brand"];
            $_SESSION['wine'][0]['modele'] = $aWine[0]["model"];
            $_SESSION['wine'][0]['photo'] = $aWine[0]["photo"];
            $_SESSION['wine'][0]['price'] = $aWine[0]["price"];
            $_SESSION['wine'][0]['totalWinePrice'] = $_SESSION['wine'][$index]['price'] * $_SESSION['wine'][$index]['qty'];
            $_SESSION['wine'][0]['aWineSubTotal'] = $_SESSION['wine'][$index]['price'] * $_SESSION['wine'][$index]['qty'];
        }


        $_SESSION['cart']['total'] = 0;
        $index = 0;
        foreach ($_SESSION['wine'] as $total) {
            $_SESSION['wine'][$index]['totalWinePrice'] = $_SESSION['wine'][$index]['price'] * $_SESSION['wine'][$index]['qty'];
            $_SESSION['cart']['total'] = $_SESSION['cart']['total'] + $_SESSION['wine'][$index]['totalWinePrice'];

            $index++;
        }

        require "model/articlesManager.php";
        jsonCartUpdater();
        require 'view/panier.php';
    } catch
    (Exception $e) {
        $msgErreur = $e->getMessage();
    }
}

function cartAction($data) {

    if (isset($data['button'])) {

        $action = $data['button'];
    } else {

        foreach ($data as $key => $value) {
            if ($key == 'delete') {
                $action = 'delete';
            }
            if ($key == 'continueShopping') {
                $action = 'continueShopping';
            }
            if ($key == 'updateCart') {
                $action = 'updateCart';
            }
        }
    }

    switch ($action) {

        case 'continueShopping':
            getWines();
            require "model/articlesManager.php";
            jsonCartUpdater();
            require 'view/panier.php';
            break;

        case 'delete':
            $id = $data['delete'];
            unset($data['delete']);
            delAwine($id);
            require "model/articlesManager.php";
            jsonCartUpdater();
            require 'view/panier.php';
            break;

        case 'updateCart':
            unset($data['updateCart']);
            updateCart($data);
            setCartTotal();
            require "model/articlesManager.php";
            jsonCartUpdater();
            require 'view/panier.php';
            break;

        case 'checkout':
            unset($data['checkout']);
            //$_SESSION['cart']="";
            //$_SESSION['total']="";
            //$_SESSION = null;
             command();
            session_destroy();
           
//$cart = $_SESSION;
            //require 'checkoutInfoBuilder.php';
            require 'view/home.php';
            break;
    }
}



function updateCart($data) {

    foreach ($data as $key => &$value) {

        if (stristr($key, 'wineId_') == true) {
            $id = $value;
            $newQty = $data["wineNewQtySel_" . $id];
        }
        if (isset($id) && isset($newQty)) {
            updateCartSession($id, $newQty);
        }
    }
}

function setCartTotal() {
    $_SESSION['cart']['total'] = 0;
    $index = 0;
    foreach ($_SESSION['wine'] as $total) {
        $_SESSION['wine'][$index]['totalWinePrice'] = $_SESSION['wine'][$index]['price'] * $_SESSION['wine'][$index]['qty'];
        $_SESSION['cart']['total'] = $_SESSION['cart']['total'] + $_SESSION['wine'][$index]['totalWinePrice'];
        $index++;
    }
}

function delAwine($id) {
    $index = 0;
    if (isset($_SESSION['wine'])) {
        foreach ($_SESSION['wine'] as $key => &$item) {
            if ($item['id'] == $id) {
                unset($_SESSION['wine'][$key]);
            }

            $index++;
        }
        //  updateCartSession($id, 0);
        $_SESSION['wine'] = array_values($_SESSION['wine']);


        if (count($_SESSION['wine']) == 0) {
            delPanier();
        } else {
            setCartTotal();
        }
    }
}

function updateCartSession($id, $newQty) {

    $index = 0;
    foreach ($_SESSION['wine'] as $item) {
        if ($_SESSION['wine'][$index]['id'] == $id) {
            $subTotalInCart = $_SESSION['wine'][$index]['aWineSubTotal'];
            $newSubTotalInCart = $_SESSION['wine'][$index]['price'] * $newQty;
            $_SESSION['wine'][$index]['aWineSubTotal'] = $newSubTotalInCart;
            $_SESSION['wine'][$index]['qty'] = $newQty;
            $_SESSION['wine'][$index]['totalWinePrice'] = $_SESSION['wine'][$index]['price'] * $newQty;
        }
        $index++;
    }
}

function delPanier() {

    $dataDirectory = "model/data";


    $tempsDirPath = $dataDirectory . '/data' . session_id();


    $files = glob($dataDirectory . '/data' . session_id() . "/userCart.json");
    foreach ($files as $file) {

        unlink($_SERVER['DOCUMENT_ROOT'] . "/" . $file);
    }
    if (is_dir($dataDirectory . '/data' . session_id())) {
        rmdir($dataDirectory . '/data' . session_id());
    }

    $_GET['action'] = "home";

    unset($_SESSION['wine']);
    unset($_SESSION['total']);
    unset($_SESSION["cart"]["total"]);
    unset($_SESSION["success"]);
}

function command() {

    require_once "model/articlesManager.php";
    try {
        $aSnow = updateWines();
        //require 'view/home.php';
    } catch (Exception $e) {
        $msgErreur = $e->getMessage();
        require 'vueErreur.php';
    }
}
