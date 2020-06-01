<?php
/**
 * @file      articles.php
 * @brief     this controller is designed to manage articles actions
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

/**
 * @brief This function is designed to display Articles
 */
function displayArticles()
{
    require_once "model/articlesManager.php";
    try {
        $snowsResults = getArticles();
    } catch (ModelDataBaseException $ex) {
        $articleErrorMessage = "Nous rencontrons temporairement un problème technique pour afficher nos produits. Désolé du dérangement !";
    } finally {
        require "view/articles.php";
    }
}


function getWines()
{
    require_once "model/winesManager.php";
    try {
        $allWines = extractWines();
        //  require 'view/shop.php';
    } catch (ModelDataBaseException  $ex) {
        $msgErreurForUsers = "Nous rencontrons temporairement un problème technique pour afficher nos produits. Désolé du dérangement !";
        require 'model/logError.php';
        logError($msgErreurForUsers, $ex);
        //  require "vueErreur.php";
    } finally {
        require 'view/shop.php';
    }

}


function anArticle($details)
{

    require_once "model/winesManager.php";
    try {
        $aWine = extractAWine($details);
        require 'view/wine.php';
    } catch (ModelDataBaseException  $ex) {
        $msgErreurForUsers = "Nous rencontrons temporairement un problème technique pour afficher nos produits. Désolé du dérangement !";
        require "vueErreur.php";
    }

}

function addPanier()
{
    $id = $_POST["id"];


    if (isset($_POST["qtySelect"])) {
        $qty = $_POST["qtySelect"];
    } else {
        $qty = 1;
    }


    require_once "model/winesManager.php";
    try {
        $aWine = extractAWine($id);

        $myIndex = 0;
        if (isset($_SESSION['wine'])) {
            foreach ($_SESSION['wine'] as $wesh) {
                $myIndex++;
            }
        }


        $_SESSION['wine'][$myIndex]['qty'] = $qty;
        $_SESSION['wine'][$myIndex]['totalQty'] = $aWine[0]["qtyAvailable"];

        $_SESSION['wine'][$myIndex]['id'] = $aWine[0]["code"];
        $_SESSION['wine'][$myIndex]['marque'] = $aWine[0]["brand"];

        $_SESSION['wine'][$myIndex]['modele'] = $aWine[0]["model"];
        //  $_SESSION['wine'][$myIndex]['taille'] = $aWine[0]["snowLength"];

        $_SESSION['wine'][$myIndex]['photo'] = $aWine[0]["photo"];
        $_SESSION['wine'][$myIndex]['price'] = $aWine[0]["price"];


        $marque = $_SESSION['wine'][$myIndex]['marque'];
        $modele = $_SESSION['wine'][$myIndex]['modele'];
        //   $taille = $_SESSION['wine'][$myIndex]['taille'];
        $selectQty = $_SESSION['wine'][$myIndex]['marque'];
        $photo = $_SESSION['wine'][$myIndex]['photo'];
        $myIndex = 0;

        $_SESSION['success'] = array(
            'marque' => $marque,
            'modele' => $modele,
            'qtySel' => $selectQty,
            'success' => 'Success'
        );
        /*
                $_SESSION['success']['marque'] = $marque;
                $_SESSION['success']['modele'] = $modele;
                $_SESSION['success']['taille'] = $taille;
                $_SESSION['success']['qtySel'] = $selectQty;
                $_SESSION['success']['success'] = 'Success';
        */
        // require 'view/snow.php';


        //   getWines();
        require 'view/panier.php';
    } catch (Exception $e) {
        $msgErreur = $e->getMessage();
       // require 'view/.php';
    }

    require "model/articlesManager.php";
    jsonCartUpdater();


}


function delPanier()
{

    $dataDirectory = "model/data";


    $tempsDirPath=$dataDirectory.'/data'.session_id();
   // file_put_contents("$tempsDirPath/$dataFileName", json_encode($newData));


    $files = glob($dataDirectory.'/data'.session_id()."/userCart.json");
    foreach($files as $file) {

        unlink($_SERVER['DOCUMENT_ROOT']."/".$file);
    }
    rmdir($dataDirectory.'/data'.session_id());
    // session_destroy();

    $_GET['action'] = "home";

    unset($_SESSION['wine']);
    unset($_SESSION["success"]);
    require 'view/home.php';
}

function command()
{
    /*    $id = $_POST["id"];
        $qty = $_POST["qtySelect"];*/

    require_once "model/modele_snows.php";
    try {
        $aSnow = updateSnow();
        require 'view/snow.php';
    } catch (Exception $e) {
        $msgErreur = $e->getMessage();
        require 'vueErreur.php';
    }

}

