<?php

/**
 * @file      articlesManager.php
 * @brief     This model is designed to implement the articles business logic
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

/**
 * @brief This function is designed to get all active articles
 * @return array : containing all information about the articles. Array can be empty.
 * @throws ModelDataBaseException : will be throw if something goes wrong with the database opening process
 */
function getArticles() {

    $snowsQuery = 'SELECT code, brand, model, snowLength, dailyPrice, qtyAvailable, photo, active FROM snows';

    require_once 'model/dbConnector.php';

    return executeQuerySelect($snowsQuery);
}

/**
 * @brief This function is designed to update de database with the session's variable
 * 
 */
function updateWines() {
    $products = null;
    $params = null;
    $index = 0;

    foreach ($_SESSION['wine'] as $wine) {
        $newQty = $_SESSION['wine'][$index]['totalQty'] - $_SESSION["wine"][$index]["qty"];
        $params[$index] = array
            (
            ':id' => $_SESSION["wine"][$index]["id"],
            ':qty' => $newQty
        );
        $index++;
    }

    foreach ($params as $param) {

        $commandQuery = "UPDATE wines.wines SET qtyAvailable = :qty WHERE code = :id";

        require_once 'model/dbConnector.php';
        $products = executeQueryUpdate($commandQuery, $param);
    }
    unset($_SESSION['wine']);
    return $products;
}

function insertOrder() {

    $products = null;
    $params = null;
    $index = 0;

    foreach ($_SESSION['wine'] as $wine) {
        $firstname = $_SESSION['wine'][$index]['totalQty'] - $_SESSION["wine"][$index]["qty"];
        $lastname = $_SESSION['wine'][$index]['totalQty'] - $_SESSION["wine"][$index]["qty"];
        $company = $_SESSION['wine'][$index]['totalQty'] - $_SESSION["wine"][$index]["qty"];
        $client_address = $_SESSION['wine'][$index]['totalQty'] - $_SESSION["wine"][$index]["qty"];
        $client_address_suite = $_SESSION['wine'][$index]['totalQty'] - $_SESSION["wine"][$index]["qty"];
        $client_country = $_SESSION['wine'][$index]['totalQty'] - $_SESSION["wine"][$index]["qty"];
        $client_zip_post = $_SESSION['wine'][$index]['totalQty'] - $_SESSION["wine"][$index]["qty"];
        $client_email = $_SESSION['wine'][$index]['totalQty'] - $_SESSION["wine"][$index]["qty"];
        $client_phone = $_SESSION['wine'][$index]['totalQty'] - $_SESSION["wine"][$index]["qty"];
        $client_account = $_SESSION['wine'][$index]['totalQty'] - $_SESSION["wine"][$index]["qty"];
        $client_account = $_SESSION['wine'][$index]['totalQty'] - $_SESSION["wine"][$index]["qty"];
        $client_account = $_SESSION['wine'][$index]['totalQty'] - $_SESSION["wine"][$index]["qty"];
        $client_account = $_SESSION['wine'][$index]['totalQty'] - $_SESSION["wine"][$index]["qty"];
        $client_account = $_SESSION['wine'][$index]['totalQty'] - $_SESSION["wine"][$index]["qty"];
        $client_account = $_SESSION['wine'][$index]['totalQty'] - $_SESSION["wine"][$index]["qty"];
        $client_account = $_SESSION['wine'][$index]['totalQty'] - $_SESSION["wine"][$index]["qty"];
        $client_account = $_SESSION['wine'][$index]['totalQty'] - $_SESSION["wine"][$index]["qty"];


        $params[$index] = array
            (
            ':id' => $_SESSION["wine"][$index]["id"],
            ':qty' => $newQty
        );
        $index++;
    }

    foreach ($params as $param) {

        $commandQuery = "UPDATE wines.wines SET qtyAvailable = :qty WHERE code = :id";

        require_once 'model/dbConnector.php';
        $products = executeQueryUpdate($commandQuery, $param);
    }
    unset($_SESSION['wine']);
    return $products;
}

function jsonCartUpdater() {
    $dataDirectory = "model/data";
    $dataFileName = 'userCart.json';

    $tempsDirPath = $dataDirectory . '/data' . session_id();
    if (file_exists("$tempsDirPath/$dataFileName")) { // the file already exists -> load it
        $data[0] = json_decode(file_get_contents("$tempsDirPath/$dataFileName"), true);

        $index = 0;
        foreach ($data as $cart) {
            $index++;
        }
        $newData[0] = $_SESSION;
        // mkdir($dataDirectory . '/data' . session_id(), 777);
        $tempsDirPath = $dataDirectory . '/data' . session_id();
        if (isset($data['wine'])) {
            $newData[0]['nbArticle'] = count($data['wine']);
        }
        $jsonCartBuilder['userCart'] = $newData;
        file_put_contents("$tempsDirPath/$dataFileName", json_encode($jsonCartBuilder), true);
    } else {
        if (!file_exists($dataDirectory)) {
            mkdir($dataDirectory,777);
        }
        $data[0] = json_decode(getData(), true);
        $jsonCartBuilder['userCart'] = array($data[0]['userCart']);
        mkdir($dataDirectory . '/data' . session_id(), 777);
        $tempsDirPath = $dataDirectory . '/data' . session_id();
        file_put_contents("$tempsDirPath/$dataFileName", json_encode($jsonCartBuilder),true);
    }
    //  $test = $_SESSION;
}

function getData() {
    $jsonCartBuilder['userCart'] = $_SESSION;
    return json_encode($jsonCartBuilder);
}
