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
      logError($msgErreurForUsers,$ex);
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

