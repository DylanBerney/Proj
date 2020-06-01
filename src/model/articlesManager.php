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
function getArticles()
{

    $snowsQuery = 'SELECT code, brand, model, snowLength, dailyPrice, qtyAvailable, photo, active FROM snows';

    require_once 'model/dbConnector.php';

    return executeQuerySelect($snowsQuery);
}


function jsonCartUpdater()
{

    $dataDirectory = "model/data";
    $dataFileName = 'userCart.json';


    if (file_exists("$dataDirectory/$dataFileName")) // the file already exists -> load it
    {
        $data = json_decode(file_get_contents("$dataDirectory/$dataFileName"), true);

        $index = 0;
        foreach ($data as $cart) {
            $index++;
        }

        $newData = $_SESSION;

        mkdir($dataDirectory.'/data'.session_id(), 777);
        $tempsDirPath=$dataDirectory.'/data'.session_id();
        file_put_contents("$tempsDirPath/$dataFileName", json_encode($newData));


    } else {
        if (!file_exists($dataDirectory)) {
            mkdir($dataDirectory);
        }
        $data = json_decode(getData(), true);
        mkdir($dataDirectory.'/data'.session_id());
        $tempsDirPath=$dataDirectory.'/data'.session_id();
        file_put_contents("$tempsDirPath/$dataFileName", json_encode($data));
    }


    $test = $_SESSION;
    $yes = $test;


}

function getData()
{
    $jsonCartBuilder['userCart'] = $_SESSION;
    return json_encode($jsonCartBuilder);

}