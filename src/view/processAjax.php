<?php

session_start();

$arguments = $_POST['arguments'];

if (isset($arguments['buttonPlus'])) {
    $posInSession = (int) $arguments['buttonPlus'];
    //(int) $arguments['wineNewQtySel']++;
    $_SESSION['wine'][$posInSession]['qty'] ++;

    $thisNewQty = $_SESSION['wine'][$posInSession]['qty'];

    $result = $thisNewQty * $_SESSION['wine'][$posInSession]['price'];

    showResult($result,$posInSession);
}


if (isset($arguments['buttonMinus'])) {
    $posInSession = (int) $arguments['buttonMinus'];
    
//(int) $arguments['wineNewQtySel']--;
    
    
    $_SESSION['wine'][$posInSession]['qty']--;
    
    $thisNewQty = $_SESSION['wine'][$posInSession]['qty'];

    $result = $thisNewQty * $_SESSION['wine'][$posInSession]['price'];

    showResult($result,$posInSession);
    
}


function showResult($result,$posInSession){

    if ($result != $_SESSION['wine'][$posInSession]['aWineSubTotal']) {
        $msg = '<h6 style=color:red>Your total is not updated !!</h6>';
    } else {

        $msg = '<h6 style=color:blue>Your total is updated !!</h6>';
    }
    echo $msg;
}

?>