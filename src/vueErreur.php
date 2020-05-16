<?php $titre = 'Mon Blog'; ?>

<?php ob_start() ?>
    <br><br><br><br><br>
    <p align="center">Une erreur est survenue : <?= $msgErreurForUsers ?></p>

<?php
//Something to write to txt log
$php_errormsg = $ex->getMessage();
$php_errorFile = $ex->getFile();
$php_errorLine = $ex->getLine();

date_default_timezone_set('Europe/Zurich');
$log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - '  . PHP_EOL .
    // "Attempt: ".($result[0]['success']=='1'?'Success':'Failed').PHP_EOL.

    "Exception Message date: " .  date("F j, Y, g:i a") . PHP_EOL .
    "Exception Message Content: " . $php_errormsg . PHP_EOL .
    "Exception Message file : " . $php_errorFile . PHP_EOL .
    "Exception Message line: " . $php_errorLine . PHP_EOL .

    "-------------------------" . PHP_EOL;
//Save string to log, use FILE_APPEND to append.
file_put_contents('./log_exceptions.log', $log, FILE_APPEND);

?>
    <br><br><br><br>
<?php $content = ob_get_clean(); ?>

<?php require 'view/gabarit.php'; ?>