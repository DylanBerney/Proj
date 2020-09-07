<!-- index.php -->
    <!DOCTYPE html>
    <html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>
    <body>
    <form id="myForm">
        <input type="text" name="fname" id="fname" value"<?php if(isset($_POST['yes'])){echo $_POST['yes'];}?>">
        <input type="submit" name="click" value="button" />
    </form>
        
        <?php include 'view/ajaxJsonProcess.php';?>
    <script>
    $(document).ready(function(){

         $(function(){
            $("#myForm").submit(function(event){
                event.preventDefault();
                $.ajax({
                    method: 'POST',
                    url: 'view/ajaxJsonProcess.php',
                  
                
                    data : $('#myForm').serialize(),
                    success: function(data){
                        alert(data);
                    },
                    error: function(xhr, desc, err){
                        console.log(err);
                    }
                });
            });
        });
    });
    </script>
    
    </body>
    </html>
    
    <input type="text" value="" name="options[22]" id="price" class="input-text" />
<input type="button" value="Refresh" onclick="reloadPrice();" />
   <script>
 
function reloadPrice() {
    var price = "0.00"; // set your price here

    // get a ref to your element and assign value
    var elem = document.getElementById("price");
    elem.value = price;
}
   </script>
 
