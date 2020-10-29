<?php

session_start();
$a = 0;
foreach ($_POST['arguments'] as $v) {
    $a += (int) $v;
}

    $msg = '<h6 style=color:red>Verify your total is updated !!</h1>' ;
/*
if ($a == $_SESSION['cart']['total']) {
    $msg = '<h1 style=color:red>Verify your cart is updated !!</h1>' ;
} else {
    $msg='';
}
*/
echo $msg;
?>