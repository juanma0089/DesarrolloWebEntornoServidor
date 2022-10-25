<?php
/*008PersonaH.php: Copia las clases del ejercicio anterior y modifícalas. Crea en Persona 
el método estático toHtml(Persona $p), y modifica en Empleado el mismo método 
toHtml(Persona $p), pero cambia la firma para que reciba una Persona como 
parámetro. Para acceder a las propiedades del empleado con la persona que recibimos 
como parámetro, comprobaremos su tipo:
<?php
class Empleado extends Persona {
    /// resto del código
    public static function toHtml(Persona $p): string {
        if ($p instanceof Empleado) {
            // Aquí ya podemos acceder a las propiedades
// y métodos de Empleado
        }
    }
}*/

class Persona {

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
  //---------------------MODIFICACIÓN PEDIDA----------------------

    public static function toHtml(Persona $p){

    }
}

?>