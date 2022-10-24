<?php

/*Funciones auxiliares para ejercicio 18 y 19 */
function EuroPesetas($euro): float{

    $peseta = 166.38;

    $calculo = $euro * $peseta;
    return floor($calculo);
}


?>