<?php
/*007Persona.php: Copia la clase del ejercicio anterior en 307Empleado.php y 
modifícala.Crea una clase Persona que sea padre de Empleado, de manera que 
Persona contenga el nombre y los apellidos, y en Empleado quede el salario y los 
teléfonos.*/
include_once('007Persona.php');

class Empleado extends Persona{


    private array $arrayTelefono = [];
    private static $sueldoTope = 3333;

    public function __construct(String $nombre,String $apellidos, private int $sueldo = 1000)
    {
        parent::__construct($nombre, $apellidos);
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

    public function getSueldoTope()
    {
        return self::$sueldoTope;
    }

    public function setSueldoTope($sueldoTope)
    {
        self::$sueldoTope= $sueldoTope;

        return self::$sueldoTope;
    }

    public function getTelefono()
    {
        $cadena = "";

        foreach ($this->arrayTelefono as $id=>$num) {
           
            $cadena.= ($id == 0)? "<li>$num</li>" : " <li>$num</li>";
        }

        return $cadena;
    }

   /* public static function toHtml(Empleado $emp): string{

    $datosDevueltos = "";

     $datosDevueltos = "<p> <b>Nombre: </b>".$emp->getNombreCompleto()."<br><br>
                        <b>Sueldo: </b>".$emp->getSueldo()."<br><br>
                        <b>Teléfono: </b><ol>
                                    ".$emp->getTelefono()."
                                    </ol><br>";
                        
    if($emp->debePagarImpuestos() == true){

        $pagaImpuestos = "Debe pagar impuestos al superar los <b>".$emp->getSueldoTope()."</b> ya que su sueldo es de <b>".$emp->getSueldo()."€</b></p>";
        
    }else{
        
        $pagaImpuestos = "No debe pagar impuestos<br></p>";

        }
    
        return $datosDevueltos.$pagaImpuestos;
}*/

}

?>