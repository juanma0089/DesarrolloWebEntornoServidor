<?php
/*009PersonaE.php: Copia las clases del ejercicio anterior y modifícalas.
Añade en Persona un atributo edad
A la hora de saber si un empleado debe pagar impuestos, lo hará siempre y cuando 
tenga más de 21 años y dependa del valor de su sueldo. Modifica todo el código 
necesario para mostrar y/o editar la edad cuando sea necesario.*/

class Persona {
  //---------------------MODIFICACIÓN PEDIDA----------------------

    protected $edad;

    public function __construct(protected String $nombre, protected String $apellidos)
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

    public static function toHtml(Persona $p):string{

        $datosDevueltos = "<p> <b>Nombre: </b>".$p->getNombreCompleto()."</p>";

        return $datosDevueltos;
    }

  //---------------------MODIFICACIÓN PEDIDA----------------------

    public function getEdad()
    {
        return $this->edad;
    }

  //---------------------MODIFICACIÓN PEDIDA----------------------

    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }
}

?>