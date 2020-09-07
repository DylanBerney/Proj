<?php
ob_start();
if (!isset($_SESSION)) {
    session_start();
}
header('submit.php');
$value = $_SESSION;

echo json_encode($value);
$_POST['yes'] = "yes";
?>


<div class="site-section  pb-0">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-7 section-title text-center mb-5">
                <h2 class="d-block">Cart</h2>
            </div>
        </div>
        <div class="row mb-5"><form id="myForm" method="post" class="col-md-12">

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
                                    if (isset($_POST['qty'])) {
                                        $aWineSubTotal = (int) $price * (int) $_POST['qty'];
                                    } else {
                                        $aWineSubTotal = $_SESSION['wine'][$myIndex]['aWineSubTotal'];
                                    }
                                    $photo = $_SESSION['wine'][$myIndex]['photo'];
                                    $id = $_SESSION['wine'][$myIndex]['id'];
                                    $totalPrice = $_SESSION['cart']['total'];

                                    if (isset($_SESSION['wine'][$myIndex])) {
                                        ?>

                                        <tr>
                                            <td class="product-thumbnail">
                                                <img src="<?= $photo ?>" alt="Image" class="img-fluid">
                                            </td>
                                            <td class="product-name">
                                                <h2 class="h5 cart-product-title text-black"><?= $marque ?><br> <?= $modele ?></h2>
                                            </td>   <input name="price" value="<?= $price ?>">
                                    <td>CHF </td>
                                    <td>
                                        <div class="input-group mb-3" style="max-width: 120px;">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                            </div>
                                            <input type="text" class="form-control text-center border mr-0" name="qty"  value="<?= $qtySel ?>" placeholder=""
                                                   aria-label="Example text with button addon" aria-describedby="button-addon1">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                                            </div>
                                        </div>

                                    </td>
                                    <td><?= $aWineSubTotal ?></td>t-------
                                    <form method="post" action=" index.php?action=userDelwine">
                                     <!--   <input type="hidden" name="id" value="">-->
                                        <td><button type="submit" class="btn btn-primary height-auto btn-sm">X</a></td>
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


                            <button type="submit">Mettre a jour</button>
                        </form>
                    </table>
                </div>
            </form>
        </div>

    </div>
</div>

<?php
include 'view/phpProcess.php';
echo $aWineSubTotal;
?>