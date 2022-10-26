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
//---------------------------------------------------------------------------
//prueba ejercicio 4
/*
include_once('004EmpleadoConstante.php');

$empleado1 = new Empleado("Pablo","Gonzalez Román", 4000);

echo $empleado1->getNombreCompleto()."<br>";

if($empleado1->debePagarImpuestos() == true){

    echo "Debe pagar impuestos al superar los <b>3333€</b> ya que su sueldo es de <b>".$empleado1->getSueldo()."€</b>";

}else{

    echo "No debe pagar impuestos";
}
*/
//---------------------------------------------------------------------------
//prueba ejercicio 5
/*
include_once('005EmpleadoSueldo.php');

$empleado1 = new Empleado("Ruben","Arias Román");
$empleado1->setSueldo(6950);

echo $empleado1->getNombreCompleto()."<br>";

if($empleado1->debePagarImpuestos() == true){

    echo "Debe pagar impuestos al superar los <b>3333€</b> ya que su sueldo es de <b>".$empleado1->getSueldo()."€</b>";

}else{

    echo "No debe pagar impuestos";
}
*/
//prueba ejercicio 6
/*
include_once('006EmpleadoStatic.php');

$empleado1 = new Empleado("Juan Manuel","Romalde Marín");
$empleado1 -> setSueldo(4500);
$empleado1 -> anyadirTelefono(679673193);
$empleado1 -> anyadirTelefono(632458164);

echo $empleado1->toHtml($empleado1);

*/

//prueba ejercicio 9
/*
include_once('309Empleado.php');

$empleado1 = new Empleado("Juan Manuel","Romalde Marín");
$empleado1 -> setSueldo(5000);
$empleado1 -> setEdad(24);
$empleado1 -> anyadirTelefono(679673193);
$empleado1 -> anyadirTelefono(632458164);

echo $empleado1->toHtml($empleado1);
*/

//prueba ejercicio 10
/*
include_once('310Empleado.php');

$empleado1 = new Empleado("Juan Manuel","Romalde Marín");
$empleado1 -> setSueldo(5000);
$empleado1 -> setEdad(24);
$empleado1 -> anyadirTelefono(679673193);
$empleado1 -> anyadirTelefono(632458164);

echo $empleado1->__toString($empleado1);
*/


//prueba ejercicio 11
/*
include_once('311Empleado.php');

$empleado1 = new Empleado("Juan Manuel","Romalde Marín", 24);
$empleado1 -> setSueldo(5000);
$empleado1 -> anyadirTelefono(679673193);
$empleado1 -> anyadirTelefono(632458164);

echo $empleado1->__toString();
*/

//prueba ejercicio 12
/*
include_once('312Empleado.php');

$empleado1 = new Empleado("Juan Manuel","Romalde Marín", 24);

$empleado1->setHorasTrabajadas(800);
$empleado1->setPrecioPorHora(10);
$empleado1->calcularSueldo();
$empleado1 -> anyadirTelefono(679673193);
$empleado1 -> anyadirTelefono(632458164);
echo $empleado1->toHtml($empleado1);

include_once('012Gerente.php');

$empleado1 = new Gerente("Juan Manuel","Romalde Marín", 24);
$empleado1->setSalario(800);
$empleado1->calcularSueldo();
$empleado1 -> anyadirTelefono(679673193);
$empleado1 -> anyadirTelefono(632458164);
echo $empleado1->toHtml($empleado1);
*/
//prueba ejercicio 13
/*
include_once('013Empresa.php');

$empresa = new Empresa("HOli", "coli");

$gerente1 = new Gerente("juanma", "r",33);
$gerente1->setSalario(800);
$gerente1->calcularSueldo();

$empleado2 = new Empleado("jaimito", "m",25);
$empleado2->setPrecioPorHora(10);
$empleado2->setHorasTrabajadas(800);
$empleado2->calcularSueldo();

$empresa -> anyadirTrabajador($gerente1);
$empresa -> anyadirTrabajador($empleado2);

echo $empresa->listarTrabajadoresHtml();

*/
?>