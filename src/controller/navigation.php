<?php
/**
 * @file      navigation.php
 * @brief     This controller is designed to manage all navigation aspect (view controller view)
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

/**
 * @brief This function is designed to redirect the user to the home page (depending on the action received by the index)
 */
function home()
{
    require "view/home.php";
}

function about()
{
    require "view/about.php";
}

function wines()
{
    require "view/wines.php";
}

function shop()
{
    require "view/shop.php";
}

function contact()
{
            require 'view/wines.php';       
    //require "view/contact.php";
}

/**
 * @brief This function is designed to inform the user that the resource requested doesn't exist (i. e. if the user modify the url manually)
 */
function lost()
{
    require "view/lost.php";
}

function goPanier()
{
    require 'view/panier.php';
}


function checkout(){
require "view/checkout.php";
}
