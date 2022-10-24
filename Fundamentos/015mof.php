<?php
/*15. 015mof.php: Rellena un array de 100 elementos de manera aleatoria con 
valores M o F (por ejemplo ["M", "M", "F", "M", ...]). Una vez completado, 
vuelve a recorrerlo y calcula cuantos elementos hay de cada uno de los 
valores almacenando el resultado en un array asociativo ['M' => 44, 'F' => 
66] (no utilices variables para contar las M o las F). Finalmente, muestra el 
resultado por pantalla. */

$arrayRelleno = [];

$array = ['M'=>0, 'F'=>0];

for($i = 0; $i < 100; $i++){

    $random = rand(0,1);
    
    if($random == 0){
        array_push($arrayRelleno,"M");
       
    }else{
        array_push($arrayRelleno,"F");
    }
}
/*Mediante este segundo for recorremos el $array 
    y miramos $arrayRelleno para
    sumar cuantas veces aparecen los valores M F*/
for ($i=0; $i <100 ; $i++) { 
    $array[$arrayRelleno[$i]]+= 1;
}

print_r($array);

?>