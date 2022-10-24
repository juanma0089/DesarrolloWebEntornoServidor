<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Fundamentos</title> 
        
    </head>
    <body>

        <p>
            <?php

            /*1. 001tres.php: muestra 3 frases cada una en un párrafo utilizando las tres 
                posibilidades que existen de mostrar contenido. Tras ello, introduce dos 
                comentarios, uno de bloque y otro de una línea. */
            echo "Primera posibilidad con echo para mostrar contenido"    
            ?>
        </p>
        <p>
            <?php
            print ("Segunda opción mediante print para mostrar contenido");
            ?>
        </p>
        <p>
            <?= "Tercera opción con <?= ?> para mostrar contenido"?>
        </p>
    </body>
</html>
