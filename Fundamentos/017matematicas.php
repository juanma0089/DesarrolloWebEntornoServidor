<?php
/*17. 017matematicas.php: Añade las siguientes funciones:
digitos(int $num): int ‚ devuelve la cantidad de dígitos de un número.

digitoN(int $num, int $pos): int ‚ devuelve el digito que ocupa, 
empezando por la izquierda, la posición $pos.

  le quita por detrás (derecha) 
$cant digitos.

quitaPorDelante(int $num, int $cant): int ‚le quita por delante (izquierda) 
$cant digitos.

Para probar las funciones, haz uso tanto de paso de argumentos 
posicionales como argumentos con nombre. */


/*-------------------------------------------------------------*/
  $num = 10346;
  echo "El número <b>".$num."</b> tiene <b>".digitos($num)."</b> de dígitos<br><br>";
function digitos(int $num):int
{

    $numToString = strlen((string)$num);

    $stringToNum = (int)$numToString;

    return  $stringToNum;
}
/*-------------------------------------------------------------*/

echo "El dígito que corresponde a la posicion <b>4</b> del número <b>356789</b> es el <b>".digitoN(num: 536789, pos:  4)."</b>";

function digitoN(int $num, int $pos) : int
{

    $numToString  = (string)$num;
   
    $arrayChar = str_split($numToString ,1);

    $stringToNum = (int)$arrayChar[$pos-1];
  
    return $stringToNum;

}

/*-------------------------------------------------------------*/

echo "<br><br>Si quitamos <b>4</b> dígitos por detrás a <b>254920</b> nos quedaría un nuevo número que sería el <b>".quitaPorDetras(cant:4, num:254920)."</b>" ;

function quitaPorDetras(int $num, int $cant)
{

    $numeroAstring = (string)$num;

    $arrayCaract = str_split($numeroAstring ,1);

    $contador = 0;

    while($contador < $cant){
      array_pop($arrayCaract);
      $contador++;
    }

  $arrayAcadena = implode($arrayCaract);
    
  $cadenaAnum = (int)$arrayAcadena;

  return  $cadenaAnum;
}

/*-------------------------------------------------------------*/
$num = 359860;
$cant = 3;

echo "<br><br>Si quitamos <b>".$cant."</b> dígitos por delante a <b>".$num."</b> nos quedaría un nuevo número que sería el <b>".quitaPorDelante($num, $cant)."</b>" ;

function quitaPorDelante(int $num, int $cant): int
{
  $numeroAstring = (string)$num;

  $arrayCaract = str_split($numeroAstring ,1);

  $contador = 0;

  while($contador < $cant){
   array_shift($arrayCaract);
    $contador++;
  }

  $arrayAcadena = implode($arrayCaract);
  
  $cadenaAnum = (int)$arrayAcadena;

return  $cadenaAnum;
}
  
?>
  

