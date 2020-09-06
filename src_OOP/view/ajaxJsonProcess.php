<?php



$a = $_POST['arguments'];

$jsonCart = json_decode($a['arg1']);

$allCart = $_SESSION['wine'];

foreach ($allCart as $anArticle) {
    foreach ($anArticle as $builder) { 

            $test = $builder;
               
        }
    }



    echo "wwwwwwwwwwwwwwwwwwwwwwwwwwhhhhhhhhhhhhhwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww";
?>


<form> 
    <input type="text" value="<?=$builder?>"> 
    <input type="submit" value="monForm" name="form" />
</form>
    