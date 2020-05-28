<?php

/**
 *Bassi Luca
 */
ob_start();
?>

    <div class="bodyBackground">
        <div style="text-align: center"><br><br><br>
            <h1 style=" color: #499249">Votre Panier </h1>
            <br>
        </div>
    </div>

    <table class="table">


        <?php
        $myIndex = 0;
        if (isset($_SESSION['wine'])) {
            foreach ($_SESSION['wine'] as $wesh) {

                $qtySel = $_SESSION['wine'][$myIndex]['qty'];
                $totalQty = $_SESSION['wine'][$myIndex]['totalQty'];
                $marque = $_SESSION['wine'][$myIndex]['marque'];
                $modele = $_SESSION['wine'][$myIndex]['modele'];
                $taille = $_SESSION['wine'][$myIndex]['taille'];
                $photo = $_SESSION['wine'][$myIndex]['photo'];
                $id = $_SESSION['wine'][$myIndex]['id'];


                if (isset($_SESSION['wine'][$myIndex])) {
                    ?>

                    <table class="table">
                        <tr aria-colspan="18"
                        ">
                        <tr class="">
                        <tr>
                            <td>
                                <h3>Marque </h3>
                                <h4><?= $marque ?></h4>
                            </td>
                            <td>
                                <h3>Modèle </h3>
                                <h4><?= $modele ?></h4>
                            </td>
                            <td>
                                <h3>Taille </h3>
                                <h4><?= $taille ?></h4>
                            </td>
                            <td>
                                <!--  <h3>quantité </h3>-->
                            <td colspan="5">
                                <img style='alignment=right;max-width: 150px  ' src=<?= $photo ?>/>
                            </td>
                        </tr>
                    </table>
                    <td>
                        <!--  <h3>quantité </h3>-->
                    <td colspan="">
                        <label>
                            <input class="input-small" type="number" min="1" value="<?= $qtySel ?>">
                        </label>
                        <button class="btn btn-medium">Changer quantité</button>
                        <br>
                        <br>
                        <br>

                        <form method="post" action=" index.php?action=userDelwine">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <button class="btn btn-medium" type="submit" style="color: red">Supprimer</button>
                        </form>
                        <br>
                    </td>

                    <?php

                }
                $myIndex++;
            }
        }
        ?>
        <?php if (isset($_SESSION["wine"])): ?>
            <tr>
                <td>
                    <div class="btn-group">
                        <form method="post" action="index.php?action=delPanier">
                            <button class="btn" type="submit" style="color: red">Vider le Panier</button>
                            <!--         <input type="hidden" name="id" value="<? /*= $id */ ?>">-->
                            <label class="input-medium">
                        </form>
                    </div>
                </td>

                <td>
                    <div class="btn-group">
                        <form method="post" action="index.php?action=command">
                            <label class="input-medium">

                                <button class="btn" type="submit">Commander</button>

                        </form>
                    </div>
                </td>
            </tr>
        <?php endif; ?>
    </table>


<?php
$content = ob_get_clean();
require "gabarit.php";

?>