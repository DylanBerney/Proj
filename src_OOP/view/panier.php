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
            <form class="col-md-12" >
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
                                    $aWineSubTotal = $_SESSION['wine'][$myIndex]['aWineSubTotal'];
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
                                            </td>
                                            <td>CHF <?= $price ?></td>
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
                                    <form method="post" action=" index.php?action=userDelwine">
                                        <input type="hidden" name="id" value="<?= $id ?>">
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


                            </button>
                        </form>
                    </table>
                </div>
            </form>
        </div>

    </div>
</div>






<!-- index.php -->
    <!DOCTYPE html>
    <html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>
    <body>
    <form id="myForm">
        <input type="text" name="fname" id="fname"/>
        <input type="submit" name="click" value="button" />
    </form>
    <script>
    $(document).ready(function(){

         $(function(){
            $("#myForm").submit(function(event){
                event.preventDefault();
                $.ajax({
                    method: 'POST',
                    url: 'submit.php',
                  
                  
                    data : $('#myForm').serialize(),
                    success: function(data){
                        alert(data);
                    },
                    error: function(xhr, desc, err){
                        console.log(err);
                    }
                });
            });
        });
    });
    </script>
    </body>
    </html>
    <?php include 'submit.php';?>

    <?php
  $dataDirectory = "model/data";
  $dataFileName = 'userCart.json';
  $tempsDirPath = 'view/public/data/data_' . session_id() . "/userCart.json";
?>
<div id="myData"></div>

<script>
    fetch("<?= $tempsDirPath ?>")
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
                appendData(data);
            })
            .catch(function (err) {
                console.log('error: ' + err);
            });
    function appendData(data) {
        var mainContainer = document.getElementById("myData");
        var div = document.createElement("div");
         data[0].cart.total= data[0].cart.total + data[0].cart.total;
        div.innerHTML = '<h4> Totale de du Panier </h4>' + data[0].cart.total;
        mainContainer.appendChild(div);
    }
</script>

    
    
    
    
</div>
<div>
    <?php if (isset($totalPrice)): ?>
        <h5 align="center">Total Price</h5>
        <h3 align="center"><?= $totalPrice ?> .-</h3>
        <?php
    endif;
    ?>
</div>
<script>




</script>
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
<?php $yes = json_encode($_SESSION['wine']); ?>






<?php
$content = ob_get_clean();
require 'gabarit.php';
?>