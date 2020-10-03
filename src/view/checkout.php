<?php
ob_start();
?>


<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="bg-light rounded p-3">
                    <p class="mb-0">Returning customer? <a href="#" class="d-inline-block">Click here</a> to login
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-5 mb-md-0">
                <h2 class="h3 mb-3 text-black font-heading-serif">Billing Details</h2>
                <div class="p-3 p-lg-5 border">
                    <div class="form-group">
                        <label for="c_country" class="text-black">Country <span class="text-danger">*</span></label>
                        <select id="c_country" class="form-control">
                            <option value="1">Select a country</option>
                            <option value="2">bangladesh</option>
                            <option value="3">Algeria</option>
                            <option value="4">Afghanistan</option>
                            <option value="5">Ghana</option>
                            <option value="6">Albania</option>
                            <option value="7">Bahrain</option>
                            <option value="8">Colombia</option>
                            <option value="9">Dominican Republic</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="c_fname" class="text-black">First Name <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_fname" name="c_fname">
                        </div>
                        <div class="col-md-6">
                            <label for="c_lname" class="text-black">Last Name <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_lname" name="c_lname">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="c_companyname" class="text-black">Company Name </label>
                            <input type="text" class="form-control" id="c_companyname" name="c_companyname">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="c_address" class="text-black">Address <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_address" name="c_address"
                                   placeholder="Street address">
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control"
                               placeholder="Apartment, suite, unit etc. (optional)">
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="c_state_country" class="text-black">State / Country <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                        </div>
                        <div class="col-md-6">
                            <label for="c_postal_zip" class="text-black">Posta / Zip <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                        </div>
                    </div>

                    <div class="form-group row mb-5">
                        <div class="col-md-6">
                            <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                        </div>
                        <div class="col-md-6">
                            <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_phone" name="c_phone"
                                   placeholder="Phone Number">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="c_create_account" class="text-black" data-toggle="collapse"
                               href="#create_an_account"
                               role="button" aria-expanded="false" aria-controls="create_an_account"><input
                                type="checkbox" value="1"
                                id="c_create_account"> Create an account?</label>
                        <div class="collapse" id="create_an_account">
                            <div class="py-2">
                                <p class="mb-3">Create an account by entering the information below. If you are a
                                    returning customer
                                    please login at the top of the page.</p>
                                <div class="form-group">
                                    <label for="c_account_password" class="text-black">Account Password</label>
                                    <input type="email" class="form-control" id="c_account_password"
                                           name="c_account_password"
                                           placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="c_ship_different_address" class="text-black" data-toggle="collapse"
                               href="#ship_different_address" role="button" aria-expanded="false"
                               aria-controls="ship_different_address"><input type="checkbox" value="1"
                                                                      id="c_ship_different_address">
                            Ship To A Different Address?</label>
                        <div class="collapse" id="ship_different_address">
                            <div class="py-2">

                                <div class="form-group">
                                    <label for="c_diff_country" class="text-black">Country <span
                                            class="text-danger">*</span></label>
                                    <select id="c_diff_country" class="form-control">
                                        <option value="1">Select a country</option>
                                        <option value="2">bangladesh</option>
                                        <option value="3">Algeria</option>
                                        <option value="4">Afghanistan</option>
                                        <option value="5">Ghana</option>
                                        <option value="6">Albania</option>
                                        <option value="7">Bahrain</option>
                                        <option value="8">Colombia</option>
                                        <option value="9">Dominican Republic</option>
                                    </select>
                                </div>


                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="c_diff_fname" class="text-black">First Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_diff_fname"
                                               name="c_diff_fname">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="c_diff_lname" class="text-black">Last Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_diff_lname"
                                               name="c_diff_lname">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="c_diff_companyname" class="text-black">Company Name </label>
                                        <input type="text" class="form-control" id="c_diff_companyname"
                                               name="c_diff_companyname">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="c_diff_address" class="text-black">Address <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_diff_address"
                                               name="c_diff_address"
                                               placeholder="Street address">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control"
                                           placeholder="Apartment, suite, unit etc. (optional)">
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="c_diff_state_country" class="text-black">State / Country <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_diff_state_country"
                                               name="c_diff_state_country">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="c_diff_postal_zip" class="text-black">Posta / Zip <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_diff_postal_zip"
                                               name="c_diff_postal_zip">
                                    </div>
                                </div>

                                <div class="form-group row mb-5">
                                    <div class="col-md-6">
                                        <label for="c_diff_email_address" class="text-black">Email Address <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_diff_email_address"
                                               name="c_diff_email_address">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="c_diff_phone" class="text-black">Phone <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_diff_phone"
                                               name="c_diff_phone"
                                               placeholder="Phone Number">
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="c_order_notes" class="text-black">Order Notes</label>
                        <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control"
                                  placeholder="Write your notes here..."></textarea>
                    </div>

                </div>
            </div>
            <div class="col-md-6">

                <div class="row mb-5">
                    <div class="col-md-12">
                        <h2 class="h3 mb-3 text-black font-heading-serif">Coupon Code</h2>
                        <div class="p-3 p-lg-5 border">

                            <label for="c_code" class="text-black mb-3">Enter your coupon code if you have
                                one</label>
                            <div class="input-group w-75">
                                <input type="text" class="form-control" id="c_code" placeholder="Coupon Code"
                                       aria-label="Coupon Code"
                                       aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary btn-sm rounded px-4" type="button"
                                            id="button-addon2">Apply
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md-12">
                        <h2 class="h3 mb-3 text-black font-heading-serif">Your Order</h2>
                        <div class="p-3 p-lg-5 border">
                            <table class="table site-block-order-table mb-5">
                                <thead>
                                <th>Product</th>
                                <th>Total</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Bioderma <strong class="mx-2">x</strong> 1</td>
                                        <td>$55.00</td>
                                    </tr>
                                    <tr>
                                        <td>Ibuprofeen <strong class="mx-2">x</strong> 1</td>
                                        <td>$45.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                                        <td class="text-black">$350.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                                        <td class="text-black font-weight-bold"><strong>$350.00</strong></td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="border mb-3 p-3 rounded">
                                <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank"
                                                       role="button"
                                                       aria-expanded="false" aria-controls="collapsebank">Direct
                                        Bank Transfer</a></h3>

                                <div class="collapse" id="collapsebank">
                                    <div class="py-2 pl-0">
                                        <p class="mb-0">Make your payment directly into our bank account. Please use
                                            your Order ID as the
                                            payment reference. Your order won’t be shipped until the funds have
                                            cleared in our account.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="border mb-3 p-3 rounded">
                                <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque"
                                                       role="button"
                                                       aria-expanded="false" aria-controls="collapsecheque">Cheque
                                        Payment</a></h3>

                                <div class="collapse" id="collapsecheque">
                                    <div class="py-2 pl-0">
                                        <p class="mb-0">Make your payment directly into our bank account. Please use
                                            your Order ID as the
                                            payment reference. Your order won’t be shipped until the funds have
                                            cleared in our account.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="border mb-5 p-3">

                                <html>
                                    <head>
                                        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
                                        <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
                                    </head>

                                    <body>
                                        <script src="https://www.paypal.com/sdk/js?client-id=AZE834NCpyC9No8u3nsH9dN4jzIfuTMhu42wS6EmbfFyohtFdYh8hW1HyzrjAf9A5gjgNSUwcBbxzhuh"> // Replace YOUR_SB_CLIENT_ID with your sandbox client ID
                                        </script>

                                        <div id="paypal-button-container"></div>

                                        <!-- Add the checkout buttons, set up the order and approve the order -->
                                        <script>
                                            // Add your client ID and secret
                                            var PAYPAL_CLIENT = 'AZE834NCpyC9No8u3nsH9dN4jzIfuTMhu42wS6EmbfFyohtFdYh8hW1HyzrjAf9A5gjgNSUwcBbxzhuh';
                                            var PAYPAL_SECRET = 'EHqf-3NugnaD48ambj7Ra5AeEMCmZtspRrmV8Um20f4n52i20-P0VTVGpefkHDWReDMdy3FtqDHMIdKb';

                                            // Point your server to the PayPal API
                                            var PAYPAL_ORDER_API = 'https://api.paypal.com/v2/checkout/orders/';
                                            paypal.Buttons({
                                                createOrder: function (data, actions) {
                                                    // This function sets up the details of the transaction, including the amount and line item details.
                                                    return actions.order.create({
                                                        purchase_units: [{
                                                                amount: {
                                                                    value: '0.01'
                                                                }
                                                            }]
                                                    });
                                                },
                                                onApprove: function (data, actions) {
                                                    // This function captures the funds from the transaction.
                                                    return actions.order.capture().then(function (details) {
                                                        // This function shows a transaction success message to your buyer.
                                                        alert('Transaction completed by ' + details.payer.name.given_name);
                                                    });
                                                }
                                            }).render('#paypal-button-container');
                                            //This function displays Smart Payment Buttons on your web page.
                                        </script>

                                        <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal"
                                                               role="button"
                                                               aria-expanded="false"
                                                               aria-controls="collapsepaypal">Paypal</a></h3>

                                        <div class="collapse" id="collapsepaypal">
                                            <div class="py-2 pl-0">
                                                <p class="mb-0">Make your payment directly into our bank account. Please use
                                                    your Order ID as the
                                                    payment reference. Your order won’t be shipped until the funds have
                                                    cleared in our account.</p>
                                            </div>
                                        </div>
                            </div>

                            <div class="form-group">
                                <form method="post" action="index.php?action=command">
                                    <label class="input-medium">

                                        <button id="createOrder" class="btn" type="submit">Place
                                            Order</button>


                                </form>

                                <form action="view/ipn.php" method="post">
                                    /* Indication du montant HT du panier ou TTC si la TVA n'est pas détaillée */
                                    <input name="amount" type="hidden" value="<?php echo $_SESSION['panier']['total_ht']; ?>" />
                                    /* Indication de la devise */
                                    <input name="currency_code" type="hidden" value="EUR" />
                                    /* Indication du montant des frais de port */
                                    <input name="shipping" type="hidden" value="<?php echo $_SESSION['panier']['transport']; ?>" />
                                    /* Indication du montant de la TVA (ou 0.00) */
                                    <input name="tax" type="hidden" value="<?php echo $_SESSION['panier']['total_tva']; ?>" />
                                    /* Indication de l'URL de retour automatique */
                                    <input name="return" type="hidden" value="http://www.monsite.com/retour.php" />
                                    /* Indication de l'URL de retour si annulation du paiement */
                                    <input name="cancel_return" type="hidden" value="http://www.monsite.com/panier.php" />
                                    /* Indication de l'URL de retour pour contrôler le paiement */
                                    <input name="notify_url" type="hidden" value="http://www.monsite.com/ipn.php" />
                                    /* Indication du type d'action */
                                    <input name="cmd" type="hidden" value="_xclick" />
                                    /* Indication de l'adresse e-mail test du vendeur (a remplacer par l'e-mail de votre compte Paypal en production) */
                                    <input name="business" type="hidden" value="test-vendeur@monsite.com" />
                                    /* Indication du libellé de la commande qui apparaitra sur Paypal */
                                    <input name="item_name" type="hidden" value="Le texte que vous voulez" />
                                    /* Indication permettant à l'acheteur de laisser un message lors du paiement */
                                    <input name="no_note" type="hidden" value="1" />
                                    /* Indication de la langue */
                                    <input name="lc" type="hidden" value="FR" />
                                    /* Indication du type de paiement */
                                    <input name="bn" type="hidden" value="PP-BuyNowBF" />
                                    /* Indication du numéro de la commande (très important) */
                                    <input name="custom" type="hidden" value="<?php echo $_SESSION['panier']['commande']; ?>" />
                                    /* Bouton pour valider le paiement */
                                    <input class="bouton" type="submit" value="Payer" />
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- </form> -->
    </div>
</div>


<?php
$content = ob_get_clean();
require "gabarit.php";
