<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        
        <?php

        /*3. 003misDatos.html y 003misDatos.php: Es el mismo ejercicio anterior, pero 
        separando la lógica. En el html crearemos el formulario para introducir los 
        datos, y luego recogemos los datos y generamos la tabla en el segundo 
        archivo. */

            $nombre = $_POST['nombre'];
            $apellido1 = $_POST['apellido1'];
            $apellido2 = $_POST['apellido2'];
            $email = $_POST['email'];
            $nacimiento = $_POST['nacimiento'];
            $telefono = $_POST['telefono'];
        ?>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    Nombre
                </td>
                <td>
                    <?= $nombre ?>
                </td>
            </tr>
            <tr>
                <td>
                    Primer apellido
                </td>
                <td>
                    <?= $apellido1 ?>
                </td>
            </tr>
            <tr>
                <td>
                    Segundo apellido
                </td>
                <td>
                    <?= $apellido2 ?>
                </td>
        
            </tr>
                
            <tr>
                <td>
                    Email
                </td>
                <td>
                    <?= $email?>
                </td>
            </tr>
            <tr>
                <td>
                    Año nacimiento
                </td>
                <td>
                    <?= $nacimiento?>
                </td>
            </tr>
            <tr>
                <td>
                    Móvil
                </td>
                <td>
                    <?= $telefono?>
                </td>
            </tr>   
        </table>
    </body>
</html>
