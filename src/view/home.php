<?php

ob_start();
$title = "Rent A Snow - Home";
?>

    <div class="owl-carousel hero-slide owl-style">
        <div class="intro-section container" style="background-image: url('images/hero_1.jpg');">
            <div class="row justify-content-center text-center align-items-center">
                <div class="col-md-8">
                    <span class="sub-title">Royal Wine</span>
                    <h1>Grape Wine</h1>
                </div>
            </div>
        </div>

        <div class="intro-section container" style="background-image: url('images/hero_2.jpg');">
            <div class="row justify-content-center text-center align-items-center">
                <div class="col-md-8">
                    <span class="sub-title">Welcome</span>
                    <h1>Wines For Everyone</h1>
                </div>
            </div>
        </div>

    </div>
    <div class="site-section bg-light">
        <div class="container">
            <div class="owl-carousel owl-slide-3 owl-slide">

                <blockquote class="testimony">
                    <img src="images/person_1.jpg" alt="Image">
                    <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sapiente beatae, nemo quasi quo neque consequatur rem porro reprehenderit, a dignissimos unde ut enim fugiat deleniti quae placeat in cumque?&rdquo;</p>
                    <p class="small text-primary">&mdash; Collin Miller</p>
                </blockquote>
                <blockquote class="testimony">
                    <img src="images/person_2.jpg" alt="Image">
                    <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sapiente beatae, nemo quasi quo neque consequatur rem porro reprehenderit, a dignissimos unde ut enim fugiat deleniti quae placeat in cumque?&rdquo;</p>
                    <p class="small text-primary">&mdash; Harley Perkins</p>
                </blockquote>
                <blockquote class="testimony">
                    <img src="images/person_3.jpg" alt="Image">
                    <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sapiente beatae, nemo quasi quo neque consequatur rem porro reprehenderit, a dignissimos unde ut enim fugiat deleniti quae placeat in cumque?&rdquo;</p>
                    <p class="small text-primary">&mdash; Levi Morris</p>
                </blockquote>
                <blockquote class="testimony">
                    <img src="images/person_1.jpg" alt="Image">
                    <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sapiente beatae, nemo quasi quo neque consequatur rem porro reprehenderit, a dignissimos unde ut enim fugiat deleniti quae placeat in cumque?&rdquo;</p>
                    <p class="small text-primary">&mdash; Allie Smith</p>
                </blockquote>

            </div>
        </div>
    </div>
<?php
$content = ob_get_clean();
require "gabarit.php";
