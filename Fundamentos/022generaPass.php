<?php
/*22. 022generaPass.php: Crea una función que, a partir de un tamaño, genere 
una contraseña aleatoria compuesta de letras y dígitos de manera aleatoria.*/

/*comrpobamos si el usuario a introducido un tamaño concreto si no por defecto se creará 
una contraseña de 5 caracteres ?? es equivalente a isset*/

$tamanio = $_GET['tamanio'] ?? $_GET['tamanio'] = 5;

echo GenerarPassword($tamanio);

function GenerarPassword($tamanio): string{

    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    return substr(str_shuffle($caracteres), 0, $tamanio);
}
?>