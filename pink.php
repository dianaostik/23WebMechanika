<?php
$color = 'pink';

//echo $_SERVER['REQUEST_METHOD'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body  style="background-color:<?= $color ?>;">

<!-- 8 uzduotis  -->
        <form action="./rose.php" method="post">
            <button type="submit"> Go to rose!</button>
        </form>

</body>
</html>