<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dataDirectory = "model/data";
$dataFileName = 'userCart.json';

$tempsDirPath = 'model/data/data' . session_id() . "/userCart.json";
?>

<div id="myData"></div>


</a>
<script>
    fetch("<?= $tempsDirPath ?>")
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
                appendData(data);
            })
            .catch(function (err) {
                console.log('error: ' + err);
            });
    function appendData(data) {
        var mainContainer = document.getElementById("myData");
        var div = document.createElement("div");
        div.innerHTML = '<h4 class="d-block"> Totale de du Panier: ' + data.userCart[0].cart.total +' $ </h4><br><a  href="index.php?action=register" Go to Cart >';


        mainContainer.appendChild(div);
    }
</script>
   