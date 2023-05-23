
<?php
if($_GET) {
  $nombre = $_GET["nombre"];
  $apellido = $_GET["apellido"];

  echo "Hola ".$nombre.$apellido;
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
  <form action="ejercicio1get.php" method="get">
    nombre:
    <input type="text" name="nombre">
    <br>
    apellido:
    <input type="text" name="apellido">
    <br>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>