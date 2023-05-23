
<?php

$jsonContenido= '[
  {"nombre":"Oscar", "apellido":"Perez"}, 
  {"nombre":"Julio", "apellido":"Marin"}, 
  {"nombre":"Martin", "apellido":"Garzon"}
]';

$result = json_decode($jsonContenido);
print_r($result);

foreach($result as $person) {
  // print_r($person->nombre);
  echo ($person->nombre)." ".($person->apellido)."<br/>";
 
}


$people = array("Oscar"=>40, "Jose"=> 72, "Pedro"=> 10);

echo json_encode($people);

?>

