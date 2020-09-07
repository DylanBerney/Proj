<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
    <form id="myForm">
        <input type="text" name="fname" id="fname"/>
        <input type="submit" name="click" value="button" />
    </form>
    <script>
        $('#myForm').click(function () {
            $.ajax({
                 url : 'view/ajaxJsonProcess.php',  
                type: 'POST',
           
            data: {
                     
                    email: 'email@example.com',
                    message: 'hello world!'
                },
                success: function (msg) {
                    alert('Email Sent');
                }
            });
        });
    </script>
</body>
</html>
<!-- submit.php -->
<?php
$value = "call";
echo json_encode($value);
?>

