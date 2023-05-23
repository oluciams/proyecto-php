
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

class trabajador extends persona {
  public $puesto;
  public function presentarseTrabajador() {
    echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
  }
}

// $objTrabajador = new trabajador();
$objTrabajador->asignarNombre("Maria L");
$objTrabajador->puesto="Contador";

$objTrabajador->presentarseTrabajador();

?>
