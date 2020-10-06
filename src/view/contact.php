<?php

ob_start();
$title = "Rent A Snow - Home";
?>

<?php
if(isset($_POST['submit'])){
    $to = $_POST['email']; // this is your Email address
    $from = 'Wines@hotmail.com'; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Email envoyé " . $first_name . ", Nous vous contacterons.";

}
?>




    <div class="site-section bg-light">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="section-title mb-5">
                        <h2>Contact Us</h2>
                    </div>
                    <form method="post">

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="fname">First Name</label>
                                <input type="text" name="first_name" id="fname" class="form-control form-control-lg">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" name="last_name" id="lname" class="form-control form-control-lg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="eaddress">Email Address</label>
                                <input type="text" name="email" id="eaddress" class="form-control form-control-lg">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="tel">Tel. Number</label>
                                <input type="text" name="tel" id="tel" class="form-control form-control-lg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <input type="submit" name="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                            </div>
                        </div>

                    </form>
                </div>

            </div>


        </div>
    </div>

<?php
$content = ob_get_clean();
require "gabarit.php";