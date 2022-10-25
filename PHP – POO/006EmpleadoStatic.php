<?php
/*006EmpleadoStatic.php: Copia la clase del ejercicio anterior y modifícala. Completa el 
siguiente método con una cadena HTML que muestre los datos de un empleado 
dentro de un párrafo y todos los teléfonos mediante una lista ordenada (para ello, 
deberás crear un getter para los teléfonos):

public static function toHtml(Empleado $emp): string
*/

use Empleado as GlobalEmpleado;

class Empleado{

    private int $telefono;
    private array $arrayTelefono = [];
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

  //---------------------MODIFICACIÓN PEDIDA----------------------

    public function getTelefono()
    {
        $cadena = "";

        foreach ($this->arrayTelefono as $id=>$num) {
           
            $cadena.= ($id == 0)? "<li>$num</li>" : " <li>$num</li>";
        }

        return $cadena;
    }

 //---------------------MODIFICACIÓN PEDIDA----------------------
 public static function toHtml(Empleado $emp): string{

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
}

}

?>
