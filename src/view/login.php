<?php


ob_start();
?>
<br>
    <form  align="center" class="form" method="POST" action="index.php?action=login">
        <br>
        <h1> Login </h1>
        <b>Email :</b><br>
        <input  type="text" name="inputUserEmailAddress" value="" placeholder="Adresse Email" required>
        <br>
        <b>Mot de Passe:</b><br>
        <input type="password" name="inputUserPsw" value="" placeholder="Mot de passe" required>
        <br>
        <input type="submit" value="login"> <input type="button" value="Reset"> Forgot <a href="">password</a> ?
    </form>




<?php
$content = ob_get_clean();
require 'gabarit.php';
