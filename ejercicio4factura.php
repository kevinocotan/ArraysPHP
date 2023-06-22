<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Factura de Productos</title>
</head>
<body>
    <h1 class="text-center">Factura</h1>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Proovedor</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Tipo</th>
                <th>Granel</th>
                <th>Total</th>
                <th>&nbsp;</th>
        </thead>
        </tr>
            <?php
                $suma=0;
                $contador=0;
                $total=0;
                $numero=COUNT($_POST["Nombre"]);
                for ($i=0;$i<$numero;$i++) {
                    $contador++;
                    $nombres=$_POST["Nombre"][i];
                    $proovedor=$_POST["Proovedor"][i];
                    $cantidad=$_POST["Cantidad"][i];
                    $precio=$_POST["Precio"][i];
                    $granel=$_POST["Granel"][i];
                    if ($granel==0 || $granel==null) {
                        $total=$cantidad*$precio;
                        $granel=0;
                    } if ($granel>0) {
                        $total=$cantidad[$i]*$precio[$i]/$granel;
                    }
                    $suma+=$total;
                    
                    ?><tr>
                        <td> <?php echo "COD" .$contador ?> </td>
                        <td> <?php echo $proovedor ?> </td>
                        <td> <?php echo $nombres ?> </td>
                        <td> <?php echo $precio ?> </td>
                        <td> <?php echo $cantidad ?> </td>
                        <td> <?php if ($granel>0) {
                            echo "Compra Granel";
                        } else {
                            echo "Compra Normal";
                        }
                        ?> </td>
                        <td> <?php echo $granel ?> </td>
                        <td> <?php echo $total ?> </td>
                        <?php          
                }
                ?>
                <tr>
                    <th colspan=7> Total a Pagar</th>
                    <th>
                        <?php
                        if (numero==1) {
                            echo $total;
                        } else  {
                            echo $suma;
                        }
                    ?> </th>
                </tr>
    </table>
</body>
</html>
            