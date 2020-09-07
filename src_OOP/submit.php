<?php
$value ="call";

echo json_encode($value);
$_POST['yes']="yes";
?>

<form id="myForm" method="post">
       <input type="text" name="fname" id="fname" value="<?php if(isset($_POST['yes'])){echo $_POST['yes'];}?>">
        <input type="submit" name="click" value="button" />
    </form>