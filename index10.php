<?php
$color = 'black';
$color2 = 'white';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $color = "white";
    $color2 = 'black';
    print_r($_POST);
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:<?= $color ?>; color: <?= $color2 ?>;">
    <!-- 9 uzduotis  -->


    <?php
            if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                ?>
            <form action="" method="post">
            <button type="submit"> Button!</button>
            <?php
            $n = rand(3,10);
            $letters = ['A', 'B', 'C','D','E','F','G','X','Y','Z'];
            for ($i=0; $i < $n ; $i++) { 
                $checkbox = "<input type='checkbox' name='paselectinti[]' value='".$i."'>";
                echo($letters[$i]);
                echo($checkbox);
            }
        }else{
            echo ("Kiek buvo pazymeta checkbox'u");
        }
        
        ?>
        <input type="hidden" name="totalCount" value="<?=$n?>">
        </form>

</body>
</html>