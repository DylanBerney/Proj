<?php

ob_start();
$title = "Rent A Snow - Home";
?>


    <div class="site-section mt-5">
        <div class="container">

            <div class="row mb-5">
                <div class="col-12 section-title text-center mb-5">
                    <h2 class="d-block">Our Products</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, perspiciatis!</p>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4 mb-5 col-md-6">


                    <div><?php
                        if (isset($allWines)) {
                            foreach ($allWines as $wines): ?>
                                <div class="col-lg-4 mb-5 col-md-6">
                                    <div class="wine_v_1 text-center pb-4">
                                        <a href="shop-single.html" class="thumbnail d-block mb-4"><img
                                                    src="<?= $wines["photo"] ?>" alt="Image" class="img-fluid"></a>
                                        <div>
                                            <h3 class="heading mb-1"><a href="#"><?= $wines["brand"] ?></a></h3>
                                            <h5 class="heading mb-2"><a href="#"><?= $wines["model"] ?></a></h5>
                                            <h5 class="heading mb-3"><a href="#"><?= $wines["model"] ?></a></h5>
                                            <span class="price">$629.00</span>
                                        </div>


                                        <div class="wine-actions">


                                            <h3 class="heading-2"><a href="#"></a></h3>
                                            <span class="price d-block"><del>$900.00</del> $629.00</span>

                                            <div class="rating">
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star-o"></span>
                                            </div>

                                            <a href="cart.html" class="btn add"><span
                                                        class="icon-shopping-bag mr-3"></span> Add to Cart</a>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
$content = ob_get_clean();
require "gabarit.php";
