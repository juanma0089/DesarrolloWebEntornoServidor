<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <table>
            <thead>
                <th>A</th>
                <th>*</th>
                <th>B</th>
                <th>=</th>
                <th>A*B</th>    
            </thead>
            <tbody>
                <?php
                    $tabla = $_GET['tabla'];

                    for ($i=0; $i <=10 ; $i++) { 
                        
                        $multi = $tabla * $i; 

                        echo "<tr>
                                <td>$tabla</td>
                                <td> * </td>
                                <td>$i</td> 
                                <td> = </td>
                                <td> $multi </td>
                            </tr>";
                        }
                ?>
            </tbody>
        </table>
    
    </body>
</html>