<?php

session_start();
$a = 0;
foreach ($_POST['arguments'] as $v) {
    $a += (int) $v;
}


if ($a == $_SESSION['cart']['total']) {
    $msg = 'Verify your cart is updated !!' ;
} else {
    $msg='';
}
echo $msg;
?>