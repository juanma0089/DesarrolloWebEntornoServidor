<?php
/*003EmpleadoConstructor.php: Copia la clase del ejercicio anterior y modifícala. 
Elimina los setters de nombre y apellidos, de manera que dichos datos se asignan 
mediante el constructor (utiliza la sintaxis de PHP8). Si el constructor recibe un tercer 
parámetro, será el sueldo del Empleado. Si no, se le asignará 1000€ como sueldo 
inicial.*/

use Empleado as GlobalEmpleado;

class Empleado{

    private int $telefono;
    private array $arrayTelefono = [];
 
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

        return ($this->sueldo > 3333)? true : false;
   
    }

    public function anyadirTelefono(int $telefono) : void
    {

        array_push($this->arrayTelefono, $telefono);

    }

    public function listarTelefonos(): string
    {
        $cadena = "";

        foreach ($this->arrayTelefono as $id=>$num) {
           
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
