<?php

/**
 *Bassi Luca
 */
ob_start();
?>
    <div class="site-section mt-5">
        <div class="container">

            <div class="row mb-5">
                <div class="col-12 section-title text-center mb-5">
                    <h2 class="d-block">Votre Panier</h2>
                </div>
            </div>


            <div class="row">
                <div class="site-section mt-5">
                    <div class="container">
                        <div class="row">


                            <?php
                            $myIndex = 0;
                            if (isset($_SESSION['wine'])) {
                            $totalPrice = 0;
                            foreach ($_SESSION['wine'] as $wesh) {


                            $qtySel = $_SESSION['wine'][$myIndex]['qty'];
                            $totalQty = $_SESSION['wine'][$myIndex]['totalQty'];
                            $marque = $_SESSION['wine'][$myIndex]['marque'];
                            $modele = $_SESSION['wine'][$myIndex]['modele'];
                            $price = $_SESSION['wine'][$myIndex]['price'];
                            $photo = $_SESSION['wine'][$myIndex]['photo'];
                            $id = $_SESSION['wine'][$myIndex]['id'];
                            $totalPrice = $totalPrice + $_SESSION['wine'][$myIndex]['price'];

                            if (isset($_SESSION['wine'][$myIndex])) { ?>

                            <table class="table">
                                <tr>
                                    <td>
                                        <h3>Marque </h3>
                                        <h4><?= $marque ?></h4>
                                    </td>
                                    <td>
                                        <h3>Modèle </h3>
                                        <h4><?= $modele ?></h4>
                                    </td>

                                    <td colspan="5">
                                        <img style='alignment=right;max-width:150px' src='<?= $photo ?>' alt="Image"/>
                                    </td>
                                    <td>
                                        <h3>Prix</h3>
                                        <h4><?= $price ?></h4>
                                    </td>

                                </tr>
                            </table>
                        </div>
                        <div>
                            <table>
                                <tr>
                                    <td>
                                        <label>
                                            <input class="input-small" type="number" min="1" value="<?= $qtySel ?>">
                                        </label>
                                        <button class="btn btn-medium">Changer quantité</button>
                                        <br>
                                        <br>
                                        <br>

                                        <form method="post" action=" index.php?action=userDelwine">
                                            <input type="hidden" name="id" value="<?= $id ?>">
                                            <button class="btn btn-medium" type="submit" style="color: red">Supprimer
                                            </button>
                                        </form>
                                        <br>
                                    </td>
                            </table>
                            <?php }
                            $myIndex++;
                            }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <?php if (isset($totalPrice)): ?>
            <h5 align="center">Total Price</h5>
            <h6 align="center"><?= $totalPrice ?></h6>
        <?php
        endif;
        ?>
    </div>
    <div class="bodyBackground">
        <div style="text-align: center">
            <?php if (isset($_SESSION["wine"])): ?>
                <div class="btn-group">
                    <form method="post" action="index.php?action=delPanier">
                        <button class="btn" type="submit" style="color: red">Vider le Panier</button>
                        <!--         <input type="hidden" name="id" value="<? /*= $id */ ?>">-->
                        <label class="input-medium">
                        </label>
                    </form>
                </div>
                <div class="btn-group">
                    <form method="post" action="index.php?action=checkout">
                        <label class="input-medium">
                            <button class="btn" type="submit">Commander</button>
                        </label>
                    </form>
                </div>
            <?php endif; ?>
            <br>
        </div>
    </div>


    <br>
    <section class="inner">


        <script>
            function showStuff(id, text, btn) {
                if (    document.getElementById(text1).style.display === 'none';) {
                    document.getElementById(id).style.display = 'block';
                } else {
                    document.getElementById(text1).style.display = 'none';
                }

// hide the lorem ipsum text

// hide the link
                btn.style.display = 'none';
            }
        </script>


        <td class="post">
            <button onclick="showStuff('answer1', 'text1', this); return false;"
                    class="btn btn-primary btn-sm rounded px-4"
                    type="button">Apply
            </button>

            <span id="answer1">
<textarea rows="10" cols="115"></textarea>
</span>

            <button  onclick="myFunction('answer1', 'text1', this); return false;">Try it</button>

            <span id="text1">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</span>
        </td>


        <div id="myDIV" style="display: none">
            This is my DIV element.
        </div>

        <script>
            function myFunction() {
                var x = document.getElementById("myDIV");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
        </script>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>