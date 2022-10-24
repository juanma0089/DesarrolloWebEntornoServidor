<?php
//prueba ejercicio 1

/*
include_once('001Empleado.php');

$empleado1 = new Empleado();
$empleado1 -> setNombre("Juan Manuel");
$empleado1 -> setApellido("Romalde Marín");
$empleado1 -> setSueldo(4500);

echo $empleado1->getNombreCompleto()."<br>";

if($empleado1->debePagarImpuestos() == true){

    echo "Debe pagar impuestos al superar los <b>3333€</b> ya que su sueldo es de <b>".$empleado1->getSueldo()."€</b>";

}else{

    echo "No debe pagar impuestos";
}
*/
//---------------------------------------------------------------------------
//prueba ejercicio 2

/*
include_once('002EmpleadoTelefonos.php');

$empleado1 = new Empleado();
$empleado1 -> setNombre("Sergio");
$empleado1 -> setApellido("Garrido Vega");
$empleado1 -> anyadirTelefono(679673193);
$empleado1 -> anyadirTelefono(632458164);

echo $empleado1->getNombreCompleto()."<br>";

echo "Teléfono: ".$empleado1->listarTelefonos()."<br>";

$empleado1 -> vaciarTelefonos();
*/
//---------------------------------------------------------------------------
//prueba ejercicio 3
/*
include_once('003EmpleadoConstructor.php');

$empleado1 = new Empleado("Sergio","Garrido Vega", 3000);
$empleado2 = new Empleado("Jairo", "Garcia Barrera");

echo $empleado1->getNombreCompleto()." sueldo:".$empleado1->getSueldo()."<br>";
echo $empleado2->getNombreCompleto()." sueldo:".$empleado2->getSueldo();
*/
?>