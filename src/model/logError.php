<?php
/**
 * @file      logError.php
 * @brief     This logger is designed to insert logs messages in a .log file in view folder (unprotected !) )
 * @author    Updated by Luca.Bassi
 * @version   11-NOV-2020
 */

/**
 * @brief This function is designed to write the message catched by exeption throws by the code in a file 
 * @param type $msgErreurForUsers
 * @param type $ex
 */
function logError($msgErreurForUsers, $ex)
{
//Something to write to txt log
    if (isset($ex)) {
        $php_errormsg = $ex->getMessage();
        $php_errorFile = $ex->getFile();
        $php_errorLine = $ex->getLine();

        date_default_timezone_set('Europe/Zurich');
        $log =
            "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . PHP_EOL .
            // "Attempt: ".($result[0]['success']=='1'?'Success':'Failed').PHP_EOL.
            "Exception Message date: " . date("F j, Y, g:i a") . PHP_EOL .
            "Exception Message Content displayed at user: " . $msgErreurForUsers . PHP_EOL .
            "Exception Message Content: " . $php_errormsg . PHP_EOL .
            "Exception Message file : " . $php_errorFile . PHP_EOL .
            "Exception Message line: " . $php_errorLine . PHP_EOL .
            "-------------------------" . PHP_EOL;
//Save string to log, use FILE_APPEND to append.
        file_put_contents('./log_exceptions.log', $log, FILE_APPEND);
    }
}

