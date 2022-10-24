<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>018imprimeTique</title>
</head>
<body>
    <?php

    $CantidadGorra = $_GET['gorra'];
    $CantidadZapas = $_GET['zapas'];
    $CantidadCartera = $_GET['cartera'];
    $TotalProductos = 0;

    $arrayProductos = array(
    array ("Gorra Vans", $CantidadGorra, 25),
    array ("Vans oldskool", $CantidadZapas, 65),
    array ("Cartera Billabong", $CantidadCartera, 35));

     include_once('018funcionesCalculos.php');

echo "<ul>";

    for ($i=0; $i <count($arrayProductos) ; $i++) {
      
                echo"<br><li>Nombre: ".$arrayProductos[$i][0]."</li>";
                echo"<ul><li>Cantidad: ".$arrayProductos[$i][1]."</li>";
                echo"<li>Pvp/Ud € ".$arrayProductos[$i][2]."</li>";
                echo"<li>Pvp/Ud pesetas: ".EuroPesetas($arrayProductos[$i][2])."</li>";
                echo"<li>Pvp total €".$arrayProductos[$i][2] * $arrayProductos[$i][1]."</li>";
                echo"<li>Pvp total pesetas".EuroPesetas($arrayProductos[$i][2]) * $arrayProductos[$i][1]."</li></ul>";
        
        $TotalProductos += $arrayProductos[$i][2] * $arrayProductos[$i][1];

    }
echo "<li>Total:
        <ul>
            <li>$TotalProductos €</li>
            <li>".EuroPesetas($TotalProductos)."pesetas</li>
        </ul>  
</ul>";
    ?>
    
</body>
</html>