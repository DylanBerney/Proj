<?php
ob_start();
?>
<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title mb-5">
                    <h2>Register</h2>
                </div>
                
                <?php if(isset($registerErrorMessage))
                    echo $registerErrorMessage;?>
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
                            <input type="submit" value="Register" class="btn btn-primary py-3 px-5">
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
