<?php
/*20. 020cani.php: EsCrIbE uNa FuNcIóN qUe TrAnSfOrMe UnA cAdEnA eN cAnI. */

$cadena = "Escribe una funcion que transforme una cadena en cani";

    cadenaCani($cadena);

    function cadenaCani($cadena){

    $arrayCadena = str_split($cadena,1);

    for ($i = 0; $i <count($arrayCadena) ; $i++) { 

        $nuevoArray = [];

        if(($i % 2) == 0 ){

            $nuevoArray = strtoupper($arrayCadena[$i]);

                }else{

                    $nuevoArray = strtolower($arrayCadena[$i]);

                }

    print_r($nuevoArray);

        }
}

?>