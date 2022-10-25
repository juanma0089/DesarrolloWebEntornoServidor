<?php
/*002EmpleadoTelefonos.php: Copia la clase del ejercicio anterior y modifícala. Añade 
una propiedad privada que almacene un array de números de teléfonos. Añade los 
siguientes métodos:
public function anyadirTelefono(int $telefono) : void → Añade un teléfono al array
public function listarTelefonos(): string → Muestra los teléfonos separados por comas
public function vaciarTelefonos(): void → Elimina todos los teléfonos*/

class Empleado{

    private String $nombre;
    private String $apellidos;
    private int $sueldo;
    
    //---------------------MODIFICACIÓN PEDIDA----------------------
    private array $arrayTelefono = [];
 
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

    public function getNombreCompleto(): string
    {


        return $this->nombre." ".$this->apellidos;
    }

    public function debePagarImpuestos(): bool
    {

        return ($this->sueldo > 3333)? true : false;
   
    }
//---------------------MODIFICACIÓN PEDIDA----------------------
    public function anyadirTelefono(int $telefono) : void
    {

        array_push($this->arrayTelefono, $telefono);

    }
//---------------------MODIFICACIÓN PEDIDA----------------------
    public function listarTelefonos(): string
    {
        $cadena = "";

        foreach ($this->arrayTelefono as $id=>$num) {
           
            $cadena.= ($id == 0)? $num : ", ".$num;
        }

        return $cadena;
    }
//---------------------MODIFICACIÓN PEDIDA----------------------
    public function vaciarTelefonos(): void
    {

        $this->arrayTelefono = array_diff($this->arrayTelefono, $this->arrayTelefono);
        
        print_r($this->arrayTelefono);
    }
}

?>