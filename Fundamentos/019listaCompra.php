<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta de artículos</title>
    <!--19. A partir de los archivos creados en el ejercicio anterior, crea una plantilla 
    mediante includes: 019preparaCompra.php: similar a 019preparaTique.php, 
    pero separando el encabezado (Supermercado Lodi en h1) y el pie (Tu 
    supermercado de confianza) en ficheros externos y referenciando a ellos 
    mediante include.
    -->
</head>
<body>
<?php include '019cabecera.php'?>
    <form action="019imprimeTiquetCompra.php" method="GET">
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
<?php include '019Footer.php'?>
</html>