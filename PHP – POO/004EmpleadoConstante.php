<?php
/*004EmpleadoConstante.php: Copia la clase del ejercicio anterior y modifícala. Añade 
una constante SUELDO_TOPE con el valor del sueldo que debe pagar impuestos, y 
modifica el código para utilizar la constante.*/

use Empleado as GlobalEmpleado;

class Empleado{

    private int $telefono;
    private array $arrayTelefono = [];
    //---------------------MODIFICACIÓN PEDIDA----------------------
    const SUELDO_TOPE = 3333;
 
    public function __construct(private String $nombre, private String $apellidos, private int $sueldo = 1000)
    {


    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellidoa;
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
        //---------------------MODIFICACIÓN PEDIDA----------------------
    //para acceder a la constante de SUELDO_tope llamamos a la clase Empleado seguido de :: más la constante  --> empleado::SUELDO_TOPE <---
        return ($this->sueldo > Empleado::SUELDO_TOPE )? true : false;
   
    }

    public function anyadirTelefono(int $telefono) : void
    {

        array_push($this->arrayTelefono, $telefono);

    }

    public function listarTelefonos(): string
    {
        $cadena = "";

        foreach ($this->arrayTelefono as $id=>$num) {
           //si el id es 0 significa que tengo solo un valor sino concateno uno detras de otro
            $cadena.= ($id == 0)? $num : ", ".$num;
        }

        return $cadena;
    }

    public function vaciarTelefonos(): void
    {

        $this->arrayTelefono = array_diff($this->arrayTelefono, $this->arrayTelefono);
        
        print_r($this->arrayTelefono);
    }
}

?>