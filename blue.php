<?php
if (isset( $_GET['r'] )) {
    header("Location: ./red.php");
    die;
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
<body style=" background-color: blue;">
<!-- 5 uzduotis -->
    <a href="./blue.php?r"> Peradresavimas  </a>
</body>
</html>