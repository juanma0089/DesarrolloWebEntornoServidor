<?php
/*011PersonaA.php: Copia las clases del ejercicio anterior y modifícalas.
Transforma Persona a una clase abstracta donde su método estático toHtml(Persona 
$p) tenga que ser redefinido en todos sus hijos.
*/

abstract class Persona {

    public function __construct(protected String $nombre, protected String $apellidos, protected int $edad)
    {

    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
 
    public function getApellidos()
    {
        return $this->apellidos;
    }


    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getNombreCompleto(): string
    {

        return $this->nombre." ".$this->apellidos;
    }
    //---------------------MODIFICACIÓN PEDIDA----------------------
    abstract static function toHtml(Persona $p): string;
  
    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    public function __toString()
    {

        return $this->getNombreCompleto();
    }
}
