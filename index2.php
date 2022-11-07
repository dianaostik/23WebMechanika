<?php
$color = "black";

if(isset( $_GET['color'] )){
    $color = "#" . $_GET['color'];
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
  

<!-- 3 uzduotis -->
    <form action="./index2.php" method="get">
        <input type="text" name="color">
        <button href="./index.php?color2=ff1234" type="submit"> Pakeisk spalva!</button>
    </form>


</body>
</html>