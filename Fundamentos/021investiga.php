<?php
/*21. 021investiga.php: Investiga las siguientes funciones de cadena (explica para 
qué sirven mediante comentarios, y programa un pequeño ejemplo de cada 
una de ellas): ucwords, strrev, str_repeat y md5.*/




/*                                    Explicación 

ucwords----> Convierte a mayúsculas el primer caracter de cada palabra de una cadena.
strrev-----> devuelve la cadena invertida.
str_repeat-> Repite un string, pudiendo indicar cuantas veces queremos que se repita
md5--------> es una funcion de cifrado tipo hash que acepta una cadena de texto como entrada y devuelve una cadena de 32 caracteres en hexadecimal.

*/
$cadena1 = "voy a convertir el primer carácter de cada palabra a mayúscula con la función de cadenas <b>".strtolower("u")."cwords</b><br><br>";
echo ucwords($cadena1);

$cadena2 = "voy a darle la vuelta a esta frase ";
echo "Vamos a invertir la frase: 'voy a darle la vuelta a esta frase' con la función <b>strrev</b> ----> ".strrev($cadena2);

$cadena3 = "<br><br>Voy a repetir esta frase 3 veces con la función <b>str_repeat</b>";
echo str_repeat($cadena3, 3);

$cadena4 = "Voy a ser una cadena de 32 caracteres en hexadecimal";
echo "<br><br>Vamos a cifrar una cadena de texto con la función md5 y nos va a devolver una cadena de 32 caracteres en hexadecimal: <b>".md5($cadena4)."</b> es el resultado de cifrar la cadena 'Voy a ser una cadena de 32 caracteres en hexadecimal'";

?>