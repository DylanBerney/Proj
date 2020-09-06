<?php

session_start();

$a = $_POST['arguments'];

$jsonCart = json_decode($a['arg1']);

$allCart = $_SESSION['wine'];

foreach ($allCart as $anArticle) {
    foreach ($anArticle as $builder) { 

            $test = $builder;
               
        }
    }



    echo $a['arg1'];
?>