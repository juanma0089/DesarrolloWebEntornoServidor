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

            /*10. 010numPares.php: A partir del anterior, refactorizar para que funcione con 
            inicio y fin.*/
            $inicio = $_GET['inicio'];
            $fin = $_GET['fin'];

            for ($i = $inicio; $i <= $fin ; $i++) { 
                if($i % 2 == 0){
                echo "<li>$i</li>"; 
                }
            }
        ?>
        </ul>

    </body>
</html>
