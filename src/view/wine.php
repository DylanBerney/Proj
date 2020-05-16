<?php
?>

<?php

ob_start();
$title = "Rent A Snow - Home";
?>


    <div class="site-section mt-5">
        <div class="container">

            <div class="row mb-5">
                <div class="col-12 section-title text-center mb-5">
                    <h2 class="d-block">Your Choice</h2>
                </div>
            </div>


            <div class="row">

                <?php
                if (isset($aWine)) {
                    foreach ($aWine as $wines): ?>
                        <div class="site-section mt-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="owl-carousel hero-slide owl-style">
                                            <img src="images/wine_1.png" alt="Image" class="img-fluid">
                                            <img src="images/wine_2.png" alt="Image" class="img-fluid">
                                            <img src="images/wine_3.png" alt="Image" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 ml-auto">
                                        <h2 class="text-primary">Wine Details</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non eos inventore aspernatur voluptatibus ratione odit molestias molestiae, illum et impedit veniam modi sunt quas nam mollitia earum perferendis, dolorem. Magni.</p>

                                        <div class="mb-5">
                                            <div class="input-group mb-3" style="max-width: 200px;">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                                </div>
                                                <input type="text" class="form-control text-center border mr-0" value="1" placeholder=""
                                                       aria-label="Example text with button addon" aria-describedby="button-addon1">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                                                </div>
                                            </div>

                                        </div>
                                        <p><a href="cart.html" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To Cart</a></p>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-5 col-md-6">
                            <div class="wine_v_1 text-center pb-4">
                                <a href="shop-single.html" class="thumbnail d-block mb-4"><img
                                            src="<?= $wines["photo"] ?>" alt="Image" class="img-fluid"></a>
                                <div>
                                    <h3 class="heading mb-1"><a href="#"><?= $wines["brand"] ?></a></h3>
                                    <h5 class="heading mb-2"><a href="#"><?= $wines["model"] ?></a></h5>
                                    <h6 class="heading mb-6"><a href="#">Poucentage d'alcool: <?= $wines["alchoholpercent"]?> %</a></h6>
                                    <span class="price">$<?=$wines["price"]?></span>
                                </div>


                                <div class="wine-actions">


                                    <h3 class="heading-2"><a href="#"></a></h3>
                                    <span class="price d-block"><del>$<?=$wines["oldPrice"]?></del> $<?=$wines["price"]?></span>

                                    <div class="rating">
                                        <?php
                                        $nbStar = $wines['rating'];
                                        if ($nbStar == 0) {
                                            {
                                                ?>
                                                <span class="icon-star-o"></span>
                                                <span class="icon-star-o"></span>
                                                <span class="icon-star-o"></span>
                                                <span class="icon-star-o"></span>
                                                <span class="icon-star-o"></span>
                                                <?php
                                            }
                                        } elseif ($nbStar == 1) {
                                            {
                                                ?>
                                                <span class="icon-star"></span>
                                                <span class="icon-star-o"></span>
                                                <span class="icon-star-o"></span>
                                                <span class="icon-star-o"></span>
                                                <span class="icon-star-o"></span>
                                                <?php
                                            }
                                        } elseif ($nbStar == 2) {
                                            {
                                                ?>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star-o"></span>
                                                <span class="icon-star-o"></span>
                                                <span class="icon-star-o"></span>
                                                <?php
                                            }
                                        } elseif ($nbStar == 3) {
                                            {
                                                ?>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star-o"></span>
                                                <span class="icon-star-o"></span>
                                                <?php
                                            }
                                        } elseif ($nbStar == 4) {
                                            {
                                                ?>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star-o"></span>
                                                <?php
                                            }

                                        } elseif ($nbStar == 5) {
                                            {
                                                ?>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <?php
                                            }
                                        } else {
                                            {
                                                $noValue = 'Notation Inconnue';
                                            }
                                        }
                                        ?>

                                    </div>

                                    <a href="index.php?action=anArticle&id=<?=$wines['code']?>" class="btn add"><span class="icon-shopping-bag mr-3"></span> Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                }
                ?>
            </div>
        </div>
    </div>

<?php
$content = ob_get_clean();
require "gabarit.php";

