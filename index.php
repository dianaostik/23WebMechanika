<?php
$color = "black";

if(isset( $_GET['color'] )){
    $color = "red";
}

if(isset( $_GET['color2'] )){
    $color = "#" . $_GET['color2'];
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
  
<!-- 1 uzduotis -->
    <a href="./index.php">pirmas</a>
    <a href="./index.php?color=1">antras</a>


<!-- 2 uzduotis -->
    <a href="./index.php?color2=ff1234">trecias</a>

</body>
</html>