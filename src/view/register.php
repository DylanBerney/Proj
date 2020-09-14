<?php
ob_start();
?>
<br>
<form  align="center" class="form" method="POST" action="index.php?action=register">
    <br>
    <h1> Login </h1>
    <b>Email :</b><br>
    <input  type="text" name="inputUserEmailAddress" value="" placeholder="Adresse Email" required>
    <br>
    <b>Mot de Passe:</b><br>
    <input type="password" name="inputUserPsw" value="" placeholder="Mot de passe" required>
    <br>
    <b>Confirmation du mot de passe:</b><br>
    <input type="password" name="inputUserPswRepeat" value="" placeholder="Confirmation du mot de passe" required>
    <br>
    <br>
    <input type="submit" value="register"> <input type="button" value="Reset"> Forgot <a href="">password</a> ?
</form>

<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title mb-5">
                    <h2>Contact Us</h2>
                </div>
                <form method="post" action="index.php?action=register">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="eaddress">Email Address</label>
                            <input type="text"  name="inputUserEmailAddress" id="eaddress" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="tel">Password</label>
                            <input type="password" id="password"name="inputUserPsw" class="form-control form-control-lg">
                        </div>
                    </div>                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="tel">Password</label>
                            <input type="password" id="password"name="inputUserPswRepeat" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
$content = ob_get_clean();
require 'gabarit.php';
