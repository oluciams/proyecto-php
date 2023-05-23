<?php

$server = "localhost"; //127.0.0.1 
$user = "root";
$password = "";

try{

  $connection = new PDO("mysql:host=$server;dbname=album", $user, $password);
  $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT * FROM `fotos`";

  $sentence = $connection->prepare($sql);
  $sentence->execute();

  $result = $sentence->fetchAll();

  // print_r($result);

  foreach($result as $foto) {
    echo $foto["name"]."<br/>"; 
  }


  echo "Successful Connection ";

} catch(PDOException $error){

  echo "Failed Connection".$error;
}


?>
