<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div id="myData"></div>
   
    <script>
        fetch("<?=$tempsDirPath?>")
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
                div.innerHTML = '<h4> Totale de du Panier:</h4>'+ data[0].cart.total;
                  mainContainer.appendChild(div);
        }
    </script>
    
    
    <?php
  
   //             for (var i = 0; i < data[0].wine.length; i++) {
   //             var div = document.createElement("div");
   //             div.innerHTML = '<h4> Totale de du Panier:</h4>'+ data[0].cart.total;
   //             mainContainer.appendChild(div);
   //         }
            
    ?>
   