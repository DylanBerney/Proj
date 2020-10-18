<?php

ob_start();
$title = "Rent A Snow - Home";
?>


    <br>
    <br>
    <br>

    <div class="owl-carousel owl-slide-3 owl-slide">

        <blockquote class="testimony">
            <img src="view\content\images\persons\dylan.png" alt="Image">
            <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sapiente beatae, nemo quasi quo neque consequatur rem porro reprehenderit, a dignissimos unde ut enim fugiat deleniti quae placeat in cumque?&rdquo;</p>
            <p class="small text-primary">&mdash; Dylan Berney</p>
        </blockquote>
        <blockquote class="testimony">
            <img src="view\content\images\persons\valentin.png" alt="Image">
            <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sapiente beatae, nemo quasi quo neque consequatur rem porro reprehenderit, a dignissimos unde ut enim fugiat deleniti quae placeat in cumque?&rdquo;</p>
            <p class="small text-primary">&mdash; Valentin Zing</p>
        </blockquote>
        <blockquote class="testimony">
            <img src="view\content\images\persons\jan.png" alt="Image">
            <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sapiente beatae, nemo quasi quo neque consequatur rem porro reprehenderit, a dignissimos unde ut enim fugiat deleniti quae placeat in cumque?&rdquo;</p>
            <p class="small text-primary">&mdash; Jan Blatter</p>
        </blockquote>
        <blockquote class="testimony">
            <img src="view\content\images\persons\luca.png" alt="Image">
            <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero sapiente beatae, nemo quasi quo neque consequatur rem porro reprehenderit, a dignissimos unde ut enim fugiat deleniti quae placeat in cumque?&rdquo;</p>
            <p class="small text-primary">&mdash; Luca Bassi</p>
        </blockquote>

    </div>
    <br>
    <br>
    <br>

<?php
$content = ob_get_clean();
require "gabarit.php";
