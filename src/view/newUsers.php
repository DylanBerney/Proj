<?php


ob_start();
?>
    <br>
    <form  align="center" class="form" method="POST" action="index.php?action=">
        <br>
        <h1> Ajouter un utilisateur </h1>
        <b>Email :</b><br>
        <input  type="text" name="inputUserEmailAddress" value="" placeholder="Adresse Email" required>
        <br>
        <b>Mot de Passe:</b><br>
        <input type="password" name="inputUserPsw" value="" placeholder="Mot de passe" required>
        <br>
        <b>Confirmation du mot de passe:</b><br>
        <input type="password" name="inputUserPswRepeat" value="" placeholder="Confirmation du mot de passe" required>
        <br>
        <input type="submit" value="Créer"> <input type="button" value="Reset">
    </form>
    <span class="psw"><a href="index.php?action=register">Register</a></span>




<?php
$content = ob_get_clean();
require 'gabarit.php';

