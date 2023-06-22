<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Numero multiplos del 3 al 150 en orden descendente: </h1>
    <?php
        $array=array();
        for ($i=150;$i>=3;$i=$i-3) {
            $array=$i;
            echo "<br>" .$array ;
        }
    ?>
</body>
</html>