<?php
ob_start();
?>
<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title mb-5">
                    <h2>Contact Us</h2>
                </div>
                <form method="post" action="index.php?action=login">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="eaddress">Email Address</label>
                            <input type="text" id="eaddress" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="tel">Password</label>
                            <input type="password" id="password"name="inputUserPsw" class="form-control form-control-lg">
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
        <br><br><br>
        <div data-aos="fade-up" data-aos-delay="200">
           
         
            <div class="text">
                <h5 class="font-heading-serif"> <a href="index.php?action=register">Not a Member </a>  <i class="icon-help text-primary"></i></h5>
       <div class="icon mr-4 align-self-start">
               
            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require 'gabarit.php';
