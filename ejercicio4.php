<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Factura de Productos</title>
</head>

<?php
if (!isset ($_POST["numero"])) {
    ?>
    <h1>Cantidad de Productos</h1>
    <form action="ejercicio4.php" method="post">
    <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Cantidad de Productos</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="numero" name="numero">
                <button type="submit" class="btn btn-dark ms-3 mb-3">Guardar</button>
                </div>
            </div>
    </form>
    <?php
    }else {
    ?>
        <form action="ejercicio4factura.php" method="post">
            <h1>Detalle</h1>
            <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Proovedor</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Compra a Granel</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <?php
            $numero=$_POST["numero"] ?? 1;
            for($i=1;$i<=$numero;$i++) {
                echo "<tr>";
                echo "<td><input type='text' name='Nombre[]'> </td>";
                echo "<td><input type='text' name='Proovedor[]'> </td>";
                echo "<td><input type='number' name='Cantidad[]'> </td>";
                echo "<td><input type='float' name='Precio[]'> </td>";
                echo "<td><input type='number' name='Granel[]'> </td>";
                echo "</tr>";
            }
            ?>
            </table>
            <a type="button" class="btn btn-dark ms-3 mb-3" href="ejercicio4factura.php">Generar Factura</a>
        </form>
        <?php
    }
    ?>
</body>
</html>

