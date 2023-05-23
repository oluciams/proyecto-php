<?php 
 
  $nombreArchivo = "archivo.txt";

  $contenidoArchivo = "este es el archivo nuevo que se creo";

  $archivoACrear = fopen($nombreArchivo, "w");

  fwrite( $archivoACrear, $contenidoArchivo);

  fclose( $archivoACrear);

 
function showMessage($hola=false){
  echo ($hola)?'hola':'adios';
}

showMessage("maria"); 

echo array_sum(explode(',',$input));

class dragonBall{
  private $ballCount;
  public function __construct(){
    $this->ballCount=0;
  }
  public function encontreunabola(){
    $this->ballCount++;
    if($this->ballCount===2){
      echo "Usted puede pedir su deseo.";
      $this->ballCount=0;
    }
  }

}

$prueba = new dragonBall;

$prueba->encontreunabola();
$prueba->encontreunabola();
// $prueba->encontreunabola();
// $prueba->encontreunabola();


?>
