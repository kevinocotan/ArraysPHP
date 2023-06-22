<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h2>Informacion de Paises: </h2>
    <?php
        $paises=array("El Salvador"=>array("Capital"=>"San Salvador",
                                    "Moneda"=>array("Dolar"," Colon"),
                                    "Poblacion"=>7000000,
                                    "cantidad de Departamentos"=>14),
                        "Estados Unidos"=>array("Capital"=>"Washintong DC",
                                    "Moneda"=>"Dolar",
                                    "Poblacion"=>300000000,
                                    "cantidad de Estados"=>51));

        foreach ($paises as $nombre => $atributos) {
            //print_r($atributos);
            foreach ($atributos as $atributo => $valor) {
                if (is_array($valor)) {
                    echo "La $atributo de $nombre es: ".implode(",",$valor)."<br>";
                } else {
                    echo "La $atributo de $nombre es: $valor <br>";
                }
            }
        } //Ejemplo tomado de la clase 6 "ejemplosforeach"
    ?>
</body>
</html>