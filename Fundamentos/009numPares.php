<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <ul>
        <?php
            /*9. 009numPares.php: Escribe un programa que muestre los números pares del 
            0 al 50 (dentro de una lista desordenada). */
            
            for ($i = 0; $i <= 50 ; $i++) { 
                if($i % 2 == 0){
                echo "<li>$i</li>"; 
                }
            }
        ?>
        </ul>

    </body>
</html>
