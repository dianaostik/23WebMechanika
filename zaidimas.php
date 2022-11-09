<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <p> Pirmo zaidejo vardas 
        <input type="text" name="name1"></p>
        <p> Antro zaidejo vardas
        <input type="text" name="name2"></p>
        <button href="" type="submit"> Pradeti </button>       
    </form>
    <?php
        
            if(isset( $_GET['name1'] )){
                echo("<br><br>" . $_GET['name1']);
                ?>
                <form action="" method="post">
                <?php
                
            }

            if(isset( $_GET['name2'] )){
                echo("<br>" . $_GET['name2']);
                ?>
                <form action="" method="post">
                <?php
                
            }
            
           $scores = [];
            echo "<br><br>";
            if(isset($_POST['scores'])){
                $_POST['scores'].=" " . rand(1,6);
                echo(($_POST['scores']));
              //  $scores[] = $_POST['scores'];
              $scores = explode(" ",$_POST['scores']);
              //print_r($scores);
            }            
            
            $sum = 0;
            for ($i=0; $i < count($scores);$i++) { 
                //echo $scores[$i];
                $sum += intval($scores[$i]);
            }
            echo "<br>";
            print_r($sum);
    ?>
    <form action="" method="post">
                    <input type="hidden" name="scores" value="<?=(isset($_POST['scores'])?$_POST['scores'] : "")?>" >
        <button type="submit">Mesti kauliuka</button>
        <input type="hidden" name="sum" value="<?=(isset($_POST['sum'])?$_POST['sum'] : "")?>" >
    </form>
</body>
</html>