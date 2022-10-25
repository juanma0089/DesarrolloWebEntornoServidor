<?php
/*005EmpleadoSueldo.php: Copia la clase del ejercicio anterior y modifícala. Cambia la 
constante por una variable estática sueldoTope, de manera que mediante 
getter/setter puedas modificar su valor.*/

class Empleado{

   
    private array $arrayTelefono = [];
    //---------------------MODIFICACIÓN PEDIDA----------------------
    private static $sueldoTope = 3333;
 
    public function __construct(private String $nombre, private String $apellidos, private int $sueldo = 1000)
    {


    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellidos;
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
    //para acceder a la variable estatica sueldoTope ecribimos "self" más "::" más "el nombre de la variable"  --> self::$sueldoTope <---
        return ($this->sueldo > self::$sueldoTope )? true : false;
   
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
//---------------------MODIFICACIÓN PEDIDA----------------------
    public function getSueldoTope()
    {
        return self::$sueldoTope;
    }
//---------------------MODIFICACIÓN PEDIDA----------------------
    public function setSueldoTope($sueldoTope)
    {
       self::$sueldoTope = $sueldoTope;

        return self::$sueldoTope;
    }
}

?>