<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h2>Numeros pares del 2 al 50 en orden descendente: </h2>
    <?php
        $pares=array();
        for ($i=50;$i>=2;$i=$i-2) {
            $pares=$i;
            echo "<br>" .$pares ;
        }
    ?>
</body>
</html>