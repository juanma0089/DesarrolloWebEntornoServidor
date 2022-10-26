<?php
/*011PersonaA.php: Copia las clases del ejercicio anterior y modifícalas.
Transforma Persona a una clase abstracta donde su método estático toHtml(Persona 
$p) tenga que ser redefinido en todos sus hijos.
*/
include_once('011PersonaA.php');

class Empleado extends Persona
{

    private array $arrayTelefono = [];
    private static $sueldoTope = 3333;

    public function __construct(String $nombre, String $apellidos, int $edad, private int $sueldo = 1000)
    {
        parent::__construct($nombre, $apellidos, $edad);
    }


    public function getSueldo()
    {
        return $this->sueldo;
    }


    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;

        return $this;
    }

    public function debePagarImpuestos(): bool
    {

        return ($this->sueldo > self::$sueldoTope && $this->edad > 21) ? true : false;
    }

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

    public function getSueldoTope()
    {
        return self::$sueldoTope;
    }

    public function setSueldoTope($sueldoTope)
    {
        self::$sueldoTope = $sueldoTope;

        return self::$sueldoTope;
    }

    public function getTelefono()
    {
        $cadena = "";

        foreach ($this->arrayTelefono as $id => $num) {

            $cadena .= ($id == 0) ? "<li>$num</li>" : " <li>$num</li>";
        }

        return $cadena;
    }

    public static function toHtml(Persona $p): string
    {

        if ($p instanceof Empleado) {
            $datosDevueltos = "";

            $datosDevueltos = "<p> <b>Nombre: </b>" . $p->getNombreCompleto() . "<br><br>
                                    <b>Edad: </b>" . $p->getEdad() . "<br><br>
                                    <b>Sueldo: </b>" . $p->getSueldo() . "<br><br>
                                    <b>Teléfono: </b><ol>
                                                    " . $p->getTelefono() . "
                                                </ol><br>";

            if ($p->debePagarImpuestos() == true) {

                $pagaImpuestos = "Debe pagar impuestos al superar los <b>" . $p->getSueldoTope() . "</b> ya que su sueldo es de <b>" . $p->getSueldo() . "€</b> y tener <b>" . $p->getEdad() . "</b></p>";
            } else {

                $pagaImpuestos = "No debe pagar impuestos<br></p>";
            }

            return $datosDevueltos . $pagaImpuestos;
        } else {

            $datosDevueltos = "<p><b>Nombre: </b>" . $p->getNombreCompleto() . "<br>" . $p->getEdad() . "</p>";
        }
        return $datosDevueltos;
    }

    public function __toString(): string
    {

        $datosDevueltos = "<p><b>Nombre: </b>" . $this->getNombreCompleto() . "<br><br>
                                <b>Edad: </b>" . $this->getEdad() . "<br><br>
                                <b>Sueldo: </b>" . $this->getSueldo() . "<br><br>
                                <b>Teléfono: </b><ol>
                                                " . $this->getTelefono() . "
                                            </ol></p>";

        return $datosDevueltos;
    }
}
