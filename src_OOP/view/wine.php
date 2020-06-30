<?php
ob_start();
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
                foreach ($aWine

                         as $wines): ?>
                    <div class="site-section mt-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="wine_v_1 text-center pb-4">
                                            <a href="shop-single.html" class="thumbnail d-block mb-4"><img
                                                        src="<?= $wines["photo"] ?>" alt="Image" class="img-fluid"></a>
                                            <div>
                                                <h3 class="heading mb-1"><a href="#"><?= $wines["brand"] ?></a></h3>
                                                <h5 class="heading mb-2"><a href="#"><?= $wines["model"] ?></a></h5>
                                                <h6 class="heading mb-6"><a href="#">Poucentage
                                                        d'alcool: <?= $wines["alchoholpercent"] ?> %</a></h6>
                                                <span class="price">$<?= $wines["price"] ?></span>
                                            </div>


                                            <div class="wine-actions">


                                                <h3 class="heading-2"><a href="#"></a></h3>
                                                <span class="price d-block"><del>$<?= $wines["oldPrice"] ?></del> $<?= $wines["price"] ?></span>

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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php // TODO: detail article ?>
                                <div class="col-lg-5 ml-auto">
                                    <h2 class="text-primary">Wine Details</h2>

                                    <div class="mb-5">
                                        <div class="input-group mb-3" style="max-width: 200px;">
                                            <div class="input-group-prepend">
                                                <form method="post" action="index.php?action=addPanier">
                                                    <input type="hidden" name="id" value="<?= $wines["code"] ?>">
                                                    <div class="form-group">
                                                        <label for="c_ship_different_address" class="text-black"
                                                               data-toggle="collapse" href="#ship_different_address"
                                                               role="button" aria-expanded="false"
                                                               aria-controls="ship_different_address">
                                                            <button class="btn btn-primary btn-sm rounded px-4"
                                                                    type="button" id="c_ship_different_address">show description
                                                            </button>
                                                        </label>
                                                        <div class="collapse" id="ship_different_address">
                                                            <div>
                                                                <p><?= $wines["description"] ?></p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <label class="input-medium">
                                                        <input class="form-control text-center border mr-0"
                                                               type="number" min="1"
                                                               placeholder="Quantité" value="1" name="qtySelect"
                                                               max="<?= $wines["qtyAvailable"] ?>">
                                                        <br>
                                                        <button class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary"
                                                                type="submit">Ajouter au panier
                                                        </button>
                                                    </label>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;
            } ?>
        </div>
    </div>

<?php
$content = ob_get_clean();
require "gabarit.php";

