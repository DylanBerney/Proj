<?php

/**
 * @file      index.php
 * @brief     This file is the rooter managing the link with controllers.
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */
session_start();
require "controller/articles.php";
require "controller/navigation.php";
require "controller/users.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {

        case 'home' :
            home();
            break;

        case 'about' :
            about();
            break;

        case 'cartItem' :
            cartAddItem();
            break;

        case 'wines' :
            wines();
            break;

        case 'anArticle' :
            anArticle($_GET['id']);
            break;

        case 'shop' :
            getWines();
            break;

        case 'addPanier' :
            addPanier();
            break;

        case 'goPanier' :
            goPanier();
            break;

        case 'cartAction' :
            cartAction($_POST);
            break;
        
        case 'updateCart' :
            updateCart($_POST);
            break;

        case 'delAWine' :
            delAwine($_GET);
            break;

        case 'delPanier' :
            delPanier();
            break;

        case 'command' :
            command();
            break;

        case 'contact' :
            contact();
            break;

        case 'login' :
            login($_POST);
            break;

        case 'logout' :
            logout();
            break;

        case 'checkout' :
            checkout();
            break;

        case 'register' :
            register($_POST);
            break;

               case 'orderReturn' :
            orderReturn();
            break;

        default :
            lost();
    }
} else {
    home();
}