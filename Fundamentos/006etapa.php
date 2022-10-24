<?php 
/*6. 006etapa.php: A partir de una edad muestra por pantalla:bebé si tiene menos de 3 años
niño si tiene entre 3 y 12 años
adolescente entre 13 y 17 años
adulto entre 18 y 66
jubilado a partir de 67*/
$edad = $_GET['edad'];

switch($edad){
    case $edad < 0:
        echo "Edad no permitida";
        break;
    case $edad < 3:
        echo "bebé";
        break;  
    case $edad < 13:
        echo "niño";
        break;
    case $edad < 18:
        echo "adolescente"; 
        break;
    case $edad < 67:
        echo "adulto"; 
        break;   
    default:
        echo "jubilado";               
}
?>