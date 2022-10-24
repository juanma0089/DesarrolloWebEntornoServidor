<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php
        /* 12. 012formulario.html y 012tabla.php: A partir de un número de filas y 
        columnas, crear una tabla con ese tamaño. Las celdas deben estar 
        rellenadas con los valores de las coordenadas de cada celda.*/
        ?> 
    </head>
    <body>
        <!--Ya se que no se da estilos desde html Perdon profe Olga :D-->
        <table border="solid 1px">
            <?php
             $filas = $_POST['filas'];
             $columnas = $_POST['columnas'];

                for ($i = 1; $i <= $filas ; $i++) { 
                   
                    echo "<tr>"; 
                    
                    for($j = 1; $j <= $columnas; $j++) { 

                        echo "<td>".$i.".".$j."</td>";
                    }
                    
                    echo "</tr>";
                }
            ?>
        </table>
        <p><a href="012formulario.html">Volver al formulario.</a></p>
    </body>
</html>

