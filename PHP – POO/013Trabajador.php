<?php

include_once('013Persona.php');

abstract class Trabajador extends Persona
{

    protected array $arrayTelefono = [];
    protected static $sueldoTope = 3333;

    public function anyadirTelefono(int $telefono): void
    {

        array_push($this->arrayTelefono, $telefono);
    }

    public function listarTelefonos(): string
    {
        $cadena = "";

        foreach ($this->arrayTelefono as $id => $num) {

            $cadena .= ($id == 0) ? $num : ", " . $num;
        }

        return $cadena;
    }

    public function vaciarTelefonos(): void
    {

        $this->arrayTelefono = array_diff($this->arrayTelefono, $this->arrayTelefono);

        print_r($this->arrayTelefono);
    }


    public function getTelefono()
    {
        $cadena = "";

        foreach ($this->arrayTelefono as $id => $num) {

            $cadena .= ($id == 0) ? "<li>$num</li>" : " <li>$num</li>";
        }

        return $cadena;
    }

    abstract function calcularSueldo();

    abstract function debePagarImpuestos($sueldo): bool;

    public static function toHtml(Persona $p): string
    {

        if ($p instanceof Empleado || $p instanceof Gerente) {
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
}
