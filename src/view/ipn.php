<?php
// Adresse e-mail du vendeur
$email_vendeur = "l.bassi@hotmail.fr";

// Envoi des infos a Paypal
$req = "cmd=_notify-validate";
foreach ($_POST as $key => $value) {
    $value = urlencode(stripslashes($value));
    $req.= "&$key=$value";
}
$fp = curl_init('https://www.sandbox.paypal.com/cgi-bin/webscr');
curl_setopt($fp, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($fp, CURLOPT_POST, 1);
curl_setopt($fp, CURLOPT_RETURNTRANSFER,1);
curl_setopt($fp, CURLOPT_POSTFIELDS, $req);
curl_setopt($fp, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($fp, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($fp, CURLOPT_FORBID_REUSE, 1);
curl_setopt($fp, CURLOPT_HTTPHEADER, array('Connection: Close'));
if( !($res = curl_exec($fp)) ) {
    curl_close($fp);
    exit;
}
curl_close($fp);
// Le paiement est validé
if (strcmp(trim($res), "VERIFIED") == 0) {
    // Vérifier que le statut du paiement est complet
    if ($_POST['payment_status'] == "Completed") {
        // Vérification de l'e-mail du vendeur
        if ($email_vendeur == $_POST['receiver_email']) {
            // Récupération du montant de la commande dans la BDD
            $req = "SELECT montant_ttc FROM commandes WHERE id=".$_POST['custom'];
            $rep = mysqli_query($db, $req);
            $row = mysqli_fetch_array($rep);
            // Vérification de la concordance du montant
            if ($_POST['mc_gross'] == $row['montant_ttc']) {
                // Requête pour la mise à jour du statut de la commande => Statut à 1
                // Envoi du mail de récapitulatif de la commande à l'acheteur et au vendeur
            } else {
                // Envoi d'une alerte par mail (voir modèle en bas de cette section)
                // Envoi d'un mail au client pour lui dire qu'on l'a gaulé ? ^^
            }
        } else {
            // Envoi d'une alerte par mail (voir modèle en bas de cette section)
            // Envoi d'un mail au client pour lui dire qu'on l'a gaulé ? ^^
        }    
    } else {
        // Envoi d'une alerte par mail (voir modèle en bas de cette section)
    }
} else {
    // Le paiement est invalide, envoi d'un mail au vendeur
    $from = "From: test-vendeur@monsite.com";
    $to = "test-vendeur@monsite.com";
    $sujet = "Paiement invalide";
    $body = $req;
    foreach ($_POST as $key => $value) {
        $text.= $key . " = " .$value ."nn";
    }
mail($to, $sujet, $text . "nn" . $body, $from);}