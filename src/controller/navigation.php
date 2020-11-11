<?php
/**
 * @file      navigation.php
 * @brief     This controller is designed to manage all navigation aspect (view controller view)
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @author    Updated by Luca.Bassi
 * @version   11-NOV-2020
 */

/**
 * @brief This function is designed to redirect the user to the home page (depending on the action received by the index)
 */
function home()
{
    require "view/home.php";
}
/**
 * @brief This function is designed to redirect the user to the about page (depending on the action received by the index)
 */
function about()
{
    require "view/about.php";
}
/**
 * @brief This function is designed to redirect the user to the wines page (depending on the action received by the index)
 */
function wines()
{
    require "view/wines.php";
}
/**
 * @brief This function is designed to redirect the user to the shop page (depending on the action received by the index)
 */
function shop()
{
    require "view/shop.php";
}
/**
 * @brief This function is designed to redirect the user to the contact page (depending on the action received by the index)
 */
function contact()
{

   require "view/contact.php";
}
/**
 * @brief This function is designed to redirect the user to the cart page (depending on the action received by the index)
 */
function goPanier()
{
    require 'view/panier.php';
}

/**
 * @brief This function is designed to redirect the user to the checkout page (depending on the action received by the index)
 */
function checkout(){
require "view/checkout.php";
}

/**
 * @brief This function is designed to inform the user that the resource requested doesn't exist (i. e. if the user modify the url manually)
 */
function lost()
{
    require "view/lost.php";
}

