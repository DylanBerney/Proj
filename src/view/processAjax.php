<?php

session_start();

$arguments = $_POST['arguments'];

if (isset($arguments['buttonPlus'])) {
    $posInSession = (int) $arguments['buttonPlus'];
    
    if(!isset($_SESSION['wine'][$posInSession]['tempQty'])){
    $_SESSION['wine'][$posInSession]['tempQty']=$_SESSION['wine'][$posInSession]['qty'];
    }

    $_SESSION['wine'][$posInSession]['tempQty']++;

    $thisNewQty = $_SESSION['wine'][$posInSession]['tempQty'];

    $result = $thisNewQty * $_SESSION['wine'][$posInSession]['price'];

    showResult($result,$posInSession);
}


if (isset($arguments['buttonMinus'])) {
    $posInSession = (int) $arguments['buttonMinus'];
    
    if(!isset($_SESSION['wine'][$posInSession]['tempQty'])){
    $_SESSION['wine'][$posInSession]['tempQty']=$_SESSION['wine'][$posInSession]['qty'];
    }
    $_SESSION['wine'][$posInSession]['tempQty']--;

    $thisNewQty = $_SESSION['wine'][$posInSession]['tempQty'];

    $result = $thisNewQty * $_SESSION['wine'][$posInSession]['price'];

    showResult($result,$posInSession);
    
}


function showResult($result,$posInSession){

    if ($result != $_SESSION['wine'][$posInSession]['aWineSubTotal']) {
        $msg = '<h5 style=color:red>Your total is not updated !!</h6>';
    } else {

        $msg = '<h6 style=color:green>Your total is updated !!</h6>';
    }
    echo $msg;
}

?>