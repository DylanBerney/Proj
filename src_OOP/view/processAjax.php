<?php


$a=0;
foreach($_POST['arguments'] as $v) $a+= (int) $v;
echo $a;

?>