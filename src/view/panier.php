<?php
/**
 * Bassi Luca
 */
ob_start();
?>

<?php if (isset($_SESSION['wine'])) { ?>
    <div class="site-section  pb-0">

        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-7 section-title text-center mb-5">
                    <h2 class="d-block">Cart</h2>
                </div>              
            </div>

            <div id="ajaxDiv">
                <div class="row mb-5">

                    <form class="col-md-12" method="post" action="index.php?action=cartAction">
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
                                                <?php $pos = $myIndex; ?>
                                                <tr>
                                                    <td class="product-thumbnail">

                                                        <a href="<?= $photo ?>" class="thumbnail d-block mb-4">
                                                            <?php if ($photo != null) { ?>
                                                                <img src="<?= $photo ?>" href="images/<?= $photo ?>" alt="Image" class="img-fluid">
                                                            </a>
                                                        <?php } else { ?>
                                                            <a href="images/image-unavailable.jpg">
                                                                <img src="images/image-unavailable.jpg" href="images/image-unavailable.jpg" alt="Image" class="img-fluid">
                                                            </a>                                               
                                                        <?php } ?>
                                                    </td>
                                                    <td class="product-name">
                                                        <h2 class="h5 cart-product-title text-black"><?= $marque ?><br> <?= $modele ?></h2>
                                                    </td>
                                                    <td><?= $price ?> $</td>
                                                    
                                                    
                                                    
                                                   <td class="product-thumbnail">
                                                        <input type="hidden" name="buttonPlus" value="<?= $pos ?>">
                                                        <div class="input-group mb-3" style="max-width: 140px;margin-left: 5%;margin-right: 10%">
                                                              
                                                            <div class="input-group-prepend">
                                                                <input type="button" name="buttonMinus" value="&minus;" onClick="callAjaxSubstraction_<?= $pos ?>()" class="btn btn-outline-primary js-btn-minus" type="button"></button>
                                                            </div>
                                                            
                                                            <input type="hidden" name="wineNewQtySel" value="<?= $qtySel ?>" value="<?= $qtySel ?>">

                                                            <input  name="wineNewQtySel_<?= $id ?>" value="<?= $qtySel ?>"  type="number" min="1" max="<?= $totalQty ?>" class="form-control text-center border mr-0" value="<?= $qtySel ?>" placeholder=""
                                                                    aria-label="Example text with button addon" aria-describedby="button-addon1">

                                                            <input type="hidden" name="buttonPlus" value="<?= $pos ?>">
                                                            <div class="input-group-append">
                                                                <input type="button" value="&plus;" onClick="callAjaxAddition_<?= $pos ?>()" class="btn btn-outline-primary js-btn-plus" type="button"></button>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td><input type="hidden" name="arg" disabled="true" value="<?= $aWineSubTotal ?>">
<?= $aWineSubTotal ?> $
                                                        

                                                    </td>   
                                                    <td>
                                                        <button  class="btn btn-primary height-auto btn-sm" type='submit' name='delete' value='<?= $id ?>'>Delete</button>
                                                    </td>
                                                </tr>
                                            <input type="hidden" name="wineId_<?= $id ?>" value="<?= $id ?>">
                                            <?php
                                        }
                                        $myIndex++;
                                    }
                                }
                                ?>
                                <tr>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                </div>
            </div>
        </div>

        <div>
            <div class="site-section pt-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row mb-5">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <button type="submit" name="updateCart" class="btn btn-primary btn-md btn-block">Update Cart</button>
                                </div>
                                <div class="col-md-6">
                                    <a>
                                        <button class="btn btn-outline-primary btn-md btn-block" type=button" name="continueShopping" >Continue Shopping</button>
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label class="text-black h4" for="coupon">Coupon</label>
                                    <p>Enter your coupon code if you have one.</p>
                                </div>
                                <div class="col-md-8 mb-3 mb-md-0">
                                    <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-primary btn-md px-4">Apply Coupon</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pl-5">
                            <div class="row justify-content-end">
                                <div class="col-md-7">
                                    <div class="row">

                                        <div class="col-md-12 text-right border-bottom mb-5">
                                            <div id="answer"></div>
                                            <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-6">
                                            <span class="text-black">Total</span>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <strong class="text-black"><?= $totalPrice ?> $</strong>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="btn btn-primary btn-lg btn-block" type='submit' name='button'value="checkout"">Proceed To
                                                Checkout</button>
                                        </div>
                                    </div>
                                    </form>

                                    <br><br><br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="payment-box">
                                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                                   <!-- at the place of "#" put your devlopper Paypal account's mail address  -->
                                                    <input type='hidden' name='business' value='#'> 
                                                    <input type='hidden'name='item_name' value='Camera'> 
                                                    <input type='hidden'name='item_number' value='CAM#N1'> 
                                                    <input type='hidden'name='item_name2' value='Camera2'> 
                                                    <input type='hidden'name='item_number2' value='CAM#N2'> 
                                                    <input type='hidden'name='amount' value='<?= $totalPrice ?>'> 
                                                    <input type='hidden'name='no_shipping' value='1'> 
                                                    <input type='hidden'name='currency_code' value='USD'> 
                                                    <input type='hidden'name='notify_url'value='http://3.23.78.107'>
                                                    <input type='hidden' name='cancel_return'value='http://3.23.78.107/index.php?action=goPanier'>
                                                    <input type='hidden' name='return'value='http://3.23.78.107/index.php?action=orderReturn'>
                                                    <input type="hidden" name="cmd" value="_xclick"> 
                                                    <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif"> 
                                                </form>
                                            </div>
                                        </div>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">
    <?php
    $count = 0;
    foreach ($_SESSION['wine'] as $wine) {
        ?>
                                                                        function callAjaxAddition_<?= $count ?>() {
                                                                            arguments0 = {

        <?php
        $arg = 'arg';
        $qty = 'wineNewQtySel';

        $buttonPlus = 'buttonPlus';
        echo $arg . ": $(`#ajaxDiv input[name='" . $arg . "']`).val(),";
        echo $qty . ": $(`#ajaxDiv input[name='" . $qty . "']`).val(),";
        echo $buttonPlus . ": $(`#ajaxDiv input[name='" . $buttonPlus . "']`).val(),";
        ?>
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
        <?php
        $count++;
    }
    ?>


<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

    <?php
    $count = 0;
    foreach ($_SESSION['wine'] as $wine) {
        ?>
                                                                        function callAjaxSubstraction_<?= $count ?>() {
                                                                            arguments0 = {

        <?php
        $arg = 'arg';
        $qty = 'wineNewQtySel';

        $buttonPlus = 'buttonMinus';
        echo $arg . ": $(`#ajaxDiv input[name='" . $arg . "']`).val(),";
        echo $qty . ": $(`#ajaxDiv input[name='" . $qty . "']`).val(),";
        echo $buttonPlus . ": $(`#ajaxDiv input[name='" . $buttonPlus . "']`).val(),";
        ?>
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
        <?php
        $count++;
    }
    ?>
    </script>


 <!--    <button onClick="callAjaxAddition()">Click Me to Add</button> maybe it should be input type=button ?!?  -->
    </div>
    <?php if (isset($_SESSION["wine"])) { ?>
        <div class="bodyBackground">
            <div style="text-align: center">
                <div class="btn-group">
                    <form method="post" action="index.php?action=cartAction">
                        <button class="btn" type="submit" name="delPanier" style="color: red">Vider le Panier</button>
                        <!--         <input type="hidden" name="id" value="<? /*= $id */ ?>">-->
                        <label class="input-medium">
                        </label>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>
<?php } else { ?>
    <br><br><br><br><br>
    <div class="site-section  pb-0">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-7 section-title text-center mb-5">
                    <h2 class="d-block"> Your Cart is empty  </h2>
                </div>
            </div>
        </div>
    </div>


<?php } ?>
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>


