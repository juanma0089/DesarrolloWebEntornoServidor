<?php
/*8. 008Investiga para qué sirve la instrucción match(), disponible desde PHP8 
(https://www.php.net/manual/es/control-structures.match.php). Explica 
con un par de l√≠neas su propósito y mediante código demuestra su uso. */


/*Respuesta

Es similar a un switch, se compara con varias alternativas 
con la diferencia que la comparación para que sea verdadero debe ser (===) idéntica*/

$edad = $_GET['edad'];

$resultado = match (true){
    $edad < 0 => 'Edad no permitida',
    $edad < 3 => 'bebé',
    $edad < 13 => 'niño',
    $edad < 18 => 'adolescente',
    $edad < 67 => 'adulto',
    default => 'jubilado',
};
    echo $resultado;
?>