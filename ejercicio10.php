
<?php

class persona {
  public $nombre;

  private $edad;

  protected $altura; 

  public function asignarNombre($nuevoNombre) {

    $this->nombre=$nuevoNombre;
  }

  public function imprimirNombre() {
    echo "Hola soy ".$this->nombre;
  }

    public function mostrarEdad() {
      $this->edad = 20;
      return $this->edad;  
  }
}

// $objAlumno = new persona();
$objAlumno->asignarNombre("Pedro");

// $objAlumno2 = new persona();
$objAlumno2->asignarNombre("Lucero");
$objAlumno2->imprimirNombre();


echo $objAlumno2->nombre;
echo $objAlumno2->mostrarEdad();
echo $objAlumno->nombre;

?>
