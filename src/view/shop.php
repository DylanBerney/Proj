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

                <?php
                if (isset($allWines)) {
                    foreach ($allWines as $wines): ?>


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