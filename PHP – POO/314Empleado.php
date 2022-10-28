<?php
/*012Trabajador.php: Copia las clases del ejercicio anterior y modifícalas.
Cambia la estructura de clases conforme al gráfico respetando todos los métodos que 
ya están hechos. Trabajador es una clase abstracta que ahora almacena los teléfonos y 
donde calcularSueldo es un método abstracto de manera que:
El sueldo de un Empleado se calcula a partir de las horas trabajadas y lo que cobra por 
hora. Para los Gerentes, su sueldo se incrementa porcentualmente en base a su edad: 
salario + salario*edad/100
*/
include_once('014Trabajador.php');

class Empleado extends Trabajador
{

    private $horasTrabajadas;
    private $precioPorHora;

    public function __construct(String $nombre, String $apellidos, int $edad, protected int $sueldo = 1000)
    {
        parent::__construct($nombre, $apellidos, $edad);
    }

    public function getHorasTrabajadas()
    {
        return $this->horasTrabajadas;
    }

    public function setHorasTrabajadas($horasTrabajadas)
    {
        $this->horasTrabajadas = $horasTrabajadas;

        return $this;
    }


    public function getPrecioPorHora()
    {
        return $this->precioPorHora;
    }


    public function setPrecioPorHora($precioPorHora)
    {
        $sueldoGanado = $this->precioPorHora = $precioPorHora;

        return $sueldoGanado;
    }

    public function debePagarImpuestos($sueldo): bool
    {

        return ($this->sueldo > parent::$sueldoTope && $this->edad > 21) ? true : false;
    }

    public function calcularSueldo()
    {

        $sueldoGanado = $this->precioPorHora * $this->horasTrabajadas;

        $this->sueldo = $sueldoGanado;

        return  $this;
    }

    public static function toHtml(Persona $p): string
    {

        if ($p instanceof Empleado) {
            $datosDevueltos = "";

            $datosDevueltos = "<p><b>Nombre: </b>" . $p->getNombreCompleto() . "<br><br>
                                <b>Edad: </b>" . $p->getEdad() . "<br><br>
                               <b>Sueldo: </b>" . $p->sueldo . "<br><br>
                               <b>Teléfono: </b><ol>
                                           " . $p->getTelefono() . "
                                           </ol><br>";

            if ($p->debePagarImpuestos($p->sueldo) == true) {

                $pagaImpuestos = "Debe pagar impuestos al superar los <b>" . Trabajador::$sueldoTope . "</b> ya que su sueldo es de <b>" . $p->sueldo . "€</b> y tener <b>" . $p->getEdad() . "</b></p>";
            } else {

                $pagaImpuestos = "No debe pagar impuestos<br></p>";
            }

            return $datosDevueltos . $pagaImpuestos;
        } else {

            $datosDevueltos = "<p> <b>Nombre: </b>" . $p->getNombreCompleto() . "</p>";
        }
        return $datosDevueltos;
    }

    public function __toString(): string
    {

        $datosDevueltos = "<p><b>Nombre: </b>" . $this->getNombreCompleto() . "<br><br>
                                <b>Edad: </b>" . $this->getEdad() . "<br><br>
                                <b>Sueldo: </b>" . $this->sueldo . "<br><br>
                                <b>Teléfono: </b><ol>
                                                " . $this->getTelefono() . "
                                            </ol></p>";

        return $datosDevueltos;
    }
}
