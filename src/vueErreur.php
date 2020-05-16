<?php $titre = 'Mon Blog'; ?>

<?php ob_start() ?>
    <br><br><br><br><br>
    <p align="center">Une erreur est survenue : <?= $msgErreur ?></p>

<?php
//Something to write to txt log
$php_errormsg = $e->getMessage();
$log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, g:i a") . PHP_EOL .
    // "Attempt: ".($result[0]['success']=='1'?'Success':'Failed').PHP_EOL.
    "User: " . $php_errormsg . PHP_EOL .
    "-------------------------" . PHP_EOL;
//Save string to log, use FILE_APPEND to append.
file_put_contents('./log_exceptions.log', $log, FILE_APPEND);

?>
    <br><br><br><br>
<?php $content = ob_get_clean(); ?>

<?php require 'view/gabarit.php'; ?>