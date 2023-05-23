<?php

class persona {
  public $nombre;
  private $edad;
  protected $altura;

  function __construct($nuevoNombre) {
    $this->nombre=$nuevoNombre;
  }

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


$objAlumno = new persona("Pedro");
// $objTrabajador->asignarNombre("Maria L");
$objAlumno->imprimirNombre();

?>
