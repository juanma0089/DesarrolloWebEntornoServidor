
        <?php
        /* 13. 013formulario.html y 013cuadrada.php: Basándote en el ejercicio anterior, 
        rellena la tabla de manera que solo los bordes tengan contenido, 
        quedándose el resto de las celdas vacías.*/
        ?> 
    </head>
    <body>
        <table border="solid 1px">
            <?php
             $filas = $_POST['filas'];
             $columnas = $_POST['columnas'];

                for ($i = 1; $i <= $filas ; $i++) { 
                   
                    echo "<tr>"; 
                    
                    for($j = 1; $j <= $columnas; $j++) { 

                        if($i == 1 || $j == 1|| $i == $filas || $j == $columnas){

                            echo "<td>".$i.".".$j."</td>";
                        }else{
                            echo "<td></td>";
                        }
     
                    }
                    
                    echo "</tr>";
                }
            ?>

