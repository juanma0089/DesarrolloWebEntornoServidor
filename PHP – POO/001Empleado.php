<?php
/*001Empleado.php: Crea una clase Empleado con su nombre, apellidos y sueldo. 
Encapsula las propiedades mediante getters/setters y añade métodos para:
Obtener su nombre completo → getNombreCompleto(): string
Que devuelva un booleano indicando si debe o no pagar impuestos (se pagan cuando 
el sueldo es superior a 3333€) → debePagarImpuestos(): bool*/
class Empleado{

    private String $nombre;
    private String $apellidos;
    private int $sueldo;
 
    public function getNombre()
    {
        return $this->nombre;
    }

  
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

   
    public function getApellido()
    {
        return $this->apellidos;
    }

    public function setApellido($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
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

    public function getNombreCompleto(): string{


        return $this->nombre." ".$this->apellidos;
    }

    public function debePagarImpuestos(): bool{

        return ($this->sueldo > 3333)? true : false;
   
    }

}


