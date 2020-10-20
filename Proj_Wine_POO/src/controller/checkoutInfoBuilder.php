<?php
ob_start();
?>
<table class="table site-block-order-table mb-5">
    <thead>
    <th>Product</th>
    <th>Total</th>
</thead>
<tbody>
    <?php
    if (isset($cart)) {

        $total = $cart['cart']['total'];
    }
    foreach ($cart['wine'] as $wines) {

        $model = $wines['modele'];
        $qty = $wines['qty'];
        $price = $wines['price'];
        
        ?>
    
        <tr> 
            <td>
                <span style="display:block;text-overflow: ellipsis;width: 200px;overflow: hidden; white-space: nowrap;">
                    <?= $model ?>
                </span>
                <strong class="mx-2">x</strong>   <?= $qty ?> </td>
            <td>$<?= $price ?></td>
        </tr>
        <?php
    }
    ?>



    <tr>
        <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
        <td class="text-black">$<?= $total ?></td>
    </tr>
    <tr>
        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
        <td class="text-black font-weight-bold"><strong>$<?= $total ?></strong></td>
    </tr>
</tbody>
</table>
<?php
$cartTable = ob_get_clean();
