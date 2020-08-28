<?php
  $dataDirectory = "model/data";
  $dataFileName = 'userCart.json';
  $tempsDirPath = 'model/data/data' . session_id() . "/userCart.json";
?>
<div id="myData"></div>

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
        div.innerHTML = '<h4> Totale de du Panier:</h4>' + data[0].cart.total;
        mainContainer.appendChild(div);
    }
</script>
