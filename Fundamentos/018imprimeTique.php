<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>018imprimeTique</title>
    <?php
    /*018imprimeTique.php: Tras leer los datos del tique de compra, enumera en 
    una tabla los productos, con su precio en euros y pesetas, y finalmente, en 
    una última fila, totalizar en ambas monedas.*/

    $CantidadGorra = $_GET['gorra'];
    $CantidadZapas = $_GET['zapas'];
    $CantidadCartera = $_GET['cartera'];
    $TotalProductos=0;

    $arrayProductos = array(
        array ("Gorra Vans", $CantidadGorra, 25),
        array ("Vans oldskool", $CantidadZapas, 65),
        array ("Cartera Billabong", $CantidadCartera, 35));

?>
</head>
<body>
    <table border="solid 1px">
        <thead>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Pvp/Ud €</th>
            <th>Pvp/Ud Pesetas</th>
            <th>Pvp total €</th>
            <th>pvp Total Pesetas</th>
        </thead>
        <tbody>
            <?php 
            include_once('018funcionesCalculos.php');

            for ($i=0; $i <count($arrayProductos) ; $i++) { 
                
                echo "<tr>";
                
                    echo "<td>".$arrayProductos[$i][0]."</td>";
                    echo "<td>".$arrayProductos[$i][1]."</td>";
                    echo "<td>".$arrayProductos[$i][2]."€</td>";
                    echo "<td>".EuroPesetas($arrayProductos[$i][2])." ptas</td>";
                    echo "<td>".$arrayProductos[$i][2] * $arrayProductos[$i][1]." €</td>";
                    echo "<td>".EuroPesetas($arrayProductos[$i][2]) * $arrayProductos[$i][1]." ptas</td>";

                $TotalProductos += $arrayProductos[$i][2] * $arrayProductos[$i][1];

                echo "</tr>";
            }
                    echo "<tr>
                                <td COLSPAN = 4>Total:</td>
                                <td>$TotalProductos €</td>
                                <td>".EuroPesetas($TotalProductos)."pesetas</td> 
                            </tr>";
            ?>
        </tbody>
    </table>
</body>
</html>