<?php

session_start();

if(isset($_SESSION["user"])) {
  echo "usuario: ".$_SESSION["user"]."Estatus: ".$_SESSION["status"];

} else {
  echo "No hay session de usuario ";

}



?>
