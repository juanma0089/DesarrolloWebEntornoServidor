<?php
/*010PersonaS.php: Copia las clases del ejercicio anterior y modifícalas.
Añade nuevos métodos que hagan una representación de todas las propiedades de las 
clases Persona y Empleado, de forma similar a los realizados en HTML, pero sin que 
sean estáticos, de manera que obtenga los datos mediante $this.
function public __toString(): string
*/

class Persona {

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

  
    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    //---------------------MODIFICACIÓN PEDIDA----------------------

    public function __toString()
    {

        return $this->getNombreCompleto();
    }
}

?>