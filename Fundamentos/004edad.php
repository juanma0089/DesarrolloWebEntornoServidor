<?php

/*4. 004edad.php: Sabiendo la edad de una persona, mostrar la edad que 
tendrá dentro de 10 años y hace 10 años. Además, muestra qué año será en 
cada uno de los casos. Finalmente, muestra el año de jubilación suponiendo 
que trabajarás hasta los 67 años. En este caso, no hace falta que 
previamente crees un formulario, puedes probar el ejercicio vía URL: 
004edad.php?edad=33. Tip: $anyoActual = date("Y"); */

$edad = $_GET['edad'];
$anyoActual = date("Y");
$edadMas = ($edad + 10);
$edadMenos = ($edad - 10);
$jubilacion = (67 - $edad) + $anyoActual;

echo "Tú edad dentro de 10 años será ".$edadMas." años y estaremos en el año ".($anyoActual + 10);

if($edad - 10 <= 0){
    echo "<br>No habías nacido"; 
}else{
    echo "<br>Tú edad hace 10 años era ".$edadMenos." y estabas en el año ".($anyoActual - 10);
}
if($edad >= 67){
    echo "<br>Te jubilaste en el año ".(($anyoActual)-($edad - 67));
}else{
    echo "<br>Te jubilarás en el año ".$jubilacion;
}
   
?>