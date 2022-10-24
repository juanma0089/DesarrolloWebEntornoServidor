
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta de artículos</title>
    <!--18. 018preparaTique.php: A partir de una cantidad de productos, leer el 
    nombre y coste de la cantidad de productos indicados (la cantidad, se 
    recibe mediante un parámetro GET vía URL).
    -->
</head>
<body>
    <form action="018imprimeTique.php" method="GET">
    <h1>Lista de productos</h1>
        <table border="1px solid">
            <thead>
                <th>Artículo</th>
                <th>Marca</th>
                <th>Precio/Ud</th>
                <th>Unidades</th>
            <tbody>
                <tr>
                    <td><label for="Gorra">Gorra</label></td>
                    <td>Vans</td>
                    <td>25€</td>
                    <td><input type="numb" name="gorra"></td>
                </tr>
                <tr>
                    <td><label for="Zapas">Zapas old skool</label></td>
                    <td>Vans</td>
                    <td>65€</td>
                    <td><input type="numb" name="zapas"></td>
                </tr>
                <tr>
                    <td><label for="Cartera">Cartera</label></td>
                    <td>Billabong</td>
                    <td>35€</td>
                    <td><input type="numb" name="cartera"></td>
                </tr>
            </tbody>
        </table>
        <br>
        <input type="submit" name="Enviar">
    </form>
</body>
</html>