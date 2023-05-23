
<?php
if($_POST) {
  $valorA = $_POST["valorA"];
  $valorB = $_POST["valorB"];

  //operadores relacionales <, >, !=, ==, <=, >=
  // if($valorA > $valorB) {    
  //   echo "el valor es mayor ";

  // } else {
  //   echo "el valor es menor";
  // };

  // if($valorA != $valorB && ($valorA > $valorB)) {    
  //   echo "el valor A es diferente al de B y tambien es mayor";

  // } else {
  //   echo "el valor es es igual y menor";
  // };

  //   if(($valorA != $valorB) || ($valorA > $valorB)) {    
  //   echo "el valor A es diferente al de B o es mayor";

  // } else {
  //   echo "el valor es es igual y menor";
  // };
 
    if($valorA != $valorB) {    
    echo "el valor A es diferente al de B";

  } else {
    echo "el valor es es igual";
  };
 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- <form action="ejercicio5.php" method="post">
    nombre:
    <input type="text" name="nombre">
    <br>
    apellido:
    <input type="text" name="apellido">
    <br>
    <input type="submit" value="Enviar">
  </form> -->

  <form action="ejercicio3.php" method="post">
    valorA:
    <input type="text" name="valorA">
    <br>
    ValorB:
    <input type="text" name="valorB">
    <br>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>