<?php

$server = "localhost"; //127.0.0.1 
$user = "root";
$password = "";

try{

  $connection = new PDO("mysql:host=$server;dbname=album", $user, $password);
  $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  $sql="INSERT INTO `fotos` (`id`, `name`, `route`) VALUES (NULL, 'Jugando con la programacion', 'foto.jpg')";
  
  $connection->exec($sql);

  echo "Successful Connection ";

} catch(PDOException $error){

  echo "Failed Connection".$error;
}


?>
