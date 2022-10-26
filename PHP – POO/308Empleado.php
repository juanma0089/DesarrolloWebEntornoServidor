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

include_once('008PersonaH.php');

class Empleado extends Persona{


    private array $arrayTelefono = [];
    public static $sueldoTope = 3333;

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
  //---------------------MODIFICACIÓN PEDIDA----------------------

    public static function toHtml(Persona $p): string{

        if ($p instanceof Empleado) {
            $datosDevueltos = "";

            $datosDevueltos = "<p><b>Nombre: </b>".$p->getNombreCompleto()."<br><br>
                               <b>Sueldo: </b>".$p->getSueldo()."<br><br>
                               <b>Teléfono: </b><ol>
                                           ".$p->getTelefono()."
                                           </ol><br>";
                               
           if($p->debePagarImpuestos() == true){
       
               $pagaImpuestos = "Debe pagar impuestos al superar los <b>".$p->getSueldoTope()."</b> ya que su sueldo es de <b>".$p->getSueldo()."€</b></p>";
               
           }else{
               
               $pagaImpuestos = "No debe pagar impuestos<br></p>";
       
               }
           
               return $datosDevueltos.$pagaImpuestos;
        }else{

            $datosDevueltos = "<p> <b>Nombre: </b>".$p->getNombreCompleto()."</p>";

        }
            return $datosDevueltos;
    }   

}
