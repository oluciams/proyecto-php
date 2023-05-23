
<?php
$numeroRandom = rand(1, 10);

echo $numeroRandom;

$frutas = "el,senor,de,los,milagros";

$newString = explode(",", $frutas, 3);

foreach($newString as $word) {

  echo "<li>$word</li>";
}

$nombreMayusculas = strtoupper($frutas);
echo $nombreMayusculas;
$nombreMayusculas = strtolower($frutas);
echo $nombreMayusculas;

$fechaInicial = date("y - m - d");
$fechaInicial1 = date("d-m-y");

echo $fechaInicial;
echo $fechaInicial1;
?>
