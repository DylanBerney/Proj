<?php
/**
 * Bassi Luca
 */
ob_start();
?>
<div class="site-section  pb-0">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-7 section-title text-center mb-5">
                <h2 class="d-block">Cart</h2>
            </div>
        </div>
        <div class="row mb-5">
            <form class="col-md-12" method="post">
                <div class="site-blocks-table">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">Image</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-total">Total</th>
                                <th class="product-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>

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
                                    $aWineSubTotal = $_SESSION['wine'][$myIndex]['aWineSubTotal'];
                                    $totalPrice = $_SESSION['cart']['total'];

                                    if (isset($_SESSION['wine'][$myIndex])) {
                                        ?>

                                        <tr>
                                            <td class="product-thumbnail">
                                                <img src="<?= $photo ?>" alt="Image" class="img-fluid">
                                            </td>
                                            <td class="product-name">
                                                <h2 class="h5 cart-product-title text-black"><?= $marque ?><br> <?= $modele ?></h2>
                                            </td>
                                            <td><?= $price ?> .-</td>
                                            <td>
                                                <div class="input-group mb-3" style="max-width: 120px;">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                                    </div>
                                                    <input type="text" class="form-control text-center border mr-0" value="<?= $qtySel ?>" placeholder=""
                                                           aria-label="Example text with button addon" aria-describedby="button-addon1">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                                                    </div>
                                                </div>

                                            </td>
                                            <td><?= $aWineSubTotal ?></td>
                                            <td><a href="#" class="btn btn-primary height-auto btn-sm">X</a></td>
                                        </tr>



                                        <?php
                                    }
                                    $myIndex++;
                                }
                            }
                            ?>
                            <tr>



                            </tr>
                        </tbody>
                        <form method="post" action=" index.php?action=userDelwine">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <button class="btn btn-medium" type="submit" style="color: red">Supprimer
                            </button>
                        </form>
                    </table>
                </div>
            </form>
        </div>

    </div>
</div>

</div>
<div>
    <?php if (isset($totalPrice)): ?>
        <h5 align="center">Total Price</h5>
        <h3 align="center"><?= $totalPrice ?> .-</h3>
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
</span>




><div id="exampleForm">
    <input name="arg1" /> + <input name="arg2"> = <div id="answer"></div>
    <br />
    <button onClick="callAjaxAddition()">Click Me to Add</button> <!-- maybe it should be input type=button ?!?  -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
            function callAjaxAddition() {
                arguments0 = {
                    arg1: $("#exampleForm input[name='arg1']").val(),
                    arg2: $("#exampleForm input[name='arg2']").val()
                };
                $.ajax({
                    type: "POST",
                    url: "view/processAjax.php",
                    data: {arguments: arguments0},
                    success: function (data) {
                        $("#answer").html('<ul><li>' + data + '</li></ul>');

                    }
                });
                return false;
            }
</script>
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>