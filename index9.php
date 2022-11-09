<?php
$color = 'black';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $color = "white";
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
<body style="background-color:<?= $color ?>;">

    <!-- 9 uzduotis  -->
    <?php
            if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                ?>
            <form action="" method="post">
            <button type="submit"> Button!</button>
            <?php

            $letters = ['A', 'B', 'C','D','E','F','G','X','Y','Z'];
            for ($i=0; $i < rand(3,10) ; $i++) { 
                $checkbox = "<input type='checkbox' name='paselectinti[]'>";
                echo($letters[$i]);
                echo($checkbox);
            }
        }else{
            echo ("Kiek buvo pazymeta checkbox'u");
        }   
        ?>
        </form>

</body>
</html>