<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Tabla datos</title>
    </head>
    <body>
    <?php
    /*Escribe un programa que almacene en variables tu 
    nombre, primer apellido, segundo apellido, email, año en el que naciste y 
    móvil. Luego muéstralos por pantalla dentro de una tabla. */
    $nombre = "Juanma";
    $apellido1 = "Romalde";
    $apellido2 = "Marín";
    $email = "juanma0089@hotmail.com";
    $nacimiento = "1989";
    $movil = "679673193";
    ?>
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
                <?=$apellido1 ?>
            </td>
        </tr>
        <tr>
        <td>
                Segundo apellido
            </td>
            <td>
                <?=$apellido2 ?>
            </td>
      
        </tr>
            
        <tr>
            <td>
                Email
            </td>
            <td>
                <?=$email?>
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
                <?=$movil?>
            </td>
        </tr>   
    </table>
    </body>
</html>