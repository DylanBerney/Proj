<?php

session_start();
$a = 0;
foreach ($_POST['arguments'] as $v) {
    $a += (int) $v;
}


if ($a == $_SESSION['cart']['total']) {
    $msg = 'yes' ;
} else {
    $msg=' ';
}
echo $msg;
?>