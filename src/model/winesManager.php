<?php
/**
 * @file      articlesManager.php
 * @brief     This model is designed to implement the articles business logic
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @author    Updated by Luca.Bassi
 * @version   11-NOV-2020
 */

/**
 * @brief This function is designed to get all active articles
 * @return array : containing all information about the articles. Array can be empty.
 * @throws ModelDataBaseException : will be throw if something goes wrong with the database opening process
 */
function extractWines()
{

    $snowsQuery = 'SELECT code, brand, model, alchoholpercent, qtyAvailable, description, oldPrice, price, photo, active, rating FROM wines';
    require_once 'model/dbConnector.php';

    return executeQuerySelect($snowsQuery);
}

/**
 * @brief This function is designed to get an arictle by his ID
 * @param type $id
 *  @return array : containing all information about an article. Array can be empty. 
 */
function extractAWine($id)
{

    $snowsQuery = "SELECT code, brand, model, alchoholpercent, qtyAvailable, description, oldPrice, price, photo, active, rating FROM wines WHERE code ='$id'";
    require_once 'model/dbConnector.php';

    return executeQuerySelect($snowsQuery);
}