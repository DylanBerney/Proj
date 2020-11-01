<html>
    <title>Paypal Payment Gateway Integration in PHP</title>
    <head>
        <style>
            body {
                font-family: Arial;
                line-height: 30px;
                color: #333;
            }

            #payment-box {
                padding: 40px;
                margin: 20px;
                border: #E4E4E4 1px solid;
                display: inline-block;
                text-align: center;
                border-radius: 3px;
            }

            #pay_now {
                padding: 10px 30px;
                background: #09f;
                border: #038fec 1px solid;
                border-radius: 3px;
                color: #FFF;
                width: 100%;
                cursor: pointer;
            }

            .txt-title {
                margin: 25px 0px 0px 0px;
                color: #4e4e4e;
            }

            .txt-price {
                margin-bottom: 20px;
                color: #08926c;
                font-size: 1.1em;
            }
        </style>
    </head>
    <body>
        <div id="payment-box">
            <img src="images/camera.jpg" />
            <h4 class="txt-title">A6900 MirrorLess Camera</h4>
            <div class="txt-price">$0.05</div>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type='hidden' name='business' value='l.bassi@hotmail.fr'> 
                <input type='hidden'name='item_name' value='Camera'> 
                <input type='hidden'name='item_number' value='CAM#N1'> 
                <input type='hidden'name='amount' value='0.05'> 
                <input type='hidden'name='no_shipping' value='1'> 
                <input type='hidden'name='currency_code' value='USD'> 
                <input type='hidden'name='notify_url'value='https://loucmyblog.ch/paypal-payment-gateway-integration-in-php/notify.php'>
                <input type='hidden' name='cancel_return'value='https://loucmyblog.ch/paypal-payment-gateway-integration-in-php/cancel.php'>
                <input type='hidden' name='return'value='https://loucmyblog.ch/paypal-payment-gateway-integration-in-php/return.php'>
                <input type="hidden" name="cmd" value="_xclick"> 
                <input type="submit" name="pay_now" id="pay_now" Value="Pay Now">
            </form>
        </div>
    </body>
</html>