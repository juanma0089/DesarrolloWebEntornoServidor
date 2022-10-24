<?php
/* 7. 007ecuacion2.php: Crea un programa que resuelva una ecuación de 2º 
grado del tipo ax² + bx + c = 0. Ten en cuenta que puede tener 2, 1 o no 
tener solución dependiendo del valor del discriminante b²-4ac.Tip: Para 
calcular la raíz cuadrada deberás utilizar la función sqrt()*/

$a = 1;
$b = 8;
$c = 6;

 $discriminate = $b**2 - 4 * $a * $c;

if($discriminate < 0){

    echo "La equación no se puede resolver porque el discriminante es un número negativo";

}elseif ($discriminate == 0) {
    
    echo -$b + sqrt($discriminate) / 2 * $a; 
    
}else{

    echo "Solución 1: ".-$b + sqrt($discriminate) / 2 * $a."<br>";

    echo "Solución 2: ". -$b - sqrt($discriminate) / 2 * $a;
}

?>