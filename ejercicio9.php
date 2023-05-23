
<?php

// $frutas = ["pera", "manzana", "lemon"];
$frutas = array("pera", "manzana", "lemon");

// print_r($frutas);

$frutas1 = array("edad"=>"pera", "m"=>"manzana", "l"=>"lemon", "f"=>"fresa");
// print_r($frutas1);

// print_r($frutas[1]);

// echo $frutas1["edad"];

for($indice = 0; $indice <3; $indice++) {
  
  echo $frutas[$indice]."<br/>";
}

// foreach ($frutas as $fruta){

//   echo $fruta."*<br/>";
// }

foreach ($frutas1 as $indice=>&$valor){

  echo $valor."*<br/>";
}

$frutas2 = array("pera", "manzana", "lemon");

array_push($frutas2, "uva");

print_r($frutas2);

?>
