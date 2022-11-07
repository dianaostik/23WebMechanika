<?php
$color = 'white';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $color = "yellow";
    header("Location: ./index4.php");
    die;
  } else {
    $color = "green";
  }

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

<!-- 7 uzduotis  -->
        <form action="" method="post">
            <button type="submit"> Geltonai!</button>
        </form>

        <form action="" method="get">
            <button type="submit"> Zaliai!</button>
        </form>

</body>
</html>