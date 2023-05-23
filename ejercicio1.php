
<?php
if($_POST) {
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];

  echo "Hola ".$nombre." ".$apellido;
}

$edad = 32;   
    
  echo $edad."<br/>";
  
      $edad = 50;   
    
  echo $edad;
  
  define("NOMBRE", "Oscar");
  echo NOMBRE;
 

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

  <form action="ejercicio1.php" method="post">
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