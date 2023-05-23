<?php

class connectionphp {

  private $server = "localhost";
  private $user = "root";
  private $password = "";
  private $connection;

  public function __construct() {
    try {
      $this->connection = new PDO("mysql:host=$this->server;dbname=album",$this->user,$this->password);
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        return "falla de conexion".$e;
    }
  }

  public function ejecutar($sql) { //Insertar / Delete / Actualizar
    $this->connection->exec($sql);
    return $this->connection->lastInsertId();
  }

  public function consultar($sql) {
    $sentencia = $this->connection->prepare($sql);
    $sentencia->execute();
    return $sentencia->fetchAll();
  }
}

?>