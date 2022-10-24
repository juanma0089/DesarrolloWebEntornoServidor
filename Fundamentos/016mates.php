<?php
/*16. 016mates.php: Genera un array aleatorio de 33 elementos con números 
comprendidos entre el 0 y 100 y calcula: El mayor, el menor y la media */
$arrayV = [];

for ($i=0; $i < 33; $i++)
{ 
    $num_aleatorio = rand(1,100);
    array_push($arrayV,$num_aleatorio);
}

echo "<br><br> El número mayor es: ".max($arrayV);
echo "<br><br> El número menor es: ".min($arrayV);
/*He puesto floor para que rendondease el número mostrado por pantalla */
echo "<br><br> La media del array es: ".floor(array_sum($arrayV)/count($arrayV));