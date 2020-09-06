

<!-- index.php -->
    <!DOCTYPE html>
    <html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>
    <body>
    <form id="myForm">
        <input type="text" name="fname" id="fname"/>
        <input type="submit" name="click" value="button" />
    </form>
    <script>
    $(document).ready(function(){

         $(function(){
            $("#myForm").submit(function(event){
                event.preventDefault();
                $.ajax({
                    method: 'POST',
                    url: 'submit.php',
                    dataType: "json",
                    contentType: "application/json",
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
<!-- submit.php -->
<?php
$value ="call";
header('Content-Type: application/json');
echo json_encode($value);
?>

